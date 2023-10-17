<?php 
strlen($string) /* string length */
count($array)  /* length of array */
sleep(3)  /*stop execution for 3 seconds*/

declare(strict_types=1); /*need to be in each file.*/

ob_start();
$nav = include('header.html');
$nav = ob_get_clean();
$nav = str_replace("About", "about us", $nav);
echo $nav;
/*In case we need to change imported markup, without ob it would be echoed.*/

function func(): ?int{
return null;
}
/*We expect tu return integer, but null is also acceptable.*/

global /*- key word to define, an existing out of functional scope, variable to be available in functional scope.
$GLOBAL = associative array of global variables.*/

/*as alternative for functional expression we can use 'use'.*/ 
$x = 1;
 $y =  function (int|float ...$numbers) use($x) : int|float
  {
    $x = 5;
    // in this scope changing x doesn't affect global x, so we make a copy of x for functional scope.
    echo $x;
  return array_sum($numbers);
};
echo $y(1,2);
/*We also can use & in front of parameter.*/
/*Arrow function can use variable from the parent scope, but it is a copy, not ref.*/

/*Defined parameters in function declaration - became REQUIRED.*/

/*Too pass a function as a callback write function name as string 'foo'*/

/*The <=> ("Spaceship") operator will offer combined comparison in that it will :
Return 0 if values on either side are equal
Return 1 if the value on the left is greater
Return -1 if the value on the right is greater*/

trigger_error('custom error ');

mt_rand(); /**random*/

dirname(__DIR__); /**Returns a parent directory's path */


?>;