<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="../../AAAmovie/css/loginbackground.css">

<script>
function loginValidate(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	
	if ( username == "" && password == ""){
		alert ("Invalid username and password !");
		return false;
	}
	else if ( username == "admin" && password == "admin"){
		alert ("Login successfully");
		window.location ="../../AAAmovie/admin_page.php";
		return false;
	}
	else
		alert ("Wrong username or password !");
		return false;
	
}
</script>
</head>
<body>
<?php include('../include/header.php'); ?>
<?php include ('../include/loginmenu.php');?>

<h2>Login</h2>
<article>
<form name="loginForm" method="post">

Username: <input type="text" id = "username" placeholder="Enter Username"><br><br>
Password: <input type="password" id = "password" placeholder="Enter Password"><br><br>
<input type = "button" value ="Login" onclick="loginValidate()">

</form>

</article>
</body>


</html>
