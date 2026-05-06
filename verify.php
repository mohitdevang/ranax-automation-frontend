<?php
$pageTitle = 'Verify - Ranax Social';
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
                            <h3 class="font-20 textColor mb-0 medium">Verify your number </h3>
                            <h4 class="font-14 regular textLightColor mb-0 text-center col-md-9">Enter the 6-digit code
                                Sent to your whatsapp number </h4>
                        </div>
                        <!-- Login Form -->
                        <form class="login-form position-relative">
                            <!-- OTP Input Boxes -->
                            <div class="otp-container d-flex justify-content-center gap-2 mb-4">
                                <input type="text" maxlength="1" class="otp-input text-center font-24 semibold textColor" />
                                <input type="text" maxlength="1" class="otp-input text-center font-24 semibold textColor" />
                                <input type="text" maxlength="1" class="otp-input text-center font-24 semibold textColor" />
                                <input type="text" maxlength="1" class="otp-input text-center font-24 semibold textColor" />
                                <input type="text" maxlength="1" class="otp-input text-center font-24 semibold textColor" />
                                <input type="text" maxlength="1" class="otp-input text-center font-24 semibold textColor" />
                            </div>

                            <h5 class="regular font-16 textColor mb-3 text-center">Code sent to <span
                                    class="semibold">+91 98XXXXXX12</span></h5>
                            <!-- Divider -->
                            <div class="login-divider d-flex align-items-center mb-3">
                                <span class="divider-line flex-grow-1"></span>
                                <span class="divider-line flex-grow-1"></span>
                            </div>

                            <h5 class="regular font-16 textColor mb-2 text-center">Didn't receive a code ? <span
                                    class="semibold">Resend in 29s</span></h5>
                            <h5 class="semibold font-16 textColor mb-0 text-center">Edit Number</h5>

                            <!-- Sign In Button -->
                            <a href="/newPassword" type="submit"
                                class="login-btn w-100 font-16 semibold mb-3 text-center mt-4 position-relative text-white cursor-pointer overflow-hidden border-0">Sand
                                Code</a>
                        </form>
                        <!-- Background Decorative Elements -->
                        <div class="login-bg-vector-right position-absolute">
                            <img src="assets/images/svg/login-bg-vector.svg" alt="Background Vector">
                        </div>
                    </div>
                    <!-- Sign Up Link -->
                    <div class="text-center mt-3">
                        <p class="font-16 regular textColor mb-2">
                            Don't have an account? <a href="<?php echo rs_base_url('register'); ?>" class="semibold themeColor"> Sign
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
