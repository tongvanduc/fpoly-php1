<?php

session_start(); // Bắt đầu Session, chỗ nào dùng Session thì phải có hàm này

$nam = $_POST["man"];
$nu = $_POST["women"];

$flag = true;

if (strlen($nam) < 10 || strlen($nam) > 50) {  
    $_SESSION['nam'] = 'Số lượng ký tự phải nằm trong khoảng 10 -> 50';
    $flag = false;
} /*else {
    unset($_SESSION['nam']); // Chỉ xóa lỗi của nam
}*/

if (strlen($nu) < 10 || strlen($nu) > 50) {   
    $_SESSION['nu'] = 'Số lượng ký tự phải nằm trong khoảng 10 -> 50';
    $flag = false;
} /*else {
    unset($_SESSION['nu']); // Chỉ xóa lỗi của nữ
}*/

if ($flag) {

    session_destroy(); // Xóa trắng Session

    echo "Nam: "    .   $nam    . "<br>";
    echo "Nữ: "     .   $nu     . "<br>";
    
    $today      = time();                            // Lấy ra timestamp ngày hiện tại
    $startDate  = strtotime($_POST["start_love"]);   // Lấy ra timestamp ngày bắt đầu
    
    /*
        Lấy timestamp ngày hiện tại trừ đi ngày bắt đầu 
        rồi chia cho số giây 1 ngày
    */
    $dayslove = ($today - $startDate) / 86400;
    
    echo "Start Date: " . $startDate    . "<br>";
    echo "Today: "      . $today        . "<br>";
    echo "DaysLove: "   . $dayslove     . "<br>";
} else {
    header("Location: ./dayslove.php");
}
