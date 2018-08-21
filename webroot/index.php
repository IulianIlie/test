<?php
/**
 * Created by PhpStorm.
 * User: Nicolicioiul
 * Date: 8/20/2018
 * Time: 9:23 AM
 */

echo "hello world<br />";

$x=27;
$y=17;
echo "dif of $x-$y=".($x-$y)."<br />";
echo "sum of $y+$x=".($y+$x)."<br />";
echo "end of story<br />";
echo "multiply $x*$y=".($x*$y)."<br />";
function print_info($info = ''){
	print_r($info);
}
print_info( ("name=" . "Petru<br />"));
echo "Fibonacci ==>";
$f1 = 0;
$f2 = 1;

$count = 0;

echo $f1.",";
echo $f2.",";

while($count<=10)
{
    $f3=$f1 + $f2;
    echo $f3.",";

    $f1 = $f2;
    $f2 = $f3;
    $count = $count + 1;
}
$raw = '22. 11. 2018';
$start = \DateTime::createFromFormat('d. m. Y', $raw);

echo 'Start date: ' . $start->format('m/d/Y') . "<br />";
