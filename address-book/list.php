<?php

require __DIR__.'/db-connect.php';

$sql = "SELECT * FROM address_book ORDER BY ab_id LIMIT 5";
$stmt = $pdo->query($sql);
$row = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($row, JSON_UNESCAPED_UNICODE);