<?php

require_once '../../connect-db.php';

try {
    $sql = "
        INSERT INTO categories (name, img, is_active)
        VALUES (:name, :img, :is_active);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':img', $_POST['img']); // Cái này hôm sau học upload thì sửa lại
    $stmt->bindParam(':is_active', $_POST['is_active']);

    $stmt->execute();

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}
