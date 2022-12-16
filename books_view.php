<?php

include("data.php");
include("header.php");

//sanitize user input
$id = intval($_GET["id"]);

//get the record of the pet
$res = mysqli_query($connection, "select * from books where id = $id");
$row = mysqli_fetch_assoc($res);

?>

<h3>View Books!</h3>
<br />

Title: <?php echo $row["title"];?><br />
Author: <?php echo $row["author"];?><br />
Genre: <?php echo $row["genre"];?><br />
Year: <?php echo $row["year"];?><br /><br />
<a href="books_list.php">Back to Listing</a>


<?php include("footer.php"); ?>