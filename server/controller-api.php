<?php
include_once __DIR__ . '/db.php';

header('Content-Type: application/json');
echo json_encode([
  'results' => $cards,
  'length' => count($cards)
]);
?>