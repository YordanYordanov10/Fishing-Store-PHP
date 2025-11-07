<?php include 'inc/header.php'; ?>
            <div class="row d-flex justify-content-center align-items-center p-5 rounded fs-1">
                Contact
            </div>
            <form action="" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="name">Name:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="name"><i class="bi bi-person-circle"></i></span>
                        <input type="text" class="form-control" placeholder="Enter your name" aria-label="name"
                            aria-describedby="name" minlength="3" maxlength="30" required>
                        <div class="valid-feedback">Looks good</div>
                        <div class="invalid-feedback">
                            Name must be between 3 and 30 characters.
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="email"><i class="bi bi-envelope-at-fill"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                            required>
                        <div class="valid-feedback">Looks good</div>
                        <div class="invalid-feedback">
                            Please type valid email.
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="message">Message:</label>
                    <textarea class="form-control" rows="5" id="message" name="text" placeholder="Message"
                        required></textarea>
                    <div class="valid-feedback">Looks good</div>
                    <div class="invalid-feedback">
                        Please leave your message.
                    </div>
                </div>

                <div class="d-flex text-white p-3 rounded">
                    <div class="mb-2 mt-3 text-dark">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                <a href="terms.php">Agree to terms and conditions</a>
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center text-white p-3 rounded">
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </div>
            </form>

<?php include 'inc/footer.php.php'; ?>