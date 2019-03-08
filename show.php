<html>
<head>
<script>

function showHint() {
	xmlhttp = new XMLHttpRequest();
	 str=document.getElementById('mytext').value;
	document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="fetch.php?uname="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function show() {
	xmlhttp = new XMLHttpRequest();
	 str=document.getElementById('mytext').value;
	document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="fetchimage.php?uname="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
</head>
<body>
	<pre><a href='admin.php'><h1>Home</a>	<a href='all_user.php'>All User info</a>   <a href='show.php'>Search Member</a>	<a href='delete_user.php'>Delete User</a>   <a href='logout.php'>Log Out</a>                           Admin</pre>
    
    
   	

<p><b>Search Name:</b></p>
Your User Name : <input type="text" onkeyup="show()" id="mytext"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p id="txtHint"></p>
<br/>

</body>
</html>
