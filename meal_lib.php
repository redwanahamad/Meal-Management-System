<?php
$config["dataSource"]="mysql";
$config["dbName"]="info";
$config["dbUser"]="root";
$config["dbPass"]="";
$config["dbHost"]="localhost";
function loadFromMySQL($sql){
	global $data;global $config;
	$conn = mysqli_connect($config["dbHost"], $config["dbUser"], $config["dbPass"],$config["dbName"]);
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$data[]=$row;
	}
}

?>