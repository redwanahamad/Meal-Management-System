<?php
//require("function.php");
//$t=$_REQUEST["uname"];
//insertAmount();
require("function.php");
$auth=array();
insertAmount();
/*
$username = 'root';
$password = '';
$db = 'info';


$s=$_REQUEST['un'];
$d=$_REQUEST['am'];
//echo $s;

$auth=loadFromMySQL("select amount from student where fname = '$s' ");
foreach ($auth as $a) {

	$p= $a["amount"];
}
//insertAmount();






$k=$d+$p;
//echo $k;


$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE student SET amount=$k WHERE fname='$s'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
*/

?>
<script >
	alart("success.");
</script>