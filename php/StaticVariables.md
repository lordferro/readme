function getValue(){
  static $value = null;

  if($value === null) {
    $value = someVeryExpensiveFunction();
  }
  return $value;
}

function someVeryExpensiveFunction(){
  echo "someVeryExpensiveFunction <br>";
  sleep(2);
  return 10;
}

echo (getValue(). '<br>');
echo (getValue(). '<br>');
echo (getValue(). '<br>');

we save computed results of function someVeryExpensiveFunction.
