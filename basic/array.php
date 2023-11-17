<?php 

echo "<pre>";

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

// echo $array3[0]['name'];

foreach ($array3 as $index => $item) {
    echo ++$index .' - ' . $item['name'] .' - ' . $item['email'] , "<br>";
}

echo "<div>";
    echo "<h4>count — Đếm số lượng phần tử mảng</h4>";
    $array = [
        1, 
        6, 
        9, 
        'OK', 
        [
            'name'=> 'Ahihi',
            [
                'profile'=> 'keke',
            ]
        ]
    ];
    echo count($array);
echo "</div>";

echo "<div>";
    echo "<h4>array_merge — Gộp một hoặc nhiều mảng</h4>";
    $array1 = [1, 2, 'b' => 'xyz'];
    $array2 = [5, 6, 'b' => '963'];

    $arrayMerge1 = array_merge($array1, $array2);
    $arrayMerge2 = [...$array1, ...$array2];

    print_r($arrayMerge2);
echo "</div>";

echo "<div>";
    echo "<h4>array_pop — Xóa phần tử cuối mảng</h4>";
    $array = [1, 2, 'b' => 'xyz'];

    array_pop($array);

    print_r($array); 
echo "</div>";

echo "<div>";
    echo "<h4>array_push — Thêm một hoặc nhiều phần tử vào cuối mảng</h4>";
    $array = [];

    $array[] = 'Thêm cơ bản 1 phần tử vào mảng';
    $array['key-xyz'] = 'Thêm cơ bản 1 phần tử có KEY vào mảng';

    array_push($array, 'ahihi');
    array_push($array, ['okla'=> 'kakaka']);

    print_r($array); 
echo "</div>";

echo "<div>";
    echo "<h4>in_array — Kiểm tra xem một giá trị có tồn tại trong một mảng không</h4>";
    $array = [1, 5, 'true', 'yhjm,', "XYZ"];

    if (in_array('a', $array)) {
        echo "OK";
    } else {
        echo "NOT OK";
    }
echo "</div>";

echo "<div>";
    echo "<h4>array_key_exists — Kiểm tra xem key or index đã cho có tồn tại trong mảng không</h4>";
    $array = [
        0, 
        1, 
        'a' => 'QKA',
        // 'b' => 'XYZ'
    ];

    // echo array_key_exists('b', $array) ? $array['b'] : '';

    if (array_key_exists('b', $array)) { 
        $array['b'] = 'UYX';
    } else {
        $array['b'] = 'null';
    }

    print_r($array); 
echo "</div>";


echo "<div>";
    echo "<h4>explode() —  Tách một chuỗi thành 1 mảng theo 1 ký tự</h4>";
    
    $str = "Hom nay choi mua, set keo di nhau";

    $array = explode(',', $str);

    print_r($array); 
echo "</div>";

echo "<div>";
    echo "<h4>implode() — Gộp 1 mảng thành chuỗi theo 1 ký tự</h4>";
    
    $str = implode(',', $array);

    echo $str;
echo "</div>";


echo "<div>";
    echo "<h4>unset() — Xóa biến or phần tử mảng</h4>";
    
    $array = [
        0, 
        1, 
        'a' => 'QKA',
        'b' => 'XYZ'
    ];

    unset($array[0]);
    unset($array['a']);
    // unset($array);

    print_r($array); 
echo "</div>";