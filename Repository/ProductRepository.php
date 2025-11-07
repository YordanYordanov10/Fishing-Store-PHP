<?php

class ProductRepository {
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getProductsNewArrival(): array{
        $stmt = $this->pdo->prepare("SELECT * FROM `products` ORDER BY `added_at` DESC LIMIT 3");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
