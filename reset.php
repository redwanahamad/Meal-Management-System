<?php
	session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   	echo "<pre><a href='admin.php'><h1>Home</a>	<a href='foodmenu.php'>Food Menu</a>   <a href='user_details.php'>Member Modification</a>	  <a href='delete_user.php'>Reset</a>   <a href='meal.php'>Meal Rate</a>   <a href='http://localhost/project/amount.php'>Add Amount</a>   <a href='logout.php'>Log Out</a>      Admin</pre>";
    
    echo "<br>";
   	echo '<center><img src="14.jpg" width="500px" height="400px" alt="14"/></center>';
  

echo '<form action="insert_reset.php" method="post">
<h1>Press confirm to reset amount and meal.</h1>

<input type="submit" value="Confirm" /><br>

</form>';


      }
      else
      {
        echo "Login first";
          header("Location:http://localhost/project/login.php");

      }


?>