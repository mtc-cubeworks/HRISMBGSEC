<?php 

require_once(getabspath("include/LocaleFunctions.php"));

//	locale settings
//	locale settings

$locale_info = array();

$locale_info["LOCALE_LANGNAME"]="fil";
$locale_info["LOCALE_CTRYNAME"]="PH";
//	date settings
$locale_info["LOCALE_ICENTURY"]="1";
$locale_info["LOCALE_IDATE"]="0";
$locale_info["LOCALE_ILDATE"]="0";
$locale_info["LOCALE_SDATE"]="/";
$locale_info["LOCALE_SLONGDATE"]="dddd, MMMM d, yyyy";
$locale_info["LOCALE_SSHORTDATE"]="M/d/yyyy";
//	weekday names
$locale_info["LOCALE_IFIRSTDAYOFWEEK"]="6";
$locale_info["LOCALE_SDAYNAME1"]="Lunes";
$locale_info["LOCALE_SDAYNAME2"]="Martes";
$locale_info["LOCALE_SDAYNAME3"]="Miyerkules";
$locale_info["LOCALE_SDAYNAME4"]="Huwebes";
$locale_info["LOCALE_SDAYNAME5"]="Biyernes";
$locale_info["LOCALE_SDAYNAME6"]="Sabado";
$locale_info["LOCALE_SDAYNAME7"]="Linggo";
$locale_info["LOCALE_SABBREVDAYNAME1"]="Lun";
$locale_info["LOCALE_SABBREVDAYNAME2"]="Mar";
$locale_info["LOCALE_SABBREVDAYNAME3"]="Miy";
$locale_info["LOCALE_SABBREVDAYNAME4"]="Huw";
$locale_info["LOCALE_SABBREVDAYNAME5"]="Biy";
$locale_info["LOCALE_SABBREVDAYNAME6"]="Sab";
$locale_info["LOCALE_SABBREVDAYNAME7"]="Lin";
//	month names
$locale_info["LOCALE_SMONTHNAME1"]="Enero";
$locale_info["LOCALE_SMONTHNAME2"]="Pebrero";
$locale_info["LOCALE_SMONTHNAME3"]="Marso";
$locale_info["LOCALE_SMONTHNAME4"]="Abril";
$locale_info["LOCALE_SMONTHNAME5"]="Mayo";
$locale_info["LOCALE_SMONTHNAME6"]="Hunyo";
$locale_info["LOCALE_SMONTHNAME7"]="Hulyo";
$locale_info["LOCALE_SMONTHNAME8"]="Agosto";
$locale_info["LOCALE_SMONTHNAME9"]="Setyembre";
$locale_info["LOCALE_SMONTHNAME10"]="Oktubre";
$locale_info["LOCALE_SMONTHNAME11"]="Nobyembre";
$locale_info["LOCALE_SMONTHNAME12"]="Disyembre";
$locale_info["LOCALE_SABBREVMONTHNAME1"]="Ene";
$locale_info["LOCALE_SABBREVMONTHNAME2"]="Peb";
$locale_info["LOCALE_SABBREVMONTHNAME3"]="Mar";
$locale_info["LOCALE_SABBREVMONTHNAME4"]="Abr";
$locale_info["LOCALE_SABBREVMONTHNAME5"]="May";
$locale_info["LOCALE_SABBREVMONTHNAME6"]="Hun";
$locale_info["LOCALE_SABBREVMONTHNAME7"]="Hul";
$locale_info["LOCALE_SABBREVMONTHNAME8"]="Ago";
$locale_info["LOCALE_SABBREVMONTHNAME9"]="Set";
$locale_info["LOCALE_SABBREVMONTHNAME10"]="Okt";
$locale_info["LOCALE_SABBREVMONTHNAME11"]="Nob";
$locale_info["LOCALE_SABBREVMONTHNAME12"]="Dis";
//	time settings
$locale_info["LOCALE_ITIME"]="0";
$locale_info["LOCALE_ITIMEMARKPOSN"]="0";
$locale_info["LOCALE_ITLZERO"]="0";
$locale_info["LOCALE_S1159"]="AM";
$locale_info["LOCALE_S2359"]="PM";
$locale_info["LOCALE_STIME"]=":";
$locale_info["LOCALE_STIMEFORMAT"]="h:mm:ss tt";
//	currency settings
$locale_info["LOCALE_ICURRDIGITS"]="2";
$locale_info["LOCALE_ICURRENCY"]="0";
$locale_info["LOCALE_INEGCURR"]="1";
$locale_info["LOCALE_SCURRENCY"]="₱";
$locale_info["LOCALE_SMONDECIMALSEP"]=".";
$locale_info["LOCALE_SMONGROUPING"]="3;0";
$locale_info["LOCALE_SMONTHOUSANDSEP"]=",";
//	numbers formatting settings
$locale_info["LOCALE_IDIGITS"]="2";
$locale_info["LOCALE_INEGNUMBER"]="1";
$locale_info["LOCALE_SDECIMAL"]=".";
$locale_info["LOCALE_SGROUPING"]="3;0";
$locale_info["LOCALE_SNEGATIVESIGN"]="-";
$locale_info["LOCALE_SPOSITIVESIGN"]="";
$locale_info["LOCALE_STHOUSAND"]=",";
;
$locale_info["LOCALE_ILONGDATE"]=GetLongDateFormat();
 
 /**
 * 	converts mysql datetime to array(year,month,day,hour,minute,second)
 * @intellisense
 */
