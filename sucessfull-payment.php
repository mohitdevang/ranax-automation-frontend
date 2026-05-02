<?php
$pageTitle = 'Payment successful - Ranax Social';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . "/partials/head.php"; ?>
  <link href="assets/css/plan-purchase.css" rel="stylesheet">
</head>
<body>

    <div class="page-scroll-area">
        <!-- Navbar -->
        <header class="navbar-container py-3">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="/" class="nav-logo">
                        <img src="assets/images/svg/logo.svg" alt="Ranax Social Logo" />
                    </a>
                    <!-- Navigation Links -->
                    <nav class="nav-menu" id="navMenu">
                        <a class="nav-link-item position-relative font-16 medium" href="/pricing">Pricing</a>
                        <span class="nav-separator font-16 medium text-muted">></span>
                        <a href="/plan-purchase"
                            class="nav-link-item position-relative font-16 medium text-muted ">Confirm your
                            plan</a>
                        <span class="nav-separator font-16 medium text-muted">></span>
                        <a href="/payment-process"
                            class="nav-link-item position-relative font-16 medium text-muted">Make Payment</a>
                              <span class="nav-separator font-16 medium text-muted">></span>
                        <a href="/sucessfull-payment"
                            class="nav-link-item position-relative font-16 medium text-muted active">Payment successful</a>
                    </nav>
                    <!-- Auth Buttons -->
                    <div class="d-flex gap-3 align-items-center">
                        <a href="#"
                            class="font-14 semibold step-number-yellow integration-card-yellow text-white px-3 py-1 rounded-3">Sign
                            Out</a>
                        <div class="user-avatar d-flex align-items-center justify-content-center">
                            <span class="font-14 medium primaryColor">SK</span>
                        </div>
                    </div>
                    <!-- Hamburger -->
                    <div class="nav-toggle flex-column justify-content-between cursor-pointer" id="navToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="main-content p-sm-4 px-2 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 m-auto">
                        <div class="d-flex flex-column align-items-center gap-1 mb-4">
                            <!-- Success Icon -->
                            <div class="success-icon d-flex justify-content-center align-items-center mb-3">
                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="32" cy="32" r="32" fill="#10B981" />
                                    <path d="M20 32L28 40L44 24" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h1 class="font-30 medium mb-0 primaryColor">Payment successful</h1>
                            <p class="font-20 lightGray regular mb-0">Your subscription is now active</p>
                        </div>
                        <div class="plan-details-card">
                            <h3 class="font-24 medium mb-4 textColor">Plan</h3>

                            <!-- Plan Details -->
                            <div class="payment-success-details">
                                <div class="detail-row d-flex justify-content-between align-items-center mb-3">
                                    <span class="font-16 regular textColor">Professional:</span>
                                    <span class="font-16 medium textColor">$117</span>
                                </div>
                                <div class="detail-row d-flex justify-content-between align-items-center mb-3">
                                    <span class="font-16 regular textColor">Amount Paid:</span>
                                    <span class="font-16 medium textColor">$117</span>
                                </div>
                                <div class="detail-row d-flex justify-content-between align-items-center mb-4">
                                    <span class="font-16 regular textColor">Next Billing Date:</span>
                                    <span class="font-16 medium textColor">May 23, 2026</span>
                                </div>

                                <!-- Go to Dashboard Button -->
                                <button class="hero-btn-primary w-100 font-16 semibold mb-3">Go to Dashboard</button>

                                <!-- Download Invoice Link -->
                                <div class="text-center">
                                    <a href="/view-invoice" class="primaryColor font-18 medium">Download Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <!-- Bootstrap JS -->
    
    <!-- jQuery -->
    
    <!-- Custom JS -->
    

    

  <?php include __DIR__ . "/partials/scripts.php"; ?>
</body>
</html>
