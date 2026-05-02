<?php

function rs_read_html_body(string $htmlPath): string
{
    if (!is_file($htmlPath)) {
        http_response_code(404);
        return '<div class="container py-5"><h1>404</h1><p>Page not found.</p></div>';
    }

    $html = file_get_contents($htmlPath);
    if ($html === false) {
        http_response_code(500);
        return '<div class="container py-5"><h1>500</h1><p>Could not read page.</p></div>';
    }

    if (!preg_match('~<body[^>]*>(?<body>[\\s\\S]*?)</body>~i', $html, $m)) {
        return $html;
    }

    return $m['body'];
}

/**
 * For pages that include the standard public navbar/footer inside the HTML,
 * extract the main content between </header> and <!-- Footer -->.
 */
function rs_extract_public_main(string $htmlPath): string
{
    $body = rs_read_html_body($htmlPath);

    $afterHeader = $body;
    $posHeaderEnd = stripos($body, '</header>');
    if ($posHeaderEnd !== false) {
        $afterHeader = substr($body, $posHeaderEnd + strlen('</header>'));
    }

    $beforeFooter = $afterHeader;
    $posFooterStart = stripos($afterHeader, '<!-- Footer');
    if ($posFooterStart !== false) {
        $beforeFooter = substr($afterHeader, 0, $posFooterStart);
    }

    // Remove trailing scripts from extracted chunk
    $beforeFooter = preg_replace('~<script[\\s\\S]*?</script>~i', '', $beforeFooter);

    return trim($beforeFooter);
}

