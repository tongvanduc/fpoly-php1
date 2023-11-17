<?php

require_once '../connect-db.php';

try {
    $sql = "SELECT * FROM categories WHERE id = :id LIMIT 1;";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":id", $_GET['id']);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (Exception $e) { 
    die($e->getMessage());
}
