<?php
header('Content-Type: application/json');
require 'db.php';

$input = json_decode(file_get_contents('php://input'), true);
$content = trim($input['content'] ?? '');
if ($content === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Content required']);
    exit;
}

$stmt = $pdo->prepare('INSERT INTO notes (content, created_at) VALUES (?, NOW())');
$stmt->execute([$content]);

echo json_encode(['success' => true]);
