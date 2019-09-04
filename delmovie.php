<html>
<head>
<link rel="stylesheet" type="text/css" href="../AAAmovie/css/displaytable.css">
<link rel="stylesheet" type="text/css" href="../AAAmovie/css/delmoviebackground.css">
<script>
function confirm_click()
{
	return confirm("Are you sure ?");
}
</script>
</head>
<body>
<?php
include('connectdb.php');
$db=initDb();
$results = mysqli_query($db, "SELECT * FROM movies"); ?>
<body>
<?php include ('include/operationmenu.php');?>

<h1>Movies List</h1>
<table id="myTable">
	<thead>
		<tr>
			<th>Poster</th>
    		<th>Title</th>
			<th>Year</th>
			<th>Genres</th>
			<th>Synopsis</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>

	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><img src=<?php echo $row['image_name']; ?>  width="120" height="130"></td>
    			<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['genre']; ?></td>
				<td><?php echo $row['description']; ?></td>
			<td>
				<a title="Delete Movie" onclick="return confirm_click();"href="../../AAAmovie/delete.php?del=<?php echo $row['movie_id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<?php include('message.php');?>

</body>
</html>