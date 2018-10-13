<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Simple PHP Calculator</title>
</head>
<body>
 <?php 
 $a = $_GET["num1"];
 $b = $_GET["num2"];
 $opa = $_GET["opa"];

 switch( $opa) {
    case "+": echo "Result of addition = ";
    echo $sum= $a + $b; break;
    case "-": echo "Result of subtraction = ";
    echo $sum= $a - $b; break;
    case "*": echo "Result of multiplication = ";
    echo $sum= $a * $b; break;
    case "/": echo "Result of division = ";
    echo $sum= $a / $b; break;
}
 ?>

</body>
</html> 