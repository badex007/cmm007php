<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo php</title>
</head>

<body>
    <p>
    <h1>
        <?php
        echo "Hello World ";
        echo "Hello,".""."World"."! ";
        echo 5*7;
        $myname = "frod";
        $myage = 111;
        echo " My name is ".$myname."and i am ".$myage;
        ?>
    </h1>

    </p>

    <p>
        <?php

        $name = "Edgar";

        if($name == "Simon"){
            print "i know you!";
        }
        else{
            print "Who are you?";
        }

        ?>
    </p>

</body>

</html>