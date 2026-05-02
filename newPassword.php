<?php
$pageTitle = 'New Password - Ranax Social';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . "/partials/head.php"; ?>
</head>
<body>

    <div class="login-wrapper d-flex align-items-center justify-content-center min-vh-100">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">
                    <!-- Logo and Welcome Text -->
                    <div class="text-center mb-4">
                        <div class="login-logo mb-0">
                            <img src="assets/images/svg/logo.svg" alt="Ranax Social Logo">
                        </div>
                        <p class="textLightColor font-16 regular textLightColor">Welcome back</p>
                    </div>
                    <div class="login-card position-relative">
                        <!-- Background Decorative Elements -->
                        <div class="login-bg-vector-left position-absolute">
                            <img src="assets/images/svg/login-bg-vector.svg" alt="Background Vector">
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center gap-1 mb-4">
                            <h3 class="font-20 textColor mb-0 medium">Choose a new password</h3>
                            <h4 class="font-14 regular textLightColor mb-0 text-center col-md-10">Make sure your new
                                password is 8 characters or more Try including numbers letters and Punctuation Marks For
                                a strong password </h4>
                        </div>
                        <!-- Login Form -->
                        <form class="login-form position-relative">

                            <!--  new password -->
                            <div class="mb-3">
                                <div class="password-wrapper position-relative">
                                    <input type="password" class="form-control login-input font-14" id="passwordInput"
                                        placeholder="Enter a new password">
                                    <button type="button"
                                        class="password-toggle-btn position-absolute cursor-pointer border-0 d-flex align-items-center justify-content-center"
                                        aria-label="Toggle password visibility">
                                        <img src="assets/images/svg/eye.svg" alt="Show password">
                                    </button>
                                </div>
                            </div>

                            <!-- Confirm your password -->
                            <div class="mb-3">
                                <div class="password-wrapper position-relative">
                                    <input type="password" class="form-control login-input font-14" id="passwordInput"
                                        placeholder="Confirm your password">
                                    <button type="button"
                                        class="password-toggle-btn position-absolute cursor-pointer border-0 d-flex align-items-center justify-content-center"
                                        aria-label="Toggle password visibility">
                                        <img src="assets/images/svg/eye.svg" alt="Show password">
                                    </button>
                                </div>
                            </div>
                            <!-- Sign In Button -->
                            <button type="submit"
                                class="login-btn w-100 font-16 semibold mb-3 mt-3 position-relative text-white cursor-pointer overflow-hidden border-0">Change
                                Password</button>
                        </form>
                        <!-- Background Decorative Elements -->
                        <div class="login-bg-vector-right position-absolute">
                            <img src="assets/images/svg/login-bg-vector.svg" alt="Background Vector">
                        </div>
                    </div>
                    <!-- Sign Up Link -->
                    <div class="text-center mt-3">
                        <p class="font-16 regular textColor mb-2">
                            Don't have an account? <a href="/signup" class="semibold themeColor"> Sign
                                up here</a>
                        </p>
                        <p class="font-12 regular textLightColor mb-0">
                            By signing in, you agree to our Terms of Service and
                            Privacy Policy
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    

  <?php include __DIR__ . "/partials/scripts.php"; ?>
</body>
</html>
