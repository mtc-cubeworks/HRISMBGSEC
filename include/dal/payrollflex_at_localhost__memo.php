<?php
$dalTablememo = array();
$dalTablememo["MemID"] = array("type"=>3,"varname"=>"MemID", "name" => "MemID");
$dalTablememo["Subject"] = array("type"=>200,"varname"=>"Subject", "name" => "Subject");
$dalTablememo["To"] = array("type"=>200,"varname"=>"To", "name" => "To");
$dalTablememo["From"] = array("type"=>200,"varname"=>"From", "name" => "From");
$dalTablememo["Memo"] = array("type"=>200,"varname"=>"Memo", "name" => "Memo");
$dalTablememo["PreparedBy"] = array("type"=>200,"varname"=>"PreparedBy", "name" => "PreparedBy");
$dalTablememo["MDate"] = array("type"=>7,"varname"=>"MDate", "name" => "MDate");
	$dalTablememo["MemID"]["key"]=true;

$dal_info["payrollflex_at_localhost__memo"] = &$dalTablememo;
?>