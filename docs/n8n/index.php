<?php
$page_title = 'Guía n8n';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">n8n</span>
</div>

<a href="<?= $base_url ?>/index.php" class="back-btn">
    <i class="fas fa-arrow-left"></i> Volver al dashboard
</a>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--n8n-bg); color: var(--n8n-color);">Automatización</div>
    <h1><i class="fas fa-project-diagram" style="margin-right: 0.5rem;"></i> Guía n8n</h1>
    <p>Plataforma de automatización de workflows. Conecta servicios, automatiza tareas y crea flujos de trabajo visuales sin programar.</p>
</section>

<!-- INSTALACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">01</div>
        <h2 class="section-title">Instalación</h2>
    </div>

    <div class="card card-n8n">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">Windows</span>
            <h3>Instalación en Windows</h3>
        </div>
        <pre><span class="cm"># Requiere Node.js 18+ instalado</span>
<span class="cm"># Verificar Node.js</span>
<span class="fn">node</span> --version
<span class="fn">npm</span> --version

<span class="cm"># Instalar n8n globalmente</span>
<span class="fn">npm</span> install -g n8n

<span class="cm"># Verificar instalación</span>
<span class="fn">n8n</span> --version

<span class="cm"># Iniciar n8n</span>
<span class="fn">n8n</span> start

<span class="cm"># Acceder en el navegador</span>
<span class="str">http://localhost:5678</span></pre>
    </div>

    <div class="card card-n8n" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">Linux</span>
            <h3>Instalación en Pop!_OS / Ubuntu</h3>
        </div>
        <pre><span class="cm"># Instalar Node.js 20.x</span>
<span class="fn">curl</span> -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
<span class="fn">sudo</span> apt install -y nodejs

<span class="cm"># Instalar n8n globalmente</span>
<span class="fn">sudo</span> npm install -g n8n

<span class="cm"># Verificar instalación</span>
<span class="fn">n8n</span> --version

<span class="cm"># Iniciar n8n</span>
<span class="fn">n8n</span> start</pre>
    </div>

    <div class="card card-n8n" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">Docker</span>
            <h3>Instalación con Docker</h3>
        </div>
        <pre><span class="cm"># Ejecutar con Docker</span>
<span class="fn">docker</span> run -d --name n8n \
  --restart unless-stopped \
  -p 5678:5678 \
  -v n8n_data:/home/node/.n8n \
  n8nio/n8n

<span class="cm"># Con autenticación básica</span>
<span class="fn">docker</span> run -d --name n8n \
  --restart unless-stopped \
  -p 5678:5678 \
  -e N8N_BASIC_AUTH_ACTIVE=true \
  -e N8N_BASIC_AUTH_USER=admin \
  -e N8N_BASIC_AUTH_PASSWORD=tu_password \
  -v n8n_data:/home/node/.n8n \
  n8nio/n8n

<span class="cm"># Ver logs</span>
<span class="fn">docker</span> logs -f n8n</pre>
    </div>
</section>

<!-- COMANDOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">02</div>
        <h2 class="section-title">Comandos principales</h2>
    </div>

    <div class="card card-n8n">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">CLI</span>
            <h3>Comandos de línea de comandos</h3>
        </div>
        <pre><span class="cm"># Iniciar n8n</span>
<span class="fn">n8n</span> start

<span class="cm"># Iniciar en segundo plano</span>
<span class="fn">n8n</span> start --daemon

<span class="cm"># Detener n8n</span>
<span class="fn">n8n</span> stop

<span class="cm"># Reiniciar n8n</span>
<span class="fn">n8n</span> restart

<span class="cm"># Ver ayuda</span>
<span class="fn">n8n</span> --help

<span class="cm"># Ver versión</span>
<span class="fn">n8n</span> --version

<span class="cm"># Exportar workflow</span>
<span class="fn">n8n</span> export:workflow --id=1 --output=workflow.json

<span class="cm"># Importar workflow</span>
<span class="fn">n8n</span> import:workflow --input=workflow.json

<span class="cm"># Listar workflows</span>
<span class="fn">n8n</span> list:workflow

<span class="cm"># Ejecutar con puerto personalizado</span>
<span class="fn">n8n</span> start --port=8080</pre>
    </div>
</section>

<!-- CONFIGURACIÓN -->
<section class="section">
    <div class="section-header">
        <div class="section-num">03</div>
        <h2 class="section-title">Configuración</h2>
    </div>

    <div class="card card-n8n">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">config</span>
            <h3>Variables de entorno</h3>
        </div>
        <pre><span class="cm"># Puerto (default: 5678)</span>
