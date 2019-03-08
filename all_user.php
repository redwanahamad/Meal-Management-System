<?php
	session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   	echo "<pre><a href='admin.php'><h1>Home</a>	<a href='all_user.php'>All User info</a>   <a href='show.php'>Search Member</a>	<a href='delete_user.php'>Delete User</a>   <a href='logout.php'>Log Out</a>                           Admin</pre>";
    
    echo "<br>";
   	echo '<center><img src="14.jpg" width="400px" height="400px" alt="14"/></center>';

error_reporting(0);

require("function.php");

$auth=array();


showalluser();
}
else
    	{
    		echo "Login first";
	        header("Location:http://localhost/project/login.php");

    	}

?>