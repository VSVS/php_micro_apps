<?php

?><!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title><?php echo  $_POST['email]' . "'s "?>Secret Diary</title>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap theme -->
      <link href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="theme.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">
         .centerT{
         text-align:center;
         }
         .marginB20{
         margin-bottom: 20px;
         }
         body{
         background: url('http://art.ngfiles.com/images/240000/240063_jess-the-dragoon_peaceful-meadow-at-sunset.jpg');
         background-repeat:no-repeat;
         background-size: cover;
         background-position: center;
         }
      </style>
   </head>
   <body role="document">
      <!-- Fixed navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Secret Diary</a>
            </div>
            <div class="navbar-collapse collapse">
               <form class="navbar-form navbar-right" role="search" method="post">
                  <div class="form-group">
                     <input type="email" class="form-control" placeholder="email" name="loginemail" value="<?php echo addslashes($_POST['loginemail'])?>"/>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="password" name="loginpassword" value="<?php echo addslashes($_POST['loginpassword'])?>"/>
                  </div>
                  <input type="submit" value="Log In" name="submit" class="btn btn-success">
               </form>
               <!-- form end-->
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
      <!--main content-->
      <div class="page-header jumbotron" style="max-width:600px; margin:100px auto; background-color:rgba(255,255,255,0.5);border-radius: 10px;border-style: none;">
         <h1 class="centerT">
            Secret Diary
         </h1>
         <p class="centerT">
            New Users feel free to sign up below.
         </p>
         <?php

         if($error){
          echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
         }


         ?>
         <form class="" methos="post" role="form">
            <div class="input-group input-group-lg" style="margin-bottom:20px">
               <span class="input-group-addon glyphicon glyphicon-envelope" style="top:0px;"></span>
               <input type="email" class="form-control input-group" placeholder="user@example.com" name="email" value="<?php echo addslashes($_POST['email'])?>"/>
            </div>
            <div class="input-group input-group-lg">
               <span class="input-group-addon glyphicon glyphicon-lock" style="top: 0px;"></span>
               <input type="password" class="form-control input-group" placeholder="password" name="password" value="<?php echo addslashes($_POST['password'])?>"/>
            </div>
            <div class="input-group input-group-lg pager">
               <input type="submit" name="submit" class="form-control btn-success" value="Sign Up" placeholder="sign up">
            </div>
         </form>
      </div>
      <!-- /container -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
      <script src="bootstrap-3.2.0-dist/js/docs.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>