<span class="fn">export</span> <span class="var">N8N_PORT</span>=<span class="str">5678</span>

<span class="cm"># Host</span>
<span class="fn">export</span> <span class="var">N8N_HOST</span>=<span class="str">0.0.0.0</span>

<span class="cm"># Protocolo</span>
<span class="fn">export</span> <span class="var">N8N_PROTOCOL</span>=<span class="str">http</span>

<span class="cm"># Directorio de datos</span>
<span class="fn">export</span> <span class="var">N8N_USER_FOLDER</span>=<span class="str">/home/user/.n8n</span>

<span class="cm"># Auth básica</span>
<span class="fn">export</span> <span class="var">N8N_BASIC_AUTH_ACTIVE</span>=<span class="str">true</span>
<span class="fn">export</span> <span class="var">N8N_BASIC_AUTH_USER</span>=<span class="str">admin</span>
<span class="fn">export</span> <span class="var">N8N_BASIC_AUTH_PASSWORD</span>=<span class="str">tu_password</span>

<span class="cm"># Zona horaria</span>
<span class="fn">export</span> <span class="var">GENERIC_TIMEZONE</span>=<span class="str">America/Bogota</span>

<span class="cm"># Ejecutar con configuración</span>
<span class="fn">n8n</span> start --port=8080</pre>
    </div>

    <div class="card card-n8n" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">Windows</span>
            <h3>Configuración en PowerShell</h3>
        </div>
        <pre><span class="cm"># Establecer variables de entorno</span>
<span class="fn">$env:</span><span class="var">N8N_PORT</span>=<span class="str">5678</span>
<span class="fn">$env:</span><span class="var">N8N_HOST</span>=<span class="str">localhost</span>
<span class="fn">$env:</span><span class="var">N8N_BASIC_AUTH_ACTIVE</span>=<span class="str">true</span>
<span class="fn">$env:</span><span class="var">N8N_BASIC_AUTH_USER</span>=<span class="str">admin</span>
<span class="fn">$env:</span><span class="var">N8N_BASIC_AUTH_PASSWORD</span>=<span class="str">tu_password</span>

<span class="cm"># Ejecutar</span>
<span class="fn">n8n</span> start

<span class="cm"># Persistir (agregar al $PROFILE)</span>
<span class="fn">$env:</span><span class="var">N8N_PORT</span>=<span class="str">5678</span></pre>
    </div>
</section>

<!-- WORKFLOWS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">04</div>
        <h2 class="section-title">Creación de Workflows</h2>
    </div>

    <div class="g2">
        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">conceptos</span>
                <h3>Conceptos clave</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Trigger:</strong> Evento que inicia el workflow</p>
                <p style="margin-bottom: 0.5rem;"><strong>Node:</strong> Cada paso del workflow</p>
                <p style="margin-bottom: 0.5rem;"><strong>Connection:</strong> Enlace entre nodos</p>
                <p><strong>Execution:</strong> Una ejecución con datos resultantes</p>
            </div>
        </div>

        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">triggers</span>
                <h3>Tipos de Trigger</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Manual:</strong> Ejecución manual</p>
                <p style="margin-bottom: 0.5rem;"><strong>Schedule:</strong> Programado (cron)</p>
                <p style="margin-bottom: 0.5rem;"><strong>Webhook:</strong> HTTP request</p>
                <p style="margin-bottom: 0.5rem;"><strong>Email:</strong> Al recibir correo</p>
                <p><strong>App Trigger:</strong> Desde servicios externos</p>
            </div>
        </div>
    </div>
</section>

<!-- NODOS POPULARES -->
<section class="section">
    <div class="section-header">
        <div class="section-num">05</div>
        <h2 class="section-title">Nodos populares</h2>
    </div>

    <div class="g3">
        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge b-blue">HTTP</span>
                <h3>HTTP Request</h3>
            </div>
            <div class="card-body">Peticiones HTTP a cualquier API</div>
        </div>

        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge b-green">DB</span>
                <h3>MySQL / Postgres</h3>
            </div>
            <div class="card-body">Consultas a bases de datos</div>
        </div>

        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge b-orange">Code</span>
                <h3>Code Node</h3>
            </div>
            <div class="card-body">JavaScript o Python personalizado</div>
        </div>

        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge b-purple">Slack</span>
                <h3>Slack</h3>
            </div>
            <div class="card-body">Enviar mensajes y notificaciones</div>
        </div>

        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge b-amber">Sheets</span>
                <h3>Google Sheets</h3>
            </div>
            <div class="card-body">Leer y escribir hojas de cálculo</div>
        </div>

        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge" style="background: var(--ollama-bg); color: var(--ollama-color);">AI</span>
                <h3>OpenAI / Ollama</h3>
            </div>
            <div class="card-body">Integración con modelos de IA</div>
        </div>
    </div>
