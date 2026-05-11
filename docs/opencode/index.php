<?php
$page_title = 'Guía Opencode';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">Opencode</span>
</div>

<a href="<?= $base_url ?>/index.php" class="back-btn">
    <i class="fas fa-arrow-left"></i> Volver al dashboard
</a>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--opencode-bg); color: var(--opencode-color);">CLI + IA</div>
    <h1><i class="fas fa-terminal" style="margin-right: 0.5rem;"></i> Guía Opencode</h1>
    <p>Asistente de código CLI potenciado por IA. Comandos, atajos y mejores prácticas para desarrollo eficiente.</p>
</section>

<!-- INSTALACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">01</div>
        <h2 class="section-title">Instalación</h2>
    </div>

    <div class="card card-opencode">
        <div class="card-head">
            <span class="badge b-amber">instalación</span>
            <h3>Windows</h3>
        </div>
        <pre><span class="cm"># Usando npm (requiere Node.js)</span>
<span class="fn">npm</span> install -g opencode

<span class="cm"># O usando pnpm</span>
<span class="fn">pnpm</span> add -g opencode

<span class="cm"># Verificar instalación</span>
<span class="fn">opencode</span> --version</pre>
    </div>

    <div class="card card-opencode" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge b-amber">instalación</span>
            <h3>Pop!_OS / Linux</h3>
        </div>
        <pre><span class="cm"># Usando npm</span>
<span class="fn">sudo</span> npm install -g opencode

<span class="cm"># O con curl (binario precompilado)</span>
<span class="fn">curl</span> -fsSL https://opencode.ai/install.sh | sh

<span class="cm"># Verificar instalación</span>
<span class="fn">opencode</span> --version</pre>
    </div>
</section>

<!-- COMANDOS BÁSICOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">02</div>
        <h2 class="section-title">Comandos principales</h2>
    </div>

    <div class="card card-opencode">
        <div class="card-head">
            <span class="badge b-amber">esencial</span>
            <h3>Comandos de uso</h3>
        </div>
        <pre><span class="cm"># Iniciar Opencode en el directorio actual</span>
<span class="fn">opencode</span>

<span class="cm"># Iniciar con un prompt específico</span>
<span class="fn">opencode</span> <span class="str">"Crea una función en R para calcular la media"</span>

<span class="cm"># Iniciar en modo interactivo</span>
<span class="fn">opencode</span> --interactive

<span class="cm"># Ejecutar un comando específico</span>
<span class="fn">opencode</span> run <span class="str">"Explica este código"</span>

<span class="cm"># Ver ayuda</span>
<span class="fn">opencode</span> --help</pre>
    </div>
</section>

<!-- ATAJOS DE TECLADO -->
<section class="section">
    <div class="section-header">
        <div class="section-num">03</div>
        <h2 class="section-title">Atajos de teclado</h2>
    </div>

    <div class="g2">
        <div class="card card-opencode">
            <div class="card-head">
                <span class="badge b-amber">navegación</span>
                <h3>Básicos</h3>
            </div>
            <pre><span class="cm"># Enviar mensaje</span>
<span class="kw">Enter</span>

<span class="cm"># Nueva línea (sin enviar)</span>
<span class="kw">Shift</span> + <span class="kw">Enter</span>

<span class="cm"># Enfocar búsqueda</span>
<span class="kw">/</span>

<span class="cm"># Cancelar/Limpiar</span>
<span class="kw">Esc</span>

<span class="cm"># Salir</span>
<span class="kw">Ctrl</span> + <span class="kw">C</span> (dos veces)</pre>
        </div>

        <div class="card card-opencode">
            <div class="card-head">
                <span class="badge b-amber">interacción</span>
                <h3>Avanzados</h3>
            </div>
            <pre><span class="cm"># Historial de comandos</span>
<span class="kw">↑</span> / <span class="kw">↓</span>

<span class="cm"># Autocompletar</span>
<span class="kw">Tab</span>

<span class="cm"># Limpiar pantalla</span>
<span class="kw">Ctrl</span> + <span class="kw">L</span>

<span class="cm"># Cancelar operación actual</span>
<span class="kw">Ctrl</span> + <span class="kw">C</span>

