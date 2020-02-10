<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//get post variable
$capName = htmlentities($_POST["CapName"]);
$capName = strtolower($capName);
$capName = ucwords($capName);
$capAge = $_POST["CapAge"];
$shipName = $_POST["ShipName"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <?php
                            print("<h2>Captain ".$capName."</h2>");
                            print("<h3>Age ".$capAge."</h3>");
                        ?>
                        <h3>The early Career started with:</h3>
                        <?php
                            // put your code here
                            $earlyYearsText = fopen("EarlyYears.txt", "r") or die("Unable to open file!");
                            $pos = 0;
                            while (!feof($earlyYearsText)) {
                                $randomEarly[$pos] = fgets($earlyYearsText);
                                $pos++;
                            }
                            fclose($earlyYearsText);
                            shuffle($randomEarly);
                            print("<ul><li>".$randomEarly[1]. "</li><li>" .$randomEarly[2]. "</li></ul>");
                        ?>
                        <h3>Some of your tours include:</h3>
                        <?php
                            if ($capAge > 25) {
                                $tours = 4 + ($capAge - 26);
                            } else {
                                $tours = floor(($capAge - 17) / 2);
                            }
                            #Tours.txt read and write
                            $tourText = fopen("Tours.txt", "r") or die("Unable to open file!");
                            $pos = 0;
                            while (!feof($tourText)) {
                                $randomEarly[$pos] = fgets($tourText);
                                $pos++;
                            }
                            fclose($tourText);
                            shuffle($randomEarly);
                            for ($i = 0; $i < $tours; $i++) {
                                print("<p>".$randomEarly[$i]."</p>");
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
