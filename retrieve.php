<html>
<head>

</head>
<body>
  <?php
  session_start();
  include 'db.php';
  $strSQL = "SELECT * FROM posts ORDER BY postid";
  $rs = $conn->query($strSQL);
  while($row = mysqli_fetch_array($rs)){
    $postid = $row['postid'];
    $author = $row['author'];
    $title = $row['title'];
    $post = $row['post'];


  }


  ?>
</body>
</html>
