<?php 
function myCalculator($num01, $oper, $num02) {
    switch ($oper) {
        case "add":
            return $num01 + $num02;
        case "sub":
            return $num01 - $num02;
        case "multiply":
            return $num01 * $num02;
        case "divide":
            return $num01 / $num02;
        case "sqrt":
            return sqrt($num01);
        case "pow":
            return pow($num01, $num02);
        case "sin":
            return sin($num01);
        case "cos":
            return cos($num01);
        case "tan":
            return tan($num01);
        case "asin":
            return asin($num01);
        case "acos":
            return acos($num01);
        case "atan":
            return atan($num01);
        case "log":
            return log10($num01);
        case "ln":
            return log($num01);
        case "abs":
            return abs($num01);
        case "floor":
            return floor($num01);
        case "ceil":
            return ceil($num01);
        default:
            return "There was an error!";
    }
}


$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " . myCalculator($num01, $oper, $num02);
?>
