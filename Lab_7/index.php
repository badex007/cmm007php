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
        echo "Hello," . "" . "World" . "! ";
        echo 5 * 7;
        $myname = "frod";
        $myage = 111;
        echo " My name is " . $myname . "and i am " . $myage;
        ?>
    </h1>

    </p>

    <p>
        <?php

        $name = "Edgar";

        if ($name == "Simon") {
            print "i know you!";
        } else {
            print "Who are you?";
        }

        ?>
    </p>

    <p>
         <?php

            //Asign values to variable
            $greeting = "Hello!";
            $day = 15;
            $month = 2;
            $year = 2024;

            //display values
            echo $greeting . " Todays date is " . $day . "-" . $month . "-" . $year;

            //echo  "Welcome" . $name . "<br>" . "your student number: "  . $student_no .  "<br>"  . "Course: " . $course . "<br>" .  "Module name and code: " . $moudle_name . " " . $module_code, 


            ?> 
    </p>

</body>

</html>