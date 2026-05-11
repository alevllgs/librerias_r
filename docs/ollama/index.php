<?php
$page_title = 'Guía Ollama';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">Ollama</span>
</div>

<a href="<?= $base_url ?>/index.php" class="back-btn">
    <i class="fas fa-arrow-left"></i> Volver al dashboard
</a>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--ollama-bg); color: var(--ollama-color);">IA Local</div>
    <h1><i class="fas fa-robot" style="margin-right: 0.5rem;"></i> Guía Ollama</h1>
    <p>Ejecuta modelos de lenguaje grandes (LLM) localmente en tu máquina. Instalación, configuración y uso completo.</p>
</section>

<!-- INSTALACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">01</div>
        <h2 class="section-title">Instalación</h2>
    </div>

    <div class="card card-ollama">
        <div class="card-head">
            <span class="badge b-green">Windows</span>
            <h3>Instalación en Windows</h3>
        </div>
        <pre><span class="cm"># Descargar el instalador desde la web oficial</span>
<span class="str">https://ollama.com/download</span>

<span class="cm"># O usar winget (Windows Package Manager)</span>
<span class="fn">winget</span> install Ollama.Ollama

<span class="cm"># Verificar instalación</span>
<span class="fn">ollama</span> --version</pre>
    </div>

    <div class="card card-ollama" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge b-green">Linux</span>
            <h3>Instalación en Pop!_OS / Ubuntu</h3>
        </div>
        <pre><span class="cm"># Instalación con un solo comando</span>
<span class="fn">curl</span> -fsSL https://ollama.com/install.sh | sh

<span class="cm"># O instalar manualmente</span>
<span class="fn">sudo</span> apt update
<span class="fn">sudo</span> apt install ollama

<span class="cm"># Iniciar el servicio</span>
<span class="fn">sudo</span> systemctl start ollama
<span class="fn">sudo</span> systemctl enable ollama

<span class="cm"># Verificar instalación</span>
<span class="fn">ollama</span> --version</pre>
    </div>
</section>

<!-- COMANDOS BÁSICOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">02</div>
        <h2 class="section-title">Comandos básicos</h2>
    </div>

    <div class="card card-ollama">
        <div class="card-head">
            <span class="badge b-green">esencial</span>
            <h3>Gestión de modelos</h3>
        </div>
        <pre><span class="cm"># Descargar un modelo</span>
<span class="fn">ollama</span> pull llama3
<span class="fn">ollama</span> pull codellama
<span class="fn">ollama</span> pull mistral

<span class="cm"># Listar modelos descargados</span>
<span class="fn">ollama</span> list

<span class="cm"># Ver modelos disponibles</span>
<span class="fn">ollama</span> list --all

<span class="cm"># Eliminar un modelo</span>
<span class="fn">ollama</span> rm llama3

<span class="cm"># Mostrar información de un modelo</span>
<span class="fn">ollama</span> show llama3</pre>
    </div>

    <div class="card card-ollama" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge b-green">ejecución</span>
            <h3>Ejecutar modelos</h3>
        </div>
        <pre><span class="cm"># Ejecutar un modelo (modo interactivo)</span>
<span class="fn">ollama</span> run llama3

<span class="cm"># Ejecutar con un prompt específico</span>
<span class="fn">ollama</span> run llama3 "Explica qué es R en programación"

<span class="cm"># Ejecutar con opciones</span>
<span class="fn">ollama</span> run llama3 --temperature 0.7

<span class="cm"># Ejecutar en segundo plano</span>
<span class="fn">ollama</span> serve

<span class="cm"># Detener todos los modelos</span>
<span class="fn">ollama</span> stop</pre>
    </div>
</section>

<!-- MODELOS RECOMENDADOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">03</div>
        <h2 class="section-title">Modelos recomendados</h2>
    </div>

    <div class="g2">
        <div class="card card-ollama">
            <div class="card-head">
                <span class="badge b-green">general</span>
                <h3>LLaMA 3</h3>
            </div>
            <pre><span class="cm"># Meta's LLaMA 3</span>
<span class="fn">ollama</span> pull llama3
<span class="fn">ollama</span> pull llama3:70b

<span class="cm"># Tamaños: 8B, 70B</span></pre>
            <div class="card-body" style="margin-top: 0.5rem;">
                Modelo general de alta calidad. Ideal para conversación, análisis y tareas complejas.
            </div>
        </div>

        <div class="card card-ollama">
            <div class="card-head">
                <span class="badge b-green">código</span>
                <h3>Code Llama</h3>
            </div>
            <pre><span class="cm"># Meta's Code Llama</span>
