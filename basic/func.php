<?php

echo "<pre>";

// Hàm có trả về và KHÔNG có trả về
function sum($a, $b)
{
    return $a + $b;
}
$sum = sum(2, 3);
echo 'Hàm có trả về: ' . $sum . PHP_EOL;

function sum2($a, $b)
{
    echo $a + $b . PHP_EOL;
}
echo 'Hàm KHÔNG có trả về: ';
sum2(5, 7);

// Hàm có tham số và KHÔNG có tham số
function helloWorld($msg)
{
    return $msg;
}
function helloWorld2()
{
    return 'Hello World 2!';
}

echo helloWorld('Hello World!') . PHP_EOL;
echo helloWorld('Hello Hello!') . PHP_EOL;
echo helloWorld2() . PHP_EOL;

// Hàm có tham số: Có giá trị mặc định và KHÔNG có
function hi($name, $msg = 'Hi')
{
    return $msg . ': ' . $name;
}

echo hi("Nga") . PHP_EOL;
echo hi("Nga", 'Hello') . PHP_EOL;


//==================Closure & Arrow==========================
$closure1 = function () {
    echo 'Hello Closure !' . PHP_EOL;
};
$closure1();

$y = 5;
array_map(function ($item) use ($y) {
    echo $item * $y . PHP_EOL;
}, [1, 2, 3]);

$fn = fn ($x) => $y * $x;
echo $fn(5) . PHP_EOL;

$arr = [1, 2, 3];
$arr2 = array_map(fn ($item) => $item * $y . PHP_EOL, $arr);
print_r($arr2);
