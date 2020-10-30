<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['uid'])) {
        header('location:login.php');
    }
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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="preload" href="webfonts/fa-solid-900.woff2" as="font" crossorigin>
    <link rel="preload" href="fonts/JosefinSans-Light.ttf" as="font" crossorigin>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Greenwash</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="index.php#service">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services</a>
                    <a class="nav-item nav-link" href="index.php#about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a>
                    <a class="nav-item nav-link" href="price-list.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price List</a>
                    <a class="nav-item nav-link" href="placeorder.php#main-contact" data-toggle="modal" data-target="#contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">
                        <?php
                        echo "Welcome " . $_SESSION['uname'];
                        ?> <span class="sr-only">(current)</span>&nbsp;&nbsp;&nbsp;</a>
                    <button class="btn btn-danger text-center" id="logout">Log out</button>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5  mx-auto">
                <h1 class="text-center ">Place Order </h1>
                <hr />
                <form class="" name="place_order" id="place_order" method="post" action="#">
                    <div class="form-group col-md-12 form-inline">
                        <label for="shpng_addr" class="col-md-4 control-label">Shipping Address</label>
                        <input type="text" name="shpng_addr" class="form-control col-md-8" maxlength="100" size="40" id="shpng_addr" value="" placeholder="bldg no, road ... etc">
                    </div>
                    <div class="form-group form-inline col-md-12">
                        <label for="payment" class="col-md-4">Payment Option</label>
                        <select class="form-control col-md-8" id="payment" name="payment">
                            <option name="" value=""> </option>
                            <option name="cod" value="cod">Cash on delievery </option>
                            <option name="card" value="card">Card payment </option>
                            <option name="paytm" value="paytm">Paytm</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group form-inline" id="i">

                        <label for="name" class="col-md-4 control-label">Name</label>
                        <input type="text" class="form-control col-md-8" id="name" name="name" value="" placeholder="First name" />

                    </div>
                    <div class=" col-md-12 form-group form-inline ">
                        <label for="city" class="col-md-4 control-label">City</label><br>
                        <Select name="city" class="form-control col-md-8" id="city" aria-placeholder="Select a city">
                            <option name="" value=""></option>
                            <option name="pimprigaon" value="pimprigaon">pimprigaon</option>
                            <option name="pimple_saudagar" value="pimple saudagar">pimple saudagar</option>
                            <option name="Aundh" value="Aundh">Aundh</option>
                        </select>
                        <!--input type="text" class="form-control" id="city" name="city" placeholder="Your city"-->
                    </div>
                    <div class=" col-md-12 form-group form-inline">
                        <label for="zipcode" class="col-md-4 control-label">Zipcode</label>
                        <input type="text" class="form-control col-md-8" id="zip" value="" name="zip" placeholder="" />
                    </div>

                    <div class="col-md-12 form-group form-inline">
                        <label for="phone" class="col-md-4 control-label">Phone Number</label>
                        <input class="form-control col-md-8" id="phone" value="" name="phone" placeholder="" />
                    </div>

                    <div class="col-md-12 form-group form-inline ">
                        <label for="weight" class="col-md-4 control-label">Cloths Weight (kg)</label>
                        <input type="number" class="form-control col-md-8" id="weight" value="" name="weight" placeholder="weight" />
                    </div>
                    <div class="col-md-12 form-group form-inline ">
                        <label for="details" class="col-md-4 control-label"> Order Details</label>
                        <textarea name="details" class="form-control col-md-8" value="" rows="5" id="ord_det" placeholder="for eg: shirts-5,pants-2,etc."></textarea>
                    </div>
                    <div class="col-md-8 form-group form-inline ">
                        <label class="col-md-4 control-label"></label>
                        <button type="submit" class="btn btn-secondary col-md-4 mx-auto">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section id="main-contact" class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3 ">
                <div class="modal fade" id="contact" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title">Contact Us</h2>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                                <form role="form" action="" method="post" id="contact-form" name="contact">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea rows="3" class="form-control" id="message" name="message"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <input type="submit" name="submit_contact" id="submit-button" class="btn btn-default btn-primary" />
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main_1.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/valid_order.js"></script>
    <script src="./js/valid_contact.js"></script>
    <script src="./js/logout.js"></script>
</body>

</html>