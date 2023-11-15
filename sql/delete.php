<?php 

// Nhúng file kết nối với CSDL vào
require_once 'connect-db.php';

try {
    
    $tableName = 'products';

    $id = 2;

    $sql = "
        DELETE FROM $tableName 
        WHERE id = :id;
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();
} catch (Exception $e) {
    echo 'ERROR: '. $e->getMessage();
    die;
}
