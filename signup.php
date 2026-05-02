<?php
$pageTitle = 'Sign up - Ranax Social';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . "/partials/head.php"; ?>
</head>
<body>

    <div class="login-wrapper d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-12 col-md-8 col-lg-5">
                    <!-- Logo and Welcome Text -->
                    <div class="text-center mb-4">
                        <div class="login-logo mb-0">
                            <img src="assets/images/svg/logo.svg" alt="Ranax Social Logo">
                        </div>
                        <p class="textLightColor font-16 regular">Create your account and start managing social media</p>
                    </div>
                    <div class="login-card position-relative">
                        <!-- Background Decorative Elements -->
                        <div class="login-bg-vector-left position-absolute">
                            <img src="assets/images/svg/login-bg-vector.svg" alt="Background Vector">
                        </div>
                        <!-- Sign Up Form -->
                        <form class="login-form position-relative">
                            <!-- Full Name Input -->
                            <div class="mb-3">
                                <label for="fullNameInput" class="mb-1 font-14 medium textColor">Full Name</label>
                                <input type="text" class="form-control login-input font-14" id="fullNameInput"
                                    placeholder="John Doe">
                            </div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="emailInput" class="mb-1 font-14 medium textColor">Email Address</label>
                                <input type="email" class="form-control login-input font-14" id="emailInput"
                                    placeholder="you@example.com">
                            </div>

                            <!-- WhatsApp Number  Input with Country Code -->
                            <div class="mb-3">
                                <label for="mobileInput" class="mb-1 font-14 medium textColor">WhatsApp Number</label>
                                <div class="d-flex gap-2 position-relative">
                                    <div class="country-code-wrapper">
                                        <div class="country-code-display form-control login-input font-14" id="countryCodeDisplay">
                                            <div class="d-flex align-items-center gap-2">
                                                <img id="flagDisplay" src="assets/images/flags/us.svg" alt="Flag" class="flag-img">
                                                <span id="codeDisplay">+1</span>
                                            </div>
                                            <span class="dropdown-arrow textLightColor">▼</span>
                                        </div>
                                        <div class="country-code-dropdown" id="countryCodeDropdown">
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+1" data-flag="assets/images/flags/us.svg">
                                                <img src="assets/images/flags/us.svg" alt="USA" class="flag-img">
                                                <span class="font-14">+1</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+44" data-flag="assets/images/flags/gb.svg">
                                                <img src="assets/images/flags/gb.svg" alt="UK" class="flag-img">
                                                <span class="font-14">+44</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+91" data-flag="assets/images/flags/in.svg">
                                                <img src="assets/images/flags/in.svg" alt="India" class="flag-img">
                                                <span class="font-14">+91</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+86" data-flag="assets/images/flags/cn.svg">
                                                <img src="assets/images/flags/cn.svg" alt="China" class="flag-img">
                                                <span class="font-14">+86</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+81" data-flag="assets/images/flags/jp.svg">
                                                <img src="assets/images/flags/jp.svg" alt="Japan" class="flag-img">
                                                <span class="font-14">+81</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+33" data-flag="assets/images/flags/fr.svg">
                                                <img src="assets/images/flags/fr.svg" alt="France" class="flag-img">
                                                <span class="font-14">+33</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+49" data-flag="assets/images/flags/de.svg">
                                                <img src="assets/images/flags/de.svg" alt="Germany" class="flag-img">
                                                <span class="font-14">+49</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+39" data-flag="assets/images/flags/it.svg">
                                                <img src="assets/images/flags/it.svg" alt="Italy" class="flag-img">
                                                <span class="font-14">+39</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+34" data-flag="assets/images/flags/es.svg">
                                                <img src="assets/images/flags/es.svg" alt="Spain" class="flag-img">
                                                <span class="font-14">+34</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+61" data-flag="assets/images/flags/au.svg">
                                                <img src="assets/images/flags/au.svg" alt="Australia" class="flag-img">
                                                <span class="font-14">+61</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+55" data-flag="assets/images/flags/br.svg">
                                                <img src="assets/images/flags/br.svg" alt="Brazil" class="flag-img">
                                                <span class="font-14">+55</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+27" data-flag="assets/images/flags/za.svg">
                                                <img src="assets/images/flags/za.svg" alt="South Africa" class="flag-img">
                                                <span class="font-14">+27</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+971" data-flag="assets/images/flags/ae.svg">
                                                <img src="assets/images/flags/ae.svg" alt="UAE" class="flag-img">
                                                <span class="font-14">+971</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+65" data-flag="assets/images/flags/sg.svg">
                                                <img src="assets/images/flags/sg.svg" alt="Singapore" class="flag-img">
                                                <span class="font-14">+65</span>
                                            </div>
                                            <div class="country-option d-flex align-items-center gap-2" data-code="+60" data-flag="assets/images/flags/my.svg">
                                                <img src="assets/images/flags/my.svg" alt="Malaysia" class="flag-img">
                                                <span class="font-14">+60</span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control login-input font-14" id="mobileInput"
                                        placeholder="WhatsApp Number" style="flex: 1;">
                                </div>
                            </div>

                            <!-- Company Name Input (Optional) -->
                            <div class="mb-3">
                                <label for="companyInput" class="mb-1 font-14 medium textColor">Company (Optional)</label>
                                <input type="text" class="form-control login-input font-14" id="companyInput"
                                    placeholder="Your company name">
                            </div>

                            <!-- Company Size Input (Optional) -->
                            <div class="mb-3">
                                <label for="companySizeInput" class="mb-1 font-14 medium textColor">Company Size (Optional)</label>
                                <input type="text" class="form-control login-input font-14" id="companySizeInput"
                                    placeholder="Your company size">
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="passwordInput" class="mb-1 font-14 medium textColor">Password</label>
                                <div class="password-wrapper position-relative">
                                    <input type="password" class="form-control login-input font-14" id="passwordInput"
                                        placeholder="••••••••">
                                    <button type="button"
                                        class="password-toggle-btn position-absolute cursor-pointer border-0 d-flex align-items-center justify-content-center"
                                        aria-label="Toggle password visibility">
                                        <img src="assets/images/svg/eye.svg" alt="Show password">
                                    </button>
                                </div>
                                <!-- Password Requirements -->
                                <div class="mt-3 d-flex flex-column gap-2">
                                    <p class="font-12 regular textLightColor mb-0 d-flex align-items-center gap-2"><span class="circle-points"></span>At least 8 characters</p>
                                    <p class="font-12 regular textLightColor mb-0 d-flex align-items-center gap-2"><span class="circle-points"></span>Contains uppercase letter</p>
                                    <p class="font-12 regular textLightColor mb-0 d-flex align-items-center gap-2"><span class="circle-points"></span>Contains lowercase letter</p>
                                    <p class="font-12 regular textLightColor mb-0 d-flex align-items-center gap-2"><span class="circle-points"></span>Contains number</p>
                                </div>
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="mb-3">
                                <label for="confirmPasswordInput" class="mb-1 font-14 medium textColor">Confirm Password</label>
                                <div class="password-wrapper position-relative">
                                    <input type="password" class="form-control login-input font-14" id="confirmPasswordInput"
                                        placeholder="••••••••">
                                    <button type="button"
                                        class="password-toggle-btn position-absolute cursor-pointer border-0 d-flex align-items-center justify-content-center"
                                        aria-label="Toggle password visibility">
                                        <img src="assets/images/svg/eye.svg" alt="Show password">
                                    </button>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="mb-3">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input cursor-pointer m-0" type="checkbox" id="agreeTerms">
                                    <label class="cursor-pointer font-14 regular textColor" for="agreeTerms">
                                        I agree to the <a href="#" class="themeColor">Terms of Service</a> and <a href="#" class="themeColor">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>

                            <!-- Create Account Button -->
                            <button type="submit"
                                class="login-btn w-100 font-16 semibold mb-3 position-relative text-white cursor-pointer overflow-hidden border-0">Create Account</button>

                            <!-- Divider -->
                            <div class="login-divider d-flex align-items-center mb-3">
                                <span class="divider-line flex-grow-1"></span>
                                <span class="divider-text font-14 regular textLightColor px-3">Or sign up with</span>
                                <span class="divider-line flex-grow-1"></span>
                            </div>

                            <!-- Google Sign Up -->
                            <button type="button"
                                class="google-btn w-100 font-16 medium d-flex justify-content-center align-items-center gap-2">
                                Sign Up with google
                                <img src="assets/images/svg/Google.svg" alt="Google" height="18">
                            </button>
                        </form>
                        <!-- Background Decorative Elements -->
                        <div class="login-bg-vector-right position-absolute">
                            <img src="assets/images/svg/login-bg-vector.svg" alt="Background Vector">
                        </div>
                    </div>
                    <!-- Sign In Link -->
                    <div class="text-center mt-3">
                        <p class="font-16 regular textColor mb-0">
                            Already have an account? <a href="/login" class="semibold themeColor">Sign in here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    

  <?php include __DIR__ . "/partials/scripts.php"; ?>
</body>
</html>
