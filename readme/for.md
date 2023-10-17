$text = [a,b,c,d];
for($i=0, $length = count($text); $i < $length; $i++){};
Because firsr expression run once, we define $length there, and didnt get recalculation each iteration.