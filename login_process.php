<?php
include("data.php");

$errormessage ="";

$user = mysqli_real_escape_string($connection, $_POST["user"]); 
$pw = password_hash($_POST["pw"], PASSWORD_BCRYPT, ["task"=>"thisistaskstaskedtaskingtask"]);

$res = mysqli_query($connection, "select * from users where =\"". $user . "\" and password =\"" . $pw. "\"");
$row = mysqli_fetch_assoc($res);

if (!$row) {
    $errormessage = "your username or password is incorrect.</br></br>
    please create an account at <a href=\"register.php\"></a></br></br>"; 

    include("login.php"); 
}
  else{ 
    $_SESSION["userid"]= $row["id"];

    include("books_list.php");
 