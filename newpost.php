<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>NEW POST</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/extras.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include 'db.php';
    session_start();
    if (empty($_SESSION)){
      header("Location: loginpg.php");
    }elseif($_SESSION['uid']=='Guest'){
      echo "<script type='text/javascript'>alert('As a Guest, you are not allowed to POST! Please LOGOUT and REGISTER if you wish to POST'); document.location='index.php'</script>";
    }else {
      $id = $_SESSION['id'];
      $name = $_SESSION['name'];
      $uid = $_SESSION['uid'];
    }
  ?>
  <div class="container">

    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">BLOG</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "$uid" ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
    </nav>

    <div class="page-header text-center" id="box-wrapper">
      <h1><strong>Blog</strong></h1>
      <p><strong>Feel. Write. Read.</strong></p>
      <p></p>
      <h2>NEW POST</h2>
    </div>
    <div class='row'>
      <div class='col-md-8 col-md-offset-2' id='box-wrapper'>
        <p></p>
        <form class="form-horizontal" action="write.php" method="POST">
          <div class="form-group">
            <label for="title" class="col-md-2 control-label">TITLE</label>
            <div class="col-md-10">
              <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
          </div>
          <div class="form-group">
            <label for "post" class="col-md-2 control-label">POST</label>
            <div class="col-md-10">
              <textarea class="form-control" rows="10" id='post' name="post"></textarea>
            </div>
          </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">POST</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</body>
</html>
