<?php include 'inc/header.php'; ?>
            <!-- Add product to basket -->
            <div class="row">
                <div class="col-md-5 mb-4">
                    <form id="productForm" novalidate>
                        <h4 class="mb-3">Add Product</h4>

                        <!-- Category -->
                        <div class="mb-3">
                            <select title="categorySelect" name="Category" id="pickCategory" class="form-select"
                                required>
                                <option selected value="">Pick category</option>
                                <option value="Reels">Reels</option>
                                <option value="Rods">Rods</option>
                                <option value="Chairs">Chairs</option>
                                <option value="Luggage">Luggage</option>
                                <option value="Bait Additives">Bait Additives</option>
                                <option value="Alarms">Alarms</option>
                                <option value="Bivvies Shelters">Bivvies Shelters</option>
                                <option value="Tackle Boxes">Tackle Boxes</option>
                            </select>
                            <div class="invalid-feedback">Please select category!</div>
                        </div>

                        <!-- Product -->
                        <div class="mb-3">
                            <select title="productSelect" name="Product" id="pickProduct" class="form-select" required>
                                <option selected value="">Choose product</option>
                                <option value="Berkley fishing line 0.20">Berkley fishing line 0.20</option>
                                <option value="Shimano Vanford 4000">Shimano Vanford 4000</option>
                            </select>
                            <div class="invalid-feedback">Please pick product!</div>
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <input type="number" id="quantityInput" class="form-control" min="1" placeholder="Quantity"
                                required>
                            <div class="invalid-feedback">Please choose quantity!</div>
                        </div>

                        <!-- Button -->
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-danger rounded-4 mt-1 mb-2" id="addToBasket">
                                Add to basket
                            </button>
                        </div>
                    </form>

                </div>
                <!-- Selected item from basket -->
                <div class="col-md-7">
                    <h4 class="mb-3">Selected items</h4>
                    <ul class="list-group" id="basketList">
                    </ul>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-danger rounded-4 mt-1 mb-2" id="confirmOrder">
                            Confirm Order
                        </button>
                    </div>
                </div>
            </div>
            <!-- Confirmed items -->
            <div class="row">
                <div class="col-7">
                    <h4 class="mb-5 mt-4">Confirmed Products to Basket</h4>
                    <div class="mb-2 d-flex justify-content-between fw-bold px-3">
                        <span>Category</span>
                        <span>Product</span>
                        <span>Quantity</span>
                    </div>
                    <ul class="list-group" id="confirmedToBasket">
                    </ul>
                </div>
            </div>
<?php include 'inc/footer.php'; ?>