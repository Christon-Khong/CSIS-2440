<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Random Number Page</title>
    <?php

    ?>
</head>

<body>
    <?php
        $score = 0;
        print("<table><tr><th>Player</th><th>Computer</th><th>Rounds</th></tr>\n");
        //here write a loop that will run 10 times and compare the scores, increment the score if greater, decrementing if less and leaving it if equal
        //this should print each round out in the table.
        for ($i = 0; $i < 10; $i++) {
            #generate random number for both player and computer
            $player = rand(0, 100);
            $computer = rand(0, 100);
            #If player is higher, increment score
            if ($player > $computer) {
                print("<td>Player won this round</td></tr>\n");
                $score++;
            }
            #If player is lower, decrement score
            else if($player < $computer)
            {
                print("<td>Player lost this round</td></tr>\n");
                $score--;
            }
            #Player and computer tied
            else{
                print("<td>Player tied this round</td></tr>\n");
            }
            #Print result of the round
            print("<tr><th>$player</th><th>$computer</th><th>$i</th></tr>\n");
        }
        #prints overall score at end of ten rounds
        print("<tr><td colspan=2>$score</td><td>Player Score</td></tr><table>\n");

        //Year of the---

        $year = date("Y");
        print("It is the year of the:<br>");
        //Here a switch will print out the year using the modulo(% 12)
        //Monkey, roster, dog, boar, rat, ox, tiger, rabbit, dragon, snake, horse, and lamb is the order, default case being Human
        switch ($year % 12)
        {
            case 0:
                echo 'Monkey';
            break;
            case 1:
                echo 'Rooster';
            break;  
            case 2:
                echo 'Dog';
            break;
            case 3:
                echo 'Pig';
            break;
            case 4:
                echo 'Rat';
            break;
            case 5:
                echo 'Ox';
            break;
            case 6:
                echo 'Tiger';
            break;
            case 7:
                echo 'Rabbit';
            break;
            case 8:
                echo 'Dragon';
            break;
            case 9:
                echo 'Snake';
            break;
            case 10:
                echo 'Horse';
            break;
            case 11:
                echo 'Lamb';
            break;
            default: 
                echo 'Human';

        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>