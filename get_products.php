<?php
require_once 'config/db_connect.php';
require_once 'Repository/ProductRepository.php';

header('Content-Type: application/json; charset=utf-8');

$categoryId = (int)($_GET['category_id'] ?? 0);

/** @var TYPE_NAME $pdo */
$productRepo = new ProductRepository($pdo);
$products = $productRepo->getProductsByCategoryId($categoryId);

echo json_encode($products);
