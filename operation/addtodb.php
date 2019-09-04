<?php
var_dump($_POST);
$name = $_POST['moviename'];
$years = $_POST['movieyears'];
$genres = $_POST['genres'];
$synopsis = $_POST['moviesynopsis'];
$pic = $_POST['moviepic'];

include('../connectdb.php');
$db=initDb();
$results = mysqli_query($db, "INSERT INTO movies(title, year, genre,image_name, description) VALUES
('$name',$years ,'$genres','pic/$pic','$synopsis');");

header('location: ../admin_page.php');
?>