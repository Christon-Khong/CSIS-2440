<?php
//write your insert statment
$insert = "INSERT INTO `u743148202_csis_2440`.`PLAYERS` (`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `BIRTHDATE`, `PASSWORD`)" . "VALUES ('$fname', '$lname', '$email', '$bday', '$pwd')";
//echo $insert;
$success = $con->query($insert);

if ($success == FALSE) {
    //error if query did not run
    $failmess = "Whole query" . $insert . "<br>";
    echo $failmess;
    print('Invalid query: ' . mysqli_error($con) . "<br>");
} else {
    //let them know it was added
    echo $fname . " " . $lname . " was added<br>";
}
