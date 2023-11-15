<?php 

// Nhúng file kết nối với CSDL vào
require_once 'connect-db.php';

try {
    
    $tableName = 'products';

    $name = 'San Pham X';
    $img = '';
    $price = 100000;

    $sql = "
        INSERT INTO $tableName (name, img, price)
        VALUES (:name, :img, :price);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':price', $price);

    $stmt->execute();
} catch (Exception $e) {
    echo 'ERROR: '. $e->getMessage();
    die;
}
