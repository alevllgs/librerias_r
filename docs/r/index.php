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

<!-- ATAJOS RSTUDIO -->
<section class="section">
    <div class="section-header">
        <div class="section-num">01</div>
        <h2 class="section-title">Atajos de RStudio</h2>
    </div>

    <div class="g2">
        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">ejecutar</span>
                <h3>Ejecutar código</h3>
            </div>
            <pre><span class="fn">Ctrl</span> + <span class="fn">Enter</span>        <span class="cm"># Ejecutar línea actual o selección</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + Enter <span class="cm"># Ejecutar todo el documento</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + P     <span class="cm"># Ejecutar chunk actual (RMarkdown)</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + B     <span class="cm"># Ejecutar chunks anteriores</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + N     <span class="cm"># Ejecutar chunks hasta este</span>
<span class="fn">Ctrl</span> + <span class="fn">Alt</span> + R       <span class="cm"># Ejecutar desde principio hasta cursor</span></pre>
        </div>

        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">editar</span>
                <h3>Edición</h3>
            </div>
            <pre><span class="fn">Ctrl</span> + <span class="fn">I</span>            <span class="cm"># Indentar código</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + A     <span class="cm"># Reindentar selección</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + C     <span class="cm"># Comentar/descomentar línea</span>
<span class="fn">Ctrl</span> + <span class="fn">Space</span>         <span class="cm"># Autocompletar</span>
<span class="fn">Alt</span> + <span class="fn">-</span>             <span class="cm"># Operador de asignación <-</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + M     <span class="cm"># Pipe %>%</span>
<span class="fn">Ctrl</span> + <span class="fn">D</span>             <span class="cm"># Eliminar línea actual</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + Up/Down <span class="cm"># Mover línea arriba/abajo</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + K     <span class="cm"># Eliminar hasta fin de línea</span>
<span class="fn">Ctrl</span> + <span class="fn">U</span>             <span class="cm"># Deshacer última edición</span></pre>
        </div>

        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">navegar</span>
                <h3>Navegación y búsqueda</h3>
            </div>
            <pre><span class="fn">Ctrl</span> + <span class="fn">.</span>            <span class="cm"># Ir a función (navigate to function)</span>
<span class="fn">Ctrl</span> + <span class="fn">F</span>            <span class="cm"># Buscar en archivo</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + F     <span class="cm"># Buscar y reemplazar</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + R     <span class="cm"># Buscar en proyecto</span>
<span class="fn">Ctrl</span> + <span class="fn">L</span>            <span class="cm"># Limpiar consola</span>
<span class="fn">Ctrl</span> + <span class="fn">↑</span> / <span class="fn">↓</span>        <span class="cm"># Historial de comandos en consola</span>
<span class="fn">Ctrl</span> + <span class="fn">1</span>            <span class="cm"># Ir al panel Source</span>
<span class="fn">Ctrl</span> + <span class="fn">2</span>            <span class="cm"># Ir a la consola</span>
<span class="fn">Ctrl</span> + <span class="fn">3</span>            <span class="cm"># Ir al panel de ayuda</span>
<span class="fn">Ctrl</span> + <span class="fn">4</span>            <span class="cm"># Ir al Environment/History</span>
<span class="fn">Ctrl</span> + <span class="fn">5</span>            <span class="cm"># Ir a Files/Plots/Packages</span>
<span class="fn">Ctrl</span> + <span class="fn">6</span>            <span class="cm"># Ir al Viewer</span>
<span class="fn">Ctrl</span> + <span class="fn">7</span>            <span class="cm"># Ir a Build</span>
<span class="fn">Ctrl</span> + <span class="fn">8</span>            <span class="cm"># Ir al Terminal</span></pre>
        </div>

        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">ayuda</span>
                <h3>Ayuda y debugging</h3>
            </div>
            <pre><span class="fn">F1</span>                  <span class="cm"># Abrir ayuda de función bajo cursor</span>
