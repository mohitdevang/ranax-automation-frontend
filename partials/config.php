<?php
// Single source of truth for frontend → backend routing.
// All marketing pages should use these values for redirecting into the Laravel backend.

$rsBaseUrl = rtrim((string) (getenv('RS_BASE_URL') ?: ''), '/');
if ($rsBaseUrl === '') {
    // Live default (production backend).
    // If you want local auto-detection instead, set RS_BASE_URL in your local env.
    $rsBaseUrl = 'https://app-automation.ranax.io';
}

function rs_base_url(string $path = ''): string
{
    $base = (string) ($GLOBALS['rsBaseUrl'] ?? '');
    return rtrim($base, '/') . '/' . ltrim($path, '/');
}

