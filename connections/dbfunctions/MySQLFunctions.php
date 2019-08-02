<?php
class MySQLFunctions extends DBFunctions
{
	/**
	 *  A db connection link identifier
	 * @type Mixed
	 */
	protected $conn = null;
	
	
	function __construct( $params )
	{
		parent::__construct($params);
		$this->strLeftWrapper = "`";
		$this->strRightWrapper = "`";
		$this->escapeChars[ '\\' ] = true;
		
		$this->conn = $params["conn"];	
	}
	
	/**
	 * @param String str
	 * @return String
	 */
	public function escapeLIKEpattern( $str )
	{
		return str_replace(array('\\', '%', '_'), array('\\\\', '\\%', '\\_'), $str);
	}

	
	/**
	 * @param String str
	 * @return String
	 */
	public function addSlashes( $str )
	{
		if( useMySQLiLib() && $this->conn )
		{
			if( $this->conn )
				return mysqli_real_escape_string( $this->conn, $str );
		} 
		else
		{
			//	ODBC connection, no MySQL library included
			return str_replace(array('\\', '\''), array('\\\\', '\\\''), $str);
		}
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashesBinary( $str )
	{
		if( !strlen($str) )
			return "''";
			
		return "0x".bin2hex($str);
	}


	/**
	 * adds wrappers to field name if required
	 * @param String strName
	 * @return String
	 */
	public function addFieldWrappers( $strName )
	{		
		if( substr($strName, 0, 1) == $this->strLeftWrapper )
			return $strName;
			
		return $this->strLeftWrapper.$strName.$this->strRightWrapper;
	}
	

	/**
	 * @param String dbval
	 * @return String	 
	 */
	public function upper( $dbval )
	{
		return "upper(".$dbval.")";
	}
	
	
	/**
	 * It's called for Contains and Starts with searches
	 * @param Mixed value
	 * @param Number type (optional)
	 * @return String	 
	 */
	public function field2char($value, $type = 3)
	{
		return $value;
	}
	
	/**
	 * @param Mixed value
	 * @param Number type
	 * @return String	 
	 */
	public function field2time($value, $type)
	{
		if( IsDateFieldType($type) )
			return "time(".$value.")";
			
		return $value;
	}

	/**
	 *  Get the auto generated SQL string used in the last query
	 * @param String key (optional)	
	 * @param String table (optional)	
	 * @param String oraSequenceName (optional)	
	 * @return String
	 */
	public function getInsertedIdSQL( $key = null, $table = null, $oraSequenceName = false )
	{
		return "SELECT LAST_INSERT_ID()";
	}

	/**
	 * @param String strName
	 * @return String
	 */	
	public function timeToSecWrapper( $strName )
	{
		return "TIME_TO_SEC(" . $this->addTableWrappers($strName) . ")";
	}

	public function schemaSupported()
	{
		return false;
	}
	
}
?>