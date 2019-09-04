<?php
include('connectdb.php');
if (isset($_GET['del'])) {
	$id = $_GET['del'];
  $db=initDb();
	$sql=mysqli_query($db, "DELETE FROM movies WHERE movie_id=$id");
	$_SESSION['message'] = 'Deleted!';
	header('location: delmovie.php');
  exit();
}
?>