<span class="cm"># Buscar en historial</span>
<span class="kw">Ctrl</span> + <span class="kw">R</span></pre>
        </div>
    </div>
</section>

<!-- MODOS DE OPERACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">04</div>
        <h2 class="section-title">Modos de operación</h2>
    </div>

    <div class="card card-opencode">
        <div class="card-head">
            <span class="badge b-amber">modos</span>
            <h3>Plan Mode vs Build Mode</h3>
        </div>
        <pre><span class="cm"># Plan Mode (Solo lectura)</span>
<span class="cm"># - El asistente solo puede LEER archivos</span>
<span class="cm"># - Ideal para planificar y analizar código</span>
<span class="cm"># - No puede crear ni modificar archivos</span>
<span class="cm"># - Puede usar: Read, Glob, Grep, WebFetch</span>

<span class="cm"># Build Mode (Lectura + Escritura)</span>
<span class="cm"># - El asistente puede crear y modificar archivos</span>
<span class="cm"># - Ideal para implementar soluciones</span>
<span class="cm"># - Puede usar todas las herramientas</span>
<span class="cm"># - Incluye: Write, Edit, Bash</span>

<span class="cm"># Cambiar a Plan Mode</span>
<span class="str">"Cambia a modo de planificación"</span>

<span class="cm"># Cambiar a Build Mode</span>
<span class="str">"Procede" / "Implementa" / "Ejecuta"</span></pre>
    </div>
</section>

<!-- HERRAMIENTAS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">05</div>
        <h2 class="section-title">Herramientas disponibles</h2>
    </div>

    <div class="g2">
        <div class="card card-opencode">
            <div class="card-head">
                <span class="badge b-amber">lectura</span>
                <h3>Herramientas de lectura</h3>
            </div>
            <pre><span class="cm"># Read - Leer archivos</span>
<span class="cm"># Lee contenido de archivos individuales</span>

<span class="cm"># Glob - Buscar archivos</span>
<span class="cm"># Busca archivos por patrón</span>
<span class="cm"># Ej: "**/*.php", "src/**/*.js"</span>

<span class="cm"># Grep - Buscar contenido</span>
<span class="cm"># Busca texto dentro de archivos</span>
<span class="cm"># Soporta regex</span>

<span class="cm"># WebFetch - Obtener URLs</span>
<span class="cm"># Descarga contenido web</span></pre>
        </div>

        <div class="card card-opencode">
            <div class="card-head">
                <span class="badge b-amber">escritura</span>
                <h3>Herramientas de escritura</h3>
            </div>
            <pre><span class="cm"># Write - Crear archivos</span>
<span class="cm"># Crea archivos nuevos</span>

<span class="cm"># Edit - Modificar archivos</span>
<span class="cm"># Reemplaza texto específico</span>
<span class="cm"># Usa oldString/newString</span>

<span class="cm"># Bash - Ejecutar comandos</span>
<span class="cm"># Ejecuta comandos del sistema</span>
<span class="cm"># Soporta PowerShell en Windows</span></pre>
        </div>
    </div>
</section>

<!-- EJEMPLOS PRÁCTICOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">06</div>
        <h2 class="section-title">Ejemplos prácticos</h2>
    </div>

    <div class="card card-opencode">
        <div class="card-head">
            <span class="badge b-amber">ejemplos</span>
            <h3>Flujo de trabajo típico</h3>
        </div>
        <pre><span class="cm"># 1. Analizar un proyecto existente</span>
<span class="str">"Explora la estructura de este proyecto"</span>

<span class="cm"># 2. Planificar cambios</span>
<span class="str">"Necesito agregar autenticación. ¿Cómo lo hago?"</span>

<span class="cm"># 3. Implementar (cambiar a Build Mode)</span>
<span class="str">"Implementa la solución"</span>

<span class="cm"># 4. Verificar</span>
<span class="str">"Ejecuta los tests"</span>

<span class="cm"># 5. Commit</span>
<span class="str">"Crea un commit con los cambios"</span></pre>
    </div>

    <div class="card card-opencode" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge b-amber">ejemplos</span>
            <h3>Trabajo con R</h3>
        </div>
        <pre><span class="cm"># Crear un script R</span>
