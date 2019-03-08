<script>

function validate1(){
	a=document.fm1.uname.value;
	b=document.fm1.fname.value;
	c=document.fm1.lname.value;
	d=document.fm1.email.value;
	e=document.fm1.date.value;
	//console.log(""+e);
	f=document.fm1.month.value;
	g=document.fm1.year.value;
	console.log("g="+g);
	h=document.fm1.phone.value;
	i=document.fm1.gender.value;
	//console.log(""+i);
	j=document.fm1.pass.value;
	console.log("j="+j);
	k=document.fm1.cpass.value;
	console.log("k="+k);
	//h = false;
	y=0;
	validate=true;

	//v=document.forms[0].elements[1].value;
	//alert(v);
	if(a.length<1){
		document.getElementById("msg0").style.color="red";
		document.getElementById("msg0").innerHTML="Username name can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg0").style.color="red";
		document.getElementById("msg0").innerHTML="";
		//y=1;

		}
	 if(b.length<1){
		document.getElementById("msg1").style.color="red";
		document.getElementById("msg1").innerHTML="First name can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg1").style.color="red";
		document.getElementById("msg1").innerHTML="";
		//y=y+1;

		}
		if(c.length<1){
		document.getElementById("msg2").style.color="red";
		document.getElementById("msg2").innerHTML="Last name can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg2").style.color="red";
		document.getElementById("msg2").innerHTML="";
		//y=y+1;

		}
		if(d.length<1){
		document.getElementById("msg3").style.color="red";
		document.getElementById("msg3").innerHTML="Email can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg3").style.color="red";
		document.getElementById("msg3").innerHTML="";
		//y=y+1;

		}

		if(e<1 ){
		document.getElementById("msg4").style.color="red";
		document.getElementById("msg4").innerHTML="Date of Birth can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg4").style.color="red";
		document.getElementById("msg4").innerHTML="";
		//y=y+1;

		}
		if(f<1){
		document.getElementById("msg4").style.color="red";
		document.getElementById("msg4").innerHTML="Date of Birth can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg4").style.color="red";
		document.getElementById("msg4").innerHTML="";
		//y=y+1;

		}
		if(g<1){
		document.getElementById("msg4").style.color="red";
		document.getElementById("msg4").innerHTML="Date of Birth can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg4").style.color="red";
		document.getElementById("msg4").innerHTML="";
		//y=y+1;

		}
		if(h.length<1){
		document.getElementById("msg7").style.color="red";
		document.getElementById("msg7").innerHTML="Phone can not be empty.";
		return false;
		
		}
		else
		{
			document.getElementById("msg7").style.color="red";
		document.getElementById("msg7").innerHTML="";
		//y=y+1;

		}
		if(i.length<1){
			
		document.getElementById("msg8").style.color="red";
		document.getElementById("msg8").innerHTML="Gender can not be empty.";
		return false;
		
		}
		else
		{

			document.getElementById("msg8").style.color="red";
		document.getElementById("msg8").innerHTML="";
		//y=y+1;

		}
		if(j.length<4){
		document.getElementById("msg9").style.color="red";
		document.getElementById("msg9").innerHTML="Password can not be empty and should be more then 4 character.";
		return false;
		
		}
		else
		{
			document.getElementById("msg9").style.color="red";
		document.getElementById("msg9").innerHTML="";
		//y=y+1;

		}
		if(k.length<4){
		document.getElementById("msg10").style.color="red";
		document.getElementById("msg10").innerHTML="Confirm Password can not be empty and should be more then 4 character. ";
		return false;
		
		}
		else
		{
			document.getElementById("msg10").style.color="red";
		document.getElementById("msg10").innerHTML="";
		//if(y=8)
			

		}
		if(j==k)
		{
			return true;
		}
		else
		{
			document.getElementById("msg10").style.color="red";
		document.getElementById("msg10").innerHTML="Password and Confirm password does not match. ";
		return false;

		}

		return true;
	 

		
	
	
	/*else{
		
		//alert("invalid data");
		return true;
	}
*/

}
</script>
<html>
	<head>
		<style>
			#maindiv{
				background-image: url("20.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 900px; /* You must set a specified height */
  background-position: ; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
			}
			
			

				
			
	        </style>
	</head>
<body>
		<form  action="register_validation.php" method="post" name = "fm1">
			<center><div id = "maindiv">
				
					
						
							<h1 style="color:navy;"><pre> 


Register an account<br/></pre></h1>
					      </br>
						<div id = "trans3">	
						</div>
						<h2 style="color:black;"><pre> User name : <input type="text" name="uname"  /></h2><span id="msg0"></span></pre>
						<h2 style="color:black"><pre> First name : <input type="text" name="fname"  /></h2><span id="msg1"></span></pre>
					    <h2 style="color:black"><pre> Last name : <input type="text" name="lname"  /></h2><span id="msg2"></span></pre>
                        <h2 style="color:black;"><pre> Email Address : <input type="text" name="email"  /></h2><span id="msg3"></span></pre>
                         <h3 style="color: black;">Date of Birth :  	
						  <select name="date">
						   <option value="0">Date</option>
						   <option value="01">1</option>
						   <option value="02">2</option>
						   <option value="03">3</option>
						   <option value="04">4</option>
						   <option value="05">5</option>
						   <option value="06">6</option>
						   <option value="07">7</option>
						   <option value="08">8</option>
						   <option value="09">9</option>
						   <option value="10">9</option>
						   </select>  
						  <select name="month">
						   <option value="00">Month</option>
						   <option value="01">Jan</option>
						   <option value="02">Feb</option>
						   <option value="03">Mar</option>
						   <option value="04">Apr</option>
						   <option value="05">May</option>
						   <option value="06">Jun</option>
						   </select>
						  
	   
						  <select name="year">
						  	<option value="00">Year</option>
						   <option value="1994">1994</option>
						   <option value="1995">1995</option>
						   <option value="1996">1996</option>
						   <option value="1997">1997</option>
						   <option value="1998">1998</option>
						   <option value="1999">1999</option>
						   </select>
						   </br>
						   </h3><span id="msg4"></span>
						   <h2 style="color:black;"><pre> Phone number : <input type="number" name="phone"  /></h2><span id="msg7"></span></pre>


						 	<h3 style="color:black;"> Gender : 
						<input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Other 
                        <br>
                        </h3><span id="msg8"></span>



						<h2 style="color:black;"><pre> Password : <input type="Password" name="pass"  /></h2><span id="msg9"></span></pre>
						<h2 style="color:black;"><pre> Confirm Password : <input type="Password" name="cpass"   /><br></h2><span id="msg10"></span></pre><br>

						<input  type="submit" onclick="return validate1()" value="Register"   ><br><br>

						<h2><a href="http://localhost/project/login.php">Login page</a></h2><br>

						
						

				
				
					
				
				

					
				
				
			</div></center>


		</form>
</body>