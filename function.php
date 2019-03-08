<?php
error_reporting(0);
session_start();


//print_r($_REQUEST);
function write(){
	$c=0;
	global $file;
if(strlen($_REQUEST["fname"])>0){
	/*$c=fwrite($file,"\r\n");
	$c+=fwrite($file,$_REQUEST["email"]);
	$c+=fwrite($file," ");
	$c+=fwrite($file,$_REQUEST["pass"]);
	//$c+=fwrite($file,md5($_REQUEST["pass"]));
	echo $c." characters added to file";*/

	$c+=fwrite($file, "\r\n");
	$c+=fwrite($file, $_REQUEST["fname"]);
	$c+=fwrite($file, " ");
	$c+=fwrite($file,  $_REQUEST["pass"]);
	
	header('location:http://localhost/project/login.php');
	//echo "Update successfully.";
	//echo $_REQUEST["fname"];

}
else{
	echo "0 characetrs written";
}


}

function read(){
	

	global $myfile;
	global $test;

	while($line=fgets($myfile)){
	$line=trim($line);
	
	$up=explode(" ",$line);
	
	$test[$up[0]]=$up[1];

	
}


/*
$uname=$_REQUEST["Username"];
$pass=$_REQUEST["Password"];
session_start();
$_SESSION["flag"]="";

foreach($test as $k=>$v){
	// echo $k." ".$v;
	// 	echo "<br>";
	if($uname==$k && $pass==$v){
		$_SESSION["flag"]="loginSuccess";

		header('location:home.php');
		//echo "<p>Valid User: ".$k."</p>";
	}
	else
	{

	}
}
       echo "Incorrect username or password.";
		
		//$a=$_REQUEST["Username"];
	*/
}

function loadFromMySQL($sql){
	global $auth;
	$conn = mysqli_connect("localhost", "root", "","info");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$auth=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$ar["uname"]=$row["uname"];
		$ar["fname"]=$row["fname"];
		$ar["lname"]=$row["lname"];
		$ar["email"]=$row["email"];
		$ar["dob"]=$row["dob"];
		$ar["phone"]=$row["phone"];
		$ar["gender"]=$row["gender"];
		$ar["password"]=$row["password"];
		$ar["meal"]=$row["meal"];
		$ar["amount"]=$row["amount"];
		$auth[]=$ar;
	}
	return $auth;
}

