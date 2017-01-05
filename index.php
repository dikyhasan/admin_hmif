<!DOCTYPE html>
<html lang="en">
<head>
    <!-- URL Theme Color untuk Chrome, Firefox OS, Opera dan Vivaldi -->
    <meta name="theme-color" content="#dbf948" />
    <!-- URL Theme Color untuk Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#dbf948" />
    <!-- URL Theme Color untuk iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#dbf948" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>HMIF &rsaquo; Administrator</title>
    <link href="" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/website-hmif/wp-admin/asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="http://localhost/website-hmif/wp-admin/asset/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
    <?php
        $auth = isset($_GET['auth']) ? isset($_GET['auth']): '';
        $out = '';
        switch ($auth) {
          case 'QPeqieqsS':
              $out = '
                <center>
                <p style="color:#fff;border:#993366 solid 2px;padding:5px;background-color:#993366;font-size:10pt;">
                  <i class="glyphicon glyphicon-remove"></i>&nbsp; <b>ERROR :</b> Invalid username or password !
                </p>
                </center>
              ';
            break;
          default:
            # code...
            break;
        }
     ?>
    <div class="wrapper">
        <form method="POST" action="redirect.php" class="form-signin">
          <img src="http://localhost/website-hmif/wp-admin/asset/img/logo-HMIF.jpg" width="90" height="90" align="left" alt="Logo HMIF UNIKOM" style="margin-top:20px;padding-bottom:5px;">
          <h2 class="form-signin-heading identify text-center">HMIF<br><small class="identify">Admnistrator</small></h2>
          <br>
          <?php echo $out; ?>
            <input type="text" class="form-control" name="username" placeholder="Username" required="">
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <br>
          <p align="right"><a href="lost-password.php" class="color"><b>Forgot Password?</b></a></p>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="masuk">Login</button>
        </form>
        <br>
          <center>
            <font color="#999">
              <p><a href="" class="color"><b>Website Utama</b></a><br>
                <small>
                All rights reserved &copy; <?php echo date("Y"); ?> HMIF UNIKOM.                    </p>
                    </font>
                </small>
                </center>
    </div>
  </body>
</html>
