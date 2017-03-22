<?php
session_start();
include 'db.php';
if (empty($_SESSION)){
  header("Location: loginpg.php");
}else {
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  $uid = $_SESSION['uid'];
}
if (isset($_GET['postid'])){
  $postid = $_GET['postid'];
}
$sql = "SELECT * FROM posts WHERE postid = '$postid' AND author = '$id' ";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()){
  echo "<script type='text/javascript'>alert('ERROR!'); document.location='index.php'</script>";
}else {
  $sql = "DELETE FROM posts WHERE postid=$postid";
  $result = $conn->query($sql);
  echo "<script type='text/javascript'>alert('Post DELETED'); document.location='index.php'</script>";
}

?>
