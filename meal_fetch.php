<?php
$data=array();
require("meal_lib.php");

if(isset($_REQUEST["flag"]) && $_REQUEST["flag"]=="loadDistrict"){
	$sql="select * from food_menu where did='".$_REQUEST["did"]."'";	
	//$sql="select * from food_menu where did=did";
	//echo $sql;
	//loadFromText();
	loadFromMySQL($sql);
	echo json_encode($data);
	//print_r($data);
}
?>