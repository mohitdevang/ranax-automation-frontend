<?php
$pageTitle = 'Pricing - Ranax Social';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . "/partials/head.php"; ?>
</head>
<body>
  <?php include __DIR__ . "/partials/header-public.php"; ?>

<!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center g-4 scroll-animate">
                    <!-- header Content -->
                    <div class="col-md-10 m-auto scroll-animate">
                        <h1 class="hero-title medium textColor mb-3 text-center">
                            Flexible <span class="hero-highlight themeColor"> pricing </span> for everyone
                        </h1>
                        <p class="font-18 regular grayColor mb-4 line-height-26 text-center">
                            Choose the plan that fits your needs. All plans include a 14-day free trial.
                        </p>
                    </div>

                    <!-- Pricing Section -->
                    <div class="col-12 scroll-animate">
                        <!-- Billing Toggle -->
                        <div class="row justify-content-center mb-sm-5 mb-2">
                            <div class="col-12">
                                <div
                                    class="billing-section text-center d-flex justify-content-between align-items-center flex-wrap gap-3">
                                    <div class="d-flex align-items-center flex-wrap gap-sm-5 gap-4">
                                        <!-- Channels Selector -->
                                        <div class="d-flex flex-column gap-1 align-items-start">
                                            <h3 class="billing-title font-24 medium textColor mb-0">Channels</h3>
                                            <p class="billing-subtitle font-14 regular grayColor mb-0">Select your
                                                preferred Channels</p>
                                        </div>

                                        <!-- Channel Counter -->
                                        <div class="channel-counter d-flex align-items-center gap-2">
                                            <button
                                                class="channel-btn d-flex align-items-center justify-content-center cursor-pointer"
                                                type="button">
                                                <span class="font-24 lh-1">−</span>
                                            </button>
                                            <span class="font-24 semibold textColor text-center"
                                                style="min-width: 35px;">1</span>
                                            <button
                                                class="channel-btn d-flex align-items-center justify-content-center cursor-pointer"
                                                type="button">
                                                <span class="font-24 lh-1">+</span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Bootstrap Nav Pills for Billing Toggle -->
                                    <ul class="nav nav-pills billing-toggle justify-content-center" id="billingTabs"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link billing-tab active" id="monthly-tab"
                                                data-bs-toggle="pill" data-bs-target="#monthly" type="button" role="tab"
                                                aria-controls="monthly" aria-selected="true">
                                                Monthly
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link billing-tab" id="annual-tab" data-bs-toggle="pill"
                                                data-bs-target="#annual" type="button" role="tab" aria-controls="annual"
                                                aria-selected="false">
                                                Annual
                                            </button>
                                        </li>
                                    </ul>
                                    </button>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing Cards -->
                        <div class="tab-content" id="billingTabContent">
                            <!-- Monthly Pricing -->
                            <div class="tab-pane fade show active" id="monthly" role="tabpanel"
                                aria-labelledby="monthly-tab">
                                <div class="row g-4 gy-4 justify-content-center">
                                    <!-- Starter Plan -->
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pricing-card h-100" style="border:1px solid #F5BB5C;">
                                            <div class="pricing-header">
                                                <div class="d-flex flex-column align-items-start">
                                                    <h4 class="plan-name font-24 regular textColor mb-0">Starter</h4>
                                                    <div class="plan-price mb-2">
                                                        <span class="font-36 regular grayColor">$29</span>
                                                        <span class="font-16 regular grayColor">/month</span>
                                                    </div>
                                                    <p class=" font-14 regular grayColor mb-4 line-height-24">Perfect
                                                        for freelancers and small teams</p>
                                                </div>
                                                <a href="/plan-purchase"
                                                    class="pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bgYellowColor text-white border-0">Start
                                                    Free
                                                    Trial</a>
                                            </div>
                                            <div class="pricing-features">
                                                <ul class="list-unstyled starter-list mb-0">
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">3 social
                                                            accounts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Basic
                                                            analytics</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Up to 2 team
                                                            members</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">50 posts per
                                                            month</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Professional Plan (Featured) -->
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pricing-card pricing-card-featured h-100">
                                            <div class="pricing-header">
                                                <div class="d-flex flex-column align-items-start">
                                                    <h4 class="plan-name font-24 regular text-white mb-0">Professional
                                                    </h4>
                                                    <div class="plan-price mb-2">
                                                        <span class="font-36 regular text-white">$99</span>
                                                        <span class="font-16 regular text-white">/month</span>
                                                    </div>
                                                    <p class=" font-14 regular whiteLightColor mb-4 line-height-24">For
                                                        growing brands and agencies</p>
                                                </div>
                                              <a href="/plan-purchase"
                                                    class="pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bg-white greenColor border-0">Start
                                                    Free
                                                    Trial</a>
                                            </div>
                                            <div class="pricing-features">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">10 social
                                                            accounts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Advanced
                                                            analytics</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Up to 10 team
                                                            members</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Unlimited posts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Content calendar</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Enterprise Plan -->
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pricing-card h-100" style="border:1px solid #6E508E;">
                                            <div class="pricing-header">
                                                <div class="d-flex flex-column align-items-start">
                                                    <h4 class="plan-name font-24 regular textColor mb-0">Enterprise</h4>
                                                    <div class="plan-price mb-2">
                                                        <span class="font-36 regular grayColor">Custom</span>

                                                    </div>
                                                    <p class=" font-14 regular grayColor mb-4 line-height-24">For large
                                                        organizations</p>
                                                </div>
                                                <a href="/plan-purchase"
                                                    class="pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bgPurpleColor border-0 text-white">Start
                                                    Free
                                                    Trial</a>
                                            </div>
                                            <div class="pricing-features">
                                                <ul class="list-unstyled enterprise-list mb-0">
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Unlimited
                                                            accounts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Custom
                                                            analytics</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Unlimited team
                                                            members</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Unlimited
                                                            posts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">API access</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Dedicated
                                                            support</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Annual Pricing -->
                            <div class="tab-pane fade" id="annual" role="tabpanel" aria-labelledby="annual-tab">
                                <div class="row g-4 gy-4 justify-content-center">
                                    <!-- Starter Plan -->
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pricing-card h-100" style="border:1px solid #F5BB5C;">
                                            <div class="pricing-header">
                                                <div class="d-flex flex-column align-items-start">
                                                    <h4 class="plan-name font-24 regular textColor mb-0">Starter</h4>
                                                    <div class="plan-price mb-2">
                                                        <span class="font-36 regular grayColor">$29</span>
                                                        <span class="font-16 regular grayColor">/month</span>
                                                    </div>
                                                    <p class=" font-14 regular grayColor mb-4 line-height-24">Perfect
                                                        for freelancers and small teams</p>
                                                </div>
                                                <a href="/plan-purchase"
                                                    class="pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bgYellowColor text-white border-0">Start
                                                    Free
                                                    Trial</a>
                                            </div>
                                            <div class="pricing-features">
                                                <ul class="list-unstyled starter-list mb-0">
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">3 social
                                                            accounts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Basic
                                                            analytics</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Up to 2 team
                                                            members</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">50 posts per
                                                            month</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Professional Plan (Featured) -->
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pricing-card pricing-card-featured h-100">
                                            <div class="pricing-header">
                                                <div class="d-flex flex-column align-items-start">
                                                    <h4 class="plan-name font-24 regular text-white mb-0">Professional
                                                    </h4>
                                                    <div class="plan-price mb-2">
                                                        <span class="font-36 regular text-white">$99</span>
                                                        <span class="font-16 regular text-white">/month</span>
                                                    </div>
                                                    <p class=" font-14 regular whiteLightColor mb-4 line-height-24">For
                                                        growing brands and agencies</p>
                                                </div>
                                                <a href="/plan-purchase"
                                                    class="pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bg-white greenColor border-0">Start
                                                    Free
                                                    Trial</a>
                                            </div>
                                            <div class="pricing-features">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">10 social
                                                            accounts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Advanced
                                                            analytics</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Up to 10 team
                                                            members</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Unlimited posts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular text-white">Content calendar</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Enterprise Plan -->
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pricing-card h-100" style="border:1px solid #6E508E;">
                                            <div class="pricing-header">
                                                <div class="d-flex flex-column align-items-start">
                                                    <h4 class="plan-name font-24 regular textColor mb-0">Enterprise</h4>
                                                    <div class="plan-price mb-2">
                                                        <span class="font-36 regular grayColor">Custom</span>

                                                    </div>
                                                    <p class=" font-14 regular grayColor mb-4 line-height-24">For large
                                                        organizations</p>
                                                </div>
                                                <a href="/plan-purchase"
                                                    class="pricing-btn w-100 d-flex justify-content-center align-items-center font-16 regular bgPurpleColor border-0 text-white">Start
                                                    Free
                                                    Trial</a>
                                            </div>
                                            <div class="pricing-features">
                                                <ul class="list-unstyled enterprise-list mb-0">
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Unlimited
                                                            accounts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Custom
                                                            analytics</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Unlimited team
                                                            members</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Unlimited
                                                            posts</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">API access</span>
                                                    </li>
                                                    <li class="feature-item d-flex align-items-start mb-3">
                                                        <img src="assets/images/svg/tik-mark.svg" alt="Check"
                                                            class="feature-check me-3">
                                                        <span class="font-16 regular textLightColor">Dedicated
                                                            support</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Channels Section -->
        <section class="social-channels-section">
            <div class="container">
                <h2 class="text-center font-36  medium mb-4 scroll-animate">
                    Connect Your <span class="hero-highlight skyColor"> Favorite </span> Channels
                </h2>

                <div class="social-slider-wrapper">
                    <div class="social-slider">
                        <!-- First Set -->
                        <div class="social-card">
                            <img src="assets/images/png/Facebook.png" alt="Facebook" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/instagram.png" alt="Instagram" class="social-icon">

                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Linkedin.png" alt="LinkedIn" class="social-icon">

                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/x-twitter-logo.webp" alt="X" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Youtube.png" alt="YouTube" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Pinterest.png" alt="Pinterest" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Threads.png" alt="Threads" class="social-icon">
                        </div>

                        <!-- Duplicate Set for Seamless Loop -->
                        <div class="social-card">
                            <img src="assets/images/png/Facebook.png" alt="Facebook" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/instagram.png" alt="Instagram" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Linkedin.png" alt="LinkedIn" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/x-twitter-logo.webp" alt="X" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Youtube.png" alt="YouTube" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Pinterest.png" alt="Pinterest" class="social-icon">
                        </div>
                        <div class="social-card">
                            <img src="assets/images/png/Threads.png" alt="Threads" class="social-icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Package Comparison Section -->
        <section class="package-comparison-section">
            <div class="container scroll-animate">

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="comparison-table-wrapper scroll-animate">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-sm-0 gap-3">
                                <h4 class="font-36 medium mb-0 textColor">Package <br> comparison</h4>
                                <!-- Table Header -->
                                <div class="d-flex gap-4">
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                        <h4 class="font-24 text-center medium textColor mb-0">Starter</h4>
                                        <button class="comparison-btn font-18 medium">Try Now</button>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                        <h4 class="font-24 text-center medium textColor mb-0">Professional</h4>
                                        <button class="comparison-btn font-18 medium">Try Now</button>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                        <h4 class="font-24 text-center medium textColor mb-0">Enterprise</h4>
                                        <button class="comparison-btn font-18 medium">Try Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="comparison-table">
                                <!-- Content Creation Section -->
                                <div class="comparison-section-header content-creation-header">
                                    <div class="section-title-cell">
                                        <h3 class="font-24 medium text-white mb-0">Content Creation</h3>
                                    </div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                </div>

                                <!-- Ideas Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Ideas</h5>
                                        <p class="font-18 regular textLightColor mb-0">Get fresh content ideas whenever
                                            you need them</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">100 ideas</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Tags Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Tags</h5>
                                        <p class="font-18 regular textLightColor mb-0">Organize and categorize your
                                            content</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">5 Tags</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">250 Tags</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">250 Tags</span>
                                    </div>
                                </div>

                                <!-- Drafts Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Drafts</h5>
                                        <p class="font-18 regular textLightColor mb-0">Save and edit content before
                                            publishing</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Templates Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Templates</h5>
                                        <p class="font-18 regular textLightColor mb-0">Ready-to-use content templates
                                        </p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- AI Assistant Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">AI Assistant</h5>
                                        <p class="font-18 regular textLightColor mb-0">Get AI-powered content
                                            suggestions and optimization</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Board View Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Board View</h5>
                                        <p class="font-18 regular textLightColor mb-0">Visualize your content calendar
                                        </p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Browser Extension Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Browser Extension</h5>
                                        <p class="font-18 regular textLightColor mb-0">Create and schedule content
                                            directly from your browser</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Publishing Section -->
                                <div class="comparison-section-header publishing-header">
                                    <div class="section-title-cell">
                                        <h3 class="font-24 medium text-white mb-0">Publishing</h3>
                                    </div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                </div>

                                <!-- Scheduled posts Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Scheduled posts</h5>
                                        <p class="font-18 regular textLightColor mb-0">Plan and schedule posts for
                                            optimal timing</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">50</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Threaded posts Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Threaded posts</h5>
                                        <p class="font-18 regular textLightColor mb-0">Create engaging threads on X,
                                            Threads, and LinkedIn</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">5</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Queue Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Queue</h5>
                                        <p class="font-18 regular textLightColor mb-0">Automatically publish content at
                                            optimal times</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Visual content calendar Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Visual content calendar</h5>
                                        <p class="font-18 regular textLightColor mb-0">See your content schedule at a
                                            glance</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Reminder notifications Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Reminder notifications</h5>
                                        <p class="font-18 regular textLightColor mb-0">Never miss important posting
                                            opportunities</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Start Page Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Start Page</h5>
                                        <p class="font-18 regular textLightColor mb-0">Personalized dashboard with
                                            insights and quick actions</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Custom video covers Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Custom video covers</h5>
                                        <p class="font-18  regular textLightColor mb-0">Create custom thumbnails for
                                            your
                                            video content</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Engagement Section -->
                                <div class="comparison-section-header engagement-header">
                                    <div class="section-title-cell">
                                        <h3 class="font-18 semibold text-white mb-0">Engagement</h3>
                                    </div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                </div>

                                <!-- Reply to comments Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Reply to comments</h5>
                                        <p class="font-18 regular textLightColor mb-0">Engage with your audience by
                                            replying to comments, messages, and mentions</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Comment score Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Comment score</h5>
                                        <p class="font-18 regular textLightColor mb-0">Track your commenting performance
                                            and follower</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- AI replies Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">AI replies</h5>
                                        <p class="font-18 regular textLightColor mb-0">AI that helps you reply faster
                                            and sound like you</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">5 suggestions per week</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Saved replies Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Saved replies</h5>
                                        <p class="font-18 regular textLightColor mb-0">Reply faster while keeping your
                                            tone consistent</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">1 saved reply</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Comment insights Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Comment insights</h5>
                                        <p class="font-18 regular textLightColor mb-0">See what content is driving your
                                            engagement</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Turn comments into posts Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Turn comments into posts</h5>
                                        <p class="font-18 regular textLightColor mb-0">Turn your best comment exchanges
                                            into a new post</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Analytics Section -->
                                <div class="comparison-section-header analytics-header">
                                    <div class="section-title-cell">
                                        <h3 class="font-18 semibold text-white mb-0">Analytics</h3>
                                    </div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                </div>

                                <!-- Basic analytics Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Basic analytics</h5>
                                        <p class="font-18 regular textLightColor mb-0">Basic engagement data and
                                            audience insights</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">30-day history</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Performance overview Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Performance overview</h5>
                                        <p class="font-18 regular textLightColor mb-0">A snapshot of key metrics to
                                            quickly see your performance</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Custom analytics Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Custom analytics</h5>
                                        <p class="font-18 regular textLightColor mb-0">Create custom reports for legacy
                                            content</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-14 regular textLightColor">-</span>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Best time to post Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Best time to post</h5>
                                        <p class="font-18 regular textLightColor mb-0">Get suggestions for when users,
                                            and your followers are most active on your accounts</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-14 regular textLightColor">-</span>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Audience demographics Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Audience demographics</h5>
                                        <p class="font-18 regular textLightColor mb-0">Age, gender, and location data
                                            for your audience</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-14 regular textLightColor">-</span>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Branded reports Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Branded reports</h5>
                                        <p class="font-18 regular textLightColor mb-0">Add your logo and generate a
                                            custom report</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-14 regular textLightColor">-</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-14 regular textLightColor">-</span>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Reports Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Reports</h5>
                                        <p class="font-18 regular textLightColor mb-0">Download reports and export as a
                                            spreadsheet, PDF, or an image</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-14 regular textLightColor">-</span>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Collaboration Section -->
                                <div class="comparison-section-header collaboration-header">
                                    <div class="section-title-cell">
                                        <h3 class="font-18 semibold text-white mb-0">Collaboration</h3>
                                    </div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                </div>

                                <!-- Included users Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Included users</h5>
                                        <p class="font-18 regular textLightColor mb-0">The number of users who can
                                            access the content in your automation account</p>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">1</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">3</span>
                                    </div>
                                    <div class="value-cell">
                                        <span class="font-20 regular ">Unlimited</span>
                                    </div>
                                </div>

                                <!-- Two-factor authentication Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Two-factor authentication</h5>
                                        <p class="font-18 regular textLightColor mb-0">Two-factor authentication codes
                                            can be generated via Email</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Notes Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Notes</h5>
                                        <p class="font-18 regular textLightColor mb-0">Add internal comments to your
                                            content</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Approval workflows Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Approval workflows</h5>
                                        <p class="font-18 regular textLightColor mb-0">Managers who can draft and
                                            approve posts before your team</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Custom access Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Custom access</h5>
                                        <p class="font-18 regular textLightColor mb-0">Define and manage your content
                                            using to with unlimited users</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Support Section -->
                                <div class="comparison-section-header support-header">
                                    <div class="section-title-cell">
                                        <h3 class="font-18 semibold text-white mb-0">Support</h3>
                                    </div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                    <div class="section-empty-cell"></div>
                                </div>

                                <!-- Self-service knowledge base Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Self-service knowledge base</h5>
                                        <p class="font-18 regular textLightColor mb-0">Access to our comprehensive help
                                            center, video and text how-to guides</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>

                                <!-- Email support Row -->
                                <div class="comparison-row">
                                    <div class="feature-cell">
                                        <h5 class="font-24 medium textColor mb-1">Email support</h5>
                                        <p class="font-18 regular textLightColor mb-0">Fast and helpful support via
                                            email - a whole team of people working for you</p>
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                    <div class="value-cell">
                                        <img src="assets/images/svg/tik-mark.svg" alt="Check" class="comparison-check">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center scroll-animate">
                        <h2 class="section-title font-36 medium textColor mb-3">
                            <span class="hero-highlight themeColor"> Loved </span> by Teams Worldwide
                        </h2>
                    </div>
                </div>
                <div class="testimonials-slider-wrapper">
                    <div class="testimonials-slider">
                        <div class="testimonial-card">
                            <p class="testimonial-text font-16 regular textLightColor mb-4 line-height-26">
                                "Ranax Social helped us explore our entire social media workflow."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="testimonial-avatar">
                                    <span class="font-16 medium text-white">SJ</span>
                                </div>
                                <div>
                                    <h5 class="testimonial-name font-16 medium textColor mb-0">Sarah Johnson</h5>
                                    <p class="testimonial-role font-14 regular textLightColor mb-0">Tech Startup Co</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <p class="testimonial-text font-16 regular textLightColor mb-4 line-height-26">
                                "The scheduling features save us hours every week. Highly recommended!"
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="testimonial-avatar">
                                    <span class="font-16 medium text-white">MC</span>
                                </div>
                                <div>
                                    <h5 class="testimonial-name font-16 medium textColor mb-0">Michael Chen</h5>
                                    <p class="testimonial-role font-14 regular textLightColor mb-0">Digital Marketing
                                        Pro</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <p class="testimonial-text font-16 regular textLightColor mb-4 line-height-26">
                                "Best social media management tool we've used. The analytics are incredible."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="testimonial-avatar">
                                    <span class="font-16 medium text-white">EW</span>
                                </div>
                                <div>
                                    <h5 class="testimonial-name font-16 medium textColor mb-0">Emma Williams</h5>
                                    <p class="testimonial-role font-14 regular textLightColor mb-0">Growth Collective
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <p class="testimonial-text font-16 regular textLightColor mb-4 line-height-26">
                                "Ranax Social helped us explore our entire social media workflow."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="testimonial-avatar">
                                    <span class="font-16 medium text-white">SJ</span>
                                </div>
                                <div>
                                    <h5 class="testimonial-name font-16 medium textColor mb-0">Sarah Johnson</h5>
                                    <p class="testimonial-role font-14 regular textLightColor mb-0">Tech Startup Co</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <p class="testimonial-text font-16 regular textLightColor mb-4 line-height-26">
                                "The scheduling features save us hours every week. Highly recommended!"
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="testimonial-avatar">
                                    <span class="font-16 medium text-white">MC</span>
                                </div>
                                <div>
                                    <h5 class="testimonial-name font-16 medium textColor mb-0">Michael Chen</h5>
                                    <p class="testimonial-role font-14 regular textLightColor mb-0">Digital Marketing
                                        Pro</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <p class="testimonial-text font-16 regular textLightColor mb-4 line-height-26">
                                "Best social media management tool we've used. The analytics are incredible."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="testimonial-avatar">
                                    <span class="font-16 medium text-white">EW</span>
                                </div>
                                <div>
                                    <h5 class="testimonial-name font-16 medium textColor mb-0">Emma Williams</h5>
                                    <p class="testimonial-role font-14 regular textLightColor mb-0">Growth Collective
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container scroll-animate">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center scroll-animate">
                        <h2 class="section-title font-36 medium textColor mb-3">
                            Frequently Asked <span class="hero-highlight themeColor">Questions</span>
                        </h2>
                        <p class="section-desc font-18 regular textLightColor mb-0 line-height-26 mx-auto">
                            Get answers to the most common questions about our pricing and plans.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="accordion faq-accordion" id="faqAccordion">

                            <!-- FAQ Item 1 -->
                            <div class="accordion-item faq-item scroll-animate">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                        aria-controls="collapse1">
                                        <span class="font-18 medium textColor">What are the billing options for Ranax
                                            Automation paid plans?</span>
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body faq-body">
                                        <p class="font-16 regular textLightColor mb-0 line-height-26">
                                            You can choose to pay for your plan on a monthly or annual basis. By
                                            selecting annual billing, you'll receive a 20% discount. You can switch
                                            between monthly and annual billing at any time. If you switch billing
                                            frequencies, any necessary prorations or refunds will be automatically
                                            applied.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="accordion-item faq-item scroll-animate">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                        aria-controls="collapse2">
                                        <span class="font-18 medium textColor">What payment methods does Ranax
                                            Automation accept?</span>
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body faq-body">
                                        <p class="font-16 regular textLightColor mb-0 line-height-26">
                                            We accept all major credit cards including Visa, Mastercard, American
                                            Express, and Discover. We also support PayPal payments and bank transfers
                                            for annual subscriptions. All payments are processed securely through our
                                            encrypted payment gateway.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="accordion-item faq-item scroll-animate">
                                <h2 class="accordion-header" id="faq3">
                                    <button class="accordion-button faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                        aria-controls="collapse3">
                                        <span class="font-18 medium textColor">Can I keep my three free channels if I
                                            upgrade from Ranax Automation's Free plan to a paid plan?</span>
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body faq-body">
                                        <p class="font-16 regular textLightColor mb-0 line-height-26">
                                            Yes, absolutely! When you upgrade from our Free plan to any paid plan,
                                            you'll keep all your existing connected channels plus gain access to
                                            additional channels based on your chosen plan. Your content, scheduling, and
                                            analytics history will also be preserved during the upgrade.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 4 -->
                            <div class="accordion-item faq-item scroll-animate">
                                <h2 class="accordion-header" id="faq4">
                                    <button class="accordion-button faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                        aria-controls="collapse4">
                                        <span class="font-18 medium textColor">Does Ranax Automation have a free
                                            trial?</span>
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body faq-body">
                                        <p class="font-16 regular textLightColor mb-0 line-height-26">
                                            Yes! We offer a 14-day free trial for all our paid plans. During the trial,
                                            you'll have full access to all premium features with no limitations. No
                                            credit card is required to start your trial, and you can cancel anytime
                                            before the trial ends without being charged.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 5 -->
                            <div class="accordion-item faq-item scroll-animate">
                                <h2 class="accordion-header" id="faq5">
                                    <button class="accordion-button faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                        aria-controls="collapse5">
                                        <span class="font-18 medium textColor">When were the prices of Ranax
                                            Automation's plans last updated?</span>
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body faq-body">
                                        <p class="font-16 regular textLightColor mb-0 line-height-26">
                                            Our current pricing structure was last updated in January 2025. We regularly
                                            review our pricing to ensure we're providing the best value for our
                                            customers while continuing to improve our platform. Any pricing changes are
                                            communicated to existing customers at least 30 days in advance.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 6 -->
                            <div class="accordion-item faq-item scroll-animate">
                                <h2 class="accordion-header" id="faq6">
                                    <button class="accordion-button faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                                        aria-controls="collapse6">
                                        <span class="font-18 medium textColor">What happens at the end of the 14-day
                                            trial?</span>
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body faq-body">
                                        <p class="font-16 regular textLightColor mb-0 line-height-26">
                                            At the end of your 14-day trial, you can choose to subscribe to a paid plan
                                            to continue using premium features. If you don't subscribe, your account
                                            will automatically revert to our Free plan, and you'll retain access to
                                            basic features with up to 3 social media channels.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 7 -->
                            <div class="accordion-item faq-item scroll-animate">
                                <h2 class="accordion-header" id="faq7">
                                    <button class="accordion-button faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false"
                                        aria-controls="collapse7">
                                        <span class="font-18 medium textColor">How does Ranax Automation's new pricing
                                            help me save as I grow?</span>
                                    </button>
                                </h2>
                                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="faq7"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body faq-body">
                                        <p class="font-16 regular textLightColor mb-0 line-height-26">
                                            Our tiered pricing structure is designed to scale with your business. As you
                                            grow and need more channels, team members, or advanced features, you only
                                            pay for what you use. Plus, our annual billing option offers significant
                                            savings, and higher-tier plans provide better per-channel value, making it
                                            more cost-effective as your social media presence expands.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

  <?php include __DIR__ . "/partials/footer.php"; ?>
  <?php include __DIR__ . "/partials/scripts.php"; ?>
</body>
</html>
