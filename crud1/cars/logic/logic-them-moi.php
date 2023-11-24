<?php

require_once '../../connect-db.php';

try {
    $sql = "
        INSERT INTO cars (name, sku, brand_id, img, description)
        VALUES (:name, :sku, :brand_id, :img, :description);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':brand_id', $_POST['brand_id']);
    $stmt->bindParam(':sku', $_POST['sku']);
    $stmt->bindParam(':description', $_POST['description']);

    $img = $_FILES['img'] ?? null;
    $pathSaveDB = '';
    // Xử lý upload ảnh
    if ($img) { // Khi mà có upload ảnh lên thì mới xử lý upload

        $pathUpload = __DIR__ . '/../uploads/' . $img['name'];

        // Upload file lên để lưu trữ
        if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
            $pathSaveDB = 'uploads/' . $img['name'];
        }
    }

    $stmt->bindParam(':img', $pathSaveDB);

    $stmt->execute();

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}
