<!DOCTYPE html>
<head>
    <title>Hello World</title>
    <?php
    $name="Christon K.";
    $age=31;
    $gender="male";
    $icecream="Vanilla";
    $image="https://i.redd.it/m8o152wtmcc21.jpg"
    ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
        echo "<h3 class='text-center'>This is my first PHP page!</h3>";
        print("<p class='text-primary text-center'>My name is $name and I am $age years old. I am a $gender who likes $icecream ice cream.</p>");
        print('<p class="text-secondary text-center">I used these variables: $name, $age, $gender, $icecream</p>');
        print("<img class='img-fluid w-25 rounded mx-auto d-block' src='$image'></img>");
    ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>