<?php

// $string1 = 'bacd';
// $string2 = 'abcd';

// $stringParts1 = str_split($string1);
// //print_r($stringParts);
// $a = sort($stringParts1);
// //print_r($a);
// //echo implode($stringParts);
// $a = implode($stringParts1);
// // echo $a;

// $stringParts2 = str_split($string2);
// //print_r($stringParts);
// $b = sort($stringParts2);
// //print_r($a);
// //echo implode($stringParts);
// $b = implode($stringParts2);
// //echo $b;

// if($a !== $b){
//     echo "Not an Anagram";
// }
// else{
//     echo "It's an Anagram";
// }


// $string1 = 'bacd';
// $string2 = 'abcd';

// function isAnagram($a,$b){
// // Spliting string
// $stringParts1 = str_split($a);
// $stringParts2 = str_split($b);

// // $splitString1 = sort($stringParts1);
// // $splitString2 = sort($stringParts2);

// // $sortedString1 = implode($splitString1);
// // $sortedString2 = implode($splitString2);

// sort($stringParts1);
// sort($stringParts2);

// $sortedString1 = implode($stringParts1);
// $sortedString2 = implode($stringParts2);

// // Checking if given string is an Anagram or not.

// if($sortedString1 !== $sortedString2){
//     echo "Not an Anagram";
// }
// else{
//     echo "It's an Anagram";
// }

// }

// isAnagram($string1,$string2);


$string1 = 'bacd';
$string2 = 'abcd';

function isAnagram($a,$b){

$stringParts1 = str_split($a);
$stringParts2 = str_split($b);


sort($stringParts1);
sort($stringParts2);

$sortedString1 = implode($stringParts1);
$sortedString2 = implode($stringParts2);



if($sortedString1 !== $sortedString2){
    echo "Not an Anagram";
}
else{
    echo "It's an Anagram";
}

}

isAnagram($string1,$string2);


?>

	







