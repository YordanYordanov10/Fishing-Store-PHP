<?php include 'inc/header.php'; ?>            <div class="row justify-content-end mt-5">
                <div class="col-md-6 col-sm-6 login-card">

                    <div class="login-register-links text-center mb-3">
                        <a class="login-link disabled" href="login.html">Login</a> 
                        <a class="register-link" href="register.html">Register</a>
                    </div>

                    <form class="login-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                                <input type="email" class="form-control" id="inputEmail"
                                    placeholder="example@gmail.com">
                            </div>
                            <div class="invalid-feedback">Please enter a valid email</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                            <div class="invalid-feedback">Password must be at least 6 symbols</div>
                        </div>

                        <button type="submit" class="btn btn-danger rounded-4 mt-1 mb-2 w-100">Login</button>
                    </form>

                    <div class="text-center mt-3">
                        <p>Don't have an account? <a href="register.html">Register here!</a></p>
                    </div>
                </div>
            </div>
<?php include 'inc/footer.php.php'; ?>