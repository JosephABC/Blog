<!--FUNCTION FOR LOGIN-->
<?php
session_start();
include 'db.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'" ;
$result = $conn->query($sql);
//check if the user exist and password is correct
if (!$row = $result->fetch_assoc()) {
  echo "<script type='text/javascript'>alert('Username or Password Incorrect!'); document.location='loginpg.php'</script>";
} else {
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['uid'] = $row['uid'];
    header('location:index.php');
}

?>
