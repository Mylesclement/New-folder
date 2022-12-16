<?php
$connection = mysqli_connect("localhost", "root", "", "accounts") or die ("unable to connect to a database");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
                                                        
session_start();
?>


