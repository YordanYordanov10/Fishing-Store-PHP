<?php include 'inc/header.php'; ?>
            <div class="row justify-content-end mt-5">
                <div class="col-md-6 col-sm-6 login-card">

                    <div class="login-register-links text-center mb-3">
                        <a class="login-link" href="login.html">Login</a>
                        <a class="register-link disabled" href="register.html">Register</a>
                    </div>

                    <form class="login-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email">
                            </div>
                            <div class="invalid-feedback">Please enter a valid email</div>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="username"
                                    placeholder="example@gmail.com">
                            </div>
                            <div class="invalid-feedback">Username must be at least 6 symbols</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="Enter your Password">
                            </div>
                            <div class="invalid-feedback">Password must be at least 6 symbols</div>
                        </div>

                         <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your Password">
                            </div>
                            <div class="invalid-feedback">Password must be at least 6 symbols</div>
                        </div>

                        <button type="submit" class="btn btn-danger rounded-4 mt-1 mb-2 w-100">Register</button>
                    </form>

                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="register.html">Login here!</a></p>
                    </div>
                </div>
            </div>
<?php include 'inc/footer.php.php'; ?>