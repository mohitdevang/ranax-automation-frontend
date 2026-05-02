<?php
$pageTitle = 'Invoice - Ranax Social';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . "/partials/head.php"; ?>
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
                        <span class="nav-separator font-12 medium text-muted">></span>
                        <a href="/plan-purchase"
                            class="nav-link-item position-relative font-16 medium text-muted ">Confirm your plan</a>
                        <span class="nav-separator font-12 medium text-muted">></span>
                        <a href="/view-invoice"
                            class="nav-link-item position-relative font-16 medium text-muted active">View invoice </a>
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
                    <div class="col-md-8 m-auto">
                        <div class="invoice-card rounded-2 bg-white">

                            <!-- Invoice Header -->
                            <div class="invoice-header d-flex justify-content-between align-items-start mb-4">
                                <div class="invoice-logo">
                                    <img src="assets/images/svg/logo.svg" alt="Ranax Automation">
                                </div>
                                <div class="invoice-title text-end">
                                    <h1 class="font-30 primaryColor semibold mb-2 invoice-heading">Invoice</h1>
                                    <p class="font-14 regular mb-1 invoice-meta">Invoice #000151</p>
                                    <p class="font-14 regular mb-0 invoice-meta">Date: Mar 09, 2026</p>
                                </div>
                            </div>

                            <!-- Sold By & Billed To Section -->
                            <div class="row mb-5 invoice-parties">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <h3 class="font-20 semibold mb-3 invoice-section-title">Sold by:</h3>
                                    <div class="invoice-info">
                                        <p class="font-16 semibold mb-2 invoice-name">Ranax Automation</p>
                                        <p class="font-16 regular mb-2 invoice-text">133, Vijay Nagar, Indore, Madhya
                                            Pradesh,462010</p>
                                        <p class="font-16 regular mb-2 invoice-text"><span
                                                class="semibold invoice-label">GSTIN:</span> 22AAAC18649C1ZS</p>
                                        <p class="font-16 regular mb-2 invoice-text"><span
                                                class="semibold invoice-label">Order Number:</span> 22AAAC18649C1ZS</p>
                                        <p class="font-16 regular mb-0 invoice-text"><span
                                                class="semibold invoice-label">Payment Method:</span> Debit Card</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <h3 class="font-20 semibold mb-3 invoice-section-title">Billed to:</h3>
                                    <div class="invoice-info">
                                        <p class="font-16 semibold mb-2 invoice-name">Rahul Kumar</p>
                                        <p class="font-16 regular mb-2 invoice-text">245, Vijay Nagar, Indore, Madhya
                                            Pradesh,462010</p>
                                        <p class="font-16 regular mb-2 invoice-text">+91 9888963475</p>
                                        <p class="font-16 regular mb-2 invoice-text">you@example.com</p>
                                        <p class="font-16 regular mb-0 invoice-text">Your Company Pvt. Ltd.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Invoice Table -->
                            <div class="table-responsive mb-0 rounded-3">
                                <table class="table invoice-table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="font-12 bold">Sl.<br>No.</th>
                                            <th class="font-12 bold">Description</th>
                                            <th class="font-12 bold text-center">Plan Price</th>
                                            <th class="font-12 bold text-center">Channels</th>
                                            <th class="font-12 bold text-center">Discount</th>
                                            <th class="font-12 bold text-center">SGST(9%)</th>
                                            <th class="font-12 bold text-center">CGST(9%)</th>
                                            <th class="font-12 bold text-center">Total<br>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-12 medium text-center">1.</td>
                                            <td class="font-12 medium">
                                                <div class="mb-3">Professional Plan-<br>Monthly Subscription</div>

                                            </td>
                                            <td class="font-12 medium text-center">
                                                <div class="mb-3">₹ 5,250.00</div>
                                            </td>
                                            <td class="font-12 medium text-center">4</td>
                                            <td class="font-12 medium text-center">
                                                <div class="mb-3">₹ 00.00</div>
                                            </td>
                                            <td class="font-12 medium text-center">
                                                <div class="mb-3">₹ 742.50</div>
                                            </td>
                                            <td class="font-12 medium text-center">
                                                <div class="mb-3">₹ 742.50</div>
                                            </td>
                                            <td class="font-12 medium text-center">
                                                <div class="mb-3">₹ 9,735.00</div>
                                            </td>
                                        </tr>
                                        <tr class="invoice-total-row">
                                            <td colspan="9">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0 font-14 semibold ">TOTAL: </h5>
                                                    <h6 class="mb-0 font-14 semibold ">₹ 9,635.00</h6>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-3 mt-5">
                    <a href="#"
                        class="hero-btn-secondary d-flex justify-content-center align-items-center font-16 semibold py-2">Go
                        to Dashboard</a>
                    <button class="hero-btn-primary font-16 semibold line-height-26 py-2">Download Invoice</button>
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
