<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
    <?php
    require_once 'DataBaseConnection.php';
    $fname = isset($_POST["firstName"]) ? $_POST["firstName"] : NULL;
    $lname = isset($_POST["lastName"]) ? $_POST["lastName"] : NULL;
    $email = isset($_POST["email"]) ? $_POST["email"] : NULL;
    $bday = isset($_POST["birthday"]) ? $_POST["birthday"] : NULL;
    $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : NULL;
    $action = isset($_POST["Action"]) ? $_POST["Action"] : NULL;

    ?>
</head>

<body>
    <?php
    //do the task we need to do using a switch
    print("<fieldset>");
    switch ($action) {
        case "Insert":
            include 'Add.php';
            break;
        case "Update":
            include 'Update.php';
            break;
        case "Search":
            include 'Search.php';
            break;
        default:
            print("Something is wrong");
    }

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>