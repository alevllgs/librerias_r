<?php
$page_title = 'Dashboard';

// Count resources
$r_count = count(glob(__DIR__ . '/docs/r/*.pdf'));
$php_pages = count(glob(__DIR__ . '/docs/php/pages/*.php'));

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag">Centro de documentación</div>
    <h1>TechGuides</h1>
    <p>Tu centro de documentación para desarrollo. Accede a guías, tutoriales y referencias de las principales plataformas y lenguajes.</p>
</section>

<!-- PLATFORMS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">
            <i class="fas fa-th-large"></i>
        </div>
        <h2 class="section-title">Plataformas disponibles</h2>
    </div>

    <div class="platform-grid">
        <!-- R -->
        <a href="<?= $base_url ?>/docs/r/index.php" class="platform-card r-card fade-in">
            <div class="platform-icon r-icon">
                <i class="fab fa-r-project"></i>
            </div>
            <div class="platform-name">R</div>
            <div class="platform-desc">
                Lenguaje estadístico y visualización de datos. Instructivos de librerías para análisis, machine learning y más.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-file-pdf stat-icon"></i>
                    <span><?= $r_count ?> librerías</span>
                </div>
                <div class="stat">
                    <i class="fas fa-star stat-icon"></i>
                    <span>Favoritos</span>
                </div>
            </div>
            <div class="platform-btn r-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>

        <!-- Python -->
        <a href="<?= $base_url ?>/docs/python/index.php" class="platform-card python-card fade-in">
            <div class="platform-icon python-icon">
                <i class="fab fa-python"></i>
            </div>
            <div class="platform-name">Python</div>
            <div class="platform-desc">
                Lenguaje versátil para data science, web, automatización e IA. Atajos de IDE y catálogo de librerías esenciales.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-keyboard stat-icon"></i>
                    <span>Atajos</span>
                </div>
                <div class="stat">
                    <i class="fas fa-cubes stat-icon"></i>
                    <span>Librerías</span>
                </div>
            </div>
            <div class="platform-btn python-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>

        <!-- SQL Server -->
        <a href="<?= $base_url ?>/docs/sqlserver/index.php" class="platform-card sqlserver-card fade-in">
            <div class="platform-icon sqlserver-icon">
                <i class="fas fa-database"></i>
            </div>
            <div class="platform-name">SQL Server</div>
            <div class="platform-desc">
                Motor de base de datos relacional de Microsoft. Instalación, consultas, vistas, triggers y automatización en Windows.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-database stat-icon"></i>
                    <span>T-SQL</span>
                </div>
                <div class="stat">
                    <i class="fab fa-windows stat-icon"></i>
                    <span>Windows</span>
                </div>
            </div>
            <div class="platform-btn sqlserver-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>

        <!-- n8n -->
        <a href="<?= $base_url ?>/docs/n8n/index.php" class="platform-card n8n-card fade-in">
            <div class="platform-icon n8n-icon">
                <i class="fas fa-project-diagram"></i>
            </div>
            <div class="platform-name">n8n</div>
            <div class="platform-desc">
                Automatización de workflows con interfaz visual. Conecta servicios, automatiza tareas y crea flujos sin programar.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-project-diagram stat-icon"></i>
                    <span>Workflows</span>
                </div>
                <div class="stat">
                    <i class="fas fa-desktop stat-icon"></i>
                    <span>Win / Linux</span>
                </div>
            </div>
            <div class="platform-btn n8n-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>

        <!-- Gemini -->
        <a href="<?= $base_url ?>/docs/gemini/index.php" class="platform-card gemini-card fade-in">
            <div class="platform-icon gemini-icon">
                <i class="fas fa-wand-magic-sparkles"></i>
            </div>
            <div class="platform-name">Gemini</div>
            <div class="platform-desc">
                Ecosistema de IA de Google. NotebookLM, AI Studio, Antigravity y herramientas de productividad potenciadas por IA.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-brain stat-icon"></i>
                    <span>IA Generativa</span>
                </div>
                <div class="stat">
                    <i class="fas fa-cloud stat-icon"></i>
                    <span>Google Cloud</span>
                </div>
            </div>
            <div class="platform-btn gemini-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>

        <!-- PHP -->
        <a href="<?= $base_url ?>/docs/php/index.php" class="platform-card php-card fade-in">
            <div class="platform-icon php-icon">
                <i class="fab fa-php"></i>
            </div>
            <div class="platform-name">PHP / Laravel</div>
            <div class="platform-desc">
                Desarrollo web backend con PHP, Laravel y XAMPP. Guía completa desde lo básico hasta temas avanzados.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-file-code stat-icon"></i>
                    <span><?= $php_pages ?> guías</span>
                </div>
                <div class="stat">
                    <i class="fas fa-database stat-icon"></i>
                    <span>XAMPP + MySQL</span>
                </div>
            </div>
            <div class="platform-btn php-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>

        <!-- Opencode -->
        <a href="<?= $base_url ?>/docs/opencode/index.php" class="platform-card opencode-card fade-in">
            <div class="platform-icon opencode-icon">
                <i class="fas fa-terminal"></i>
            </div>
            <div class="platform-name">Opencode</div>
            <div class="platform-desc">
                Asistente de código CLI potenciado por IA. Comandos, atajos y mejores prácticas para desarrollo eficiente.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-keyboard stat-icon"></i>
                    <span>CLI + IA</span>
                </div>
                <div class="stat">
                    <i class="fas fa-code stat-icon"></i>
                    <span>Multi-idioma</span>
                </div>
            </div>
            <div class="platform-btn opencode-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>

        <!-- Ollama -->
        <a href="<?= $base_url ?>/docs/ollama/index.php" class="platform-card ollama-card fade-in">
            <div class="platform-icon ollama-icon">
                <i class="fas fa-robot"></i>
            </div>
            <div class="platform-name">Ollama</div>
            <div class="platform-desc">
                Ejecuta modelos de lenguaje grandes (LLM) localmente. Instalación, configuración y uso en Windows y Linux.
            </div>
            <div class="platform-stats">
                <div class="stat">
                    <i class="fas fa-microchip stat-icon"></i>
                    <span>LLM Local</span>
                </div>
                <div class="stat">
                    <i class="fas fa-desktop stat-icon"></i>
                    <span>Win / Linux</span>
                </div>
            </div>
            <div class="platform-btn ollama-btn">
                <i class="fas fa-arrow-right"></i> Acceder
            </div>
        </a>
    </div>
