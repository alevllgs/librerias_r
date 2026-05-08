<?php
$pdfs = glob('librerias/*.pdf');
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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructivos de Librerías R</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header class="header">
        <div class="header-content">
            <h1><i class="fab fa-r-project"></i> Instructivos de Librerías R</h1>
            <p>Documentación y guías de uso de <?= $total ?> librerías para análisis estadístico</p>
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" id="searchInput" class="search-input" placeholder="Buscar librería... (presiona /)" autocomplete="off">
            </div>
            <button class="favorites-toggle" id="favoritesToggle" title="Mostrar solo favoritos">
                <i class="far fa-heart"></i> <span>Favoritos</span>
            </button>
        </div>
    </header>

    <main class="main">
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

        <div class="counter" id="counter">
            Mostrando los <strong><?= $total ?></strong> instructivos disponibles
        </div>

        <div class="grid" id="grid">
            <?php foreach ($pdfs as $index => $pdf): ?>
                <article class="card" data-title="<?= htmlspecialchars(formatTitle($pdf)) ?>" data-file="<?= htmlspecialchars(getFilename($pdf)) ?>" style="animation-delay: <?= ($index * 0.02) ?>s">
                    <button class="fav-btn" data-file="<?= htmlspecialchars(getFilename($pdf)) ?>" title="Marcar como favorito">
                        <i class="far fa-star"></i>
                    </button>
                    <div class="card-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h2 class="card-title"><?= htmlspecialchars(formatTitle($pdf)) ?></h2>
                    <span class="card-subtitle"><?= htmlspecialchars(getFilename($pdf)) ?></span>
                    <div class="card-actions">
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
    </main>

    <footer class="footer">
        <p>Instructivos de Librerías R &mdash; <?= date('Y') ?></p>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