function deleteuser()
{
	$username = 'root';
$password = '';
$db = 'info';


$s=$_REQUEST['mn'];
//echo $s;

$auth=loadFromMySQL("select fname from student where fname = '$s' ");
foreach ($auth as $a) {

	$p= $a["fname"];
}

if (empty($a['fname'])) {
		//echo "no data found";
		echo "<script>alert('Member does not exist.');
	   window.location.href='delete_user.php';
	</script>";
	}
	else
	{
		$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM student WHERE fname = '$p'";

if ($conn->query($sql) === TRUE) {
    //echo " Member deleted.";
    echo "<script>alert('Member deleted.');
	   window.location.href='delete_user.php';
	</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
	}


	



}

function resetmealamount()
{
	$auth=loadFromMySQL("UPDATE student SET amount = '0' , meal= '0' ; ");
	
    //echo "Record updated successfully";
    echo "<script>alert('Successfully reset.');
	   window.location.href='reset.php';
	</script>";


}

function showalluser()
{

$auth=loadFromMySQL("select * from student where fname != 'ahamad' ");


echo "<center><table border = 1>";
echo "<tr>";	
			
				echo "<th>   First Name</th>";
				echo "<th>Email</th>";
				echo "<th>Mobile Number</th>";
				;
			echo "</tr>";
			

	foreach ($auth as $a) {



		
			echo "<tr>";
			echo "<td> ".$a["fname"]." </td>";
			echo "<td> ".$a["email"]."</td>";
			echo "<td> ".$a["phone"]."</td>";
			echo "</tr>";
			

}

			echo "</table></center>";
}


function showmealrate()
{
	
	$auth1=loadFromMySQL("select sum(amount)'amount' from student ");
foreach ($auth1 as $a) {

	$l= $a["amount"];
	//echo '$a["amount"]';

}


$auth1=loadFromMySQL("select sum(meal)'meal' from student ");
foreach ($auth1 as $b) {

	$k= $b["meal"];
	//echo '$a["amount"]';

}


$u=$l/$k;
echo "Per meal rate is ".round($u)." Tk";

}


function updatePassword()
{
	$username = 'root';
$password = '';
$db = 'info';


$s=$_REQUEST['np'];
$d=$_REQUEST['cp'];
//echo $s;

/*$auth=loadFromMySQL("select amount from student where fname = '$s' ");
foreach ($auth as $a) {

	$p= $a["amount"];
}
//insertAmount();






$k=$d+$p;
//echo $k;
*/
if($s == $d)
{
	$s=$_SESSION['un'];

$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE student SET password=$d WHERE fname='$s'";

if ($conn->query($sql) === TRUE) {
    //echo " your password successfully change";
    //echo "<script>alert('Successfully Change')</script>";
    echo "<script>alert('Successfully Change.');
	   window.location.href='change_password.php';
	</script>";
    
}
 else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

}
else
{
	echo "Confirm password does not match.";
}
//header('location:http://localhost/project/change_password.php');



}

function transaction()
{
	$t = $_SESSION["un"];

	$auth1=loadFromMySQL("select sum(amount)'amount' from student ");
foreach ($auth1 as $a) {

	$l= $a["amount"];
	//echo '$a["amount"]';

}



$auth1=loadFromMySQL("select sum(meal)'meal' from student ");
foreach ($auth1 as $b) {

	$k= $b["meal"];
	//echo '$a["amount"]';

}


$u=$l/$k;
//echo "Per meal rate is ".$u;

$auth1=loadFromMySQL("select meal from student where fname = '$t' ");
foreach ($auth1 as $b) {

	$p= $b["meal"];
	//echo '$a["amount"]';

}
$h = $p*$u;

echo $t." ,Your meal cost is  ".round($h)." TK";

$auth1=loadFromMySQL("select amount from student where fname = '$t' ");
foreach ($auth1 as $b) {

	$e= $b["amount"];
	//echo '$a["amount"]';

}

$x = $h-$e;
$_SESSION['tn']= $x;
//echo "you have to pay ".$x." TK";

if($x<1)
{
	echo " and you get ".round($x)." Tk";
}
else
{
	echo " and you have to pay ".round($x)." Tk";
}


}


function insertAmount()
{	$username = 'root';
$password = '';
$db = 'info';


$s=$_REQUEST['un'];
$d=$_REQUEST['am'];
//echo $s;

$auth=loadFromMySQL("select * from student where fname = '$s' ");
foreach ($auth as $a) {
	
	
		$p=$a["amount"];
		$r=$a["fname"];
    
}
//echo "$r";
if (empty($r) || empty($d)) {
		//echo "no data found";
		echo "<script>alert('User does not exist Or textbox can not be empty');
	   window.location.href='amount.php';
	</script>";
	}

else
{
	$k=$d+$p;
//echo $k;


$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE student SET amount=$k WHERE fname='$s'";

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    echo "<script>alert('Amount added.');
	   window.location.href='amount.php';
	</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
//header('location:http://localhost/project/insert.php');
}
}





function addmeal()
{
	global $auth;
	
	$username = 'root';
$password = '';
$db = 'info';



$s=$_SESSION['un'];
$d=$_REQUEST['m'];

//echo "show something.";
// echo $s;

$auth=loadFromMySQL("select meal from student where fname = '$s' ");
foreach ($auth as $a) {

	$p= $a["meal"];
}
//insertAmount();






$k=$d+$p;
//echo $k;


$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE student SET meal=$k WHERE fname='$s'";

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    echo "<script>alert('Your meal added.');
	   window.location.href='numberofmeal.php';
	</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

}


function insertIntoSQL()
{
	$username = 'root';
$password = '';
$db = 'info';

$t = $_SESSION["un"];
$b=$_REQUEST['fname'];

	$auth1=loadFromMySQL("select fname from student where fname = '$b'");
foreach ($auth1 as $a) {

	$fn= $a["fname"];
	//echo '$a["amount"]';

}
if($fn != $b)
{
	$s=$_REQUEST['uname'];
$d=$_REQUEST['fname'];
$f=$_REQUEST['lname'];
$g=$_REQUEST['email'];
$h=$_REQUEST['date']."-".$_REQUEST['month']."-".$_REQUEST['year'];
//echo $h;
$i=$_REQUEST['phone'];
$j=$_REQUEST['gender'];
$k=$_REQUEST['pass'];
$l= "0";
$z= "0";



$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");

$sql="insert into student (uname,fname,lname,email,dob,phone,gender,password,meal,amount) values ('$s','$d','$f','$g','$h','$i','$j','$k','$l','$z')";
//echo $sql;
$query=mysqli_query($conn,$sql);

echo "<script>alert('Successfully Register.');
	   window.location.href='login.php';
	</script>";

}
else
{
	echo "<script>alert('Your first name already exist.Try Different first name.');
	   window.location.href='register.php';
	</script>";

}




//header('location:http://localhost/project/login.php');

}





function autho()
{
	session_start();
global $auth;




$auth=loadFromMySQL("select * from student");
//print_r($auth);
//loadFromText();
//loadFromXML();
$u=$_REQUEST['Username'];
$_SESSION["un"]=$_REQUEST['Username'];

$p=$_REQUEST['Password'];
$k="ahamad";
$t=0;
// header('location:login.php');
//echo $u." ".$p;
//echo "<br>";

foreach($auth as $a){
	//echo $a["password"]."<br/>";
	if($u==$k && $p==$a["password"])
	{
		$t=1;
		$_SESSION["flag"]="loginSuccess";

		header('location:admin.php');

	}
	if($u==$a["fname"] && $p==$a["password"] && $u != $k){
		//echo "valid";
		$t=1;
		$_SESSION["flag"]="loginSuccess";

		header('location:home.php');
		//break;
	}
}
if($t==0){
	//echo "Invalid user name or password";
	echo "<script>alert('Invalid user name or password');
	   window.location.href='login.php';
	</script>";
	// header('location:login.php');
	
}

}
/*{
	global $test;
	
	//echo "I am from autho.";
	$uname=$_REQUEST["Username"];
$pass=$_REQUEST["Password"];

session_start();
$_SESSION["flag"]="";

foreach($test as $k=>$v){
	 //echo $k."or ".$v;

	// 	echo "<br>";
	if($uname==$k && $pass==$v){
		$_SESSION["flag"]="loginSuccess";

		header('location:home.php');
		//echo "<p>Valid User: ".$k."</p>";
	}
	else
	{

	}
	 
}
echo "Incorrect username or password.";
       
}*/






?>