<?php

require_once '../connect-db.php';

try {
    $sql = "SELECT * FROM categories ORDER BY id DESC;";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) { 
    die($e->getMessage());
}
