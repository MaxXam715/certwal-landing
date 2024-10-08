<?php
GLOBAL $globals;
$_SESSION['subdomain'] = $globals['subdomain'];

require __DIR__ . '/backend/clearCash.php';

if ($_SERVER['HTTP_HOST'] == 'certwal-landing') {
    $v = mt_rand(100000, 99999999);
} else {
    $v = "1.03";
}

if(isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], "certwal.com") !== false) {
    clearCash(__DIR__."/pages", $v);
    clearCash(__DIR__."/assets", $v);
    clearCash(__DIR__."/components", $v);
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>CERTWAL — будущее c цифровыми сертификатами</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <!-- meta -->
    <meta property="og:locale" content="ru_RU">
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="og:site_name" content="CERTWAL" />
    <meta property="vk:image" content="https://certwal.com/static/meta-banner.jpg" />
    <meta property="twitter:image" content="https://certwal.com/static/meta-banner.jpg" />
    <meta property="og:image" content="https://certwal.com/static/meta-banner.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:title" content="Платформа с цифровыми сертификатами" />
    <meta property="og:long_title" content="Платформа с цифровыми сертификатами">
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Платформа с цифровыми сертификатами, которая позволяет организациям безопасно выдавать цифровые монеты и управлять ими" />
    <meta name="description" content="Платформа с цифровыми сертификатами, которая позволяет организациям безопасно выдавать цифровые монеты и управлять ими" />
    <meta property="og:url" content="https://certwal.com" />
    <link rel="canonical" href="https://certwal.com">
    <meta name="author" content="certwal" />
    <meta property="article:author" content="https://certwal.com" />
    <meta property="article:publisher" content="https://certwal.com" />
    <link rel="image_src" href="https://certwal.com/static/meta-banner.jpg">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="version" content="<?=$v?>" id="versionContent">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/static/favicon.svg?v=1.05">
    <link rel="icon" type="image/png" href="/static/favicon.svg?v=1.05">
    <link rel="apple-touch-icon" href="/static/favicon.svg?v=1.05">
    <link rel="mask-icon" href="/static/favicon.svg?v=1.05">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#131313">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#131313">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#131313">


    <!-- UiKit CSS -->
    <link rel="stylesheet" href="/plugins/uikit/uikit.min.css">
    <!-- Style global -->
    <link rel="stylesheet" href="/assets/css/global.css?v=<?=$v?>">
    <!-- Splide -->
    <link rel="stylesheet" href="/plugins/splide-4.1.3/css/splide.min.css">
    <!-- Splide -->
    <link rel="stylesheet" href="/pages/landing/css/landing.css?v=<?=$v?>">

</head>
<body>


<main id="app"></main>

<script src="/plugins/jquery-3.6.4.min.js"></script>
<script src="/plugins/uikit/uikit.min.js"></script>
<script src="/plugins/splide-4.1.3/splide.min.js"></script>
<script src="/plugins/splide-4.1.3/splide-extension-auto-scroll.min.js"></script>
<script src="/assets/js/scripts.js?v=<?=$v?>"></script>
<script type="module" src="/pages/landing/landing.js?v=<?=$v?>"></script>

</body>
</html>
