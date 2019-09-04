<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../AAAmovie/css/indexbackground.css">
<link rel="stylesheet" type="text/css" href="../AAAmovie/css/index.css">

</head>
<script>
function directadminpage(){
	window.location ="../../AAAmovie/login/admin_login_page.php";
}

function directcustomerpage(){
	window.location ="../../AAAmovie/customer_page.php";
}
</script>
<body>

<h1>AAA Movie Library</h1>
<button class="button" onclick="return directadminpage()" style="margin:100px;margin-top:100px;margin-right:120px;margin-left:250"><span>Admin</span></button>
<button onclick="return directcustomerpage()" class ="button" style="margin-left:200px"><span>Customer</span></button>

</body>
</html>