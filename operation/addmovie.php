<html>
<head>
<link rel="stylesheet" type="text/css" href="../../AAAmovie/css/addmoviebackground.css">
<script>

function validateForm() {
    var x = document.forms["addform"]["title"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	
	 var x1 = document.forms["addform"]["year"].value;
    if (x1 == "") {
        alert("Year must be filled out");
        return false;
    }
	
	var x2 = document.forms["addform"]["genres"].value;
    if (x2 == "") {
        alert("Genres must be filled out");
        return false;
    }
	
	var x3 = document.forms["addform"]["description"].value;
    if (x3 == "") {
        alert("Description must be filled out");
        return false;
    }
}
</script>
</head>

<body>
<?php include ('../include/operationmenu.php');?>

<h1>Add Movie</h1>
<body>
<form name= "addform" onsubmit="return validateForm()" action="addtodb.php"  method="post">
Title 	: <input type = "text" name="moviename"><br><br>
Years			: <input type = "text" name="movieyears"><br><br>
Genres 			: <select name="genres">
	<option value=""></option>
	<option value="action">Action</option>
	<option value="adventure">Adventure</option>
    <option value="comedy">Comedy</option>
	<option value="crime">Crime</option>
	<option value="fantasy">Fantasy</option>
    <option value="thriller">Thriller</option>
    <option value="mystery">Mystery</option>
	<option value="others">Others</option>
  </select><br><br>
Synopsis 	: <br><textarea name="moviesynopsis" rows="10" cols="25"></textarea><br><br>
Movie Image	: <input type = "file" name="moviepic" accept=""><br><br>

<input type="submit" value="Add" style="margin-left:180px">

</form>
</body>
</html>