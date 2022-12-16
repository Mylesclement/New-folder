<?php

include("data.php")

if ($_SESSION["userid"] == ""){

    header("Location: books_form.php")
    //Default file loaded when you go to a directory, redirect to books_list.php

    header("Location: books_list.php");

}

/
?>