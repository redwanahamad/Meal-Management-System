<?php
error_reporting(0);
session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   	echo "<pre><a href='home.php'><h1>Home</a>	<a href='member_info.php'>View Profile</a>  <a href='change_password.php'>Change Password</a>   <a href='index.php'>Upload Prfile Picture</a>     <a href='logout.php'>Log Out</a>              ".$_SESSION['un']."</pre></pre>";
    //echo $_SESSION['un'];
   	



$data=array();

require("db_rw.php");
//session_start();
$s=$_SESSION['un'];

loadFromMySQL("select * from student where fname='".$s."'");
//loadFromMySQL("select * from photo");

foreach($data as $v){
	echo "<p>";
	echo "Photo : ";
	echo "<br>";

	
	if(file_exists($v["purl"]))
		echo "<img alt='not found' src='".$v["purl"]."' width='300px' height='300px'/>";
	else
	{
		echo "Image missing";
	}
	echo "<br>";
	echo "First Name : ".$v["fname"];
	
	echo "<br>";
	echo "Last Name : ".$v["lname"];
	echo "<br>";
	echo "Email : ".$v["email"];
	echo "<br>";
	
	
	echo "Date Of Birth : ".$v["dob"];
	echo "<br>";
	echo "Phone : ".$v["phone"];
	echo "<br>";
	echo "Gender : ".$v["gender"];
	echo "<br>";
	echo "Number Of Meal : ".$v["meal"];
	echo "<br>";
	echo "Amount : ".$v["amount"];
	echo "<br>";
	$w = $_SESSION['tn'];
	if($w<1)
{
	echo "You get ".round($w)." Tk";
}
else
{
	echo "You have to pay ".round($w)." Tk";
}

	echo "</p>";

}
}
else
    	{
    		echo "Login first";
	        header("Location:http://localhost/project/login.php");

    	}
//print_r($data);
?>
