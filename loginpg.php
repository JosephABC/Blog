
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Login Page for Blog</title>
<!--CSS FILES-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/extras.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <!--PAGE HEADER-->
  <div class="container">
    <div class="jumbotron" id="box-wrapper">
      <h1>WELCOME TO THE BLOG</h1>
    </div>
  </div>
<!--LOGIN FOR EXISTING USERS-->
  <div class="row">
    <div class="col-md-6">
      <h2 class="text-center"><strong>Already have an account?</strong></h2>
      <h3 class="text-center"><strong>LOGIN PLEASE</strong></h3>
      <form action="login.php" method="post" class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <label for="uid">Username</label>
          <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default active">LOGIN</button>
      </form>
      <form action="loginasguest.php" method="post" class="col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-default active">LOGIN AS GUEST</button>
      </form>
    </div>
<!--REGISTERATION OF NEW USERS-->
    <div class="col-md-6">
      <h2 class="text-center"><strong>Don't have an account?</strong></h2>
      <h3 class="text-center"><strong>REGISTER NOW!!</strong></h3>
      <form action="register.php" method="post" class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="uid">Username</label>
          <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default active">REGISTER</button>
      </form>
    </div>
  </div>
</body>
</html>
