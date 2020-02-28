<?php
$hn = 'sql177.main-hosting.eu';
$db = 'u743148202_csis_2440';
$un = 'u743148202_admin';
$pw = 'Goutes88!';
$con = new mysqli($hn, $un, $pw, $db)
    or die('Could not connect to the database server. ' . mysqli_connect_error($con));

if ($con->connect_error == FALSE) {
    echo "<h2>We Connected</h2>";
} else {
    echo $con->connect_error;
}

//print_r($con);
