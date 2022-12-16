<?php
include("data.php");
include("header.php")

?> 
<head>
<h1> LOGIN PAGE </h1> 

<div name ="errors">
    <?php
    echo $errormessage;
    ?> 
</div>
</head>
<body> 
    <form action ="login_process.php" method="POST">
        Username: </br>
        <input type="text" name="user" value="<?php echo htmlspecialchars($_POST["user"], ENT_QUOTES);?>"/></br></br>
        Password: </br>
        <input type="password" name="pw" value="<?php echo htmlspecialchars($_POST["pw"], ENT_QUOTES);?>"/></br></br>

</br><input type type="submit" value="Log in">
<a href="register.php">create an account</a>
</body>

<?php
include("footer.php");
?>