<span class="fn">ollama</span> pull codellama
<span class="fn">ollama</span> pull codellama:34b

<span class="cm"># Variantes: code, python, instruct</span></pre>
            <div class="card-body" style="margin-top: 0.5rem;">
                Especializado en generación y explicación de código. Soporta múltiples lenguajes.
            </div>
        </div>

        <div class="card card-ollama">
            <div class="card-head">
                <span class="badge b-green">rápido</span>
                <h3>Mistral</h3>
            </div>
            <pre><span class="cm"># Mistral AI</span>
<span class="fn">ollama</span> pull mistral
<span class="fn">ollama</span> pull mixtral

<span class="cm"># Tamaños: 7B, 8x7B (Mixtral)</span></pre>
            <div class="card-body" style="margin-top: 0.5rem;">
                Rápido y eficiente. Excelente relación rendimiento/calidad.
            </div>
        </div>

        <div class="card card-ollama">
            <div class="card-head">
                <span class="badge b-green">visión</span>
                <h3>LLaVA</h3>
            </div>
            <pre><span class="cm"># Large Language and Vision Assistant</span>
<span class="fn">ollama</span> pull llava

<span class="cm"># Analiza imágenes + texto</span></pre>
            <div class="card-body" style="margin-top: 0.5rem;">
                Modelo multimodal que puede analizar imágenes y responder preguntas sobre ellas.
            </div>
        </div>
    </div>
</section>

<!-- CONFIGURACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">04</div>
        <h2 class="section-title">Configuración avanzada</h2>
    </div>

    <div class="card card-ollama">
        <div class="card-head">
            <span class="badge b-green">config</span>
            <h3>Variables de entorno</h3>
        </div>
        <pre><span class="cm"># Puerto personalizado</span>
<span class="fn">export</span> <span class="var">OLLAMA_HOST</span>=<span class="str">"0.0.0.0:11435"</span>

<span class="cm"># Directorio de modelos</span>
<span class="fn">export</span> <span class="var">OLLAMA_MODELS</span>=<span class="str">"/path/to/models"</span>

<span class="cm"># Número máximo de modelos en memoria</span>
<span class="fn">export</span> <span class="var">OLLAMA_MAX_LOADED_MODELS</span>=<span class="str">3</span>

<span class="cm"># En Windows (PowerShell)</span>
<span class="fn">$env:</span><span class="var">OLLAMA_HOST</span>=<span class="str">"0.0.0.0:11435"</span></pre>
    </div>

    <div class="card card-ollama" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge b-green">Modelfile</span>
            <h3>Crear modelos personalizados</h3>
        </div>
        <pre><span class="cm"># Crear un Modelfile</span>
<span class="fn">cat</span> > Modelfile << 'EOF'
<span class="kw">FROM</span> llama3
<span class="kw">PARAMETER</span> temperature 0.7
<span class="kw">PARAMETER</span> top_p 0.9
<span class="kw">SYSTEM</span> <span class="str">"Eres un experto en R y estadística. Responde siempre en español."</span>
EOF

<span class="cm"># Crear el modelo personalizado</span>
<span class="fn">ollama</span> create mi-r-expert -f Modelfile

<span class="cm"># Ejecutar el modelo personalizado</span>
<span class="fn">ollama</span> run mi-r-expert</pre>
    </div>
</section>

<!-- API -->
<section class="section">
    <div class="section-header">
        <div class="section-num">05</div>
        <h2 class="section-title">API de Ollama</h2>
    </div>

    <div class="card card-ollama">
        <div class="card-head">
            <span class="badge b-green">API</span>
            <h3>Endpoints principales</h3>
        </div>
        <pre><span class="cm"># Generar texto</span>
<span class="fn">curl</span> http://localhost:11434/api/generate -d '{
  <span class="str">"model"</span>: <span class="str">"llama3"</span>,
  <span class="str">"prompt"</span>: <span class="str">"¿Qué es R?"</span>
}'

<span class="cm"># Chat (conversación)</span>
<span class="fn">curl</span> http://localhost:11434/api/chat -d '{
  <span class="str">"model"</span>: <span class="str">"llama3"</span>,
  <span class="str">"messages"</span>: [{<span class="str">"role"</span>: <span class="str">"user"</span>, <span class="str">"content"</span>: <span class="str">"Hola"</span>}]
}'

