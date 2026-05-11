<?php
$page_title = 'Librerías R';

$pdfs = glob(__DIR__ . '/*.pdf');
sort($pdfs, SORT_NATURAL | SORT_FLAG_CASE);
$total = count($pdfs);

function formatTitle($filename) {
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $name = str_replace(['-', '_'], ' ', $name);
    $name = ucwords($name);
    return $name;
}

function getFilename($filepath) {
    return basename($filepath);
}

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">R</span>
</div>

<a href="<?= $base_url ?>/index.php" class="back-btn">
    <i class="fas fa-arrow-left"></i> Volver al dashboard
</a>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--r-bg); color: var(--r-color);">Lenguaje R</div>
    <h1><i class="fab fa-r-project" style="margin-right: 0.5rem;"></i> Librerías R</h1>
    <p>Instructivos y documentación de <?= $total ?> librerías para análisis estadístico, visualización de datos y machine learning.</p>
</section>

<!-- SEARCH & FILTERS -->
<div style="display: flex; align-items: center; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
    <div class="search-container" style="flex: 1; min-width: 250px;">
        <i class="fas fa-search search-icon"></i>
        <input type="text" id="searchInput" class="search-input" placeholder="Buscar librería... (presiona /)" autocomplete="off">
    </div>
    <button class="favorites-toggle" id="favoritesToggle" title="Mostrar solo favoritos">
        <i class="far fa-heart"></i> <span>Favoritos</span>
    </button>
</div>

<!-- ALPHA FILTER -->
<nav class="alpha-filter">
    <button class="alpha-btn active" data-letter="all">Todas</button>
    <button class="alpha-btn fav-filter-btn" data-letter="favorites" title="Mostrar favoritos">
        <i class="fas fa-star"></i> Favoritos
    </button>
    <?php
    $letters = range('A', 'Z');
    foreach ($letters as $letter): ?>
        <button class="alpha-btn" data-letter="<?= strtolower($letter) ?>"><?= $letter ?></button>
    <?php endforeach; ?>
</nav>

<!-- COUNTER -->
<div class="counter" id="counter">
    Mostrando los <strong><?= $total ?></strong> instructivos disponibles
</div>

<!-- PDF GRID -->
<div class="pdf-grid" id="pdf-grid">
    <?php foreach ($pdfs as $index => $pdf): ?>
        <article class="pdf-card" data-title="<?= htmlspecialchars(formatTitle($pdf)) ?>" data-file="<?= htmlspecialchars(getFilename($pdf)) ?>" style="animation-delay: <?= ($index * 0.02) ?>s">
            <button class="fav-btn" data-file="<?= htmlspecialchars(getFilename($pdf)) ?>" title="Marcar como favorito">
                <i class="far fa-star"></i>
            </button>
            <div class="pdf-icon">
                <i class="fas fa-file-pdf"></i>
            </div>
            <h2 class="pdf-title"><?= htmlspecialchars(formatTitle($pdf)) ?></h2>
            <span class="pdf-subtitle"><?= htmlspecialchars(getFilename($pdf)) ?></span>
            <div class="pdf-actions">
                <a href="<?= htmlspecialchars($pdf) ?>" target="_blank" class="btn btn-primary">
                    <i class="fas fa-eye"></i> Ver PDF
                </a>
                <a href="<?= htmlspecialchars($pdf) ?>" download class="btn btn-outline">
                    <i class="fas fa-download"></i>
                </a>
            </div>
        </article>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
