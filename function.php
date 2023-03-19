<?php

define('CALCULATOR_VERSION', '1.0');

$multiDimArray = array(
    array(1, 2, 3),
    array("apple", "banana", "orange", "Grape", "Cherry"),
    array(true, false, true)
);

// make a for loop
for ($i = 0; $i < 3; $i++) {
    echo $multiDimArray[$i][0];
    }


include'index.php';

function myCalculator($num01, $oper, $num02) {
    $result = 0;
    $calculation = "";
    switch ($oper) {
        case "add":
            $result = $num01 + $num02;
            $calculation = "$num01 + $num02";
            break;
        case "sub":
            $result = $num01 - $num02;
            $calculation = "$num01 - $num02";
            break;
        case "multiply":
            $result = $num01 * $num02;
            $calculation = "$num01 * $num02";
            break;
        case "divide":
            $result = $num01 / $num02;
            $calculation = "$num01 / $num02";
            break;
        case "sqrt":
            $result = sqrt($num01);
            $calculation = "√$num01";
            break;
        case "pow":
            $result = pow($num01, $num02);
            $calculation = "$num01^$num02";
            break;
        case "sin":
            $result = sin($num01);
            $calculation = "sin($num01)";
            break;
        case "cos":
            $result = cos($num01);
            $calculation = "cos($num01)";
            break;
        case "tan":
            $result = tan($num01);
            $calculation = "tan($num01)";
            break;
        case "asin":
            $result = asin($num01);
            $calculation = "asin($num01)";
            break;
        case "acos":
            $result = acos($num01);
            $calculation = "acos($num01)";
            break;
        case "atan":
            $result = atan($num01);
            $calculation = "atan($num01)";
            break;
        case "log":
            $result = log10($num01);
            $calculation = "log($num01)";
            break;
        case "ln":
            $result = log($num01);
            $calculation = "ln($num01)";
            break;
        case "abs":
            $result = abs($num01);
            $calculation = "|$num01|";
            break;
        case "floor":
            $result = floor($num01);
            $calculation = "floor($num01)";
            break;
        case "ceil":
            $result = ceil($num01);
            $calculation = "ceil($num01)";
            break;
        default:
            return "There was an error!";
    }
    return $result . " (" . $calculation . ")";
}


$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Result: " . myCalculator($num01, $oper, $num02);


?>
