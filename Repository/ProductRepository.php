<?php

class ProductRepository {
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getProductsNewArrival(): array{
        $stmt = $this->pdo->prepare("SELECT * FROM `products` WHERE `image_url` IS NOT NULL AND `image_url` !='' ORDER BY `added_at` DESC LIMIT 3");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsByCategoryId(int $categoryId): array {
        $stmt = $this->pdo->prepare("SELECT p.id, p.item, p.price, p.image_url, p.brand, p.description 
                                 FROM `products` p
                                 JOIN subcategories s ON p.subcategory_id = s.id
                                 WHERE s.category_id = :category_id
                                 ORDER BY p.added_at DESC");
        $stmt->execute(['category_id' => $categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
