<?php

echo "<pre>";

$array1 = [10, 5, 15, 30];                          // Tuần tự
echo $array1[2] . PHP_EOL;

$array2 = [                                         // Liên hợp
    'name' => 'Nguyễn Văn A',
    'age' => 25
];
echo $array2['name'] . PHP_EOL;

$array3 = [                                         // Đa chiều
    ['name' => 'Nguyễn Văn A', 'age' => 35],
    ['name' => 'Nguyễn Văn B', 'age' => 28],
    ['name' => 'Nguyễn Văn C', 'age' => 96],
];
echo $array3[1]['age'] . PHP_EOL;

$array4 = [
    ['name' => 'Nguyễn Văn A', 'age' => 35],
    ['name' => 'Nguyễn Văn B', 'age' => 28],
    [
        'name' => 'Nguyễn Văn C',
        'age' => 96,
        'points' => [
            'Web2' => 10,
            'PHP2' => 9
        ]
    ],
];
echo $array4[2]['points']['PHP2'] . PHP_EOL;

// Hàm array_merge — Gộp một hoặc nhiều mảng
$a = [1, 2, 'a' => 'xxxxx'];
$b = ['name' => 'Nguyễn Văn A', 'age' => 35];
$c = [1, 2, 'a' => 'xxxxx2', 8];

$arrayMerged = array_merge($a, $b, $c);
$arrayMerged2 = [...$a, ...$b, ...$c];

print_r($arrayMerged);
print_r($arrayMerged2);

// Hàm array_push — Thêm một hoặc nhiều phần tử vào cuối mảng
$a = [1, 2, 'a' => 'xxxxx'];

array_push($a, 15);
array_push($a, 'XXXX');
array_push($a, [8979, 'uyhbnm']);

print_r($a);

// Hàm in_array — Kiểm tra xem một giá trị có tồn tại trong một mảng không
if (in_array('XXXX', $a)) {
    echo "OK" . PHP_EOL;
} else {
    echo "!OK" . PHP_EOL;
}

if (in_array([8979, 'uyhbnm'], $a)) {
    echo "OK" . PHP_EOL;
} else {
    echo "!OK" . PHP_EOL;
}

// Hàm explode() —  Tách một chuỗi thành 1 mảng theo 1 ký tự
$str = "Bé này OK Không!OK";
echo $str . PHP_EOL;
$array = explode('!', $str);
print_r($array);

// Hàm implode() — Gộp 1 mảng thành chuỗi theo 1 ký tự
$str = implode(' - ', $array);
echo $str . PHP_EOL;

// Hàm unset() — Xóa biến or phần tử mảng
unset($a['a']);
print_r($a);

// unset($a);
// print_r($a);
