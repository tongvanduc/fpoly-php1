<?php

// Đây là biến
$variable1;
$variable2 = "Ahihi";
$variable3 = 1111;
$variable4 = true;
$variable5 = null;
$variable6 = 10.25;
$variable7 = [1, 3, 5];
$variable8 = array(1, 3, 5);

/* 
    Thao tác cơ bản với biến
    Toán tử phổ biến: Cộng, trừ, nhân, chia, lấy dư
*/
$a = 1;
$b = 2;
$c1 = $a + $b;
$c2 = $a - $b;
$c3 = $a * $b;
$c4 = $a / $b;
$c5 = $a % $b;

echo '$a  = ' . $a . '<br>';
echo '$b  = ' . $b . '<br>';
echo '$c1 = ' . $c1 . '<br>';
echo '$c2 = ' . $c2 . '<br>';
echo '$c3 = ' . $c3 . '<br>';
echo '$c4 = ' . $c4 . '<br>';
echo '$c5 = ' . $c5 . '<br>';

$array1 = [1, 2, 3, 4, 5, 6];
$array2 = [
    'ahihi' => [
        "key1" => "Value1",
        "key2" => "Value2",
        "key3" => "Value3",
    ],
    [
        "key1" => "Value1",
        "key2" => "Value2",
        "key3" => "Value3",
    ]
];

echo "<pre>";
var_dump($array1);
echo '<br>';
print_r($array2);

// Biểu thức điều kiện + foreach
/*
    Hiển thị danh sách số chia hết cho 2
*/
$array3 = [1, 2, 3, 4, 5, 6, 7, 8];
$array4 = []; // Mảng chứa Số chia hết cho 2
$array5 = []; // Mảng chứa Số KHÔNG chia hết cho 2

foreach ($array3 as $key => $value) {
    if ($value % 2 == 0) {
        $array4[] = $value;
    } else {
        array_push($array5, $value);
    }
}

echo 'Mảng chứa Số chia hết cho 2' . '<br>';
print_r($array4);

echo 'Mảng chứa Số KHÔNG chia hết cho 2' . '<br>';
print_r($array5);