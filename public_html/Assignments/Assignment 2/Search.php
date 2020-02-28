<?php
//write the search statment
$search = "SELECT * FROM `u743148202_csis_2440`.`PLAYERS` WHERE FIRST_NAME LIKE '%$fname%'"
    . " AND LAST_NAME LIKE '%$lname%'" . "Order By FIRST_NAME";
$return = $con->query($search);

if (!$return) {
    $message = "Whole query " . $search;
    echo $message;
    die('Invalid query: ' . mysqli_error($con));
}
echo "<table><th>Player ID</th><th>First Name</th><th>Last Name</th><th>Email</th>"
    . "<th>Birthday</th>";
while ($row = $return->fetch_assoc()) {
    //print out a table row with the data in it
    echo "<tr><td>" . $row['PLAYER_ID']
        . "</td><td>" . $row['FIRST_NAME']
        . "</td><td>" . $row['LAST_NAME']
        . "</td><td>" . $row['EMAIL']
        . "</td><td>" . $row['BIRTHDATE'] . "</td></tr>";
}
echo "</table>";
