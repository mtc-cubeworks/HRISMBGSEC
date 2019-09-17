<!DOCTYPE html>
<html>
<head>
  <title>Progress Bar</title>
</head>
<body>
<!-- Progress bar holder -->
<div id="progress" style="width:347px;border:1px solid #ccc"></div>
<!-- Progress information -->
<div id="information" style="width"></div>
<?php
/**
 * The long running PHP process should be placed here before we close
 * the <body> and <html> tags.
 *
 * In the following demo, the long running process is simulated using
 * basic loop with 1 second delay for each iteration.
 */

/**
 * Set the maximum execution time to 5 minutes (300 seconds).
 * We can flexibly adjust it to fit our need. If we need unlimited time,
 * just set it to 0 but be carefull there will be performance impact.
 */
 
 //db connection
$con = mysqli_connect('localhost','badz','Badzilla101');
mysqli_select_db($con,'payrollflex');

//get invoices data
$query = mysqli_query($con,"select * from forapp");
$cnt = mysqli_query($con,"select COUNT(ScID) AS maxc from forapp");	
	
	//where PtabID = '".$_GET['ps1']."'");
 
 $callme = mysqli_fetch_array($cnt );
 
 
 //$num_rows = mysql_num_rows($query);
 
//set_time_limit(400);

// Total processes

$total = $callme["maxc"];

$i=1;

// Loop through process
//for($i=1; $i<=$total; $i++){
//while ($i<$total) {
	
	$i = 0;
	
while ($db_row = mysqli_fetch_array($query)) 
{

  // Calculate the percentation
   $i++;
  $percent = intval($i/$total * 100)."%";

  // Javascript for updating the progress bar and information
  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#11638d;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="'.$i.'/'.$total.' row(s) processed.";
  </script>';

  // This is for the buffer achieve the minimum size in order to flush data
  echo str_repeat(' ',1024*64);

  // Send output to browser immediately
  //flush();
  flush();
  // Sleep one second so we can see the delay
  sleep(0);
  
  //$query2 = mysqli_query($con,"select OTProc AS upd from otndrdglobal where GAID=1");
  //$retrn = mysqli_fetch_array($query2 );
  
//  $i2=$retrn["upd"];
 // $i=$i2;
  // flush();
}

// Tell user that the process is completed
echo '<script language="javascript">document.getElementById("information").innerHTML="Process completed"</script>';

echo "<script>window.close();</script>";
?>
</body>
</html>
