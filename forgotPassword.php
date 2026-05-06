<?php
$pageTitle = 'Forgot Password - Ranax Social';
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
                            <h3 class="font-20 textColor mb-0 medium">Forgot Password</h3>
                            <h4 class="font-14 regular textLightColor mb-0 text-center col-md-9">Enter your whatsapp
                                number to receive a 6-digit verification code to reset your password </h4>
                        </div>
                        <!-- Login Form -->
                        <form class="login-form position-relative">

                            <div class="mb-5">
                                <label for="mobileInput" class="mb-1 font-14 medium textColor">WhatsApp Number</label>
                                <div class="d-flex gap-2 position-relative">
                                    <div class="country-code-wrapper">
                                        <div class="country-code-display form-control login-input font-14"
                                            id="countryCodeDisplay">
                                            <div class="d-flex align-items-center gap-2">
                                                <img id="flagDisplay" src="assets/images/flags/us.svg" alt="Flag"
                                                    class="flag-img">
                                                <span id="codeDisplay">+1</span>
                                            </div>
                                            <span class="dropdown-arrow textLightColor">▼</span>
                                        </div>
                                        <div class="country-code-dropdown" id="countryCodeDropdown">
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+1"
                                                data-flag="assets/images/flags/us.svg">
                                                <img src="assets/images/flags/us.svg" alt="USA" class="flag-img">
                                                <span class="font-14">+1</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+44"
                                                data-flag="assets/images/flags/gb.svg">
                                                <img src="assets/images/flags/gb.svg" alt="UK" class="flag-img">
                                                <span class="font-14">+44</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+91"
                                                data-flag="assets/images/flags/in.svg">
                                                <img src="assets/images/flags/in.svg" alt="India" class="flag-img">
                                                <span class="font-14">+91</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+86"
                                                data-flag="assets/images/flags/cn.svg">
                                                <img src="assets/images/flags/cn.svg" alt="China" class="flag-img">
                                                <span class="font-14">+86</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+81"
                                                data-flag="assets/images/flags/jp.svg">
                                                <img src="assets/images/flags/jp.svg" alt="Japan" class="flag-img">
                                                <span class="font-14">+81</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+33"
                                                data-flag="assets/images/flags/fr.svg">
                                                <img src="assets/images/flags/fr.svg" alt="France" class="flag-img">
                                                <span class="font-14">+33</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+49"
                                                data-flag="assets/images/flags/de.svg">
                                                <img src="assets/images/flags/de.svg" alt="Germany" class="flag-img">
                                                <span class="font-14">+49</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+39"
                                                data-flag="assets/images/flags/it.svg">
                                                <img src="assets/images/flags/it.svg" alt="Italy" class="flag-img">
                                                <span class="font-14">+39</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+34"
                                                data-flag="assets/images/flags/es.svg">
                                                <img src="assets/images/flags/es.svg" alt="Spain" class="flag-img">
                                                <span class="font-14">+34</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+61"
                                                data-flag="assets/images/flags/au.svg">
                                                <img src="assets/images/flags/au.svg" alt="Australia" class="flag-img">
                                                <span class="font-14">+61</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+55"
                                                data-flag="assets/images/flags/br.svg">
                                                <img src="assets/images/flags/br.svg" alt="Brazil" class="flag-img">
                                                <span class="font-14">+55</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+27"
                                                data-flag="assets/images/flags/za.svg">
                                                <img src="assets/images/flags/za.svg" alt="South Africa"
                                                    class="flag-img">
                                                <span class="font-14">+27</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+971"
                                                data-flag="assets/images/flags/ae.svg">
                                                <img src="assets/images/flags/ae.svg" alt="UAE" class="flag-img">
                                                <span class="font-14">+971</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+65"
                                                data-flag="assets/images/flags/sg.svg">
                                                <img src="assets/images/flags/sg.svg" alt="Singapore" class="flag-img">
                                                <span class="font-14">+65</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+60"
                                                data-flag="assets/images/flags/my.svg">
                                                <img src="assets/images/flags/my.svg" alt="Malaysia" class="flag-img">
                                                <span class="font-14">+60</span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control login-input font-14" id="mobileInput"
                                        placeholder="WhatsApp Number" style="flex: 1;">
                                </div>
                            </div>

                            <!-- Sign In Button -->
                            <a href="/verify"  type="submit"
                                class="login-btn w-100 font-16 semibold mb-3 position-relative text-white cursor-pointer overflow-hidden border-0 text-center">Sand
                                Code</a>

                            <!-- Divider -->
                            <div class="login-divider d-flex align-items-center mb-3">
                                <span class="divider-line flex-grow-1"></span>
                                <span class="divider-text font-14 regular textLightColor px-3">Or</span>
                                <span class="divider-line flex-grow-1"></span>
                            </div>

                            <!-- Google Sign In -->
                            <a href="/login" type="button"
                                class="google-btn w-100 font-16 medium d-flex justify-content-center align-items-center gap-2">
                                Back to Sign In

                            </a>
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
