<?php
$dalTablenotestatus = array();
$dalTablenotestatus["NSID"] = array("type"=>3,"varname"=>"NSID", "name" => "NSID");
$dalTablenotestatus["CreatedDate"] = array("type"=>7,"varname"=>"CreatedDate", "name" => "CreatedDate");
$dalTablenotestatus["NStatusDate"] = array("type"=>7,"varname"=>"NStatusDate", "name" => "NStatusDate");
$dalTablenotestatus["NoteStatus"] = array("type"=>3,"varname"=>"NoteStatus", "name" => "NoteStatus");
$dalTablenotestatus["Remarks"] = array("type"=>200,"varname"=>"Remarks", "name" => "Remarks");
$dalTablenotestatus["NID"] = array("type"=>3,"varname"=>"NID", "name" => "NID");
$dalTablenotestatus["UploadFile"] = array("type"=>200,"varname"=>"UploadFile", "name" => "UploadFile");
$dalTablenotestatus["Encodedby"] = array("type"=>3,"varname"=>"Encodedby", "name" => "Encodedby");
$dalTablenotestatus["Closed"] = array("type"=>16,"varname"=>"Closed", "name" => "Closed");
	$dalTablenotestatus["NSID"]["key"]=true;

$dal_info["payrollflex_at_localhost__notestatus"] = &$dalTablenotestatus;
?>