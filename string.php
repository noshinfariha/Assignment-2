<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string)
{
$vowelCount=preg_match_all('/[aeiouAEIOU]/',$string,$match);
// echo $vowelCount."\n";
$reverseString=strrev($string);
// echo $reverseString."\n";
echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reverseString"."\n";


}