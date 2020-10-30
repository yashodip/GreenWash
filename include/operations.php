<?php
if (session_id() == '') {
    session_start();
}
// Fetch URL parameters eg. operations.php?data=login where 'login' is action
$params = $_REQUEST;
$action = $params['data'] != '' ? $params['data'] : '';

$data = new Data();


// Check for different actions
switch ($action) {
    case 'signup':
        $data->signup();
        break;
    case 'login':
        $data->login();
        break;
    case 'logout':
        $data->logout();
        break;
    case 'placeOrder':
        $data->placeOrder();
        break;
    case 'contactUs':
        $data->contactUs();
        break;
    case 'getOrders':
        $data->getOrders();
        break;
    case 'mostPayment':
        $data->mostPayment();
        break;
    case 'mostCities':
        $data->mostCities();
        break;
    case 'confirmOrder':
        $data->confirmOrder();
        break;
    default:
        return;
}

class Data
{
    function signup()
    {
        include('config.php');
        if (
            isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone']) &&
            isset($_POST['email']) && isset($_POST['password'])
        ) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "call spSignUp(?,?,?,?,?)";
            if ($stmt = mysqli_prepare($conn, $query)) {
                mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $phone, $password);
                /* execute query */
                if (mysqli_stmt_execute($stmt)) {
                    $response['output'] = "SUCCESS";
                } else
                    $response['output'] = "FAILED";

                echo json_encode($response);
                /* close statement */
                mysqli_stmt_close($stmt);
            }

