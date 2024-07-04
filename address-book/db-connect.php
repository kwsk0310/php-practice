<?php

# include __DIR__.'/connect-setting.php';
require __DIR__.'/connect-settings.php';

#echo $db_name;

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo_options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

/*
$stmt = $pdo->query("SELECT * FROM address_book LIMIT 3");

$row = $stmt->fetch();

echo json_encode($row);
*/