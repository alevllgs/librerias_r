<?php
$page_title = 'Guía PHP/Laravel';

require_once __DIR__ . '/includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">PHP / Laravel</span>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--php-bg); color: var(--php-color);">Desarrollo Web</div>
    <h1><i class="fab fa-php" style="margin-right: 0.5rem;"></i> XAMPP + PHP<br><span>Pop!_OS &amp; Windows</span></h1>
    <p>Todo lo que necesitas para desarrollar aplicaciones PHP localmente con Apache y MariaDB.</p>
</section>

<!-- ACCESOS RÁPIDOS -->
<div class="section">
    <div class="section-header">
        <div class="section-num">
            <i class="fas fa-bolt"></i>
        </div>
        <h2 class="section-title">Accesos rápidos</h2>
    </div>
    <div class="g2">
        <?php
        $links = [
            ['label' => 'Servicios',        'href' => 'pages/servicios.php',         'badge' => '01', 'c' => 'b-green'],
            ['label' => 'Proyectos',        'href' => 'pages/proyectos.php',         'badge' => '02', 'c' => 'b-blue'],
            ['label' => 'Base de datos',    'href' => 'pages/base-datos.php',        'badge' => '03', 'c' => 'b-orange'],
            ['label' => 'Errores comunes',  'href' => 'pages/errores.php',           'badge' => '04', 'c' => 'b-amber'],
            ['label' => 'Extras',           'href' => 'pages/extras.php',            'badge' => '05', 'c' => 'b-green'],
            ['label' => 'PHP Básico',       'href' => 'pages/php-basico.php',        'badge' => 'P1', 'c' => 'b-purple'],
            ['label' => 'PHP Avanzado',     'href' => 'pages/php-avanzado.php',      'badge' => 'P2', 'c' => 'b-purple'],
            ['label' => 'Composer',         'href' => 'pages/composer.php',           'badge' => 'C1', 'c' => 'b-green'],
            ['label' => 'Laravel Intro',    'href' => 'pages/laravel-intro.php',     'badge' => 'L1', 'c' => 'b-orange'],
            ['label' => 'Laravel Rutas',    'href' => 'pages/laravel-rutas.php',     'badge' => 'L2', 'c' => 'b-orange'],
            ['label' => 'Eloquent ORM',     'href' => 'pages/laravel-eloquent.php',  'badge' => 'L3', 'c' => 'b-orange'],
            ['label' => 'Blade Templates',  'href' => 'pages/laravel-blade.php',     'badge' => 'L4', 'c' => 'b-orange'],
        ];
        foreach ($links as $l): ?>
        <a href="<?= $l['href'] ?>" class="card card-php" style="display:block;text-decoration:none;">
            <div class="card-head">
                <span class="badge <?= $l['c'] ?>"><?= $l['badge'] ?></span>
                <h3><?= $l['label'] ?></h3>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
