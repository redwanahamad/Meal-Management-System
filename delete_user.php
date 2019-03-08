<?php
	session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   	echo "<pre><a href='admin.php'><h1>Home</a>    <a href='all_user.php'>All User info</a>   <a href='show.php'>Search Member</a>   <a href='delete_user.php'>Delete User</a>   <a href='logout.php'>Log Out</a>                           Admin</pre>";
    
    echo "<br>";
    echo '<center><img src="14.jpg" width="400px" height="400px" alt="14"/></center>';
    
    
  
     echo '<form action="delete_row.php" method="post">
<h1>Delete Member from Database.</h1>
Member Name :
<input value="" type="text" name="mn" /><br>

<br>


<input type="submit" value="Delete" /><br>
</form>';

    	}
    	else
    	{
    		echo "Login first";
	        header("Location:http://localhost/project/login.php");

    	}

?>