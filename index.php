<?php
echo "<h4>problem solving  (1) </h4>";
$num1 = 10;
$num2 = 20;
$sum = $num1 + $num2;
$num3 = 30;
echo "Sum of $num1 and $num2 is: $sum<br>";
echo $sum * $num3;


echo "<h4>problem solving  (2) </h4>";
$width = 5;
$height = 10;
$length = rand(1, 10);
$num = $width * $height * $length;

echo "size =  $width * $height * $length = $num <br>";


echo "<h4>problem solving  (3) </h4>";

$hours = rand(1, 24);
$seconds = $hours * 60 * 60;
echo "hours = $hours <br>";
echo "seconds = $seconds <br>";


echo "<h4>problem solving  (4) </h4>";
$age = 21;
$day = 365;
echo "age = $age <br>";
$age_in_days = $age * $day;
echo "age in days = $age_in_days <br>";


echo "<h4>problem solving  (5) </h4>";

echo "Get the length of this sentence " . "    =   " . strlen("Get the length of this sentence. ");


echo "<h4>problem solving  (6) </h4>";
$word = "Get the length of this sentence without spaces.";
$word_replace = str_replace(" ", "", $word);
echo "Get the length of this sentence without spaces = " . strlen($word_replace) . "<br>";
 
echo "<h4>problem solving  (7) </h4>";
$word = "Get the number of words in this sentence.";
echo "Get the number of words in this sentence = " . str_word_count($word) . "<br>";

echo "<h4>problem solving  (8) </h4>";

// if( ){

// }

