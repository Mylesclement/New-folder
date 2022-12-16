<?php
include("header.php");
session_destroy();

?>
<html>
<body>
<div class="user_deatils column">
    <a href="a'> <img src="<?php echo $user['profile pic.jfif'];?>"> </a>

<div class="user_details_left_right">
    <a href="">


<?php
echo $user['fullname'];

?>
</a>
<br>
<?php echo "posts:" . $user['num_posts'];
echo "likes:" . $user['num_likes']; 
?>

</div>


</div>
</body>
</html>


