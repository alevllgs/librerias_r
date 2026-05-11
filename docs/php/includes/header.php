<?php
$page_title = $page_title ?? 'Guía PHP/Laravel';

// Calculate absolute path from document root
$doc_root = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/');
$project_root = rtrim(str_replace('\\', '/', dirname(dirname(dirname(__DIR__)))), '/');

// Calculate relative path from document root to project
$base_url = str_replace($doc_root, '', $project_root);
$base_url = rtrim($base_url, '/');

// PHP section base URL
$php_url = $base_url . '/docs/php';

$nav_sections = [
    'XAMPP' => [
        ['href' => $php_url . '/index.php',              'label' => 'Inicio',            'icon' => 'fas fa-home'],
        ['href' => $php_url . '/pages/servicios.php',    'label' => 'Servicios',         'icon' => 'fas fa-server'],
        ['href' => $php_url . '/pages/proyectos.php',    'label' => 'Proyectos',         'icon' => 'fas fa-folder'],
        ['href' => $php_url . '/pages/base-datos.php',   'label' => 'Base de datos',     'icon' => 'fas fa-database'],
        ['href' => $php_url . '/pages/errores.php',      'label' => 'Errores comunes',   'icon' => 'fas fa-exclamation-triangle'],
        ['href' => $php_url . '/pages/extras.php',       'label' => 'Extras',            'icon' => 'fas fa-plus-circle'],
    ],
    'PHP' => [
        ['href' => $php_url . '/pages/php-basico.php',     'label' => 'PHP básico',     'icon' => 'fab fa-php'],
        ['href' => $php_url . '/pages/php-avanzado.php',   'label' => 'PHP avanzado',   'icon' => 'fab fa-php'],
        ['href' => $php_url . '/pages/composer.php',        'label' => 'Composer',       'icon' => 'fas fa-box'],
    ],
    'Laravel' => [
        ['href' => $php_url . '/pages/laravel-intro.php',    'label' => 'Introducción',     'icon' => 'fab fa-laravel'],
        ['href' => $php_url . '/pages/laravel-rutas.php',    'label' => 'Rutas',            'icon' => 'fas fa-route'],
        ['href' => $php_url . '/pages/laravel-eloquent.php', 'label' => 'Eloquent ORM',     'icon' => 'fas fa-database'],
        ['href' => $php_url . '/pages/laravel-blade.php',    'label' => 'Blade templates',  'icon' => 'fas fa-code'],
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?> — TechGuides</title>
    <script>(function(){try{var t=localStorage.getItem('theme');if(t==='light')document.documentElement.classList.add('light-mode')}catch(e){}})();</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=Syne:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?= $php_url ?>/assets/css/style.css">
</head>
<body>
<button id="menu-toggle" class="menu-toggle" aria-label="Menú">
    <i class="fas fa-bars"></i>
</button>

<div class="layout">
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="icon">
                <i class="fab fa-php"></i>
            </div>
            <div>
                <div class="name">PHP / Laravel</div>
                <div class="sub">XAMPP + PHP</div>
            </div>
        </div>

        <div class="sidebar-prefs">
            <div class="pref-row">
                <span class="nav-label" style="margin:0">Tema</span>
                <button class="theme-btn" onclick="toggleTheme()">☀️</button>
            </div>
        </div>

        <!-- Back to dashboard -->
        <a href="<?= $base_url ?>/index.php" class="nav-item" style="margin-bottom: 1rem; color: var(--blue-light);">
            <i class="fas fa-arrow-left" style="margin-right: 0.5rem;"></i> Dashboard
        </a>

        <?php foreach ($nav_sections as $group => $links): ?>
            <span class="nav-label"><?= $group ?></span>
            <?php foreach ($links as $link): ?>
                <a href="<?= $link['href'] ?>" class="nav-item">
                    <i class="<?= $link['icon'] ?>" style="margin-right: 0.5rem; width: 16px;"></i>
                    <?= $link['label'] ?>
                </a>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </aside>

    <main class="main">