<span class="str">"Crea un script R que lea un CSV y haga un gráfico con ggplot2"</span>

<span class="cm"># Explicar código existente</span>
<span class="str">"Explica qué hace este código R"</span>

<span class="cm"># Debugging</span>
<span class="str">"Este script R da error. ¿Cuál es el problema?"</span>

<span class="cm"># Optimización</span>
<span class="str">"¿Cómo puedo optimizar este código R?"</span></pre>
    </div>
</section>

<!-- CONFIGURACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">07</div>
        <h2 class="section-title">Configuración</h2>
    </div>

    <div class="card card-opencode">
        <div class="card-head">
            <span class="badge b-amber">config</span>
            <h3>Archivo de configuración</h3>
        </div>
        <pre><span class="cm"># Ubicación del archivo de config</span>
<span class="cm"># Windows: %USERPROFILE%\.opencode\config.json</span>
<span class="cm"># Linux: ~/.opencode/config.json</span>

<span class="cm"># Configuración básica</span>
{
  <span class="str">"model"</span>: <span class="str">"gpt-4"</span>,
  <span class="str">"temperature"</span>: 0.7,
  <span class="str">"maxTokens"</span>: 4096,
  <span class="str">"theme"</span>: <span class="str">"dark"</span>
}

<span class="cm"># Variables de entorno</span>
<span class="fn">export</span> <span class="var">OPENAI_API_KEY</span>=<span class="str">"tu-api-key"</span>
<span class="fn">export</span> <span class="var">OPENCODE_MODEL</span>=<span class="str">"gpt-4"</span></pre>
    </div>
</section>

<!-- TROUBLESHOOTING -->
<section class="section">
    <div class="section-header">
        <div class="section-num">08</div>
        <h2 class="section-title">Troubleshooting</h2>
    </div>

    <div class="card card-opencode">
        <div class="card-head">
            <span class="badge b-red">errores</span>
            <h3>Problemas comunes</h3>
        </div>
        <pre><span class="cm"># Error: "opencode: command not found"</span>
<span class="cm"># Solución: Verificar PATH o reinstalar</span>
<span class="fn">npm</span> install -g opencode

<span class="cm"># Error: "API key not found"</span>
<span class="cm"># Solución: Configurar la API key</span>
<span class="fn">export</span> <span class="var">OPENAI_API_KEY</span>=<span class="str">"tu-api-key"</span>

<span class="cm"># Error: "Rate limit exceeded"</span>
<span class="cm"># Solución: Esperar o usar otra API key</span>

<span class="cm"># Error: "Model not available"</span>
<span class="cm"># Solución: Verificar nombre del modelo</span>
<span class="fn">opencode</span> --model gpt-3.5-turbo</pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Si tienes problemas con los permisos en Linux, asegúrate de tener los permisos correctos en el directorio de trabajo. Puedes usar <code>chmod</code> para ajustar permisos.
    </div>
</section>

<!-- MEJORES PRÁCTICAS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">09</div>
        <h2 class="section-title">Mejores prácticas</h2>
    </div>

    <div class="card card-opencode">
        <div class="card-head">
            <span class="badge b-amber">tips</span>
            <h3>Consejos de uso</h3>
        </div>
        <pre><span class="cm"># 1. Sé específico en tus peticiones</span>
<span class="str">"Crea una función en R que calcule la media móvil de 7 días"</span>
<span class="cm"># Mejor que: "Haz una función"</span>

<span class="cm"># 2. Usa Plan Mode para análisis</span>
<span class="str">"Analiza este código y sugiere mejoras"</span>
<span class="cm"># Antes de implementar cambios</span>

<span class="cm"># 3. Divide tareas complejas</span>
<span class="cm"># - Primero: "Crea la estructura del proyecto"</span>
<span class="cm"># - Luego: "Implementa la función X"</span>
<span class="cm"># - Finalmente: "Escribe los tests"</span>

<span class="cm"># 4. Verifica antes de commit</span>
<span class="str">"Revisa los cambios y ejecuta los tests"</span>

<span class="cm"># 5. Usa comentarios para contexto</span>
<span class="str">"Este proyecto usa R para análisis estadístico..."</span></pre>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
