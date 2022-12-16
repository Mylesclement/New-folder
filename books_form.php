<?php

include("header.php");
?>

<span style="color: red;">
	<?php echo $errormessage; ?>
</span>

	<form action="books_process.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $_POST["id"];?>">

		Title: <input type="text" name="title" value="<?php echo htmlspecialchars($_POST["title"], ENT_QUOTES);?>"><br />
		Author : <input type="text" name="author" value="<?php echo htmlspecialchars($_POST["author"], ENT_QUOTES);?>"><br />
        Genre: <input type="text" name="genre" value="<?php echo htmlspecialchars($_POST["genre"], ENT_QUOTES);?>"><br />
		Year: <input type="text" name="year" value="<?php echo htmlspecialchars($_POST["year"], ENT_QUOTES);?>"><br />




		<input type="submit" value="Save">
	</form>




<?php
include("footer.php");
?>