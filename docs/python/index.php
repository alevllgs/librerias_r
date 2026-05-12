<?php
$page_title = 'Guía Python';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">Python</span>
</div>

<a href="<?= $base_url ?>/index.php" class="back-btn">
    <i class="fas fa-arrow-left"></i> Volver al dashboard
</a>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--python-bg); color: var(--python-color);">Lenguaje</div>
    <h1><i class="fab fa-python" style="margin-right: 0.5rem;"></i> Guía Python</h1>
    <p>Atajos de teclado para REPL, VS Code, Jupyter y PyCharm. Catálogo de librerías esenciales para data science, web, automatización, IA y testing.</p>
</section>

<!-- 01 – ATAJOS REPL -->
<section class="section">
    <div class="section-header">
        <div class="section-num">01</div>
        <h2 class="section-title">Atajos de REPL / Terminal</h2>
    </div>

    <div class="card card-python">
        <div class="card-head">
            <span class="badge" style="background: var(--python-bg); color: var(--python-color);">python</span>
            <h3>Interactive Shell</h3>
        </div>
        <pre><span class="cm"># Iniciar REPL</span>
<span class="fn">python</span>

<span class="cm"># Iniciar con script ya cargado</span>
<span class="fn">python</span> -i script.py

<span class="cm"># Ejecutar módulo como script</span>
<span class="fn">python</span> -m http.server 8000

<span class="cm"># Atajos dentro del REPL:</span>
<span class="fn">Ctrl</span> + <span class="fn">C</span>           <span class="cm"># Cancelar ejecución actual</span>
<span class="fn">Ctrl</span> + <span class="fn">D</span>           <span class="cm"># Salir (Linux/Mac)</span>
<span class="fn">Ctrl</span> + <span class="fn">Z</span> + Enter   <span class="cm"># Salir (Windows)</span>
<span class="fn">Tab</span>                <span class="cm"># Autocompletar</span>
<span class="fn">↑</span> / <span class="fn">↓</span>              <span class="cm"># Navegar historial de comandos</span>
<span class="fn">exit()</span>             <span class="cm"># Salir del REPL</span>
<span class="fn">quit()</span>             <span class="cm"># Salir del REPL</span>
<span class="fn">help()</span>             <span class="cm"># Modo ayuda interactiva</span>
<span class="fn">dir()</span>              <span class="cm"># Listar atributos del objeto actual</span>
<span class="fn">dir</span>(objeto)        <span class="cm"># Listar atributos de un objeto</span>
<span class="fn">help</span>(objeto)       <span class="cm"># Ver documentación (docstring)</span>
<span class="fn">type</span>(objeto)       <span class="cm"># Ver tipo de dato</span>
<span class="fn">len</span>(objeto)        <span class="cm"># Longitud de secuencia</span></pre>
    </div>

    <div class="card card-python" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--python-bg); color: var(--python-color);">tips</span>
            <h3>Trucos del REPL</h3>
        </div>
        <pre><span class="cm"># _ contiene el último resultado</span>
<span class="fn">_</span>

<span class="cm"># Ejemplo de uso:</span>
>>> 2 + 3
5
>>> _ * 10
50

<span class="cm"># Multilínea: después de :, presiona Enter</span>
>>> for i in range(3):
...     print(i)
...
0
1
2

<span class="cm"># Ejecutar archivo Python</span>
<span class="fn">python</span> script.py

<span class="cm"># Ver versión de Python</span>
<span class="fn">python</span> --version
<span class="fn">python</span> -V

<span class="cm"># Ver ruta del ejecutable</span>
<span class="fn">python</span> -c <span class="str">"import sys; print(sys.executable)"</span>

<span class="cm"># Lista de módulos instalados</span>
<span class="fn">python</span> -m pip list

<span class="cm"># Buscar módulo específico</span>
<span class="fn">python</span> -m pip show pandas</pre>
    </div>
</section>

<!-- 02 – ATAJOS VS CODE -->
<section class="section">
    <div class="section-header">
        <div class="section-num">02</div>
        <h2 class="section-title">Atajos de VS Code</h2>
    </div>

    <div class="g2">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">ejecutar</span>
                <h3>Ejecución y terminal</h3>
            </div>
            <pre><span class="fn">Ctrl</span> + <span class="fn">F5</span>           <span class="cm"># Ejecutar sin debug</span>
