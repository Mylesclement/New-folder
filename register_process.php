<?php
include("global.php");

//perform validation 
$errormessage = "";
if ($_POST["fullname"] == "")
	$errormessage .= "Fullname is required<br/>";
	$_SESSION['fullname'] = $fullname;

if ($_POST["username"] == "")
	$errormessage .= "Username is required<br/>";
	$_SESSION['username'] = $username;


if ($_POST["email"] == "")
	$errormessage .= "email is required <br/>";
	$_SESSION['email'] = $email;


if ($_POST["phonenumber"] == "")
	$errormessage .= "phone number is required <br/>";
	$_SESSION['phonenumber'] = $phonenumber;


if (strlen($_POST["password"]) < 3)
	$errormessage .= "password is required <br/>";

if ($_POST["password_confirm"] == "")
	$errormessage .= "confirm password!<br/>";

if ($_POST['password'] !== $_POST['password_confirm']) {
        die('Password and Confirm password should match!');   
     }
//check if email is on valid format 
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
}
else {
echo "Invalid Format";
}

//check if email already exists 
$e_check = mysqli_query($connection, "SELECT email FROM accounts WHERE '$email'");

//count the number of rows returned 
$num_rows = mysqli_num_rows($e_check);

if($num_rows > 0) {
	echo "Email already exist";
}
if ($errormessage != "") {
	include("register.php");
	die();
}

//redirect to the login page
header("Location: login.php");

//sanitize the user inputs
$fullname = mysqli_real_escape_string($connection,$_POST["fullname"]);
$username = mysqli_real_escape_string($connection,$_POST["username"]);
$email = mysqli_real_escape_string($connection,$_POST["email"]);
$phonenumber = intval($_POST["telephone"]);
$password = crypt($_POST["password"], "abcabcdhbashxcasnjxnasojs");




mysqli_query($connection, "INSERT into accounts (fullname, username, email, phonenumber, password) values ('$fullname','$username','$email', '$phonenumber', '$password')") or die("Unable to run query");


// Generating username using fullname 
$username = strtolower($fullname."_");
$check_username_query = mysqli_query($connection, "SELECT username FROM accounts WHERE username='$username'");





// random profile picture 
$rand = rand(1, 2); 

if ($rand == 1)
   $profile_pic = "assets/images/profile pic.jfif";
elseif($rand == 2)
   $profile_pic = "assets/images/profile girl.png";


$query = mysqli_query($connection, "INSERT into accounts (fullname, username, email, phonenumber, password) values ('$fullname','$username','$email', '$phonenumber', '$password', '$profile_pic', '0', '0', 'no', ',')");


//clear session variables after succesful login 
$_SESSION["fullname"] = "";
$_SESSION["email"] = "";
$_SESSION["phonenumber"] = "";



        ?>