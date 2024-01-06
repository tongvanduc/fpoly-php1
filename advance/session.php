<?php 

session_start();

echo "<pre>";

$_SESSION['user'] = [
    'name' => 'Nguyen Van A',
    'phone' => '9028887989'
];

$_SESSION['cart'] = [];

$item = [
    'product_id' => 10,
    'product_name' => 'XXXX',
    'quantity' => 2,
    'price' => 20000
];

// array_push($_SESSION['cart'], $item);
$_SESSION['cart'][$item['product_id']] = $item;

print_r($_SESSION);

session_destroy();