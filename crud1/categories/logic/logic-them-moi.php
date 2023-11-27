<?php

require_once '../../connect-db.php';
require_once '../../session.php';

try {
    // Validate
    if (strlen($_POST['name']) < 5 || strlen($_POST['name']) > 50) {
        $_SESSION['errors']['name'] = 'Tên phải nằm trong khoảng từ 5 -> 50 ký tự';
        // array_push($_SESSION['errors'], 'Tên phải nằm trong khoảng từ 5 -> 50 ký tự');
    } else {
        unset($_SESSION['errors']['name']);
    }

    if (!in_array($_POST['is_active'], [0, 1])) {
        $_SESSION['errors']['is_active'] = 'Is Active chỉ nhận 2 giá trị là 0 và 1';
    } else {
        unset($_SESSION['errors']['is_active']);
    }

    if (isset($_FILES['img'])) {
        if ($_FILES['img']['size'] > 2048 * 1024) {
            $_SESSION['errors']['img'] = 'Dung lượng ảnh vượt quá 2MB';
        } else {
            unset($_SESSION['errors']['img']);
        }
    }

    if (!empty($_SESSION['errors'])) {
        header('Location: ../create.php');
        exit();
    }

    // Thao tác với CSDL
    $sql = "
        INSERT INTO categories (name, img, is_active)
        VALUES (:name, :img, :is_active);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':is_active', $_POST['is_active']);

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
