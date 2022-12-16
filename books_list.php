<?php
	include("data.php");
	include("header.php");
?>



<h1>Books List</h1>


<a href="books_form.php">Add new Books</a><br /><br />

<?php
	//query the database for all pets
	$res = mysqli_query($connection,"select * from books order by title");

	while ($row = mysqli_fetch_assoc($res)) {

		//repeat below once for every record in table, showing links that include the ID
		?>
		<a href="books_view.php?id=<?php echo $row["id"];?>"><?php echo $row["title"];?></a> 
		<a href="books_edit.php?id=<?php echo $row["id"];?>">edit</a> 
		<a href="books_delete.php?id=<?php echo $row["id"];?>">delete</a> <br />
	
	<?php
	}
	include("footer.php");
?>