<span class="fn">??</span>funcion           <span class="cm"># Buscar en toda la documentación</span>
<span class="fn">?</span>funcion            <span class="cm"># Abrir ayuda específica</span>
<span class="fn">vignette</>(<span class="str">"tema"</span>)    <span class="cm"># Ver viñetas del paquete</span>
<span class="fn">browser</span>()           <span class="cm"># Punto de interrupción en código</span>
<span class="fn">traceback</span>()         <span class="cm"># Ver rastro del último error</span>
<span class="fn">debug</span>(funcion)      <span class="cm"># Activar modo debug</span>
<span class="fn">undebug</span>(funcion)    <span class="cm"># Desactivar modo debug</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + F10 <span class="cm"># Reiniciar sesión R</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + F11 <span class="cm"># Rebuild todo</span></pre>
        </div>
    </div>
</section>

<!-- USO DE RSTUDIO -->
<section class="section">
    <div class="section-header">
        <div class="section-num">02</div>
        <h2 class="section-title">Uso de RStudio</h2>
    </div>

    <div class="g2">
        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">paneles</span>
                <h3>Los 4 paneles</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Source (esquina superior izquierda):</strong> Editor de código. Soporta R scripts (.R), R Markdown (.Rmd), Shiny apps, y más. Tiene syntax highlighting, autocompletar y linting.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Console (esquina inferior izquierda):</strong> Consola interactiva. Ejecuta comandos directamente. Historial con flechas arriba/abajo.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Environment/History (esquina superior derecha):</strong> Variables cargadas, data frames, funciones. Pestaña History con todos los comandos ejecutados.</p>
                <p><strong>Files/Plots/Packages/Help/Viewer (esquina inferior derecha):</strong> Navegador de archivos, gráficos generados, paquetes instalados, documentación y visualizaciones.</p>
            </div>
        </div>

        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">proyectos</span>
                <h3>Proyectos (.Rproj)</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Crear proyecto:</strong> File → New Project → New Directory o Existing Directory.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Ventajas:</strong> working directory automático, historial independiente, variables de entorno por proyecto, integración con Git/GitHub.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Configurar:</strong> Tools → Project Options → Build, Run, Environments.</p>
                <p><strong>Switch entre proyectos:</strong> File → Recent Projects o click en el nombre del proyecto en la barra superior.</p>
            </div>
        </div>

        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">rmarkdown</span>
                <h3>R Markdown</h3>
            </div>
            <pre><span class="cm"># Crear nuevo Rmd: File → New File → R Markdown</span>
<span class="cm"># Knit a HTML, PDF o Word</span>

<span class="cm"># Estructura básica:</span>
<span class="kw">---</span>
<span class="kw">title:</span> <span class="str">"Mi Reporte"</span>
<span class="kw">author:</span> <span class="str">"Tu Nombre"</span>
<span class="kw">output:</span> html_document
<span class="kw">---</span>

<span class="cm"># Markdown normal aquí</span>
<span class="cm"># ## Subtítulo</span>
<span class="cm"># *texto en itálica*</span>

<span class="cm"># ```{r}</span>
<span class="cm"># library(ggplot2)</span>
<span class="cm"># ggplot(mtcars, aes(mpg, hp)) + geom_point()</span>
<span class="cm"># ```</span>

<span class="cm"># Opciones de chunk:</span>
<span class="cm"># ```{r, echo=FALSE, eval=TRUE, fig.width=8}</span>
<span class="cm"># ```</span>

<span class="cm"># Knit: Ctrl+Shift+K</span></pre>
        </div>

        <div class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">addins</span>
                <h3>Addins y personalización</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Addins populares:</strong> esquisse (ggplot2 GUI), datapasta (pegar datos), styler (formatear código), reprex (crear ejemplos reproducibles).</p>
                <p style="margin-bottom: 0.5rem;"><strong>Instalar:</strong> <code>install.packages("esquisse")</code></p>
                <p style="margin-bottom: 0.5rem;"><strong>Temas:</strong> Tools → Global Options → Appearance. Temas claros, oscuros, y personalizados.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Snippets:</strong> Tools → Global Options → Code → Editing → Edit Snippets. Crear atajos personalizados.</p>
                <p><strong>Atajos personalizados:</strong> Tools → Modify Keyboard Shortcuts.</p>
            </div>
        </div>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Usa <strong>Proyectos (.Rproj)</strong> para organizar tu trabajo. Cada proyecto tiene su propio working directory, historial y configuración. Esto evita problemas de rutas y mantiene tu código reproducible. Combínalo con <strong>Git</strong> para control de versiones integrado.
    </div>
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
