<?php
include 'inc/header.php';

require_once 'config/db_connect.php';
require_once 'Repository/CategoryRepository.php';

/** @var TYPE_NAME $pdo */
$categoryRepository = new CategoryRepository($pdo);
$categories = $categoryRepository->getCategories();
?>

<div class="container mt-5">
    <h3 class="text-center mb-4">Add Product to Basket</h3>

    <div class="row">
        <div class="col-md-5 mb-4">
            <form id="productForm" novalidate>
                <!-- Category -->
                <div class="mb-3">
                    <label for="pickCategory" class="form-label">Category</label>
                    <select id="pickCategory" class="form-select" required>
                        <option value="">Pick category</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= htmlspecialchars($category['id']) ?>">
                                <?= htmlspecialchars($category['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">Please select category!</div>
                </div>

                <!-- Product -->
                <div class="mb-3">
                    <label for="pickProduct" class="form-label">Product</label>
                    <select id="pickProduct" class="form-select" required>
                        <option value="">Choose product</option>
                    </select>
                    <div class="invalid-feedback">Please pick a product!</div>
                </div>

                <!-- Quantity -->
                <div class="mb-3">
                    <label for="quantityInput" class="form-label">Quantity</label>
                    <input type="number" id="quantityInput" class="form-control" min="1" placeholder="Quantity" required>
                    <div class="invalid-feedback">Please choose quantity!</div>
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-danger rounded-4 mt-2" id="addToBasket">
                        <i class="bi bi-cart3 me-2"></i> Add to basket
                    </button>
                </div>
            </form>
        </div>

        <div class="col-md-7">
            <h4>Selected items</h4>
            <ul class="list-group" id="basketList"></ul>

            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-danger rounded-4 mt-1 mb-2" id="confirmOrder">
                    Confirm Order
                </button>
            </div>

            <h4 class="mt-4">Confirmed Products</h4>
            <ul class="list-group" id="confirmedToBasket"></ul>
        </div>
    </div>
</div>

<script>
    document.getElementById('pickCategory').addEventListener('change', function() {
        const categoryId = this.value;
        const productSelect = document.getElementById('pickProduct');
        productSelect.innerHTML = '<option value="">Loading...</option>';

        if (!categoryId) {
            productSelect.innerHTML = '<option value="">Choose product</option>';
            return;
        }

        fetch('get_products.php?category_id=' + categoryId)
            .then(res => res.json())
            .then(data => {
                productSelect.innerHTML = '<option value="">Choose product</option>';
                if (data.length === 0) {
                    productSelect.innerHTML = '<option value="">No products found</option>';
                    return;
                }
                data.forEach(p => {
                    productSelect.innerHTML += `<option value="${p.id}">${p.item}</option>`;
                });
            })
            .catch(err => {
                console.error(err);
                productSelect.innerHTML = '<option value="">Error loading products</option>';
            });
    });
</script>

<script src="js/productToBasket.js"> </script>

<?php include 'inc/footer.php'; ?>
