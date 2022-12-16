<?php

include("data.php");

//perform validation 
$errormessage = "";
if ($_POST["title"] == "")
	$errormessage .= "Title is required<br />";

if ($_POST["author"] == "")
	$errormessage .= "Author is required<br />";

if ($_POST["genre"] == "")
	$errormessage .= "genre is required<br />";

if ($_POST["year"] == "")
	$errormessage .= "Year is required<br />";


if ($errormessage != "") {
	include("books_form.php");
	die();
}

//sanitize the user inputs
$id = intval($_POST["id"]);
$title = mysqli_real_escape_string($connection,$_POST["title"]);
$author= mysqli_real_escape_string($connection,$_POST["author"]);
$genre= mysqli_real_escape_string($connection,$_POST["genre"]);
$year= intval($_POST["year]);



if ($id == 0) { //this means it is a new record
	mysqli_query($connection,"insert into Books (title, author, genre, year) values ('$title','$author', '$genre', $year)") or die("Unable to run query");
} else { //otherwise it must be an existing record
	mysqli_query($connection,"update book title = '$title', author = '$author', genre = '$genre' year= $year where id = $id") or die("Unable to run query");

}


//redirect to the listing page
header("Location: books_list.php");

