<?php 

$array1 = [];
// $array2 = array();
// $array3 = Array();

$array1 = [1, 2, 3, "ahhihi", 'kuuu', true, false];
$array2 = [
    'name' => 'DucTV44',
    'email' => 'DucTV44@fpt.edu.vn',
    'OK',
    'NO',
    'name2' => 'DucTV444',
    'email2' => 'DucTV444@fpt.edu.vn',
    'OK',
    'NO',
];
echo $array2['name'] . '<br>';

// Danh sách sinh viên
$array3 = [
    [
        'name' => 'SV 1',
        'email'=> 'sv3@gmail.com',
    ],
    [
        'name'=> 'SV 2',
        'email'=> 'sv3@gmail.com',
    ],
    [
        'name'=> 'SV 3',
        'email'=> 'sv3@gmail.com',
    ]
];

foreach ($array3 as $index => $item) {
    echo ++$index .' - ' . $item['name'] .' - ' . $item['email'] , "<br>";
}

// array_merge — Gộp một hoặc nhiều mảng
// array_pop — Xóa phần tử cuối mảng
// array_push — Thêm một hoặc nhiều phần tử vào cuối mảng
// array_shift — Xóa phần tử cuối mảng
// in_array — Kiểm tra xem một giá trị có tồn tại trong một mảng không
// array_key_exists — Kiểm tra xem key or index đã cho có tồn tại trong mảng không
// explode() —  Tách một chuỗi thành 1 mảng theo 1 ký tự
// implode() — Gộp 1 mảng thành chuỗi theo 1 ký tự
// unset() — Xóa biến or phần tử mảng