<?php // hard copy downoad kr rhy of manage.php ka code of db details by using db_con.phpfile
include "db_con.php";
$stmt=$db_con->prepare("select username, emailid, dob, gender, password, mobileno, address, date, time, accountstatus from signup");
$stmt->execute();
$columnHeader='';
$columnHeader="UserName" ."\t" ."Email" ."\t" ."Birth Date" ."\t" ."Gender" ."\t" ."password" ."\t" ."MobileNo" ."\t" ."Address" ."\t" ."Date" ."\t" ."Time" ."\t" ."Status";
$setData='';
while($rec=$stmt->FETCH(PDO::FETCH_ASSOC))
{
	$rowData='';
	foreach($rec as $value)
	{
	$value = '"' . $value .'"' . "\t";
	$rowData .=$value;
	}
	$setData .=trim($rowData)."\n";

}
//header() fun is used downloading files
header("Content-type: application/octet-stream"); //here the first para is header-name i.e content-type and second para i.e not specified here defines header-value
header("Content-Disposition: attachment; filename=Excel File data.xls");
header("Pragma: no-chache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";

?>