<?php
session_start();
unset($_SESSION["flag"]);
session_destroy();
header("Location:http://localhost/project/login.php");
?>