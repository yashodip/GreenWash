<!DOCTYPE html>
<html>

<head>
    <title>GreenWash</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../css/animate.css">
    <!-- Bootstrap -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <link rel="stylesheet" type="text/css" href="./../css/main.css">
    <link rel="stylesheet" type="text/css" href="./../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./../css/all.min.css">
    <link rel="preload" href="../webfonts/fa-solid-900.woff2" as="font" crossorigin>
    <link rel="preload" href="../fonts/JosefinSans-Light.ttf" as="font" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
</head>

<body>
    <header>

        <ul class="navbar nav justify-content-center navbar-dark bg-dark">
            <li class="nav-item active  text-light">
                <h3>Admin Panel</h3>
            </li>
        </ul>

    </header>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <hr>
                    <p class="font-weight-bold text-center">Analysis</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-info">
                                <div class="card-header bg-dark">
                                    <h5 class="card-title text-light">Most payment mode used </h5>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="payment" width="100" height="200"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-info">
                                <div class="card-header bg-dark">
                                    <h5 class="card-title text-light">Most orders placed from</h5>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="place" width="100" height="200"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <hr>
                    <p class="font-weight-bold text-center">Order report</p>
                    <hr>
                    <div class="table-responsive">
                        <table class="table display" id="datatable">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Payment</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Order status</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>


    <script src="./../js/jquery-3.2.1.min.js"></script>
    <script src="./../js/popper.min.js"></script>
    <script src="./../js/bootstrap.min.js"></script>

    <script src="./../js/jquery.dataTables.min.js"></script>
    <script src="./../js/Chart.min.js"></script>
    <script>
        let dataTable;
        $(window).on("load", function() {
            //Data table

            console.log("Loading Data");
            dataTable = $('#datatable').DataTable({
                "paging": true,
                "pageLength": 5,
                "ajax": {
                    url: "./../include/operations.php?data=getOrders",
                    type: "POST",
                    dataType: "json",
                    data: {},
                },
                columns: [{
                        "data": "name"
                    },
                    {
                        "data": "city"
                    },
                    {
                        "data": "payment"
                    },
                    {
                        "data": "phone"
                    },
                    {
                        "data": "order_status"
                    },

                ]
            });
            $.ajax({
                type: "GET",
                url: "./../include/operations.php?data=mostPayment",
                dataType: "json",
                data: {},
                success: function(data) {
                    console.log(data);
                    let payment = Object.keys(data);
                    let payment_count = Object.values(data);
                    var ctx = $('#payment');
                    var donutData = {
                        labels: payment,
                        datasets: [{
                            data: payment_count,
                            backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                        }]
                    }
                    var options = {
                        maintainAspectRatio: false,
                        responsive: true,
                    }
                    var myDoughnutChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: donutData,
                        options: options
                    });
                }
            });
            $.ajax({
                type: "GET",
                url: "./../include/operations.php?data=mostCities",
                dataType: "json",
                data: {},
                success: function(data) {
                    console.log(data);
                    let city = Object.keys(data);
                    let city_count = Object.values(data);
                    var ctx = $('#place');
                    var pieData = {
                        labels: city,
                        datasets: [{
                            data: city_count,
                            backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                        }]
                    }
                    var options = {
                        maintainAspectRatio: false,
                        responsive: true,
                    }
                    var myDoughnutChart = new Chart(ctx, {
                        type: 'pie',
                        data: pieData,
                        options: options
                    });
                }
            });


        });

        function confirmOrder(id) {

            $.ajax({
                type: "POST",
                url: "./../include/operations.php?data=confirmOrder",
                dataType: "json",
                data: {
                    id: id
                },
                success: function(data) {
                    if (data.output == "SUCCESS") {
                        alert("Order confirmed");
                        dataTable.ajax.reload();
                    } else {
                        alert("order update Failed");
                    }
                },
                error: function(error) {
                    console.log(error);
                },
            });
        }
    </script>
</body>

</html>