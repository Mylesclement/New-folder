<?php

include("data.php");

//sanitize user input
$id = intval($_GET["id"]);

//execute the query
mysqli_query($connection,"delete from Books where id = $id");

//redirect to listing page
header("Location: books_list.php");


?>