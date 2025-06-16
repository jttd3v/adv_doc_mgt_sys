<?php
header('Content-Type: application/json');
require 'db.php';

$stmt = $pdo->query('SELECT id, content FROM notes ORDER BY id DESC');
$notes = $stmt->fetchAll();

echo json_encode($notes);
