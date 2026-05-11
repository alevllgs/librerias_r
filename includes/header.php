<?php
$page_title = $page_title ?? 'TechGuides';

// Calculate absolute path from document root
$doc_root = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/');
$project_root = rtrim(str_replace('\\', '/', dirname(__DIR__)), '/');

// Calculate relative path from document root to project
$base_url = str_replace($doc_root, '', $project_root);
$base_url = rtrim($base_url, '/');

// Navigation sections
$nav_sections = [
    'Plataformas' => [
        ['href' => $base_url . '/index.php', 'label' => 'Dashboard', 'icon' => 'fas fa-th-large'],
    ],
    'R' => [
        ['href' => $base_url . '/docs/r/index.php', 'label' => 'Librerías R', 'icon' => 'fab fa-r-project'],
    ],
    'PHP' => [
        ['href' => $base_url . '/docs/php/index.php', 'label' => 'Guía PHP/Laravel', 'icon' => 'fab fa-php'],
    ],
    'Ollama' => [
        ['href' => $base_url . '/docs/ollama/index.php', 'label' => 'Guía Ollama', 'icon' => 'fas fa-robot'],
    ],
'Opencode' => [
        ['href' => $base_url . '/docs/opencode/index.php', 'label' => 'Guía Opencode', 'icon' => 'fas fa-terminal'],
    ],
    'n8n' => [
        ['href' => $base_url . '/docs/n8n/index.php', 'label' => 'Guía n8n', 'icon' => 'fas fa-project-diagram'],
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
</head>
<body>
<button id="menu-toggle" class="menu-toggle" aria-label="Menú">
    <i class="fas fa-bars"></i>
</button>

<div class="layout">
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="icon">
                <i class="fas fa-book-open"></i>
            </div>
            <div>
                <div class="name">TechGuides</div>
                <div class="sub">Documentación dev</div>
            </div>
        </div>

        <div class="sidebar-prefs">
            <div class="pref-row">
                <span class="nav-label" style="margin:0">Tema</span>
                <button class="theme-btn" onclick="toggleTheme()">☀️</button>
            </div>
        </div>

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
