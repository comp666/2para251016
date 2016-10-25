<?php
require_once 'ProBase.php';
$objB= New Base (18);
echo $objB -> a;
echo "</br>";
$objP= New ProBase (6);
echo $objP -> b;
$tmp = $objB -> a;
$objB -> a = $objP -> b;
$objP -> b = $tmp;
echo "</br>";
echo $objB -> a;
echo "</br>";
echo $objP -> b;
?>