<?php
    $seoPages = [
        '/' => ['WADIALABABIL INFOTECH | IT & Digital Marketing Solutions', 'WADIALABABIL INFOTECH delivers practical IT consulting, website development, SEO, digital marketing, automation and e-commerce solutions for growing businesses.'],
        'contact' => ['Contact WADIALABABIL INFOTECH | Start a Digital Project', 'Contact WADIALABABIL INFOTECH for website development, IT consulting, SEO, digital marketing, automation and e-commerce project support.'],
        'recruitment' => ['Digital Marketing Solutions | WADIALABABIL INFOTECH', 'Grow your business with practical digital marketing, SEO, social media, paid advertising, content and conversion solutions.'],
        'about-us' => ['About Us | WADIALABABIL INFOTECH', 'Learn how WADIALABABIL INFOTECH helps businesses improve their technology, websites, digital marketing and online growth.'],
        'our-approach' => ['Our Approach | WADIALABABIL INFOTECH', 'A clear, practical approach to IT consulting, website development, digital marketing and business automation.'],
        'case-studies' => ['Case Studies | WADIALABABIL INFOTECH', 'Explore practical digital work connecting technology, design, development and marketing performance.'],
    ];
    $currentPath = trim(request()->path(), '/');
    [$seoTitle, $seoDescription] = $seoPages[$currentPath === '' ? '/' : $currentPath] ?? ['IT & Digital Business Solutions | WADIALABABIL INFOTECH', 'WADIALABABIL INFOTECH provides IT consulting, website development, SEO, digital marketing, automation and e-commerce solutions.'];
    $siteUrl = 'https://wadialababilinfotech.com';
    $canonicalUrl = rtrim($siteUrl, '/') . '/' . $currentPath;
    if ($currentPath === '') {
        $canonicalUrl = rtrim($siteUrl, '/') . '/';
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($seoTitle); ?></title>
    <meta name="description" content="<?php echo e($seoDescription); ?>">
    <meta name="keywords" content="IT consulting, website development, digital marketing, SEO services, social media management, paid advertising, e-commerce solutions, business automation, New York">
    <meta name="author" content="WADIALABABIL INFOTECH">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#080908">
    <link rel="canonical" href="<?php echo e($canonicalUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="WADIALABABIL INFOTECH">
    <meta property="og:title" content="<?php echo e($seoTitle); ?>">
    <meta property="og:description" content="<?php echo e($seoDescription); ?>">
    <meta property="og:url" content="<?php echo e($canonicalUrl); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo e($seoTitle); ?>">
    <meta name="twitter:description" content="<?php echo e($seoDescription); ?>">
    <script type="application/ld+json">
        <?php echo json_encode([
            chr(64) . 'context' => 'https://schema.org',
            chr(64) . 'type' => 'ProfessionalService',
            'name' => 'WADIALABABIL INFOTECH',
            'url' => 'https://wadialababilinfotech.com',
            'description' => 'IT consulting, website development, digital marketing, SEO, automation and e-commerce solutions.',
            'email' => 'hello@wadialababilinfotech.com',
            'address' => [
                chr(64) . 'type' => 'PostalAddress',
                'streetAddress' => '1882 Lacombe Avenue',
                'addressLocality' => 'Bronx',
                'addressRegion' => 'NY',
                'postalCode' => '10473',
                'addressCountry' => 'US',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

    </script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.jsx']); ?>
</head>
<body>
    <div id="app"></div>
</body>
</html>

<?php /**PATH C:\Users\syede\OneDrive\Documentos\ChatGPT\sayed-bhai\resources\views\app.blade.php ENDPATH**/ ?>