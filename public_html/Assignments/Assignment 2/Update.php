<?php
//update query string
$update = "UPDATE `u743148202_csis_2440`.`PLAYERS` SET `PASSWORD` = '$pwd' WHERE `FIRST_NAME` = '$fname' and `LAST_NAME` = '$lname'";
$success = $con->query($update);
if ($success == FALSE) {
    //error if query did not run
    $failmess = "Whole query" . $update . "<br>";
    echo $failmess;
    print('Invalid query: ' . mysqli_error($con) . "<br>");
} else {
    //let them know it was updated
    echo "Updated password for " . $fname . $lname . "<br>";
}
