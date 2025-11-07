<?php
require_once 'config/db_connect.php';
require_once 'Repository/CategoryRepository.php';
require_once 'Repository/ProductRepository.php';

/** @var TYPE_NAME $pdo */
$categoryRepository = new CategoryRepository($pdo);
$categories = $categoryRepository->getCategories();

$productRepository = new ProductRepository($pdo);
$products = $productRepository->getProductsNewArrival();
?>



<?php include 'inc/header.php'; ?>
            <div class="carousel slide" id="slider">
                <div class="carousel-inner"></div>
            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- New products -->
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

                                <h2 class="glow fs-4 fw-bold mt-1 mb-4"><?=$product['price']?></h2>
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

        <!-- Categories -->


        <div class="container-lg overflow-hidden py-4 mt-2 bg-white">

            <div class="row align-items-center">
                <div class="col py-2">
                    <p class="text-center fs-3"><strong>Categories</strong></p>
                </div>

            </div>

            <div class="row gx-3 gy-4 align-items-center">
                    <?php foreach ($categories as $category): ?>
                    <div class="col-md-3 ms-auto">
                        <div class="card">
                            <img src="<?= htmlspecialchars($category['image_url']) ?>"
                                 alt=""
                                 class="card-img-top">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h2 class="text-white bg-opacity-50 px-3 py-2 rounded strong">
                                    <?= htmlspecialchars($category['name']) ?>
                                </h2>
                            </div>
                            <a href="products.php?category_id=<?= $category['id'] ?>" class="stretched-link"></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>

        </div>

        <!-- Promotions -->
        <div class="container mt-5 mb-5 py-4 promotions">
            <div class="row justify-content-center g-5">
                <div class="col-lg-2">
                    <div class="promo d-flex align-items-center text-white p-3 rounded">
                        <span class="me-2 fs-4"><i class="bi bi-truck"></i></span>
                        <div class="flex-grow-1 text-center">Free delivery for oreders over 25$</div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="promo d-flex align-items-center text-white p-3 rounded">
                        <span class="me-2 fs-4"><i class="bi bi-truck"></i></span>
                        <div class="flex-grow-1 text-center">Discount of 7% for orders over 50$</div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="promo d-flex align-items-center text-white p-3 rounded">
                        <span class="me-2 fs-4"><i class="bi bi-truck"></i></span>
                        <div class="flex-grow-1 text-center">Discount of 10% for orders over 100$</div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="promo d-flex align-items-center text-white p-3 rounded">
                        <span class="me-2 fs-4"><i class="bi bi-truck"></i></span>
                        <div class="flex-grow-1 text-center">Discount of 15% for orders over 200$</div>
                    </div>
                </div>
            </div>
            
<?php include 'inc/footer.php'; ?>        
