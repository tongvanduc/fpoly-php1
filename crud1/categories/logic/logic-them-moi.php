<?php

require_once '../../connect-db.php';

try {
    $sql = "
        INSERT INTO categories (name, img, is_active)
        VALUES (:name, :img, :is_active);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':is_active', $_POST['is_active']);

    $img = $_FILES['img'] ?? null;
    // Xử lý upload ảnh
    if ($img) { // Khi mà có upload ảnh lên thì mới xử lý upload

        $pathUpload = '../uploads/' . $img['name'];
        $pathSaveDB = 'uploads/' . $img['name'];

        // Upload file lên để lưu trữ
        if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
            $stmt->bindParam(':img', $pathSaveDB);
        } else {
            $pathSaveDB = '';
            $stmt->bindParam(':img', $pathSaveDB);
        }
    } else {
        $stmt->bindParam(':img', $img);
    }

    $stmt->execute();

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}