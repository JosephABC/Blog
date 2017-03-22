<!--MAIN PAGE FOR THE BLOG-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Blog</title>
<!--CSS FILES-->
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
    session_start();
    if (empty($_SESSION)){
      header("Location: loginpg.php");
    }else {
      $id = $_SESSION['id'];
      $name = $_SESSION['name'];
      $uid = $_SESSION['uid'];
    }
  ?>
  <div class="container">
<!--NAVIGATION BAR-->
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">BLOG</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
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
    </div>

    <div class='row'>
      <div class='col-md-8 blog-main' id='box-wrapper'>
        <?php
          include 'db.php';
          if (isset($_GET['page'])){
            $page = $_GET['page'];
          }else {
            $page = 1;
          }
          $resultsperpage = 3;
          $offset = ($page - 1)*$resultsperpage;
          $sql = "SELECT * FROM posts LIMIT $resultsperpage OFFSET $offset";
          $result = $conn->query($sql);
          $postdisp = "";
          while ($row=mysqli_fetch_array($result)){
            $postid = $row['postid'];
            $authorid = $row['author'];
            $retrieveuid = "SELECT uid FROM users WHERE id=$authorid";
            $authorresult = $conn->query($retrieveuid);
            while ($r=mysqli_fetch_array($authorresult)){
              $author = $r['uid'];
            }
            $time = $row['time'];
            $title = $row['title'];
            $post = $row['post'];
            if ($author==$uid){
              $correctuser = 'active';
            } else {
              $correctuser = 'disabled';
            }
            $dlocation = 'location.href="deletepost.php?postid='.$postid.'"';
            $elocation = 'location.href="editpost.php?postid='.$postid.'"';
            $postdisp .= "<div class='blog-post'>
                            <h2 class='blog-post-title'>".$title."</h2>
                              <div class='row'>
                                <div class='col-md-4'>
                                  <p class='blog-post-meta'>".$time." by ".$author."
                                </div>
                                <div class='col-md-1 col-md-offset-1'>
                                  <button class='btn btn-default ".$correctuser."' onclick='".$dlocation."' ".$correctuser.">DELETE POST</button>
                                </div>
                                <div class='col-md-1 col-md-offset-1'>
                                  <button class='btn btn-default ".$correctuser."' onclick='".$elocation."' ".$correctuser.">EDIT POST</button>
                                </div>
                              </div>
                                  </p>
                            <p>".$post."</p>
                          </div>";
          }
          echo $postdisp;
        ?>
      </div>

      <div class='col-md-3 col-md-offset-1 blog-sidebar' id='box-wrapper'>
        <div class='sidebar-module sidebar-module-insert'>
          <h4>Blogger Toolbox</h4>
          <form action="newpost.php" method="post">
            <button type="submit" class="btn btn-default active">NEW POST</button>
          </form>
        </div>
      </div>
    </div>

    <nav aria-label='Page navigation'>
      <ul class='pagination'>
        <?php
          $sql = "SELECT COUNT(postid) FROM posts";
          $rs_result = $conn->query($sql);
          $row = mysqli_fetch_row($rs_result);
          $total_records = $row[0];
          $total_pages = ceil($total_records / $resultsperpage);
          $pagLink = "";
          if ($page > $total_pages or $page < 1){
            header('location:index.php');
          }
          //Next few lines is to keep the page numbers displayed at a max of 11 pages
          if ($total_pages == 11){
            $firstpage = 1;
            $lastpage = $total_pages;
          }elseif ($total_pages<11){
            $firstpage = 1;
            $lastpage = $total_pages;
          }elseif ($total_pages>11){
            if ($page <= 5){
              $firstpage = 1;
              $lastpage = 11;
            }elseif ($page + 5 >=$total_pages){
              $firstpage = $total_pages - 10;
              $lastpage = $total_pages;
            }else{
              $firstpage = $page-5;
              $lastpage = $page+5;
            }
          }
          for ($i=$firstpage; $i<=$lastpage; $i++) {
                       $pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a><li>";
          };
          echo $pagLink;
        ?>
      </ul>
    </nav>





</body>
</html>
