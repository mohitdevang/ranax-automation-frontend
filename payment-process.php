<?php
$pageTitle = 'Complete your payment - Ranax Social';
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
                        <a href="/sucessfull-payment"
                            class="nav-link-item position-relative font-16 medium text-muted active">Make Payment</a>
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
        <main class="main-content  p-sm-4 px-2 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="d-flex flex-column gap-1 mb-4">
                            <h1 class="font-30 primaryColor medium mb-0">Complete your payment </h1>
                            <p class="font-20 regular lightGray mb-0">Review your subscription detail and proceed to
                                payment </p>
                        </div>

                        <!-- Card Details  -->
                        <div class="col-md-8">
                            <div class="payment-card rounded-4">

                                <!-- Payment Method Tabs -->
                                <div class="payment-methods mb-4">
                                    <button
                                        class="payment-method-btn d-flex align-items-center gap-2 font-16 medium active"
                                        data-method="card">
                                        <img src="assets/images/svg/creditcard.svg" class="gray-light-filter">
                                        Card
                                    </button>
                                    <button class="payment-method-btn d-flex align-items-center gap-2 font-16 medium"
                                        data-method="netbanking">
                                        <img src="assets/images/svg/Bank.svg">
                                        Net banking
                                    </button>
                                    <button class="payment-method-btn d-flex align-items-center gap-2 font-16 medium"
                                        data-method="upi">
                                        <img src="assets/images/svg/Upi.svg">
                                        UPI
                                    </button>
                                </div>

                                <!-- Card Payment Form -->
                                <div class="payment-form" id="cardForm">

                                    <!-- Card Number -->
                                    <div class="mb-4">
                                        <label class="form-label font-16 medium mb-2 textColor">Card Number</label>
                                        <div class="card-input-wrapper position-relative">
                                            <input type="text" class="login-input w-100"
                                                placeholder="5246 0400 0000 0000" maxlength="19">
                                            <div class="card-brand-icon">
                                                <img src="assets/images/svg/visa.svg" height="30">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Details Row -->
                                    <div class="row g-3 mb-4">
                                        <div class="col-md-4">
                                            <label class="form-label font-16 medium mb-2 textColor">Card Holder
                                                Name</label>
                                            <input type="text" class="login-input w-100" placeholder="John Doe">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label font-16 medium mb-2 textColor">Expiry date</label>
                                            <input type="text" class="login-input w-100" placeholder="MM/YY"
                                                maxlength="5">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label font-16 medium mb-2 textColor">CVV</label>
                                            <input type="password" class="login-input w-100" placeholder="***"
                                                maxlength="3">
                                        </div>
                                    </div>

                                    <!-- Save Card Checkbox -->
                                    <div class="form-check d-flex align-items-center mb-4">
                                        <input class="form-check-input custom-checkbox" type="checkbox" id="saveCard">
                                        <label class="form-check-label font-16 regular textColor" for="saveCard">
                                            Save this credit card for later use
                                        </label>
                                    </div>

                                    <!-- Pay Button -->
                                    <div class="col-md-6 m-auto">
                                        <a href="/sucessfull-payment" class="btn-secondary-fill w-100 d-flex  justify-content-center  align-items-center font-16 semibold mt-3">Pay $117</a>
                                    </div>

                                </div>

                                <!-- Net Banking Form -->
                                <div class="payment-form d-none" id="netbankingForm">

                                    <!-- Bank Selection -->
                                    <div class="mb-4">
                                        <label class="form-label font-16 medium mb-3 textColor">Select Bank</label>
                                        <div class="dropdown bank-dropdown w-100">
                                            <button
                                                class="login-input w-100 d-flex align-items-center justify-content-between position-relative"
                                                type="button" id="bankDropdown" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="selected-bank d-flex align-items-center gap-3">
                                                    <span
                                                        class="bank-icon-placeholder d-flex align-items-center justify-content-center rounded-circle">
                                                        <img src="assets/images/svg/Bank.svg" alt="Bank">
                                                    </span>
                                                    <span class="font-16 regular">Choose your bank</span>
                                                </span>
                                                <span class="dropdown-arrow position-absolute">
                                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L6 6L11 1" stroke="#6B7280" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <ul class="dropdown-menu w-100 bank-dropdown-menu"
                                                aria-labelledby="bankDropdown">
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="sbi" data-bank-name="State Bank of India">
                                                        <img src="assets/images/banks/sbi.svg" alt="SBI"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">State Bank of
                                                            India</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="hdfc" data-bank-name="HDFC Bank">
                                                        <img src="assets/images/banks/hdfc.svg" alt="HDFC"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">HDFC Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="icici" data-bank-name="ICICI Bank">
                                                        <img src="assets/images/banks/icici.svg" alt="ICICI"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">ICICI Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="axis" data-bank-name="Axis Bank">
                                                        <img src="assets/images/banks/axis.svg" alt="Axis"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">Axis Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="kotak" data-bank-name="Kotak Mahindra Bank">
                                                        <img src="assets/images/banks/kotak.svg" alt="Kotak"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">Kotak Mahindra
                                                            Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="pnb" data-bank-name="Punjab National Bank">
                                                        <img src="assets/images/banks/pnb.svg" alt="PNB"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">Punjab National
                                                            Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="bob" data-bank-name="Bank of Baroda">
                                                        <img src="assets/images/banks/bob.svg" alt="BOB"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">Bank of Baroda</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="canara" data-bank-name="Canara Bank">
                                                        <img src="assets/images/banks/canara.svg" alt="Canara"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">Canara Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="union" data-bank-name="Union Bank of India">
                                                        <img src="assets/images/banks/union.svg" alt="Union"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">Union Bank of
                                                            India</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="idbi" data-bank-name="IDBI Bank">
                                                        <img src="assets/images/banks/idbi.svg" alt="IDBI"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">IDBI Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="yes" data-bank-name="Yes Bank">
                                                        <img src="assets/images/banks/yes.svg" alt="Yes"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">Yes Bank</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item bank-item d-flex align-items-center gap-3 py-2 px-3"
                                                        href="#" data-bank="indusind" data-bank-name="IndusInd Bank">
                                                        <img src="assets/images/banks/indusind.svg" alt="IndusInd"
                                                            class="bank-icon">
                                                        <span class="font-16 regular textColor">IndusInd Bank</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Info Message -->
                                    <div class="alert alert-info border-0 mb-4" style="background-color: #f0f4ff;">
                                        <p class="font-14 regular textColor mb-0">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="me-2"
                                                style="vertical-align: text-top;">
                                                <path
                                                    d="M8 0C3.6 0 0 3.6 0 8C0 12.4 3.6 16 8 16C12.4 16 16 12.4 16 8C16 3.6 12.4 0 8 0ZM8.8 12H7.2V7.2H8.8V12ZM8.8 5.6H7.2V4H8.8V5.6Z"
                                                    fill="#5B4DFF" />
                                            </svg>
                                            You will be redirected to your bank's secure login page to complete the
                                            payment
                                        </p>
                                    </div>

                                    <!-- Action Buttons -->
                                     <div class="col-md-6 m-auto">
                                        <a href="/sucessfull-payment" class="btn-secondary-fill w-100 d-flex  justify-content-center align-items-center font-16 semibold mt-3">Pay $117</a>
                                    </div>

                                </div>

                                <!-- UPI Form -->
                                <div class="payment-form d-none" id="upiForm">

                                    <!-- UPI Input -->
                                    <div class="mb-4">
                                        <label class="form-label font-16 medium mb-3 textColor">Enter your UPI</label>
                                        <input type="text" class="login-input w-100" placeholder="example@upi">
                                    </div>

                                    <!-- Action Buttons -->
                                      <div class="col-md-6 m-auto">
                                        <a href="/sucessfull-payment" class="btn-secondary-fill w-100 d-flex  justify-content-center  align-items-center font-16 semibold mt-3">Pay $117</a>
                                    </div>

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