</section>

<!-- API -->
<section class="section">
    <div class="section-header">
        <div class="section-num">06</div>
        <h2 class="section-title">API REST de n8n</h2>
    </div>

    <div class="card card-n8n">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">API</span>
            <h3>Endpoints principales</h3>
        </div>
        <pre><span class="cm"># Listar workflows</span>
<span class="fn">curl</span> -X GET http://localhost:5678/api/v1/workflows \
  -H <span class="str">"X-N8N-API-KEY: tu-api-key"</span>

<span class="cm"># Crear workflow</span>
<span class="fn">curl</span> -X POST http://localhost:5678/api/v1/workflows \
  -H <span class="str">"X-N8N-API-KEY: tu-api-key"</span> \
  -H <span class="str">"Content-Type: application/json"</span> \
  -d '{"name": "Mi Workflow"}'

<span class="cm"># Ejecutar workflow</span>
<span class="fn">curl</span> -X POST http://localhost:5678/api/v1/workflows/1/run \
  -H <span class="str">"X-N8N-API-KEY: tu-api-key"</span>

<span class="cm"># Listar ejecuciones</span>
<span class="fn">curl</span> -X GET http://localhost:5678/api/v1/executions \
  -H <span class="str">"X-N8N-API-KEY: tu-api-key"</span>

<span class="cm"># Generar API key en:</span>
<span class="cm"># Settings → API → Create API Key</span></pre>
    </div>
</section>

<!-- INTEGRACIÓN CON OLLAMA -->
<section class="section">
    <div class="section-header">
        <div class="section-num">07</div>
        <h2 class="section-title">Integración con Ollama</h2>
    </div>

    <div class="card card-n8n">
        <div class="card-head">
            <span class="badge" style="background: var(--ollama-bg); color: var(--ollama-color);">IA Local</span>
            <h3>Conectar n8n con Ollama</h3>
        </div>
        <pre><span class="cm">// Método 1: HTTP Request Node</span>
<span class="cm">// Method: POST</span>
<span class="cm">// URL: http://localhost:11434/api/chat</span>
<span class="cm">// Body:</span>
{
  <span class="str">"model"</span>: <span class="str">"llama3"</span>,
  <span class="str">"messages"</span>: [
    {<span class="str">"role"</span>: <span class="str">"user"</span>, <span class="str">"content"</span>: <span class="str">"{{$json.pregunta}}"</span>}
  ]
}

<span class="cm">// Método 2: Nodo Ollama nativo (n8n 1.40+)</span>
<span class="cm">// Seleccionar modelo: llama3</span>
<span class="cm">// Configurar prompt con expresiones</span>

<span class="cm">// Método 3: Nodo OpenAI compatible</span>
<span class="cm">// Base URL: http://localhost:11434/v1</span>
<span class="cm">// API Key: ollama</span>
<span class="cm">// Model: llama3</span></pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Puedes integrar n8n con Ollama usando el nodo <strong>HTTP Request</strong>, el nodo nativo <strong>Ollama</strong> (v1.40+) o como proveedor <strong>OpenAI compatible</strong>. Esto te permite crear workflows automatizados con IA local.
    </div>
</section>

<!-- ATAJOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">08</div>
        <h2 class="section-title">Atajos del editor</h2>
    </div>

    <div class="g2">
        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">atajos</span>
                <h3>Navegación y edición</h3>
            </div>
            <pre><span class="cm"># Buscar nodos</span>
<span class="kw">Ctrl</span> + <span class="kw">Space</span>

<span class="cm"># Duplicar nodo</span>
<span class="kw">Ctrl</span> + <span class="kw">C</span> → <span class="kw">Ctrl</span> + <span class="kw">V</span>

<span class="cm"># Eliminar nodo</span>
<span class="kw">Backspace</span> / <span class="kw">Delete</span>

<span class="cm"># Deshacer</span>
<span class="kw">Ctrl</span> + <span class="kw">Z</span>

<span class="cm"># Rehacer</span>
<span class="kw">Ctrl</span> + <span class="kw">Shift</span> + <span class="kw">Z</span>

