<?php

// Nhúng file kết nối với CSDL vào
require_once 'connect-db.php';

try {
    $tableName = 'products';

    // Câu truy vấn thường
    $sql = "SELECT * FROM $tableName";

    // Chuẩn bị câu truy vấn
    $stmt = $conn->prepare($sql);

    // Thực hiện câu truy vấn
    $stmt->execute();

    // fetchAll để lấy ra dữ liệu
    // PDO::FETCH_ASSOC - chuyển đổi dữ liệu lấy ra thành kiểu mảng column_name => value
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
    die;
}

// echo "<pre>";
// print_r($result);
?>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<table>
    <caption>Các em hiển thị dữ liệu result ở đây</caption>
</table>