function db2time($str)
{
	$now=localtime(time(),1);
    $isdst=$now["tm_isdst"];
    $havedate=0;
	$havetime=0;
	if(is_numeric($str))
//	timestamp
	{
		$havedate=1;
		$len=strlen($str);
		if($len>=10)
		  $havetime=1;
		switch($len)
		{
		  case 14:
		  	$pattern="/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 12:
		  	$pattern="/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 10:
		  	$pattern="/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/";
			break;
		  case 18:
		  	$pattern="/(\d{4})(\d{2})(\d{2})/";
			break;
		  case 6:
		  	$pattern="/(\d{2})(\d{2})(\d{2})/";
			break;
		  case 4:
		  	$pattern="/(\d{2})(\d{2})/";
			break;
		  case 2:
		  	$pattern="/(\d{2})/";
			break;
	      default: 
		    return array();
	    }
		if(preg_match($pattern,$str,$parsed))
		{
		  $y=$parsed[1];
		  $mo=(count($parsed)>2)?$parsed[2]:1;
		  $d=(count($parsed)>3)?$parsed[3]:1;
		  $h=(count($parsed)>4)?$parsed[4]:0;
		  $mi=(count($parsed)>5)?$parsed[5]:0;
		  $s=(count($parsed)>6)?$parsed[6]:0;
		}
		else
		  return array();
		  
	}
	else if(is_string($str))
// date,time,datetime
	{
	  if(preg_match("/(\d{4})-(\d{1,2})-(\d{1,2}) (\d{1,2}):(\d{1,2}):(\d{1,2})/", $str, $parsed)) // datetime
		{
			$y = $parsed[1];
			$mo = $parsed[2];
			$d = $parsed[3];
			$h = $parsed[4];
			$mi = $parsed[5];
			$s = $parsed[6];
		    $havedate=1;
			$havetime=1;
		}
		else if(preg_match("/(\d{4})-(\d{1,2})-(\d{1,2})/", $str, $parsed)) // date
		{
			$y = $parsed[1];
			$mo = $parsed[2];
			$d = $parsed[3];
			$h = 0;
			$mi = 0;
			$s = 0;
		    $havedate=1;
		}
		else if(preg_match("/(\d{2})-(\d{1,2})-(\d{1,2})/", $str, $parsed)) // time
		{
		  $y=$now["tm_year"];
		  $mo=$now["tm_mon"]+1;
		  $d=$now["tm_mday"];
		  $h = $parsed[1];
		  $mi = $parsed[2];
		  $s = $parsed[3];
		  $havetime=1;
		}
		else 
			return array();
	}
	else
	{
		return array();
	}
	if(!$havetime)
	{
		$h=0;
		$mi=0;
		$s=0;
	}
	if(!$havedate)
	{
		$y=$now["tm_year"]+1900;
		$mo=$now["tm_mon"]+1;
		$d=$now["tm_mday"];
	}
//	return mktime($h,$mi,$s,$mo,$d,$y);
	return array((integer)$y,(integer)$mo,(integer)$d,(integer)$h,(integer)$mi,(integer)$s);
}

?>