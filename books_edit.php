<?php
	include("data.php");


	//sanitize the value from the URL
	$id = intval($_GET["id"]);
	

	//retrieve the pet record from the database
	$res = mysqli_query($connection,"select * from pets where id = $id");
	$row = mysqli_fetch_assoc($res);

	//Assign to the same variables that are used to pre-load the form
	$_POST["id"] = $row["id"];
	$_POST["title"] = $row["name"];
	$_POST["author"] = $row["species"];
    $_POST["genre"] = $row["species"];
	$_POST["year"] = $row["year"];


	//show the form
	include("books_form.php");
