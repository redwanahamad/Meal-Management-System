<?php
session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   	echo "<pre><a href='admin.php'><h1>Home</a>    <a href='foodmenu.php'>Food Menu</a>   <a href='user_details.php'>Member Modification</a>   <a href='reset.php'>Reset</a>   <a href='meal.php'>Meal Rate</a>   <a href='http://localhost/project/amount.php'>Add Amount</a>   <a href='logout.php'>Log Out</a>      Admin</pre>";
    
    echo "<br>";
   	echo '<center><img src="14.jpg" width="500px" height="400px" alt="14"/></center>';
     echo '<form action="insert.php" method="post">
<h1>Add amount</h1>
User Name :
<input value="" type="text" name="un" /><br>
Amount  : <input type="text" name="am" /><br>
<br>


<input type="submit" value="insert" /><br>

</form>';


    	}
    	else
    	{
    		echo "Login first";
	        header("Location:http://localhost/project/login.php");

    	}

?>
