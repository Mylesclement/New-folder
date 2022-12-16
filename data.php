<?php

// create a database connction 
$connection = mysqli_connect("localhost", "root", "root" "Books")
// Check connection
if ($connection->connect_error) {
	die("Unable to connect to database: "
		. $connection->connect_error);

session_start();
}

$sql = "CREATE DATABASE BOOKS";
if ($connection->query($sql) === TRUE) {
	echo "Books";
} else {
	echo "Error: " . $connection->error;
}

// Closing connection
$connection->close();
?>
