<?php
$str = "apple";
$newStr = str_split($str);
$finalArray = array_unique($newStr);
$finalString = implode("",$finalArray);
echo $finalString;

// $charCount = count($newStr);

// echo $charCount;


// for ($i = 0; $i < strlen($str); $i++) {
//     echo $str[$i];
//   }

?>