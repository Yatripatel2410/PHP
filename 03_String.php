<?php
    $str = "yanna kim";
    echo $str;
    echo "<br>";
    $lenn = strlen($str);
    //echo "The Length Of This String Is: " . $lenn . "Thank you dear"; 
    echo "The Length Of This String Is: ";
    echo $lenn;
    echo "<br>";
    echo "The number of words in this string is: " . str_word_count($str). "<br> Thank You...!";
    echo "<br>";
    echo "The reversed string is: " . strrev($str). "<br> Thank You...!";
    echo "<br>";
    echo "The search of 'kim' in this string is: " . strpos($str, "kim"). "<br> Thank You...!";
    echo "<br>";
    echo "Replace 'yanna' to 'yatri' in this string is: " . str_replace("yanna", "yatri", $str). "<br> Thank You...!";
?>
