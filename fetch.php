<?php
$data=array();
require("lib.php");
$sql="select * from student where uname='".$_GET["uname"]."'";
//echo $sql;
//loadFromText();
loadFromMySQL($sql);
foreach($data as $v){
	echo "<p>";
	echo "Email of <b>".$v["uname"]."</b> is ".$v["email"];
	echo "</p>";
}
if(sizeof($data)==0)
	echo "Not found";
//print_r($data);
?>