<span class="cm"># Zoom</span>
<span class="kw">Ctrl</span> + <span class="kw">Scroll</span>

<span class="cm"># Ajustar vista</span>
<span class="kw">Ctrl</span> + <span class="kw">1</span></pre>
        </div>

        <div class="card card-n8n">
            <div class="card-head">
                <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">ejecución</span>
                <h3>Ejecución y gestión</h3>
            </div>
            <pre><span class="cm"># Ejecutar workflow</span>
<span class="kw">Enter</span>

<span class="cm"># Guardar workflow</span>
<span class="kw">Ctrl</span> + <span class="kw">S</span>

<span class="cm"># Activar/Desactivar</span>
<span class="cm">Toggle en la barra superior</span>

<span class="cm"># Ver ejecuciones</span>
<span class="cm">Tab "Executions" en sidebar</span>

<span class="cm"># Exportar workflow</span>
<span class="cm">Menu → Download</span>

<span class="cm"># Importar workflow</span>
<span class="cm">Menu → Import from URL/File</span>

<span class="cm"># Compartir</span>
<span class="cm">Menu → Share</span></pre>
        </div>
    </div>
</section>

<!-- TROUBLESHOOTING -->
<section class="section">
    <div class="section-header">
        <div class="section-num">09</div>
        <h2 class="section-title">Troubleshooting</h2>
    </div>

    <div class="card card-n8n">
        <div class="card-head">
            <span class="badge b-red">errores</span>
            <h3>Problemas comunes</h3>
        </div>
        <pre><span class="cm"># Error: "n8n: command not found"</span>
<span class="cm"># Solución: Reinstalar con npm</span>
<span class="fn">npm</span> install -g n8n

<span class="cm"># Error: "Port 5678 is already in use"</span>
<span class="cm"># Solución: Cambiar puerto o matar proceso</span>
<span class="fn">n8n</span> start --port=8080

<span class="cm"># En Linux:</span>
<span class="fn">sudo</span> lsof -i :5678
<span class="fn">sudo</span> kill -9 $(sudo lsof -t -i:5678)

<span class="cm"># Error: "EACCES permission denied"</span>
<span class="cm"># Solución: Permisos correctos</span>
<span class="fn">sudo</span> npm install -g n8n

<span class="cm"># Error: Webhook no funciona</span>
<span class="cm"># Solución: Configurar URL base</span>
<span class="fn">export</span> <span class="var">N8N_EDITOR_BASE_URL</span>=<span class="str">https://tu-dominio.com</span>

<span class="cm"># Error: Conexión a base de datos fallida</span>
<span class="cm"># Solución: Verificar credenciales y permisos</span>
<span class="fn">n8n</span> start --db=PostgresDB</pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        Si necesitas acceso externo a n8n, usa <strong>ngrok</strong> para crear un túnel temporal: <code>ngrok http 5678</code>. Esto te dará una URL pública para recibir webhooks.
    </div>
</section>

<!-- MEJORES PRÁCTICAS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">10</div>
        <h2 class="section-title">Mejores prácticas</h2>
    </div>

    <div class="card card-n8n">
        <div class="card-head">
            <span class="badge" style="background: var(--n8n-bg); color: var(--n8n-color);">tips</span>
            <h3>Consejos de uso</h3>
        </div>
        <pre><span class="cm"># 1. Nombra workflows descriptivamente</span>
<span class="cm"># "email-diario-reportes" en vez de "Workflow 1"</span>

<span class="cm"># 2. Usa el nodo Error Trigger</span>
<span class="cm"># Para manejar errores de forma centralizada</span>

<span class="cm"># 3. Activa logging para debug</span>
<span class="fn">export</span> <span class="var">N8N_LOG_LEVEL</span>=<span class="str">debug</span>

<span class="cm"># 4. Usa credenciales almacenadas</span>
<span class="cm"># Nunca pongas API keys directamente en nodos</span>

<span class="cm"># 5. Haz backups regulares</span>
<span class="cm"># Settings → Export all workflows</span>

<span class="cm"># 6. Usa variables de entorno</span>
<span class="cm"># En lugar de valores hardcodeados</span>

<span class="cm"># 7. Organiza workflows con tags</span>
<span class="cm"># Settings → Tags → Create tag</span>

<span class="cm"># 8. Usa el nodo Set para estructurar datos</span>
<span class="cm"># Antes de pasar datos a otros nodos</span></pre>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>