<?php count($array);

array_shift() /*reindex array;*/;
unset()/* - do not reindex;*/;

/*$array = [1, 2, 3];
unset($array[0], $array[1], $array[2]);
array_push($array, 5);
$array  [3] => 5;*/

$array = ['a' => 1, 'b' => null];
var_dump(isset($array["b"]));/* - false because null is not set;*/
var_dump(array_key_exists('b', $array)) /*- true - key exist, but not set*/;

echo json_encode($arr); /*- to echo array.*/
echo implode('*',$arr);/* - to echo values of array separaated by *.*/

/*When passing an ...array as functional parameter, key will be as named parameters.*/

array_combine() /*Creates an array by using the values from the keys array as keys and the values from the values array as the corresponding values.*/;

array_values();/*returns all the values from the `array` and indexes the array numerically.*/

$arr = ['abc', 'abd', 'abf', 'fgr'];
print_r(array_keys($arr, 'abf')); /*we use second parameter a string we try to find between values of arr, it return [key start from 0 if not ass arr] => value = index where was string we looking for*/

asort(); ksort(); usort();
?>