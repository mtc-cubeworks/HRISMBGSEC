<?php
class AuditTrailTable
{
	var $logTableName="";
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength = 300;

	/**
	 * @type Connection
	 */
	protected $connection;
	
	function __construct()
	{
		global $cman;
		
		$this->connection = $cman->getForAudit();		
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
			
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
    }
	
    function LogLoginFailed($pUsername)
    {
    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($val,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }
	
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;
			
			$this->connection->exec( $sql );
		}
		
    }
	
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }
    
	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
			
			$qResult = $this->connection->query( $sql );
			
			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}
			
			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}
	
	function logValueEnable($table)
	{
		if($table=="demo_device")
		{
			return false;
		}
		if($table=="demo_user")
		{
			return false;
		}
		if($table=="demo_finger")
		{
			return false;
		}
		if($table=="demo_log")
		{
			return false;
		}
		if($table=="holidays")
		{
			return false;
		}
		if($table=="standardsetup")
		{
			return false;
		}
		if($table=="schedrange")
		{
			return false;
		}
		if($table=="schedtab")
		{
			return false;
		}
		if($table=="indschedule")
		{
			return false;
		}
		if($table=="schedtype")
		{
			return false;
		}
		if($table=="holidaytype")
		{
			return false;
		}
		if($table=="emptype")
		{
			return false;
		}
		if($table=="leavetypes")
		{
			return false;
		}
		if($table=="logins")
		{
			return false;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="admin_members")
		{
			return false;
		}
		if($table=="admin_users")
		{
			return false;
		}
		if($table=="loans")
		{
			return false;
		}
		if($table=="divisions")
		{
			return false;
		}
		if($table=="department")
		{
			return false;
		}
		if($table=="empstatus")
		{
			return false;
		}
		if($table=="payroll")
		{
			return false;
		}
		if($table=="payrolltab")
		{
			return false;
		}
		if($table=="ssstable")
		{
			return false;
		}
		if($table=="philhealthtable")
		{
			return false;
		}
		if($table=="loantypes")
		{
			return false;
		}
		if($table=="loandesriptions")
		{
			return false;
		}
		if($table=="earningadjustment")
		{
			return false;
		}
		if($table=="adjustmentdescriptions")
		{
			return false;
		}
		if($table=="adjtypes")
		{
			return false;
		}
		if($table=="payrollearnadj")
		{
			return false;
		}
		if($table=="payrolldeductions")
		{
			return false;
		}
		if($table=="paymentperiods")
		{
			return false;
		}
		if($table=="daysweek")
		{
			return false;
		}
		if($table=="shifts")
		{
			return false;
		}
		if($table=="dtrrange")
		{
			return false;
		}
		if($table=="indleave")
		{
			return false;
		}
		if($table=="ileave")
		{
			return false;
		}
		if($table=="daylength")
		{
			return false;
		}
		if($table=="leavebalance")
		{
			return false;
		}
		if($table=="indschedule1")
		{
			return false;
		}
		if($table=="controlin")
		{
			return false;
		}
		if($table=="dt5")
		{
			return false;
		}
		if($table=="indovertime")
		{
			return false;
		}
		if($table=="forapp")
		{
			return false;
		}
		if($table=="payrollstatutories")
		{
			return false;
		}
		if($table=="loanbalance3")
		{
			return false;
		}
		if($table=="payrolltax")
		{
			return false;
		}
		if($table=="payrollamt3")
		{
			return false;
		}
		if($table=="empdeminimis")
		{
			return false;
		}
		if($table=="emplevels")
		{
			return false;
		}
		if($table=="demo_user1")
		{
			return false;
		}
		if($table=="leveldrops")
		{
			return false;
		}
		if($table=="latepenalty")
		{
			return false;
		}
		if($table=="nightshiftallowance")
		{
			return false;
		}
		if($table=="emphistory")
		{
			return false;
		}
		if($table=="modulelock")
		{
			return false;
		}
		if($table=="moduletable")
		{
			return false;
		}
		if($table=="dloglimit2")
		{
			return false;
		}
		if($table=="indschedule11")
		{
			return false;
		}
		if($table=="positions")
		{
			return false;
		}
		if($table=="employername")
		{
			return false;
		}
		if($table=="pagibigtable")
		{
			return false;
		}
		if($table=="pprint")
		{
			return false;
		}
		if($table=="statutorylock")
		{
			return false;
		}
		if($table=="payroll21")
		{
			return false;
		}
		if($table=="payrollamt33")
		{
			return false;
		}
		if($table=="leaves1")
		{
			return false;
		}
		if($table=="ssscontsummary")
		{
			return false;
		}
		if($table=="leaves11")
		{
			return false;
		}
		if($table=="leavesapp")
		{
			return false;
		}
		if($table=="leavebalance1")
		{
			return false;
		}
		if($table=="indleave1")
		{
			return false;
		}
		if($table=="loanbalance31")
		{
			return false;
		}
		if($table=="loansreport")
		{
			return false;
		}
		if($table=="contlo")
		{
			return false;
		}
		if($table=="statpay")
		{
			return false;
		}
		if($table=="annualtaxtab")
		{
			return false;
		}
		if($table=="empindschedule")
		{
			return false;
		}
		if($table=="indschedrange")
		{
			return false;
		}
		if($table=="monthlyremittax")
		{
			return false;
		}
		if($table=="withholdingcat")
		{
			return false;
		}
		if($table=="banks")
		{
			return false;
		}
		if($table=="empdtr")
		{
			return false;
		}
		if($table=="emplogins")
		{
			return false;
		}
		if($table=="removedata")
		{
			return false;
		}
		if($table=="schedby")
		{
			return false;
		}
		if($table=="overtimes")
		{
			return false;
		}
		if($table=="overtimetab")
		{
			return false;
		}
		if($table=="overtimefile")
		{
			return false;
		}
		if($table=="divisionaccess")
		{
			return false;
		}
		if($table=="indovertime1")
		{
			return false;
		}
		if($table=="payrolldiv")
		{
			return false;
		}
		if($table=="logo")
		{
			return false;
		}
		if($table=="addbreaks")
		{
			return false;
		}
		if($table=="indbreaks")
		{
			return false;
		}
		if($table=="dtrtable")
		{
			return false;
		}
		if($table=="periods")
		{
			return false;
		}
		if($table=="clocktypes")
		{
			return false;
		}
		if($table=="demo_logemp")
		{
			return false;
		}
		if($table=="userinfo")
		{
			return false;
		}
		if($table=="leavesapp2")
		{
			return false;
		}
		if($table=="thirtax")
		{
			return false;
		}
		if($table=="thirtaxsum")
		{
			return false;
		}
		if($table=="filelog")
		{
			return false;
		}
		if($table=="payrolltab1")
		{
			return false;
		}
		if($table=="filelog1")
		{
			return false;
		}
		if($table=="filelog2")
		{
			return false;
		}
		if($table=="filelog3")
		{
			return false;
		}
		if($table=="leaveremarks")
		{
			return false;
		}
		if($table=="dtrsummary2")
		{
			return false;
		}
		if($table=="demo_user_open")
		{
			return false;
		}
		if($table=="overtimefileapp")
		{
			return false;
		}
		if($table=="overtimefileapp2")
		{
			return false;
		}
		if($table=="demo_useremp")
		{
			return false;
		}
		if($table=="leaves")
		{
			return false;
		}
		if($table=="approvalbutton")
		{
			return false;
		}
	}
	
	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table"). 
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip). 
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action). 
			"," .$this->connection->prepareString($description).
			")";
		
		return $this->connection->exec( $sql );
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength = 300;
	
	function __construct()
	{
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
		    }
	
    function LogLoginFailed($pUsername)
    {
		    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v1)>$this->maxFieldLength)
								$v1=runner_substr($v1,0,$this->maxFieldLength);
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v2)>$this->maxFieldLength)
								$v2=runner_substr($v2,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v=str_replace(array("\r\n","\n","\t")," ",$val);
						if(strlen($v)>$this->maxFieldLength)
							$v=runner_substr($v,0,$this->maxFieldLength);
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );
		
	}
	
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	
	function LoginSuccessful()
    {
		return true;
    }
	
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	
	function logValueEnable($table)
	{
		if($table=="demo_device")
		{
			return false;
		}
		if($table=="demo_user")
		{
			return false;
		}
		if($table=="demo_finger")
		{
			return false;
		}
		if($table=="demo_log")
		{
			return false;
		}
		if($table=="holidays")
		{
			return false;
		}
		if($table=="standardsetup")
		{
			return false;
		}
		if($table=="schedrange")
		{
			return false;
		}
		if($table=="schedtab")
		{
			return false;
		}
		if($table=="indschedule")
		{
			return false;
		}
		if($table=="schedtype")
		{
			return false;
		}
		if($table=="holidaytype")
		{
			return false;
		}
		if($table=="emptype")
		{
			return false;
		}
		if($table=="leavetypes")
		{
			return false;
		}
		if($table=="logins")
		{
			return false;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="admin_members")
		{
			return false;
		}
		if($table=="admin_users")
		{
			return false;
		}
		if($table=="loans")
		{
			return false;
		}
		if($table=="divisions")
		{
			return false;
		}
		if($table=="department")
		{
			return false;
		}
		if($table=="empstatus")
		{
			return false;
		}
		if($table=="payroll")
		{
			return false;
		}
		if($table=="payrolltab")
		{
			return false;
		}
		if($table=="ssstable")
		{
			return false;
		}
		if($table=="philhealthtable")
		{
			return false;
		}
		if($table=="loantypes")
		{
			return false;
		}
		if($table=="loandesriptions")
		{
			return false;
		}
		if($table=="earningadjustment")
		{
			return false;
		}
		if($table=="adjustmentdescriptions")
		{
			return false;
		}
		if($table=="adjtypes")
		{
			return false;
		}
		if($table=="payrollearnadj")
		{
			return false;
		}
		if($table=="payrolldeductions")
		{
			return false;
		}
		if($table=="paymentperiods")
		{
			return false;
		}
		if($table=="daysweek")
		{
			return false;
		}
		if($table=="shifts")
		{
			return false;
		}
		if($table=="dtrrange")
		{
			return false;
		}
		if($table=="indleave")
		{
			return false;
		}
		if($table=="ileave")
		{
			return false;
		}
		if($table=="daylength")
		{
			return false;
		}
		if($table=="leavebalance")
		{
			return false;
		}
		if($table=="indschedule1")
		{
			return false;
		}
		if($table=="controlin")
		{
			return false;
		}
		if($table=="dt5")
		{
			return false;
		}
		if($table=="indovertime")
		{
			return false;
		}
		if($table=="forapp")
		{
			return false;
		}
		if($table=="payrollstatutories")
		{
			return false;
		}
		if($table=="loanbalance3")
		{
			return false;
		}
		if($table=="payrolltax")
		{
			return false;
		}
		if($table=="payrollamt3")
		{
			return false;
		}
		if($table=="empdeminimis")
		{
			return false;
		}
		if($table=="emplevels")
		{
			return false;
		}
		if($table=="demo_user1")
		{
			return false;
		}
		if($table=="leveldrops")
		{
			return false;
		}
		if($table=="latepenalty")
		{
			return false;
		}
		if($table=="nightshiftallowance")
		{
			return false;
		}
		if($table=="emphistory")
		{
			return false;
		}
		if($table=="modulelock")
		{
			return false;
		}
		if($table=="moduletable")
		{
			return false;
		}
		if($table=="dloglimit2")
		{
			return false;
		}
		if($table=="indschedule11")
		{
			return false;
		}
		if($table=="positions")
		{
			return false;
		}
		if($table=="employername")
		{
			return false;
		}
		if($table=="pagibigtable")
		{
			return false;
		}
		if($table=="pprint")
		{
			return false;
		}
		if($table=="statutorylock")
		{
			return false;
		}
		if($table=="payroll21")
		{
			return false;
		}
		if($table=="payrollamt33")
		{
			return false;
		}
		if($table=="leaves1")
		{
			return false;
		}
		if($table=="ssscontsummary")
		{
			return false;
		}
		if($table=="leaves11")
		{
			return false;
		}
		if($table=="leavesapp")
		{
			return false;
		}
		if($table=="leavebalance1")
		{
			return false;
		}
		if($table=="indleave1")
		{
			return false;
		}
		if($table=="loanbalance31")
		{
			return false;
		}
		if($table=="loansreport")
		{
			return false;
		}
		if($table=="contlo")
		{
			return false;
		}
		if($table=="statpay")
		{
			return false;
		}
		if($table=="annualtaxtab")
		{
			return false;
		}
		if($table=="empindschedule")
		{
			return false;
		}
		if($table=="indschedrange")
		{
			return false;
		}
		if($table=="monthlyremittax")
		{
			return false;
		}
		if($table=="withholdingcat")
		{
			return false;
		}
		if($table=="banks")
		{
			return false;
		}
		if($table=="empdtr")
		{
			return false;
		}
		if($table=="emplogins")
		{
			return false;
		}
		if($table=="removedata")
		{
			return false;
		}
		if($table=="schedby")
		{
			return false;
		}
		if($table=="overtimes")
		{
			return false;
		}
		if($table=="overtimetab")
		{
			return false;
		}
		if($table=="overtimefile")
		{
			return false;
		}
		if($table=="divisionaccess")
		{
			return false;
		}
		if($table=="indovertime1")
		{
			return false;
		}
		if($table=="payrolldiv")
		{
			return false;
		}
		if($table=="logo")
		{
			return false;
		}
		if($table=="addbreaks")
		{
			return false;
		}
		if($table=="indbreaks")
		{
			return false;
		}
		if($table=="dtrtable")
		{
			return false;
		}
		if($table=="periods")
		{
			return false;
		}
		if($table=="clocktypes")
		{
			return false;
		}
		if($table=="demo_logemp")
		{
			return false;
		}
		if($table=="userinfo")
		{
			return false;
		}
		if($table=="leavesapp2")
		{
			return false;
		}
		if($table=="thirtax")
		{
			return false;
		}
		if($table=="thirtaxsum")
		{
			return false;
		}
		if($table=="filelog")
		{
			return false;
		}
		if($table=="payrolltab1")
		{
			return false;
		}
		if($table=="filelog1")
		{
			return false;
		}
		if($table=="filelog2")
		{
			return false;
		}
		if($table=="filelog3")
		{
			return false;
		}
		if($table=="leaveremarks")
		{
			return false;
		}
		if($table=="dtrsummary2")
		{
			return false;
		}
		if($table=="demo_user_open")
		{
			return false;
		}
		if($table=="overtimefileapp")
		{
			return false;
		}
		if($table=="overtimefileapp2")
		{
			return false;
		}
		if($table=="demo_useremp")
		{
			return false;
		}
		if($table=="leaves")
		{
			return false;
		}
		if($table=="approvalbutton")
		{
			return false;
		}
	}
}
?>