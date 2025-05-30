<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <div class="container">
        This Is My First PHP Website
        <?php
		    echo "Hello Yanna , This Is Printing Using PHP…!";   // use for print something
            // write some secret algorithm
            /*  this
                is
                multi 
                line
                comment
            */

            // create variable
            $var1 = 34;
            $var2 = 'Zai?!';
            echo " ";
            echo $var1;
            echo " ";
            echo $var2;

            $var3 = 6;
            echo " ";
            //echo $var1 + $var2; // give error bcz cannot sum number and string
            echo " ";
            echo "ans:", $var1 + $var3;
            echo "          ";
            echo "<br>";  // for New line bcz in html <br> tag use for new line
            // Operators in PHP
            // Arithmetic Operators
            echo "<h3>Arithmetic Operators</h3>";
            echo "The value of var1 + var3 is ";
            echo $var1 + $var3;
            echo "<br>";  // for New line bcz in html <br> tag use for new line
            echo "The value of var1 - var3 is ";
            echo $var1 - $var3;
            echo "<br>";  // for New line bcz in html <br> tag use for new line
            echo "The value of var1 * var3 is ";
            echo $var1 * $var3;
            echo "<br>";  // for New line bcz in html <br> tag use for new line
            echo "The value of var1 / var3 is ";
            echo $var1 / $var3;
            echo "<br>";  // for New line bcz in html <br> tag use for new line

            // Assignment Operators
            echo "<h3>Assignment Operators</h3>";
            $a = $var1;
            echo "The value of variable a is ";
            echo $a;
            echo "<br>";
            $a += 1;
            echo "Now the value of variable a is ";
            echo $a;
            echo "<br>";
            $a -= 1;
            echo "Now the value of variable a is ";
            echo $a;
            echo "<br>";
            $a *= 2;
            echo "Now the value of variable a is ";
            echo $a;
            echo "<br>";
            $a /= 2;
            echo "Now the value of variable a is ";
            echo $a;
            echo "<br>";

            // Comparison Operators
            echo "<h3> Comparison Operators</h3>";
            echo "The value of 1 == 4 is ";
            echo 1==4;
            echo "<br>";
            echo "The value of 1 == 4 is ";
            echo var_dump(1 == 4);
            echo "<br>";
            echo "The value of 1 != 4 is ";
            echo 1 != 4;
            echo "<br>";
            echo "The value of 1 < 4 is ";
            echo var_dump(1 < 4);
            echo "<br>";
            echo "The value of 1 >= 4 is ";
            echo var_dump(1 >= 4);
            echo "<br>";

            // Increment/Decrement Operators
            echo "<h3>Increment/Decrement Operators</h3>";
            echo $var1++;
            echo $var1;
            echo "<br>";
            echo $var1--;
            echo "<br>";
            echo ++$var3;
            echo "<br>";
            echo --$var3;
            echo "<br>";

            // Logical Operators
            echo "<h3>Logical Operators</h3>";
            $myVar = (true and true);
            echo var_dump($myVar);
            echo "<br>";

            $myVar2 = (false and true);
            echo var_dump($myVar2);
            echo "<br>";

            $myVar3 = (true or true);
            echo var_dump($myVar3);
            echo "<br>";

            $myVar4 = (false or true);
            echo "myvar4", var_dump($myVar4);
            echo "<br>";

            $myVar5 = (false and false);
            echo var_dump($myVar5);
            echo"<br>";        

            $myVar5 = (false or false);
            echo var_dump($myVar5);
            echo"<br>";

            // xor  --> one true anfalsed one false then and then true othewise 
            // ! 
        ?>

        <?php
        // php ke starting me hi constants define karne hote hai 
        define('PI', 3.14);
            // Data Type
            // String
            // Integer
            // Float (floating point numbers - also called double)
            // Boolean
            // Array
            // Object
            // NULL
            // Resource

            echo "<h3>Data Type</h3>";
            $number = 10;
            $text = "Hello";
            $is_true = true;
            $my_array = array(1, "two", 3.14);
            $n = 12.21;

            echo var_dump($number); 
            echo "<br>";
            echo var_dump($text); 
            echo "<br>";
            echo "Type of $number: " . gettype($number) ; // Output: integer
            echo "<br>";
            echo "Type of $text: " . gettype($text); // Output: string
            echo "<br>";
            echo "Type of $is_true: " . gettype($is_true); // Output: boolean
            echo "<br>";
            echo var_dump($my_array); // Output: array
            echo "<br>";
            echo "Type of $n: " . gettype($n); // Output: float
            echo "<br>";
            // it's a constant value which we define at the starting of php 
            echo PI;
        ?>
    </div>
</body>
</html>