<?php

class Math
{
public function sum(array $values)
{
$sum = 0;
foreach ($values as $value) {
if ($sum != 0) {
print $sum . "+" . $value . " = " . $sum . "\n";
}
$sum = $sum + $value;
}
return $sum;
}

public function sub($minuend, $subtrahend)
{
return $minuend - $subtrahend;
}

public function multiple(array $values)
{
$sum = 1;
foreach ($values as $value) {
$sum = $sum * $value;
}
return $sum;
}

public function ownPow($value, $pow)
{
$result = pow($value, $pow);
print $value."² =" .$result. "\n";
return $result;
}

public function division($dividend, $divisor)
{
$result = $dividend / $divisor;
print $dividend . "/" . $divisor . " = " . $result . "\n";
return $result;
}
}

$math = new Math();
$dividend = $math->division(1, 2);
$dividend = $math->sum([2, $dividend]);
$dividend = $math->ownPow($dividend, 2);
$divisor = $math->division(3, 4);
$divisor = $math->sum([3 + $divisor]);
$result = $math->division($dividend, $divisor);