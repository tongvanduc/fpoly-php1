<?php

require_once '../connect-db.php';

try {
    $sql = "SELECT * FROM brands;";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) { 
    die($e->getMessage());
}
