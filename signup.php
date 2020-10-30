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
    <link href="./css/signup.css" rel="stylesheet">
    <link rel="preload" href="webfonts/fa-solid-900.woff2" as="font" crossorigin>
    <link rel="preload" href="fonts/JosefinSans-Light.ttf" as="font" crossorigin>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
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
                        <h1 class="login-title">Sign up to Greenwash</h1>
                        <form id="signupform" action="">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="Yash">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Deshmukh">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No.</label>
                                <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="7276555444">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="email@example.com">
                            </div>

                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="enter your passsword">
                            </div>
                            <input name="signup" id="signup" class="btn btn-block login-btn" type="submit" value="Register">

                            <p class="login-wrapper-footer-text">Already have an account? <a href="login.php" class="text-reset">Login here</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <picture>
                        <source srcset="images/frontpage.webp" type="image/webp">
                        <img src="images/frontpage.jpg" alt="Signup image" class="login-img" />
                    </picture>

                </div>
            </div>
        </div>
    </main>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/jquery.validate.min.js"></script>
    <!-- <script src="js/signup.js"></script> -->
    <script src="./js/valid_signup.js"></script>
</body>

</html>