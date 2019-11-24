<?php
function binary($number)
{
    if ($number == 0)
        return 0;
    else
        return ($number % 2 + 10 * binary($number / 2));
}

$number = 5;
echo $number . " = " . (binary($number));
echo "<br/>";
$number = 23;
echo $number . " = " . (binary($number));
