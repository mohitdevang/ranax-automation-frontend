<?php
/** @var string $pageTitle */
$pageTitle = $pageTitle ?? 'Ranax Social Media';
include_once __DIR__ . '/config.php';
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<!-- Custom Css -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Css -->
<link href="assets/css/stylesheet.css" rel="stylesheet">

<script>
  // Centralized config (from `partials/config.php`)
  window.RS_BASE_URL = <?php echo json_encode($rsBaseUrl, JSON_UNESCAPED_SLASHES); ?>;
</script>

