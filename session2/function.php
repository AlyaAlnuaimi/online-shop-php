<?php

$test = 'out pf scope';
function calculateTax($v1, $tax = 0.14){
    return $v1 * $tax;
}
// if i want to use variable from outside, (use) ..
// (&$test): mean i want to change the variable value in the parameter and inside the function 
// if i didn't use (&) the variable value will change inside the function only. 
$calculateTax2 = function ($val, $tax) use (&$test) {
    // if the want to change the value of (test)
    $test = 'change';
    return $val * $tax;
};

// using arrow function --> 
$doubleValue = fn($v) => $v * 2;


// return the variable name($) -> which is the function at the same time .
echo $calculateTax2(1000, 0.1);
// OR call the function 
//echo calculateTax(1000, 0.2);
echo $doubleValue(15);
?>