<span class="fn">F5</span>                  <span class="cm"># Iniciar debug</span>
<span class="fn">Ctrl</span> + <span class="fn">`</span>            <span class="cm"># Abrir/cerrar terminal</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + P    <span class="cm"># Command Palette</span>
<span class="fn">Ctrl</span> + <span class="fn">Shift</span> + B    <span class="cm"># Ejecutar build task</span>
<span class="fn">Shift</span> + Enter       <span class="cm"># Ejecutar línea en terminal</span>
<span class="fn">Ctrl</span> + Enter        <span class="cm"># Ejecutar selección en terminal</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">editor</span>
                <h3>Edición y navegación</h3>
            </div>
            <pre><span class="fn">Ctrl</span> + <span class="fn">Space</span>        <span class="cm"># Autocompletar / IntelliSense</span>
<span class="fn">Ctrl</span> + <span class="fn">.</span>            <span class="cm"># Quick Fix (importar, corregir)</span>
<span class="fn">F12</span>                 <span class="cm"># Ir a definición</span>
<span class="fn">Alt</span> + F12           <span class="cm"># Peek Definition</span>
<span class="fn">Shift</span> + F12         <span class="cm"># Ver referencias</span>
<span class="fn">Ctrl</span> + D            <span class="cm"># Seleccionar siguiente ocurrencia</span>
<span class="fn">Ctrl</span> + Shift + L    <span class="cm"># Seleccionar todas las ocurrencias</span>
<span class="fn">Alt</span> + ↑ / ↓         <span class="cm"># Mover línea arriba/abajo</span>
<span class="fn">Shift</span> + Alt + ↓ / ↑ <span class="cm"># Duplicar línea</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">format</span>
                <h3>Formato y linting</h3>
            </div>
            <pre><span class="fn">Shift</span> + Alt + F     <span class="cm"># Formatear documento</span>
<span class="fn">Ctrl</span> + K + Ctrl + D <span class="cm"># Formatear selección</span>
<span class="fn">Ctrl</span> + K + Ctrl + X <span class="cm"># Trim trailing whitespace</span>
<span class="fn">Ctrl</span> + /            <span class="cm"># Comentar/descomentar línea</span>
<span class="fn">Ctrl</span> + Shift + /    <span class="cm"># Comentar bloque</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">debug</span>
                <h3>Depuración</h3>
            </div>
            <pre><span class="fn">F9</span>                  <span class="cm"># Toggle breakpoint</span>
<span class="fn">F10</span>                 <span class="cm"># Step Over</span>
<span class="fn">F11</span>                 <span class="cm"># Step Into</span>
<span class="fn">Shift</span> + F11         <span class="cm"># Step Out</span>
<span class="fn">Ctrl</span> + Shift + K    <span class="cm"># Eliminar línea</span>
<span class="fn">Ctrl</span> + Shift + D    <span class="cm"># Abrir panel Debug</span></pre>
        </div>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Instala la extensión <strong>Python</strong> de Microsoft y <strong>Pylance</strong> para tener IntelliSense completo, linting con flake8/pylint, formateo con black/autopep8, y debugging integrado.
    </div>
</section>

<!-- 03 – ATAJOS JUPYTER -->
<section class="section">
    <div class="section-header">
        <div class="section-num">03</div>
        <h2 class="section-title">Atajos de Jupyter Notebook</h2>
    </div>

    <div class="g2">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">modos</span>
                <h3>Modos de celda</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Command Mode</strong> (borde azul): presiona <code>Esc</code>. Navega y opera sobre celdas.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Edit Mode</strong> (borde verde): presiona <code>Enter</code>. Edita el contenido de la celda.</p>
                <p>Presiona <code>H</code> en Command Mode para ver todos los atajos.</p>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">ejecución</span>
                <h3>Ejecutar celdas</h3>
            </div>
            <pre><span class="fn">Shift</span> + Enter     <span class="cm"># Ejecutar y avanzar</span>
<span class="fn">Ctrl</span> + Enter      <span class="cm"># Ejecutar y quedarse</span>
<span class="fn">Alt</span> + Enter       <span class="cm"># Ejecutar e insertar abajo</span>
<span class="fn">Ctrl</span> + Shift + -  <span class="cm"># Dividir celda en cursor</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">command</span>
                <h3>Command Mode (Esc)</h3>
            </div>
            <pre><span class="fn">A</span>                 <span class="cm"># Insertar celda arriba</span>
<span class="fn">B</span>                 <span class="cm"># Insertar celda abajo</span>
<span class="fn">D</span> + <span class="fn">D</span>             <span class="cm"># Eliminar celda (doble D)</span>
<span class="fn">Z</span>                 <span class="cm"># Deshacer eliminación</span>
<span class="fn">C</span>                 <span class="cm"># Copiar celda</span>
<span class="fn">V</span>                 <span class="cm"># Pegar celda</span>
<span class="fn">X</span>                 <span class="cm"># Cortar celda</span>
<span class="fn">M</span>                 <span class="cm"># Convertir a Markdown</span>
<span class="fn">Y</span>                 <span class="cm"># Convertir a Code</span>
<span class="fn">L</span>                 <span class="cm"># Toggle line numbers</span>
<span class="fn">O</span>                 <span class="cm"># Toggle output</span>
<span class="fn">Shift</span> + M         <span class="cm"># Merge celdas seleccionadas</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">magics</span>
                <h3>Comandos mágicos (%)</h3>
            </div>
            <pre><span class="fn">%timeit</span> expr          <span class="cm"># Medir tiempo de ejecución</span>
<span class="fn">%time</span> expr            <span class="cm"># Tiempo de una ejecución</span>
<span class="fn">%run</span> script.py        <span class="cm"># Ejecutar archivo .py</span>
<span class="fn">%ls</span>                   <span class="cm"># Listar archivos</span>
<span class="fn">%cd</span> directorio        <span class="cm"># Cambiar directorio</span>
<span class="fn">%pwd</span>                  <span class="cm"># Directorio actual</span>
<span class="fn">%who</span>                  <span class="cm"># Variables en memoria</span>
<span class="fn">%whos</span>                 <span class="cm"># Variables con detalles</span>
<span class="fn">%reset</span>                <span class="cm"># Limpiar namespace</span>
<span class="fn">%matplotlib inline</span>    <span class="cm"># Mostrar gráficos inline</span>
<span class="fn">%%writefile</span> f.py      <span class="cm"># Escribir celda a archivo</span>
<span class="fn">%%bash</span>                <span class="cm"># Ejecutar celda como bash</span>
<span class="fn">%%time</span>                <span class="cm"># Tiempo de toda la celda</span>
<span class="fn">%%html</span>                <span class="cm"># Renderizar como HTML</span>
<span class="fn">?funcion</span>              <span class="cm"># Ver docstring</span>
<span class="fn">??funcion</span>             <span class="cm"># Ver código fuente</span></pre>
        </div>
    </div>
</section>

<!-- 04 – ATAJOS PYCHARM -->
<section class="section">
    <div class="section-header">
        <div class="section-num">04</div>
        <h2 class="section-title">Atajos de PyCharm</h2>
    </div>

    <div class="g2">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">navegación</span>
                <h3>Navegación</h3>
            </div>
            <pre><span class="fn">Ctrl</span> + B            <span class="cm"># Ir a declaración</span>
<span class="fn">Ctrl</span> + Click        <span class="cm"># Ir a definición</span>
<span class="fn">Ctrl</span> + Alt + B      <span class="cm"># Ir a implementación</span>
<span class="fn">Ctrl</span> + Shift + N    <span class="cm"># Buscar archivo por nombre</span>
<span class="fn">Ctrl</span> + N            <span class="cm"># Buscar clase</span>
<span class="fn">Ctrl</span> + Shift + F    <span class="cm"># Buscar en todo el proyecto</span>
<span class="fn">Ctrl</span> + F            <span class="cm"># Buscar en archivo</span>
<span class="fn">Ctrl</span> + R            <span class="cm"># Reemplazar en archivo</span>
<span class="fn">Ctrl</span> + Shift + R    <span class="cm"># Reemplazar en proyecto</span>
<span class="fn">Alt</span> + F7            <span class="cm"># Buscar usos del símbolo</span>
<span class="fn">Ctrl</span> + Shift + Back <span class="cm"># Ir a última edición</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">refactor</span>
                <h3>Refactoring</h3>
            </div>
            <pre><span class="fn">Shift</span> + F6          <span class="cm"># Renombrar símbolo</span>
<span class="fn">Ctrl</span> + Alt + M      <span class="cm"># Extraer método</span>
<span class="fn">Ctrl</span> + Alt + V      <span class="cm"># Extraer variable</span>
<span class="fn">Ctrl</span> + Alt + C      <span class="cm"># Extraer constante</span>
<span class="fn">Ctrl</span> + Alt + P      <span class="cm"># Extraer parámetro</span>
<span class="fn">Ctrl</span> + Alt + O      <span class="cm"># Optimizar imports</span>
<span class="fn">Ctrl</span> + Alt + L      <span class="cm"># Formatear código</span>
<span class="fn">Ctrl</span> + /            <span class="cm"># Comentar/descomentar</span>
<span class="fn">Ctrl</span> + Shift + /    <span class="cm"># Comentar bloque</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">run</span>
                <h3>Ejecución y debug</h3>
            </div>
            <pre><span class="fn">Shift</span> + F10         <span class="cm"># Ejecutar</span>
<span class="fn">Shift</span> + F9          <span class="cm"># Debug</span>
<span class="fn">Ctrl</span> + Shift + F10  <span class="cm"># Ejecutar contexto actual</span>
<span class="fn">F8</span>                  <span class="cm"># Step Over</span>
<span class="fn">F7</span>                  <span class="cm"># Step Into</span>
<span class="fn">Shift</span> + F8          <span class="cm"># Step Out</span>
<span class="fn">Ctrl</span> + F8           <span class="cm"># Toggle breakpoint</span>
<span class="fn">Ctrl</span> + Shift + F8   <span class="cm"># Breakpoints avanzados</span>
<span class="fn">Alt</span> + 4             <span class="cm"># Abrir panel Run</span>
<span class="fn">Alt</span> + 5             <span class="cm"># Abrir panel Debug</span></pre>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge" style="background: var(--python-bg); color: var(--python-color);">templates</span>
                <h3>Live Templates</h3>
            </div>
            <pre><span class="fn">main</span> + Tab          <span class="cm"># if __name__ == "__main__"</span>
<span class="fn">__init</span> + Tab        <span class="cm"># def __init__(self):</span>
<span class="fn">__str</span> + Tab         <span class="cm"># def __str__(self):</span>
<span class="fn">__repr</span> + Tab        <span class="cm"># def __repr__(self):</span>
<span class="fn">for</span> + Tab           <span class="cm"># for item in iterable:</span>
<span class="fn">iter</span> + Tab          <span class="cm"># for i in range(len()):</span>
<span class="fn">comp</span> + Tab          <span class="cm"># List comprehension</span>
<span class="fn">try</span> + Tab           <span class="cm"># try/except block</span>
<span class="fn">with</span> + Tab          <span class="cm"># with open() as f:</span>
<span class="fn">cls</span> + Tab           <span class="cm"># class ClassName:</span>
<span class="fn">def</span> + Tab           <span class="cm"># def function():</span>
<span class="fn">doc</span> + Tab           <span class="cm"># Docstring triple quotes</span></pre>
        </div>
    </div>
</section>

<!-- 05 – LIBRERÍAS DATA SCIENCE -->
<section class="section">
    <div class="section-header">
        <div class="section-num">05</div>
        <h2 class="section-title">Librerías: Data Science</h2>
    </div>

    <div class="g3">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-blue">pandas</span>
                <h3>Manipulación de datos</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> DataFrames, Series, lectura/escritura CSV/Excel/SQL, filtrado, agrupación, merge, pivot tables, time series.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install pandas</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-blue">numpy</span>
                <h3>Cálculo numérico</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Arrays multidimensionales, álgebra lineal, funciones matemáticas, generación de números aleatorios, operaciones vectorizadas.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install numpy</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">matplotlib</span>
                <h3>Visualización</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Gráficos 2D: líneas, barras, dispersión, histogramas, heatmaps, subplots, personalización completa.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install matplotlib</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">seaborn</span>
                <h3>Visualización estadística</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Gráficos estadísticos sobre matplotlib: violin plots, pair plots, heatmaps, regresión, paletas de colores.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install seaborn</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-amber">plotly</span>
                <h3>Visualización interactiva</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Gráficos interactivos con zoom, hover, animaciones. Dashboards con Dash. Mapas, gráficos 3D.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install plotly</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-amber">scipy</span>
                <h3>Ciencia y matemáticas</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Optimización, integración, interpolación, estadística, procesamiento de señales e imágenes, álgebra lineal avanzada.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install scipy</pre>
            </div>
        </div>
    </div>
</section>

<!-- 06 – LIBRERÍAS WEB -->
<section class="section">
    <div class="section-header">
        <div class="section-num">06</div>
        <h2 class="section-title">Librerías: Web</h2>
    </div>

    <div class="g3">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-purple">flask</span>
                <h3>Framework web ligero</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> APIs REST, microservicios, aplicaciones web simples. Routing, templates Jinja2, middleware.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install flask</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-purple">django</span>
                <h3>Framework web completo</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Aplicaciones web robustas. ORM, admin panel, autenticación, formularios, migraciones, Django REST Framework.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install django</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-purple">fastapi</span>
                <h3>APIs modernas y rápidas</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> APIs REST con validación automática, documentación Swagger/OpenAPI, async, type hints. Muy rápido.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install fastapi uvicorn</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-orange">requests</span>
                <h3>Cliente HTTP</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Peticiones HTTP GET/POST/PUT/DELETE, manejo de sesiones, cookies, headers, autenticación, JSON.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install requests</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-orange">httpx</span>
                <h3>HTTP async moderno</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Como requests pero con soporte async/await, HTTP/2, timeouts, clientes reutilizables.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install httpx</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-orange">beautifulsoup4</span>
                <h3>Web scraping</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Parsear HTML/XML, extraer datos de páginas web, navegación por el DOM, búsqueda por tags/clases.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install beautifulsoup4</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-orange">scrapy</span>
                <h3>Web scraping framework</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Crawling y scraping a escala. Spiders, pipelines, middlewares, export a JSON/CSV, manejo de paginación.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install scrapy</pre>
            </div>
        </div>
    </div>
</section>

<!-- 07 – LIBRERÍAS ML / IA -->
<section class="section">
    <div class="section-header">
        <div class="section-num">07</div>
        <h2 class="section-title">Librerías: Machine Learning / IA</h2>
    </div>

    <div class="g3">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-red">scikit-learn</span>
                <h3>ML clásico</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Regresión, clasificación, clustering, reducción de dimensionalidad, pipelines, cross-validation, métricas.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install scikit-learn</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-red">tensorflow</span>
                <h3>Deep Learning (Google)</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Redes neuronales, CNN, RNN, transformers, Keras API, GPU/TPU, TensorFlow Serving, TensorFlow Lite.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install tensorflow</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-red">pytorch</span>
                <h3>Deep Learning (Meta)</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Tensores con GPU, autograd, redes neuronales, torchvision, torchtext, Hugging Face integration.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install torch torchvision</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-red">xgboost</span>
                <h3>Gradient Boosting</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Árboles de decisión potenciados, competiciones Kaggle, clasificación y regresión de alto rendimiento.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install xgboost</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-red">transformers</span>
                <h3>Modelos de lenguaje (Hugging Face)</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> BERT, GPT, T5, clasificación de texto, generación, NER, question answering, pipelines de NLP.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install transformers</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-red">langchain</span>
                <h3>Apps con LLMs</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Cadenas de prompts, RAG, agentes, memoria, herramientas, integración con OpenAI, Ollama, ChromaDB.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install langchain langchain-community</pre>
            </div>
        </div>
    </div>
</section>

<!-- 08 – LIBRERÍAS AUTOMATIZACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">08</div>
        <h2 class="section-title">Librerías: Automatización (built-in)</h2>
    </div>

    <div class="g3">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">os</span>
                <h3>Sistema operativo</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>os.path</code>, <code>os.makedirs()</code>, <code>os.listdir()</code>, <code>os.environ</code>, <code>os.chdir()</code>, <code>os.remove()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> os</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">pathlib</span>
                <h3>Rutas modernas</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>Path()</code>, <code>.exists()</code>, <code>.read_text()</code>, <code>.write_text()</code>, <code>.glob()</code>, <code>.mkdir()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">from</span> pathlib <span class="kw">import</span> Path</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">subprocess</span>
                <h3>Ejecutar comandos</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>run()</code>, <code>Popen()</code>, <code>check_output()</code>. Ejecutar comandos del sistema desde Python.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> subprocess</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">shutil</span>
                <h3>Operaciones de archivos</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>copy()</code>, <code>move()</code>, <code>rmtree()</code>, <code>make_archive()</code>, <code>disk_usage()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> shutil</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">glob</span>
                <h3>Patrones de archivos</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>glob("*.py")</code>, <code>glob("**/*.txt", recursive=True)</code>. Buscar archivos por patrón.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> glob</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">json</span>
                <h3>JSON</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>json.load()</code>, <code>json.dump()</code>, <code>json.loads()</code>, <code>json.dumps()</code>. Serializar y deserializar.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> json</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">csv</span>
                <h3>Archivos CSV</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>csv.reader()</code>, <code>csv.writer()</code>, <code>csv.DictReader()</code>, <code>csv.DictWriter()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> csv</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">re</span>
                <h3>Expresiones regulares</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>re.match()</code>, <code>re.search()</code>, <code>re.findall()</code>, <code>re.sub()</code>, <code>re.compile()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> re</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">datetime</span>
                <h3>Fechas y horas</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>datetime.now()</code>, <code>timedelta</code>, <code>strftime()</code>, <code>strptime()</code>, <code>date</code>, <code>time</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">from</span> datetime <span class="kw">import</span> datetime, timedelta</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">logging</span>
                <h3>Registro de logs</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>logging.info()</code>, <code>logging.error()</code>, <code>logging.warning()</code>, <code>logging.debug()</code>, handlers, formatters.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> logging</pre>
            </div>
        </div>
    </div>
</section>

<!-- 09 – LIBRERÍAS TESTING -->
<section class="section">
    <div class="section-header">
        <div class="section-num">09</div>
        <h2 class="section-title">Librerías: Testing</h2>
    </div>

    <div class="g3">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-amber">pytest</span>
                <h3>Framework de testing</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Tests con funciones simples, fixtures, parametrización, markers, plugins, assert rewriting, coverage.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install pytest
<span class="fn">pytest</span> tests/ -v</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-amber">unittest</span>
                <h3>Testing estándar</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Incluido en stdlib. Clases TestCase, setUp/tearDown, assertEqual, assertRaises, test suites.</p>
                <pre style="margin:0;font-size:12px;"><span class="kw">import</span> unittest</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-amber">pytest-mock</span>
                <h3>Mocks y stubs</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Mockear funciones, clases, objetos. <code>mocker.patch()</code>, <code>mocker.MagicMock()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install pytest-mock</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-amber">hypothesis</span>
                <h3>Property-based testing</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Generar casos de prueba automáticamente. Estrategias, propiedades invariantes, shrinking.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install hypothesis</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-amber">coverage</span>
                <h3>Medir cobertura</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Reportar qué líneas de código se ejecutan en los tests. HTML reports, integración con pytest.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install coverage
<span class="fn">coverage</span> run -m pytest
<span class="fn">coverage</span> report -m</pre>
            </div>
        </div>
    </div>
</section>

<!-- 10 – LIBRERÍAS UTILIDADES -->
<section class="section">
    <div class="section-header">
        <div class="section-num">10</div>
        <h2 class="section-title">Librerías: Utilidades</h2>
    </div>

    <div class="g3">
        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-blue">pip</span>
                <h3>Gestor de paquetes</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>pip install</code>, <code>pip uninstall</code>, <code>pip list</code>, <code>pip freeze > requirements.txt</code>, <code>pip install -r requirements.txt</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install --upgrade pip</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-blue">venv</span>
                <h3>Entornos virtuales</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><code>python -m venv .venv</code>, <code>source .venv/bin/activate</code> (Linux) o <code>.venv\Scripts\activate</code> (Windows).</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">python</span> -m venv .venv</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">black</span>
                <h3>Formateador de código</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Formateo automático PEP 8. <code>black .</code>, <code>black archivo.py</code>, <code>black --check .</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install black</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">flake8</span>
                <h3>Linter</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Detectar errores de estilo, complejidad, imports no usados. <code>flake8 .</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install flake8</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-green">mypy</span>
                <h3>Verificación de tipos</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Type checking estático. <code>mypy archivo.py</code>. Compatible con type hints de Python 3.5+.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install mypy</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-purple">pydantic</span>
                <h3>Validación de datos</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Modelos con type hints, validación automática, serialización JSON. Usado en FastAPI.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install pydantic</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-purple">dotenv</span>
                <h3>Variables de entorno</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Cargar variables desde archivo <code>.env</code>. <code>load_dotenv()</code>, <code>os.getenv()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install python-dotenv</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-purple">rich</span>
                <h3>Terminal con estilo</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Colores, tablas, barras de progreso, markdown, syntax highlighting, tracebacks bonitos en terminal.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install rich</pre>
            </div>
        </div>

        <div class="card card-python">
            <div class="card-head">
                <span class="badge b-purple">click</span>
                <h3>CLI frameworks</h3>
            </div>
            <div class="card-body">
                <p style="margin-bottom:0.5rem;"><strong>Uso:</strong> Crear comandos de línea de comandos con <code>@click.command()</code>, <code>@click.option()</code>, <code>@click.argument()</code>.</p>
                <pre style="margin:0;font-size:12px;"><span class="fn">pip</span> install click</pre>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>