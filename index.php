<?php 
error_reporting(0);
session_start();
	$b = $_SESSION["un"] ;

	//echo $b." choose your profile picture."; 
	?>

<html>
<head><script>
function validate(){
	flag=true;
	//alert(document.mfm.fileToUpload.value);
	if(document.mfm.fileToUpload.value.length==0){
		alert("you must choose a file");
		flag=false;
	}
	if(document.mfm.uName.value.length==0){
		alert("you must type user name");
		flag=false;
	}
	return flag;
}
</script>
</head>

<body>
	<pre><a href='home.php'><h1>Home</a>  <a href='member_info.php'>View Profile</a>  <a href='change_password.php'>Change Password</a>   <a href='index.php'>Upload Prfile Picture</a>     <a href='logout.php'>Log Out</a>		    <?php echo $b; ?></h1></a></pre>   <center><img src="14.jpg" width="600px" height="500px" alt="14"/></center>
	<?php echo $b.",choose your profile picture."; ?>
<form action="upload.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
	 	
	Select file to upload : <input type="file" name="fileToUpload">
	<input type="submit" value="Upload File" onclick="return validate();" name="submit"></pre>
</form>
</body>
</html>