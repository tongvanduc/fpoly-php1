<?php

require_once '../../connect-db.php';

try {
    $sql = "
        UPDATE posts 
        SET 
            name = :name,
            category_id = :category_id,
            img = :img,
            description = :description
        WHERE 
            id = :id;
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':category_id', $_POST['category_id']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':id', $_POST['id']);

    $img = $_FILES['img'] ?? null;
    $pathSaveDB = $_POST['img-current']; // Lưu lại giá trị ảnh hiện tại

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

    if ($_POST['img-current'] && $_POST['img-current'] != $pathSaveDB) {
        unlink($_POST['img-current']);
    }

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}