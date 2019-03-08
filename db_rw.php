<?php
function updateDB($sql){
	$conn = mysqli_connect("localhost", "root", "", "info");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(mysqli_query($conn, $sql)) {
		echo "New records updated successfully";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function getExt($filename){
	//abc.jpg
	$a=explode(".",$filename);
	return $a[1];
}
function updateSQL($sql){
	$conn = mysqli_connect("localhost", "root", "","info");
	//echo $sql;
	$result = mysqli_query($conn, $sql);
	return $result;
}
/*function loadFromText(){
	global $auth;
	$myfile = fopen("crd.txt", "r") or die("Unable to open file!");
	$auth=array();
	while($line=fgets($myfile)) {	// read all lines until end-of-file
		$ar=explode(" ",$line);
		$auth[]=array("id"=>$ar[0],"uname"=>$ar[1],"pass"=>$ar[2],"email"=>$ar[3]);
	}
	//print_r($auth);
}*/
/*function loadFromXML(){
	global $auth;$auth=array();
	$xml=simplexml_load_file("cred.xml") or die("Error: Cannot create object");

	foreach($xml->user as $st){
		$ar=array();
		$ar["id"]=(string)$st->id;
		$ar["uname"]=(string)$st->uname;
		$ar["pass"]=(string)$st->pass;
		$ar["email"]=(string)$st->email;
		$auth[]=$ar;
	}
	//print_r($auth);
}*/
function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","info");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$data[]=$row;
	}
	//return $arr;
}
/*function getUserDetailsText($uid){
	global $ud;
	$myfile = fopen("crd.txt", "r") or die("Unable to open file!");
	$ud=array();
	while($line=fgets($myfile)) {	// read all lines until end-of-file
		$ar=explode(" ",$line);
		if($uid==$ar[0]){
			$ud["email"]=$ar[3];
			$ud["loc"]=$ar[4];
		}
	}
}*/
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","info");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($$conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","info");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
}
?>