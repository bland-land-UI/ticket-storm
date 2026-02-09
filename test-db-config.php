<?php
// Test database configuration
require_once 'config/database.php';

header('Content-Type: application/json');

echo json_encode([
    'DB_HOST' => DB_HOST,
    'DB_USER' => DB_USER,
    'DB_NAME' => DB_NAME,
    'config_file' => realpath('config/database.php'),
    'current_time' => date('Y-m-d H:i:s')
]);
?>
