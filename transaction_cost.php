<?php

session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   echo "<pre><a href='home.php'><h1>Home</a>    <a href='show_meal.php'>Food Menu</a>   <a href='mealmember.php'>Meal Rate</a>  <a href='transaction_cost.php'>Transaction</a>  <a href='http://localhost/project/numberofmeal.php'>Add meal</a>  <a href='member_profile.php'>Profile</a>  <a href='http://localhost/project/about.html'>About</a>   <a href='logout.php'>Log Out</a>          ".$_SESSION['un']."</pre></pre>";
   	echo '<center><img src="14.jpg" width="600px" height="500px" alt="14"/></center>';

   	require("function.php");

    transaction();

  


    	}
    	else
    	{
    		echo "Login first";
	        header("Location:http://localhost/project/login.php");

    	}


?>