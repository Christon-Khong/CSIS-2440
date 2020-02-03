<!DOCTYPE html>
<?php

?>
<html>

<head>
    <meta charset="utf-8">
    <title>A made Adventurer</title>
    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->

    <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css" />
    <style>
        img {
            height: 250px;
            padding: 3pt;
        }

        p {
            margin-left: 8px;
        }
    </style>
</head>

<body>
    <div id="CharacterSheet" class="container">
        <div class="row">
            <h3 class="Content">The Brave Adventurer
        </div>
        <div class="row">
            <div class="col-md-3">
                <?php
                #POST variables
                $name = $_POST['HeroName'];
                $race = $_POST['Race'];
                $class = $_POST['Class'];
                $age = $_POST['Age'];
                $gender = $_POST['gender'];
                $kingdom = $_POST['KingdomName'];
                //print name and random stats here
                $stats = array(
                    array("label" => "Strength", "attribute" => rand(1, 100)),
                    array("label" => "Intelligence", "attribute" => rand(1, 100)),
                    array("label" => "Agility", "attribute" => rand(1, 100))
                );

                print("<h4>$name</h4>");

                for ($i = 0; $i < count($stats); $i++) {
                    print("<h5>" . $stats[$i]["label"] . ": " . $stats[$i]["attribute"]);
                }
                print("<br>");
                print_r($_POST);
                ?>
            </div>
            <div class="col-md-5">
                <?php
                //print character info here

                print("<div><h4>Race: " . $race . "</h4>");
                #read file RaceInfo.txt and output corresponding race
                $raceText = file("RaceInfo.txt");
                switch ($race) {
                    case "Human":
                        print($raceText[0]);
                        break;
                    case "Elf":
                        print($raceText[1]);
                        break;
                    case "Dwarf":
                        print($raceText[2]);
                        break;
                    case "Halfling":
                        print($raceText[3]);
                        break;
                    default:
                }
                print("<h4>Class: " . $class . "</h4>");
                #read file ClassInfo.txt and output corresponding class
                $classText = file("ClassInfo.txt");
                switch ($class) {
                    case ":Fighter":
                        print($classText[0]);
                        break;
                    case "Cleric":
                        print($classText[1]);
                        break;
                    case "Thief":
                        print($classText[2]);
                        break;
                    case "Magic-User":
                        print($classText[3]);
                        break;
                    default:
                }
                print("<h4>Age: " . $age . "</h4>");
                print("<h4>Gender: " . $gender . "</h4>");
                print("<h4>Kingdom: " . $kingdom . "</h4></div>");


                ?>
            </div>
            <div class="col-md-4">
                <?php
                $imgRace = "";
                $imgClass = "";
                $imgGender = "";
                $imgSrc = "";

                #Determine Race img acronymn
                if ($race == "Dwarf") {
                    $imgRace = "Dw";
                } elseif ($race == "Elf") {
                    $imgRace = "El";
                } elseif ($race == "Halfling") {
                    $imgRace = "Ha";
                } else {
                    $imgRace = "Hu";
                }

                #Determine Class img acronym
                if ($class == "Fighter") {
                    $imgClass = "Fi";
                } elseif ($class == "Cleric") {
                    $imgClass = "Cl";
                } elseif ($class == "Magic-User") {
                    $imgClass = "Ma";
                } else {
                    $imgClass = "Th";
                }

                #Determin Gender img acronym
                if ($gender == "Male") {
                    $imgGender = "Ma";
                } else {
                    $imgGender = "Fe";
                }

                //print image here
                $imgSrc = $imgRace . $imgClass . $imgGender;
                print("<img src='images/$imgSrc.jpg'>");
                ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <!-- Plugin JavaScript -->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
    <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

    <!-- Custom scripts for this template -->
    <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
</body>

</html>