<span class="cm"># Listar modelos</span>
<span class="fn">curl</span> http://localhost:11434/api/tags

<span class="cm"># Información del modelo</span>
<span class="fn">curl</span> http://localhost:11434/api/show -d '{<span class="str">"name"</span>: <span class="str">"llama3"</span>}'</pre>
    </div>

    <div class="card card-ollama" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge b-green">Python</span>
            <h3>Uso desde Python</h3>
        </div>
        <pre><span class="kw">import</span> ollama

<span class="cm"># Generar respuesta</span>
response = ollama.<span class="fn">chat</span>(model=<span class="str">'llama3'</span>, messages=[
    {<span class="str">'role'</span>: <span class="str">'user'</span>, <span class="str">'content'</span>: <span class="str">'¿Qué es R?'</span>}
])
<span class="fn">print</span>(response[<span class="str">'message'</span>][<span class="str">'content'</span>])

<span class="cm"># Stream de respuestas</span>
<span class="kw">for</span> chunk <span class="kw">in</span> ollama.<span class="fn">chat</span>(model=<span class="str">'llama3'</span>, messages=[
    {<span class="str">'role'</span>: <span class="str">'user'</span>, <span class="str">'content'</span>: <span class="str">'Explica ggplot2'</span>}
], stream=<span class="kw">True</span>):
    <span class="fn">print</span>(chunk[<span class="str">'message'</span>][<span class="str">'content'</span>], end=<span class="str">''</span>)</pre>
    </div>
</section>

<!-- TROUBLESHOOTING -->
<section class="section">
    <div class="section-header">
        <div class="section-num">06</div>
        <h2 class="section-title">Troubleshooting</h2>
    </div>

    <div class="card card-ollama">
        <div class="card-head">
            <span class="badge b-red">errores</span>
            <h3>Problemas comunes</h3>
        </div>
        <pre><span class="cm"># Error: "ollama: command not found"</span>
<span class="cm"># Solución: Agregar al PATH o reinstalar</span>
<span class="fn">export</span> <span class="var">PATH</span>=<span class="str">"$PATH:/usr/local/bin"</span>

<span class="cm"># Error: "connection refused"</span>
<span class="cm"># Solución: Verificar que el servicio está corriendo</span>
<span class="fn">sudo</span> systemctl status ollama
<span class="fn">sudo</span> systemctl restart ollama

<span class="cm"># Error: "out of memory"</span>
<span class="cm"># Solución: Usar un modelo más pequeño</span>
<span class="fn">ollama</span> pull llama3:8b  <span class="cm"># En vez de 70b</span>

<span class="cm"># Error: GPU no detectada</span>
<span class="cm"># Solución: Verificar drivers NVIDIA</span>
<span class="fn">nvidia-smi</span>
<span class="fn">sudo</span> apt install nvidia-cuda-toolkit</pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Si tienes problemas con la GPU, asegúrate de tener los drivers NVIDIA instalados correctamente. En Pop!_OS, puedes instalarlos desde "System76 Driver" o con <code>sudo apt install system76-driver-nvidia</code>.
    </div>
</section>

<!-- ATAJOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">07</div>
        <h2 class="section-title">Atajos y trucos</h2>
    </div>

    <div class="card card-ollama">
        <div class="card-head">
            <span class="badge b-green">atajos</span>
            <h3>Comandos útiles</h3>
        </div>
        <pre><span class="cm"># Multi-linea en modo interactivo</span>
<span class="cm"># Presiona """ para iniciar bloque multi-línea</span>

<span class="cm"># Historial de conversación</span>
<span class="cm"># Usa ↑ y ↓ para navegar por comandos anteriores</span>

<span class="cm"># Limpiar contexto</span>
<span class="cm"># Escribe /clear para limpiar la conversación</span>

<span class="cm"># Salir</span>
<span class="cm"># Escribe /bye o presiona Ctrl+D</span>

<span class="cm"># Verificar uso de GPU</span>
<span class="fn">ollama</span> ps  <span class="cm"># Muestra modelos cargados y uso de memoria</span>

<span class="cm"># Ejecutar con GPU específica</span>
<span class="fn">CUDA_VISIBLE_DEVICES</span>=0 ollama run llama3</pre>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
