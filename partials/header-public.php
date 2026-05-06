<?php
// Compute base path for subfolder deployments (Laragon subdir / Hostinger subdomain both work)
$rsBasePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($rsBasePath === '') {
  $rsBasePath = '/';
}
function rs_url(string $path): string {
  $base = $GLOBALS['rsBasePath'] ?? '/';
  if ($base === '/') {
    return '/' . ltrim($path, '/');
  }
  return $base . '/' . ltrim($path, '/');
}
?>
<div class="page-scroll-area">
  <!-- Navbar -->
  <header class="navbar-container">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <a href="<?php echo rs_url('index'); ?>" class="nav-logo">
          <img src="assets/images/svg/logo.svg" alt="Ranax Social Logo" />
        </a>

        <!-- Hamburger -->
        <div class="nav-toggle flex-column justify-content-between cursor-pointer" id="navToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <!-- Navigation Links -->
        <nav class="nav-menu" id="navMenu">
          <a class="nav-link-item position-relative font-16 medium" href="<?php echo rs_url('index'); ?>">Home</a>
          <a class="nav-link-item position-relative font-16 medium" href="<?php echo rs_url('features'); ?>">Features</a>
          <a class="nav-link-item position-relative font-16 medium" href="<?php echo rs_url('pricing'); ?>">Pricing</a>
          <a class="nav-link-item position-relative font-16 medium" href="<?php echo rs_url('integrations'); ?>">Integrations</a>
          <a class="nav-link-item position-relative font-16 medium" href="<?php echo rs_url('resources'); ?>">Resources</a>

          <!-- Auth Buttons -->
          <div class="d-flex gap-2 align-items-center mt-3 mt-lg-0 ms-lg-3">
            <a href="<?php echo rs_url('login'); ?>" class="nav-login-btn font-14 semibold">Login</a>
            <a href="<?php echo rs_base_url('register'); ?>" class="nav-signup-btn font-14 semibold">Sign up</a>
          </div>
        </nav>
      </div>
    </div>
  </header>

