<?php
if (session_id() == '') {
  session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GreenWash</title>
  <link rel="stylesheet" type="text/css" href="./css/animate.css">
  <!-- Bootstrap -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/login.css" rel="stylesheet">
  <link rel="preload" href="webfonts/fa-solid-900.woff2" as="font" crossorigin>
  <link rel="preload" href="fonts/JosefinSans-Light.ttf" as="font" crossorigin>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
  @font-face {
    font-family: Josefin;
    src: url(./fonts/JosefinSans-Light.ttf);
  }

  body {
    font-family: "Josefin", Verdana, Geneva, sans-serif;
  }
</style>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in to Greenwash</h1>
            <form id="loginform" action="">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="email@example.com" value="">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="enter your passsword" value="">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
            </form>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="signup.php" class="text-reset">Register here</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="images/frontpage.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="./js/jquery-3.2.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/jquery.validate.min.js"></script>
  <script src="./js/valid_login.js"></script>
</body>

</html>