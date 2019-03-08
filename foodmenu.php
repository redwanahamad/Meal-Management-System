<style>
			#maindiv{
				height: 1000px;
				width: 100%;
				background-color:white;
			}
		</style>
		<body>
		<div id="maindiv">


<?php
session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   	echo "<pre><a href='admin.php'><h1>Home</a>	<a href='foodmenu.php'>Food Menu</a>   <a href='user_details.php'>Member Modification</a>	  <a href='reset.php'>Reset</a>   <a href='meal.php'>Meal Rate</a>   <a href='http://localhost/project/amount.php'>Add Amount</a>   <a href='logout.php'>Log Out</a>      Admin</pre>";
    
    echo "<br>";
   	echo '<center><img src="14.jpg" width="500px" height="400px" alt="14"/></center>';

  


    	}
    	else
      {
        echo "Login first";
          header("Location:http://localhost/project/login.php");

      }

$cred=array();
$xml=simplexml_load_file("food.xml") or die("Error: Cannot create object");
	foreach($xml as $st){
		$dar=array();
		$dar["u1"]=(string)$st->sat1;
		$dar["u2"]=(string)$st->sun1;
		$dar["u3"]=(string)$st->mon1;
		$dar["u4"]=(string)$st->thu1;
		$dar["u5"]=(string)$st->wed1;
		$dar["u6"]=(string)$st->thr1;
		$dar["u7"]=(string)$st->fri1;
		$cred[]=$dar;
	}
	echo "<center>";
	echo "<table border = 1>";
echo "<tr>";	
			    echo "<th>Saturday</th>";	
				echo "<th>Sunday</th>";
				echo "<th>Monday</th>";
				echo "<th>Tuesday</th>";
				echo "<th>Wednesday</th>";
				echo "<th>Thrusday</th>";
				echo "<th>Friday</th>";
			echo "</tr>";


	foreach($cred as $a){
		echo "<tr>";

		echo "<th>".$a["u1"]."</th>";
		echo "<th>".$a["u2"]."</th>";
		echo "<th>".$a["u3"]."</th>";
		echo "<th>".$a["u4"]."</th>";
		echo "<th>".$a["u5"]."</th>";
		echo "<th>".$a["u6"]."</th>";
		echo "<th>".$a["u7"]."</th>";
		echo "</tr>";

	//echo $a["u1"]." with  ".$a["u2"]."<br/>";
}
echo "</table";
echo "</center>";
  /*    $up;
	$xml=simplexml_load_file("food.xml") or die("Error: Cannot create object");
	foreach($xml as $st){
		$dar=array();
		$dar["u1"]=(string)$st->item1;
		$dar["u2"]=(string)$st->item2;
		$dar["u3"]=(string)$st->item3;
		$up[]=$dar;
	

		echo $up["u1"];


echo "<table border = 1>";
echo "<tr>";	
			echo "<th>Saturday</th>";	
				echo "<th>Sunday</th>";
				echo "<th>Monday</th>";
				echo "<th>Tuesday</th>";
				echo "<th>Wednesday</th>";
				echo "<th>Thrusday</th>";
				echo "<th>Friday</th>";
			echo "</tr>";
			



		
			echo "<tr>";
			echo "<td>".$up["u1"]."</td>";
			echo "<td> ".$up["u2"]."</td>";
			echo "<td> ".$up["u3"]."</td>";
			
			echo "</tr>";
			


}

			echo "</table>";
			*/


?>

</div>
<form>
			
		</form>
</body>




	
