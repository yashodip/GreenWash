<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greenwash";
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Database Connection failed: %s\n", mysqli_connect_error());
    exit();
}
