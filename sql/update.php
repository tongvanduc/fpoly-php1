<?php 

// Nhúng file kết nối với CSDL vào
require_once 'connect-db.php';

try {
    
    $tableName = 'products';

    $name = 'Khoai lang';
    $img = '';
    $price = 15000;
    $id = 1;

    $sql = "
        UPDATE $tableName 
        SET 
            name = :name,
            img = :img,
            price = :price
        WHERE id = :id;
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
} catch (Exception $e) {
    echo 'ERROR: '. $e->getMessage();
    die;
}
