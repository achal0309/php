<?php
function power($base,$power=1)
{
    $result = $base ** $power;
    return $result;
}
$var1 = 4;
$var2 = 3;
$temp = power($var1,$var2);
echo $temp;
$num = power($var1);
echo $num;

