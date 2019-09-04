<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../AAAmovie/css/searchbar.css">
<link rel="stylesheet" type="text/css" href="../AAAmovie/css/displaytable.css">
<link rel="stylesheet" type="text/css" href="../AAAmovie/css/background.css">
</head>

<body>
<?php include('include/header.php'); ?>
<?php include ('../AAAmovie/include/adminmenu.php');?>

<?php
    include('connectdb.php');
    $db=initDb();
	$results = mysqli_query($db, "SELECT * FROM movies"); ?>

<h1>Movies List</br></br>
    <input type="text" name= "search" id="myInput" onkeyup="myFunction()" placeholder="Search for movie(s)..">
    
</div>
    </h1>
    <table id="myTable">
    	<thead>
    		<tr>
    			<th>Poster</th>
    			<th>Title</th>
          <th>Year</th>
          <th>Genres</th>
          <th>Synopsis</th>
    		</tr>
    	</thead>
      <tbody>
    	<?php while ($row = mysqli_fetch_array($results)) { ?>
    		<tr>
				<td><img src=<?php echo $row['image_name']; ?>  width="120" height="130"></td>
    			<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['genre']; ?></td>
				<td><?php echo $row['description']; ?></td>
    		</tr>
    	<?php } ?>
      </tbody>
    </table>
    <? include ('message.php');?>
    </body>
  </div>
  
  <script>
  function myFunction() {
        var searchText = document.getElementById('myInput').value;
        var targetTable = document.getElementById('myTable');
        var targetTableColCount;
        //Loop through table rows
        for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
            var rowData = '';
            //Get column count from header row
            if (rowIndex == 0) {
               targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
               continue; //do not execute further code for header row.
            }
            //Process data rows. (rowIndex >= 1)
            for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
                rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
            }
            //If search term is not found in row data
            //then hide the row, else show
            if (rowData.indexOf(searchText) == -1){
                targetTable.rows.item(rowIndex).style.display = 'none';
            }
            else
                targetTable.rows.item(rowIndex).style.display = 'table-row';
        }
    }
  </script>


</body>

</html>