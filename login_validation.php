<?php

session_start();
error_reporting(0);
/*if (isset($_POST['submit'])) {
	$_SESSION['un']=$_POST['Username'];
}

echo $_SESSION['un'];*/
    
		// $test=array();
//$myfile = fopen("record.txt", "r") or die("Unable to open file!");
require("function.php");


$auth=array();

//$auth=loadFromMySQL("select * from user");
//read();
autho();

?>