<!--LOGIN AS GUEST USER FOR PEOPLE WHO WANT TO BROWSE WITHOUT POSTING-->
<?php
session_start();
include 'db.php';

$uid = "Guest";
$pwd = "";

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'" ;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_SESSION['id'] = $row['id'];
$_SESSION['name'] = $row['name'];
$_SESSION['uid'] = $row['uid'];
header("Location: index.php");
?>
