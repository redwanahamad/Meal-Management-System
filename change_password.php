<?php
session_start();
    if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

    echo "<pre><a href='home.php'><h1>Home</a>  <a href='member_info.php'>View Profile</a>  <a href='change_password.php'>Change Password</a>   <a href='index.php'>Upload Prfile Picture</a>     <a href='logout.php'>Log Out</a>              ".$_SESSION['un']."</pre></pre>";
    //echo $_SESSION['un'];
    echo '<center><img src="14.jpg" width="600px" height="500px" alt="14"/></center>';


      
     echo '<form action="insert_password.php" method="post">
<h1>Change your password.</h1>
New password :
<input value="" type="Password" name="np" /><br>
Confirm password  : <input type="Password" name="cp" /><br>
<br>


<input type="submit" value="Confirm" /><br>

</form>';


      }
      else
      {
        echo "Login first";
          header("Location:http://localhost/project/login.php");

      }

?>