<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background: pink;
        margin: auto;
        padding: 23px;
    }
</style>    
<body>
    <div class="container">
        <h2>Let's Learn About PHP😃</h2>

        <p>Your Party Status Is Here...!</p>

        <?php
            $age = 21;
            if($age > 18){
                echo "You Can Go To The Party💃";
            }
            else{
                echo "You Can Not Go To The Party😭";
            }

            echo "<br>";
            $lang = array("Python", "C++", "php", "NodeJs");
            echo $lang[0];
            echo "<br>";
            echo $lang[2];
            echo "<br>";
            echo "Total Number Of Items In Array Is ";
            echo count($lang);
            echo "<br>";
            echo "lang is ", is_array($lang);  // 1 means true
            echo "<br>";

            echo "<h3>Loops In PHP</h3>";
            echo "<h4>While Loop In PHP</h4>";
            $a = 0;
            while ($a <= 5){
                 echo "The Value Of a Is: ";
                 echo $a;
                 echo "<br>";
                 $a++;
            };
            // while ($a < count($lang)) {
            //     echo "The Value Of Language Is: ";
            //     echo $lang[$a];
            //     echo "<br>";
            //     $a++;
            // }
            echo "<h4>Do While Loop In PHP</h4>";
            $b = 0;
            do {
                 echo "The Value Of Language Is: ";
                 echo $lang[$b];
                 echo "<br>";
                 $b++;
            }while ($b < count($lang));

            echo "<h4>For Loop In PHP</h4>";
            $c = 11;
            for ($c=0; $c < 3; $c++) { 
                echo "The Value Of c Is: ";
                echo $c;
                echo "<br>";
            }

            echo "<h4>ForEach Loop In PHP</h4>";
            foreach($lang as $val){
                echo "The Value From ForEach loop Is: ";
                echo $val;
                echo "<br>";
            }

            echo "<h3>Functions In PHP</h3>";

            function name(){
                echo "I AM YANS :)";
            }
            name();
            echo "<br>";
            function print_num($num)
            {
                echo "Your Number Is: ";
                echo $num;
                echo "<br>";
            }
            print_num(8);
            print_num(24);

        ?>

    </div>
</body>
</html>