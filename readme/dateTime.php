<?php 
// echo date('d/m/Y H:i', time()).PHP_EOL;

// mktime(1); 
/*Get Unix timestamp for a date
function mktime(
    int $hour,
    ?int $minute = null,
    ?int $second = null,
    ?int $month = null,
    ?int $day = null,
    ?int $year = null
): int|false { }*/

// echo strtotime('today').PHP_EOL; 
/*Parse about any English textual datetime description into a Unix timestamp*/;

// $dateTime = new DateTime();
// echo $dateTime->format('d');

// if date with slash 12/19/2023 = US format;
// with dash or dots 19-12-2023 = EU format;
$date = '15/05/2021';
$dateTime = DateTime::createFromFormat('d/m/Y',$date)->setTime(0,0);
var_dump($dateTime);