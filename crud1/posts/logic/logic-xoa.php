<?php

require_once '../connect-db.php';

try {
    $sql = "DELETE FROM posts WHERE id = :id;";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":id", $_GET['id']);

    $stmt->execute();
} catch (Exception $e) { 
    die($e->getMessage());
}
