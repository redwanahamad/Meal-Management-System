<?php
$data=array();

require("db_rw.php");

loadFromMySQL("select * from student where fname='".$_GET["uname"]."'");
//loadFromMySQL("select * from photo");

foreach($data as $v){
	echo "<p>";
	if(file_exists($v["purl"]))
		echo "<img alt='not found' src='".$v["purl"]."' width='400px' height='400px'/>";
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
	echo "Photo : ";
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

	 //$s = echo "<script>document.getElementById('mytext').value</script>";


	echo "</p>";

}



//print_r($data);
?>