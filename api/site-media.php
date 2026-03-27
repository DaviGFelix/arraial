<?php
require_once __DIR__ . '/config.php';
handleOptions();

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'GET') {
    jsonResponse(['success' => false, 'message' => 'Método não permitido'], 405);
}

jsonResponse([
    'success' => true,
    'data' => loadSiteMediaConfig(),
]);