            /* close connection */
            mysqli_close($conn);
        }
    }
    function login()
    {
        include('config.php');
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "call spLogin(?,?)";
            if ($stmt = mysqli_prepare($conn, $query)) {
                mysqli_stmt_bind_param($stmt, "ss", $username, $password);
                /* execute query */
                mysqli_stmt_execute($stmt);

                /* store result */
                mysqli_stmt_store_result($stmt);

                //printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    /* bind result variables */
                    mysqli_stmt_bind_result($stmt, $id, $first_name);

                    /* fetch values */
                    while (mysqli_stmt_fetch($stmt)) {
                        $_SESSION['uid'] = $id;
                        $_SESSION['uname'] = $first_name;
                    }
                    $response['output'] = "SUCCESS";
                } else
                    $response['output'] = "FAILED";

                echo json_encode($response);
                /* close statement */
                mysqli_stmt_close($stmt);
            }

            /* close connection */
            mysqli_close($conn);
        }
    }

    function logout()
    {
        if (isset($_SESSION['uid'])) {
            session_destroy();
            $response['output'] = "SUCCESS";
            echo json_encode($response);
        }
    }

    function placeOrder()
    {
        include('config.php');
        if (
            isset($_POST['shpng_addr']) && isset($_POST['payment']) && isset($_POST['name']) &&
            isset($_POST['city']) && isset($_POST['zip']) && isset($_POST['phone']) && isset($_POST['weight'])
        ) {
            $shpng_addr = $_POST['shpng_addr'];
            $payment = $_POST['payment'];
            $name = $_POST['name'];
            $city = $_POST['city'];
            $zip = $_POST['zip'];
            $phone = $_POST['phone'];
            $weight = $_POST['weight'];
            $query = "call spPlaceOrder(?,?,?,?,?,?,?)";
            if ($stmt = mysqli_prepare($conn, $query)) {
                mysqli_stmt_bind_param($stmt, "sssssss", $shpng_addr, $payment, $name, $city, $zip, $phone, $weight);
                if (mysqli_stmt_execute($stmt)) {
                    $response['output'] = "SUCCESS";
                } else
                    $response['output'] = "FAILED";

                echo json_encode($response);
                /* close statement */
                mysqli_stmt_close($stmt);
            }

            /* close connection */
            mysqli_close($conn);
        }
    }
    function contactUs()
    {
        include('config.php');
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $query = "call spContactUs(?,?,?)";
            if ($stmt = mysqli_prepare($conn, $query)) {
                mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
                if (mysqli_stmt_execute($stmt)) {
                    $response['output'] = "SUCCESS";
                } else
                    $response['output'] = "FAILED";

                echo json_encode($response);
                /* close statement */
                mysqli_stmt_close($stmt);
            }

            /* close connection */
            mysqli_close($conn);
        }
    }
    function getOrders()
    {
        include('config.php');
        $query = "SELECT id,name,city,payment,phone,order_status from tbl_order";
        if ($stmt = mysqli_prepare($conn, $query)) {
            // mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            /* execute query */
            mysqli_stmt_execute($stmt);

            /* store result */
            mysqli_stmt_store_result($stmt);

            //printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));
            //echo mysqli_stmt_num_rows($stmt);

            /* bind result variables */
            mysqli_stmt_bind_result($stmt, $id, $name, $city, $payment, $phone, $order_status);

            /* fetch values */
            $data = [];
            while (mysqli_stmt_fetch($stmt)) {
                $sub_array = array();

                $sub_array["name"] = $name;
                $sub_array["city"] = $city;
                $sub_array["payment"] = $payment;
                $sub_array["phone"] = $phone;
                if ($order_status === 'placed') {
                    $sub_array["order_status"] = "<div id='$id'>'<button id = ' $id ' name='confirm_order' class='btn btn-success' value='confirmed' onclick='confirmOrder($id)'> Confirm Order</button></div>";
                } else {
                    $sub_array["order_status"] = "Confirmed";
                }

                array_push($data, $sub_array);
            }

            $response = array(
                "data"  => $data
            );

            echo json_encode($response);
            /* close statement */
            mysqli_stmt_close($stmt);
        }
        /* close connection */
        mysqli_close($conn);
    }
    function mostPayment()
    {
        include('config.php');
        $query = "SELECT payment,COUNT(1) as payment_count FROM tbl_order GROUP BY payment ORDER BY payment_count";
        if ($stmt = mysqli_prepare($conn, $query)) {
            // mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            /* execute query */
            mysqli_stmt_execute($stmt);

            /* store result */
            mysqli_stmt_store_result($stmt);

            //printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));
            //echo mysqli_stmt_num_rows($stmt);

            /* bind result variables */
            mysqli_stmt_bind_result($stmt, $payment, $payment_count);

            /* fetch values */
            while (mysqli_stmt_fetch($stmt)) {

                $response[$payment] = $payment_count;
            }
            echo json_encode($response);
            /* close statement */
            mysqli_stmt_close($stmt);
        }
        /* close connection */
        mysqli_close($conn);
    }
    function mostCities()
    {
        include('config.php');
        $query = "SELECT city,COUNT(1) as city_count FROM tbl_order GROUP BY city ORDER BY city_count";
        if ($stmt = mysqli_prepare($conn, $query)) {
            // mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            /* execute query */
            mysqli_stmt_execute($stmt);

            /* store result */
            mysqli_stmt_store_result($stmt);

            //printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));
            //echo mysqli_stmt_num_rows($stmt);

            /* bind result variables */
            mysqli_stmt_bind_result($stmt, $city, $city_count);

            /* fetch values */
            while (mysqli_stmt_fetch($stmt)) {
                $response[$city] = $city_count;
            }


            echo json_encode($response);
            /* close statement */
            mysqli_stmt_close($stmt);
        }
        /* close connection */
        mysqli_close($conn);
    }
    function confirmOrder()
    {
        include('config.php');
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $query = "UPDATE `tbl_order` SET `order_status` = 'confirmed' WHERE `tbl_order`.`id` = ?";
            if ($stmt = mysqli_prepare($conn, $query)) {
                mysqli_stmt_bind_param($stmt, "s", $id);
                /* execute query */
                if (mysqli_stmt_execute($stmt)) {
                    $response['output'] = "SUCCESS";
                } else
                    $response['output'] = "FAILED";

                echo json_encode($response);
                /* close statement */
                mysqli_stmt_close($stmt);
            }

            /* close connection */
            mysqli_close($conn);
        }
    }
}
