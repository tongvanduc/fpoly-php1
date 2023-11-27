<?php

require_once '../connect-db.php';

try {
    $sql = "SELECT 
                p.id as p_id, 
                p.name as p_name, 
                p.img as p_img, 
                p.sku as p_sku, 
                b.name as b_name
            FROM posts as p
            INNER JOIN categories as c
                ON c.id = p.brand_id 
            ORDER BY p.id DESC;";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($result);
    // die;
} catch (Exception $e) { 
    die($e->getMessage());
}
