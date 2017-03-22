<?php
include 'db.php';

$name = $_POST["name"];
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];

$sql = "SELECT * FROM users WHERE uid='$uid'" ;
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
  $sql = "INSERT into users(name, uid, pwd) values('$name','$uid','$pwd')";
  $result = $conn->query($sql);
  $msg = 'Successful Registration! Please Proceed to LOGIN';
} else {
    $msg = 'Username has been used! or Account already exists! ';
}

echo "<script type='text/javascript'>alert('$msg'); document.location='loginpg.php'</script>";


?>
