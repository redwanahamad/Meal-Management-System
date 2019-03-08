<html>
<head>
<?php
require("meal_lib.php");
$data=array();
loadFromMySQL("select * from day");?>
<script>
xmlhttp = new XMLHttpRequest();
flag="";
function clearCombo(id){
	var list=document.getElementById(id);
	while (list.firstChild) {
		list.removeChild(list.firstChild);
	}
}
function loadJSONToCombo(id,jsn){
	var resp=JSON.parse(jsn);
	var combo = document.getElementById(id);
	for(i=0;i<resp.length;i++){
		var option = document.createElement("option");
		//option.text = resp[i].item1;
		option.text = resp[i].item1;

		option.value = resp[i].did;
		option2 = document.createElement("option");
		//option.text = resp[i].item1;
		option2.text = resp[i].item2;

		option2.value = resp[i].did;
		combo.add(option); 
		combo.add(option2); 
	}
}
function loadDistrict(v) {
	str=v.value;
	flag="loadDistrict";
	clearCombo("districtList");
	document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			m=document.getElementById("txtHint");
			loadJSONToCombo("districtList",xmlhttp.responseText);
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="meal_fetch.php";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("flag="+flag+"&did="+str);
}
</script>
</head>
<body>
	<?php
	session_start();
   if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess"){

   	echo "<pre><a href='home.php'><h1>Home</a>	<a href='show_meal.php'>Food Menu</a>   <a href='mealmember.php'>Meal Rate</a>  <a href='transaction_cost.php'>Transaction</a>  <a href='http://localhost/project/numberofmeal.php'>Add meal</a>  <a href='member_profile.php'>Profile</a>  <a href='http://localhost/project/about.html'>About</a>   <a href='logout.php'>Log Out</a>         ".$_SESSION['un']."</pre></pre>";
   	echo '<center><img src="14.jpg" width="600px" height="500px" alt="14"/></center>';


    	}
    	else
    	{
    		echo "Login first";
	        header("Location:http://localhost/project/login.php");

    	}

?>
<p><b>Select your Day:</p>
Day : 
<select id="divisionList" onchange="loadDistrict(this)"><?php
foreach($data as $r){?>
	<option value="<?php echo $r["did"];?>">
	<?php echo $r["day_name"];?>
	</option>	<?php
}?>
</select>
 <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<select id="districtList" name="districtList">
</select>


</body>
</html>