<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql );
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}

	public static function Select($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		$sql = "SELECT * FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$queryResult = DB::CurrentConnection()->querySilent( $sql );

		return $queryResult;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);
		
		if( $whereSql == "" )
			return false;

		$sql = "DELETE FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$ret = DB::CurrentConnection()->execSilent( $sql );

		return $ret;
	}

	public static function Insert($table, $data)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$iFields = "";
		$iValues = "";
		$blobs = array();
		foreach($data as $fieldname => $value)
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$iFields.= DB::CurrentConnection()->addFieldWrappers( $field["name"] ).",";
			$iValues.= DB::_prepareValue($value, $field["type"]) . ",";

			if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if( $iFields != "" && $iValues != "" )
		{
			$iFields = substr($iFields, 0, -1);
			$iValues = substr($iValues, 0, -1);
			$sql = "INSERT INTO ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." (".$iFields.") values (".$iValues.")";

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$updateValues = array();
		$blobs = array();
		foreach( $data as $fieldname => $value )
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$prepareFieldName = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			$prepareValue = DB::_prepareValue($value, $field["type"]);
			$updateValues[] = $prepareFieldName."=".$prepareValue;

			if ( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if ( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if ( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if ( count($updateValues) > 0 )
		{
			$updateSQL = implode(",", $updateValues);
			$sql = "UPDATE ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." SET ". $updateSQL . $whereSql;

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	protected static function _getWhereSql($userConditions, $founedfields)
	{
		if( !is_array( $userConditions ) )
		{
			$whereSql = trim( $userConditions );
			if( $whereSql != "")
				$whereSql = " WHERE " . $whereSql;
			return $whereSql;
		}
		
		$conditions = array();
		foreach($userConditions as $fieldname => $value)
		{
			$field = getArrayElementNC($founedfields, $fieldname);
			// user field not found in table
			if ( is_null($field) )
				continue;

			$wrappedField = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			if ( is_null($value) )
			{
				$conditions[] = $wrappedField . " IS NULL";
			}
			else
			{
				$conditions[] = $wrappedField . "=" . DB::_prepareValue($value, $field["type"]);
			}
		}

		$whereSql = "";
		if( count($conditions) > 0 )
		{
			$whereSql .= " WHERE " . implode(" AND ", $conditions);
		}

		return $whereSql;
	}

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	protected static function _findDalTable( $table )
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList();

		//	exact match
		foreach( $dalTables as $t )
		{
			if( $t["schema"] == $tableName["schema"] && $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables as $t )
		{
			if( strtoupper( $t["schema"] ) == $tableName["schema"] && strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	protected static function _getTableInfo($table)
	{
		global $dal_info, $tableinfo_cache;
		$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table );

		if ( $tableDescriptor )
		{
			include_once( getabspath( "include/dal/" . $tableDescriptor["varname"] . ".php" ) );

			$tableInfo["fields"] = $db_table_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			$tables = DB::CurrentConnection()->getTableList();
			if ( !in_array($table, $tables) )
			{
				$tableinfo_cache[ $connId ][ $table ] = false;
				return false;
			}

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList()
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "payrollflex_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "addbreaks", "varname" => "payrollflex_at_localhost__addbreaks", "altvarname" => "addbreaks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "adjtypes", "varname" => "payrollflex_at_localhost__adjtypes", "altvarname" => "adjtypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "adjustmentdescriptions", "varname" => "payrollflex_at_localhost__adjustmentdescriptions", "altvarname" => "adjustmentdescriptions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "annualtaxtab", "varname" => "payrollflex_at_localhost__annualtaxtab", "altvarname" => "annualtaxtab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "approvalbutton", "varname" => "payrollflex_at_localhost__approvalbutton", "altvarname" => "approvalbutton", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "banks", "varname" => "payrollflex_at_localhost__banks", "altvarname" => "banks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "clocktypes", "varname" => "payrollflex_at_localhost__clocktypes", "altvarname" => "clocktypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "contlo", "varname" => "payrollflex_at_localhost__contlo", "altvarname" => "contlo", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "controlin", "varname" => "payrollflex_at_localhost__controlin", "altvarname" => "controlin", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "daylength", "varname" => "payrollflex_at_localhost__daylength", "altvarname" => "daylength", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "daysweek", "varname" => "payrollflex_at_localhost__daysweek", "altvarname" => "daysweek", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "deductypes", "varname" => "payrollflex_at_localhost__deductypes", "altvarname" => "deductypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "demo_device", "varname" => "payrollflex_at_localhost__demo_device", "altvarname" => "demo_device", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "demo_finger", "varname" => "payrollflex_at_localhost__demo_finger", "altvarname" => "demo_finger", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "demo_log", "varname" => "payrollflex_at_localhost__demo_log", "altvarname" => "demo_log", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "demo_user", "varname" => "payrollflex_at_localhost__demo_user", "altvarname" => "demo_user", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "department", "varname" => "payrollflex_at_localhost__department", "altvarname" => "department", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "divisionaccess", "varname" => "payrollflex_at_localhost__divisionaccess", "altvarname" => "divisionaccess", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "divisions", "varname" => "payrollflex_at_localhost__divisions", "altvarname" => "divisions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "dloglimit2", "varname" => "payrollflex_at_localhost__dloglimit2", "altvarname" => "dloglimit2", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "dt5", "varname" => "payrollflex_at_localhost__dt5", "altvarname" => "dt5", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "dtrempl", "varname" => "payrollflex_at_localhost__dtrempl", "altvarname" => "dtrempl", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "dtrrange", "varname" => "payrollflex_at_localhost__dtrrange", "altvarname" => "dtrrange", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "dtrsummary2", "varname" => "payrollflex_at_localhost__dtrsummary2", "altvarname" => "dtrsummary2", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "dtrtable", "varname" => "payrollflex_at_localhost__dtrtable", "altvarname" => "dtrtable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "earningadjustment", "varname" => "payrollflex_at_localhost__earningadjustment", "altvarname" => "earningadjustment", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "empdeminimis", "varname" => "payrollflex_at_localhost__empdeminimis", "altvarname" => "empdeminimis", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "emphistory", "varname" => "payrollflex_at_localhost__emphistory", "altvarname" => "emphistory", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "emplevels", "varname" => "payrollflex_at_localhost__emplevels", "altvarname" => "emplevels", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "employername", "varname" => "payrollflex_at_localhost__employername", "altvarname" => "employername", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "empstatus", "varname" => "payrollflex_at_localhost__empstatus", "altvarname" => "empstatus", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "emptype", "varname" => "payrollflex_at_localhost__emptype", "altvarname" => "emptype", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "filelog", "varname" => "payrollflex_at_localhost__filelog", "altvarname" => "filelog", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "forapp", "varname" => "payrollflex_at_localhost__forapp", "altvarname" => "forapp", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "holidays", "varname" => "payrollflex_at_localhost__holidays", "altvarname" => "holidays", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "holidaysdefault", "varname" => "payrollflex_at_localhost__holidaysdefault", "altvarname" => "holidaysdefault", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "holidaytype", "varname" => "payrollflex_at_localhost__holidaytype", "altvarname" => "holidaytype", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "holidayupdate", "varname" => "payrollflex_at_localhost__holidayupdate", "altvarname" => "holidayupdate", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "ileave", "varname" => "payrollflex_at_localhost__ileave", "altvarname" => "ileave", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "indbreaks", "varname" => "payrollflex_at_localhost__indbreaks", "altvarname" => "indbreaks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "indleave", "varname" => "payrollflex_at_localhost__indleave", "altvarname" => "indleave", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "indovertime", "varname" => "payrollflex_at_localhost__indovertime", "altvarname" => "indovertime", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "indschedrange", "varname" => "payrollflex_at_localhost__indschedrange", "altvarname" => "indschedrange", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "indschedule", "varname" => "payrollflex_at_localhost__indschedule", "altvarname" => "indschedule", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "latepenalty", "varname" => "payrollflex_at_localhost__latepenalty", "altvarname" => "latepenalty", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "leavebalance", "varname" => "payrollflex_at_localhost__leavebalance", "altvarname" => "leavebalance", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "leaveremarks", "varname" => "payrollflex_at_localhost__leaveremarks", "altvarname" => "leaveremarks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "leaves", "varname" => "payrollflex_at_localhost__leaves", "altvarname" => "leaves", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "leavetypes", "varname" => "payrollflex_at_localhost__leavetypes", "altvarname" => "leavetypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "leveldrops", "varname" => "payrollflex_at_localhost__leveldrops", "altvarname" => "leveldrops", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "loanbalnew5", "varname" => "payrollflex_at_localhost__loanbalnew5", "altvarname" => "loanbalnew5", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "loandesriptions", "varname" => "payrollflex_at_localhost__loandesriptions", "altvarname" => "loandesriptions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "loans", "varname" => "payrollflex_at_localhost__loans", "altvarname" => "loans", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "loansreport", "varname" => "payrollflex_at_localhost__loansreport", "altvarname" => "loansreport", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "loantypes", "varname" => "payrollflex_at_localhost__loantypes", "altvarname" => "loantypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "logins", "varname" => "payrollflex_at_localhost__logins", "altvarname" => "logins", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "logo", "varname" => "payrollflex_at_localhost__logo", "altvarname" => "logo", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "magroups", "varname" => "payrollflex_at_localhost__magroups", "altvarname" => "magroups", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "mdgroups", "varname" => "payrollflex_at_localhost__mdgroups", "altvarname" => "mdgroups", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "modulelock", "varname" => "payrollflex_at_localhost__modulelock", "altvarname" => "modulelock", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "moduletable", "varname" => "payrollflex_at_localhost__moduletable", "altvarname" => "moduletable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "monthlyremittax", "varname" => "payrollflex_at_localhost__monthlyremittax", "altvarname" => "monthlyremittax", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "nightshiftallowance", "varname" => "payrollflex_at_localhost__nightshiftallowance", "altvarname" => "nightshiftallowance", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "noteage", "varname" => "payrollflex_at_localhost__noteage", "altvarname" => "noteage", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "noteage2", "varname" => "payrollflex_at_localhost__noteage2", "altvarname" => "noteage2", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "notes", "varname" => "payrollflex_at_localhost__notes", "altvarname" => "notes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "notestatus", "varname" => "payrollflex_at_localhost__notestatus", "altvarname" => "notestatus", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "notestatuses", "varname" => "payrollflex_at_localhost__notestatuses", "altvarname" => "notestatuses", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "notetypes", "varname" => "payrollflex_at_localhost__notetypes", "altvarname" => "notetypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "otherpayments", "varname" => "payrollflex_at_localhost__otherpayments", "altvarname" => "otherpayments", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "otndrdglobal", "varname" => "payrollflex_at_localhost__otndrdglobal", "altvarname" => "otndrdglobal", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "overtimefile", "varname" => "payrollflex_at_localhost__overtimefile", "altvarname" => "overtimefile", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "overtimes", "varname" => "payrollflex_at_localhost__overtimes", "altvarname" => "overtimes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "overtimetab", "varname" => "payrollflex_at_localhost__overtimetab", "altvarname" => "overtimetab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "pagibigtable", "varname" => "payrollflex_at_localhost__pagibigtable", "altvarname" => "pagibigtable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "paymentperiods", "varname" => "payrollflex_at_localhost__paymentperiods", "altvarname" => "paymentperiods", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payroll", "varname" => "payrollflex_at_localhost__payroll", "altvarname" => "payroll", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrollamt3", "varname" => "payrollflex_at_localhost__payrollamt3", "altvarname" => "payrollamt3", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrollamt33", "varname" => "payrollflex_at_localhost__payrollamt33", "altvarname" => "payrollamt33", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrolldeductions", "varname" => "payrollflex_at_localhost__payrolldeductions", "altvarname" => "payrolldeductions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrolldiv", "varname" => "payrollflex_at_localhost__payrolldiv", "altvarname" => "payrolldiv", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrollearnadj", "varname" => "payrollflex_at_localhost__payrollearnadj", "altvarname" => "payrollearnadj", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrollflex1_uggroups", "varname" => "payrollflex_at_localhost__payrollflex1_uggroups", "altvarname" => "payrollflex1_uggroups", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrollflex1_ugmembers", "varname" => "payrollflex_at_localhost__payrollflex1_ugmembers", "altvarname" => "payrollflex1_ugmembers", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrollflex1_ugrights", "varname" => "payrollflex_at_localhost__payrollflex1_ugrights", "altvarname" => "payrollflex1_ugrights", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrollstatutories", "varname" => "payrollflex_at_localhost__payrollstatutories", "altvarname" => "payrollstatutories", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrolltab", "varname" => "payrollflex_at_localhost__payrolltab", "altvarname" => "payrolltab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "payrolltax", "varname" => "payrollflex_at_localhost__payrolltax", "altvarname" => "payrolltax", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "periods", "varname" => "payrollflex_at_localhost__periods", "altvarname" => "periods", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "philhealthtable", "varname" => "payrollflex_at_localhost__philhealthtable", "altvarname" => "philhealthtable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "positions", "varname" => "payrollflex_at_localhost__positions", "altvarname" => "positions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "pprint", "varname" => "payrollflex_at_localhost__pprint", "altvarname" => "pprint", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "removedata", "varname" => "payrollflex_at_localhost__removedata", "altvarname" => "removedata", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "schedby", "varname" => "payrollflex_at_localhost__schedby", "altvarname" => "schedby", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "schedrange", "varname" => "payrollflex_at_localhost__schedrange", "altvarname" => "schedrange", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "schedtab", "varname" => "payrollflex_at_localhost__schedtab", "altvarname" => "schedtab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "schedtype", "varname" => "payrollflex_at_localhost__schedtype", "altvarname" => "schedtype", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "shifts", "varname" => "payrollflex_at_localhost__shifts", "altvarname" => "shifts", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "ssscontsummary", "varname" => "payrollflex_at_localhost__ssscontsummary", "altvarname" => "ssscontsummary", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "ssstable", "varname" => "payrollflex_at_localhost__ssstable", "altvarname" => "ssstable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "standardsetup", "varname" => "payrollflex_at_localhost__standardsetup", "altvarname" => "standardsetup", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "statpay", "varname" => "payrollflex_at_localhost__statpay", "altvarname" => "statpay", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "statutorylock", "varname" => "payrollflex_at_localhost__statutorylock", "altvarname" => "statutorylock", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "thirtax", "varname" => "payrollflex_at_localhost__thirtax", "altvarname" => "thirtax", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "thirtaxsum", "varname" => "payrollflex_at_localhost__thirtaxsum", "altvarname" => "thirtaxsum", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "userinfo", "varname" => "payrollflex_at_localhost__userinfo", "altvarname" => "userinfo", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
			$dalTables[$conn->connId][] = array("name" => "withholdingcat", "varname" => "payrollflex_at_localhost__withholdingcat", "altvarname" => "withholdingcat", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollg at localhost");
		}
	}
	
	
	public static function PrepareSQL( $sql )
	{
		$conn = DB::CurrentConnection();
		$context = RunnerContext::current();

		$tokens = DB::scanTokenString( $sql );
		
		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out
		
		foreach ( $tokens["matches"] as $i => $match )
		{
			$offset = $tokens["offsets"][ $i ];
			$token = $tokens["tokens"][ $i ];
			
			$repl = array(
				"offset" => $offset,
				"len" => strlen( $match )
			);
			
			if ( $conn->positionQuoted( $sql, $offset ) )
				$repl["insert"] = $conn->addSlashes($context->getValue( $token ) );
			else 
				$repl["insert"] = DB::prepareNumberValue($context->getValue( $token ) );

			$replacements[]= $repl;
		}
		
		//	do replacements
		$offsetShift = 0;
		foreach( $replacements as $r )
		{
			$sql = substr_replace( $sql, $r["insert"], $r["offset"] + $offsetShift, $r["len"] );
			$offsetShift += strlen( $r["insert"] ) - $r["len"];
		}
		return $sql;
		
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}
	
	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number 
	*		:62aaa 
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	protected static function scanTokenString( $sql )
	{
		$tokens = array(); 
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{(.*?)\}/';
		
		
		$result = findMatches( $pattern, $sql );
		foreach( $result as $m ) 
		{
			if( $m["submatches"][0] != "" ) {
				//	first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos( $m["match"], $m["submatches"][0] );
			} 
			else
			{
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			}
		}
		

		return array( "tokens" => $tokens, "matches" => $matches, "offsets" => $offsets );
	}
	
	
	public static function prepareNumberValue( $value )
	{
		$strvalue = (string)$value;
		if(is_numeric($strvalue))
			return str_replace(",",".",$strvalue);
		return 0;
	}

}

?>