</section>

<!-- QUICK ACCESS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">
            <i class="fas fa-bolt"></i>
        </div>
        <h2 class="section-title">Acceso rápido</h2>
    </div>

    <div class="g3">
        <a href="<?= $base_url ?>/docs/r/index.php" class="card card-r">
            <div class="card-head">
                <span class="badge b-blue">R</span>
                <h3>Librerías populares</h3>
            </div>
            <div class="card-body">ggplot2, dplyr, tidyr, shiny y más</div>
        </a>

        <a href="<?= $base_url ?>/docs/python/index.php" class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">Python</span>
                <h3>Atajos y librerías</h3>
            </div>
            <div class="card-body">IDE shortcuts y catálogo de paquetes</div>
        </a>

        <a href="<?= $base_url ?>/docs/sqlserver/index.php" class="card card-sqlserver">
            <div class="card-head">
                <span class="badge" style="background: var(--sqlserver-bg); color: var(--sqlserver-color);">SQL Server</span>
                <h3>Bases de datos</h3>
            </div>
            <div class="card-body">T-SQL, consultas y automatización</div>
        </a>

        <a href="<?= $base_url ?>/docs/n8n/index.php" class="card card-n8n">
            <div class="card-head">
                <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">n8n</span>
                <h3>Automatización</h3>
            </div>
            <div class="card-body">Workflows visuales con n8n</div>
        </a>

        <a href="<?= $base_url ?>/docs/gemini/index.php" class="card card-gemini">
            <div class="card-head">
                <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">Gemini</span>
                <h3>IA de Google</h3>
            </div>
            <div class="card-body">NotebookLM, AI Studio, Antigravity</div>
        </a>

        <a href="<?= $base_url ?>/docs/php/pages/php-basico.php" class="card card-php">
            <div class="card-head">
                <span class="badge b-purple">PHP</span>
                <h3>PHP Básico</h3>
            </div>
            <div class="card-body">Variables, tipos, condicionales, bucles</div>
        </a>

        <a href="<?= $base_url ?>/docs/php/pages/laravel-intro.php" class="card card-php">
            <div class="card-head">
                <span class="badge b-purple">Laravel</span>
                <h3>Introducción</h3>
            </div>
            <div class="card-body">Instalación, estructura, primeros pasos</div>
        </a>

        <a href="<?= $base_url ?>/docs/opencode/index.php" class="card card-opencode">
            <div class="card-head">
                <span class="badge b-amber">Opencode</span>
                <h3>Primeros pasos</h3>
            </div>
            <div class="card-body">Comandos básicos y atajos</div>
        </a>

        <a href="<?= $base_url ?>/docs/ollama/index.php" class="card card-ollama">
            <div class="card-head">
                <span class="badge b-green">Ollama</span>
                <h3>Instalación</h3>
            </div>
            <div class="card-body">Setup en Windows y Pop!_OS</div>
        </a>

        <a href="<?= $base_url ?>/docs/php/pages/composer.php" class="card card-php">
            <div class="card-head">
                <span class="badge b-purple">Composer</span>
                <h3>Gestor de paquetes</h3>
            </div>
            <div class="card-body">Instalación y uso de Composer</div>
        </a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
