<?php
session_start();
include 'db.php';

$title = $_POST['title'];
$post = $_POST['post'];
$author = $_SESSION['id'];
$sql = "INSERT into posts(author, title, post) values('$author','$title','$post')";
$result = $conn->query($sql);

echo "<script type='text/javascript'>alert('Successfully posted!'); document.location='index.php' </script>";
?>
