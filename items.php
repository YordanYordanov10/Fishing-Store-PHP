<?php
require_once 'config/db_connect.php';
require_once 'Repository/ProductRepository.php';

$categoryId = (int)$_GET['category_id'];

/** @var TYPE_NAME $pdo */
$productRepository = new ProductRepository($pdo);
$products = $productRepository->getProductsByCategoryId($categoryId);
?>

<?php include 'inc/header.php'; ?>

<div class="container">
    <div class="row align-items-center mt-5">
        <div class="col py-2">
            <p class="text-center fs-3"><strong>New Arrivals</strong></p>
        </div>
    </div>
    <div class="row mt-1 mb-4 align-items-center">


        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card rounded-4 shadow-lg border-0">
                    <div class="card product-card">
                        <div class="card-body">
                            <div>
                                <h3><span class="badge">New</span></h3>
                            </div>
                            <img src="<?= htmlspecialchars($product['image_url'] ?? 'assets/img/no-image.png') ?>"
                                 class="d-block w-100 product-img" alt="<?= htmlspecialchars($product['item']) ?>">

                            <h2 class="glow fs-4 fw-bold mt-1 mb-4">Price $ <?=$product['price']?></h2>
                            <ul class="list-group list-group-flush fs-6 mb-1 product-img">
                                <li class="list-group-item border-0"><i class="bi bi-check2"><?=$product['description']?></i></li>
                            </ul>
                            <div class="d-flex justify-content-center align-items-center text-white p-1 rounded">
                                <button class="btn btn-danger rounded-4 mt-1 mb-2">
                                    <i class="bi bi-cart3 me-2 fs-5"></i>
                                    Add to basket
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'inc/footer.php'; ?>


