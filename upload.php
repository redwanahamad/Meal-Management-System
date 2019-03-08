<pre>
<?php
require("db_rw.php");
//print_r($GLOBALS);

$tmp=$_FILES['fileToUpload']['tmp_name'];
$name=$_FILES['fileToUpload']['name'];
//echo time();
$ext=getExt($name);
$target="uploads/".time().".".$ext;

if($ext!="jpg"){
	//echo "Invalid file type";
	echo "<script>alert('Invalid file type');
	   window.location.href='index.php';
	</script>";
}
else if(file_exists($target)){
	//echo "File already exists";
	echo "<script>alert('File already exists');
	   window.location.href='index.php';
	</script>";

}
else{
	echo $target;
	$t= move_uploaded_file($tmp,$target);
	//$sql="insert into student values(null,'".$_POST["uName"]."','".$target."')";
	//$o=$_POST["uName"];
	session_start();
	$o=$_SESSION['un'];
	//UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;
	$sql="update student set purl = '$target' where fname = '$o'";
	//echo $sql;
	$u=updateSQL($sql);
	//echo "File uploaded:".$target;
	//header("Location:up.php");
	echo "<script>alert('Uploaded');
	   window.location.href='member_profile.php';
	</script>";

}
?>
</pre>