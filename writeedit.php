<?php
session_start();
include 'db.php';

$title = $_POST['title'];
$post = $_POST['post'];
$postid = $_POST['postid'];
$sql = "UPDATE posts SET title='$title', post='$post' WHERE postid= '$postid'";
$result = $conn->query($sql);

echo "<script type='text/javascript'>alert('Successfully EDITTED!'); document.location='index.php' </script>";
?>
