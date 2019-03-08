<script>

function validate(){
	v=document.fm.Username.value;
	u=document.fm.Password.value;
	h=false;
	x=0;

	//v=document.forms[0].elements[1].value;
	//alert(v);
	if(v.length<1){
		document.getElementById("msg0").style.color="red";
		document.getElementById("msg0").innerHTML="Username name can not be empty.";
		//return false;
		h=false;

		
		}
		else
		{
			document.getElementById("msg0").style.color="red";
		document.getElementById("msg0").innerHTML="";
		//return false;
		x=1;
		}
	 if(u.length<1){
		document.getElementById("msg1").style.color="red";
		document.getElementById("msg1").innerHTML="Password can not be empty.";
		//dreturn false;
		h=false;
		}
		else
		{
			document.getElementById("msg1").style.color="red";
		document.getElementById("msg1").innerHTML="";
		if(x==1)
		  h=true;
		}
	 

		
	
	
	/*else{
		
		//alert("invalid data");
		return true;
	}*/
	return h;


}
</script>

<html>
<head>
	<style>
			#maindiv{
				background-image: url("20.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 700px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
			}
			
			</style>
	
</head>
<body >

	<form action="login_validation.php" method="post" name = "fm">
		<center><div id="maindiv">
			<br><br><h1 style="color:black">Login</h1>
			<h2 style="color: black"><pre>Username/ Email Address </pre></h2>
						<input type="text" name="Username"  /> <br>   <span id="msg0"></span>
						<h2 style="color: black"><pre>Password</pre></h2>
						<input type="Password" name="Password"  /><br><span id="msg1"></span></br>
						
						<input  type="submit" onclick="return validate()" value="Login"  ><br>
						<h3><a href="http://localhost/project/register.php">Register an account</a></h3>
						
						<h3><a href="http://www.aiub.edu/">Forgot Password ?</a></h3>
						


			
		</div></center>
		
		
	</form>


</body>
</html>