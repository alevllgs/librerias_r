<?php
$page_title = 'Guía Gemini';

require_once __DIR__ . '/../../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= $base_url ?>/index.php">TechGuides</a>
    <span class="separator">›</span>
    <span class="current">Gemini</span>
</div>

<a href="<?= $base_url ?>/index.php" class="back-btn">
    <i class="fas fa-arrow-left"></i> Volver al dashboard
</a>

<!-- HERO -->
<section class="hero">
    <div class="hero-tag" style="background: var(--gemini-bg); color: var(--gemini-color);">IA Generativa</div>
    <h1><i class="fas fa-wand-magic-sparkles" style="margin-right: 0.5rem;"></i> Guía Gemini</h1>
    <p>Ecosistema de inteligencia artificial de Google. NotebookLM para investigación, AI Studio para desarrollo, Antigravity para productividad y más.</p>
</section>

<!-- 01 – NOTEBOOKLM -->
<section class="section">
    <div class="section-header">
        <div class="section-num">01</div>
        <h2 class="section-title">NotebookLM</h2>
    </div>

    <div class="g2">
        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">conceptos</span>
                <h3>¿Qué es NotebookLM?</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;">NotebookLM es un <strong>asistente de investigación basado en IA</strong> de Google que trabaja exclusivamente con <strong>tus propias fuentes</strong>. A diferencia de otros chatbots, solo responde basándose en los documentos que tú proporcionas.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Acceso:</strong> <code>notebooklm.google.com</code></p>
                <p><strong>Modelo:</strong> Usa Gemini Pro como motor de IA.</p>
            </div>
        </div>

        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">fuentes</span>
                <h3>Fuentes compatibles</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Google Docs</strong> — documentos de Drive</p>
                <p style="margin-bottom: 0.5rem;"><strong>PDFs</strong> — artículos, papers, manuales</p>
                <p style="margin-bottom: 0.5rem;"><strong>Texto copiado</strong> — pegar contenido directamente</p>
                <p style="margin-bottom: 0.5rem;"><strong>URLs</strong> — páginas web completas</p>
                <p style="margin-bottom: 0.5rem;"><strong>Google Slides</strong> — presentaciones</p>
                <p><strong>YouTube</strong> — transcripciones de videos</p>
            </div>
        </div>
    </div>

    <div class="card card-gemini" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">uso</span>
            <h3>Cómo usar NotebookLM</h3>
        </div>
        <pre><span class="cm"># 1. Crear un notebook</span>
<span class="cm"># Ir a notebooklm.google.com → New Notebook</span>

<span class="cm"># 2. Agregar fuentes (hasta 50 por notebook)</span>
<span class="cm"># Upload desde Google Drive, PDF, texto, URL</span>

<span class="cm"># 3. Hacer preguntas sobre tus fuentes</span>
<span class="cm"># El chat solo responde con información de tus documentos</span>

<span class="cm"># 4. Características principales:</span>
<span class="cm">#    - Resumen automático de fuentes</span>
<span class="cm">#    - Generar FAQ basado en contenido</span>
<span class="cm">#    - Crear briefing de estudio</span>
<span class="cm">#    - Audio Overview: podcast generado por IA</span>
<span class="cm">#    - Citas con referencia a la fuente original</span>

<span class="cm"># 5. Guardar notas</span>
<span class="cm">#    - Guardar respuestas como notas</span>
<span class="cm">#    - Organizar por temas</span>
<span class="cm">#    - Exportar a Google Docs</span>

<span class="cm"># Audio Overview (función destacada):</span>
<span class="cm">#    - Genera un "podcast" de 2 personas discutiendo tu contenido</span>
<span class="cm">#    - Útil para repasar material de estudio</span>
<span class="cm">#    - Descargar como audio MP3</span></pre>
    </div>

    <div class="card card-gemini" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">prompts</span>
            <h3>Prompts útiles para NotebookLM</h3>
        </div>
        <pre><span class="cm"># Resúmenes</span>
"Resume los puntos clave de todas las fuentes"
"Crea un resumen ejecutivo de máximo 500 palabras"

<span class="cm"># Análisis</span>
"¿Cuáles son las ideas principales que conectan estas fuentes?"
"Identifica contradicciones entre las fuentes"
"Compara los enfoques de cada autor sobre [tema]"

<span class="cm"># Estudio</span>
"Genera 10 preguntas de estudio con respuestas"
"Crea un glosario de términos técnicos encontrados"
"Explica los conceptos más complejos en lenguaje simple"

<span class="cm"># Organización</span>
"Crea un índice temático de todo el contenido"
"Organiza la información por categorías"
"Genera un mapa mental textual de los temas"

<span class="cm"># Aplicación</span>
"¿Cómo puedo aplicar estos conceptos en [contexto]?"
"Basándote en las fuentes, recomienda próximos pasos"
"Crea un plan de acción basado en esta información"</pre>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        NotebookLM es ideal para <strong>investigación académica</strong>, <strong>preparación de exámenes</strong>, <strong>análisis de documentos legales</strong> y <strong>síntesis de información</strong>. La ventaja principal es que <strong>no inventa información</strong> — todo está respaldado por tus fuentes.
    </div>
</section>

<!-- 02 – GOOGLE AI STUDIO -->
<section class="section">
    <div class="section-header">
        <div class="section-num">02</div>
        <h2 class="section-title">Google AI Studio</h2>
    </div>

    <div class="card card-gemini">
        <div class="card-head">
            <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">plataforma</span>
            <h3>¿Qué es Google AI Studio?</h3>
        </div>
        <pre><span class="cm"># Plataforma de desarrollo para trabajar con modelos Gemini</span>
<span class="cm"># Acceso: makersuite.google.com → AI Studio</span>

<span class="cm"># Permite:</span>
<span class="cm"># - Probar prompts con diferentes modelos Gemini</span>
<span class="cm"># - Configurar parámetros de generación</span>
<span class="cm"># - Crear y guardar prompts reutilizables</span>
<span class="cm"># - Generar API keys para desarrollo</span>
<span class="cm"># - Integrar Gemini en aplicaciones</span>

<span class="cm"># Modelos disponibles:</span>
<span class="cm"># - Gemini 2.0 Flash (rápido, económico)</span>
<span class="cm"># - Gemini 2.0 Pro (más capaz, razonamiento)</span>
<span class="cm"># - Gemini 2.0 Flash-Lite (ultra rápido, bajo costo)</span>
<span class="cm"># - Gemini 2.5 Pro (razonamiento avanzado)</span></pre>
    </div>

    <div class="card card-gemini" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">config</span>
            <h3>Parámetros de generación</h3>
        </div>
        <pre><span class="cm"># Temperature (0.0 - 2.0)</span>
<span class="cm"># Controla la creatividad/aleatoriedad</span>
<span class="cm"># 0.0 = determinista, preciso</span>
<span class="cm"># 1.0 = balanceado</span>
<span class="cm"># 2.0 = muy creativo, variado</span>

<span class="cm"># Top P (0.0 - 1.0)</span>
<span class="cm"># Muestreo por probabilidad acumulada</span>
<span class="cm"># 0.9 = considera tokens hasta 90% de probabilidad</span>

<span class="cm"># Top K (1 - 40)</span>
<span class="cm"># Número de tokens candidatos a considerar</span>
<span class="cm"># 40 = más variedad, 1 = más determinista</span>

<span class="cm"># Max output tokens</span>
<span class="cm"># Límite de longitud de respuesta</span>
<span class="cm"># Gemini soporta hasta 8192 tokens de salida</span>

<span class="cm"># Safety settings</span>
<span class="cm"># Bloquear contenido peligroso, sexual, odio, acoso</span>
<span class="cm"># Niveles: Block none, Block few, Block some, Block most</span></pre>
    </div>

    <div class="card card-gemini" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">API</span>
            <h3>Usar la API de Gemini</h3>
        </div>
        <pre><span class="cm"># 1. Obtener API key en AI Studio</span>
<span class="cm"># AI Studio → Get API key → Create API key</span>

<span class="cm"># 2. Instalar SDK de Google AI</span>
<span class="fn">pip</span> install google-genai

<span class="cm"># 3. Uso básico en Python</span>
<span class="kw">from</span> google <span class="kw">import</span> genai

<span class="var">client</span> = genai.<span class="fn">Client</span>(api_key=<span class="str">"TU_API_KEY"</span>)

<span class="var">response</span> = client.models.<span class="fn">generate_content</span>(
    model=<span class="str">"gemini-2.0-flash"</span>,
    contents=<span class="str">"Explica qué es machine learning"</span>
)
<span class="fn">print</span>(response.text)

<span class="cm"># 4. Con imagen (visión)</span>
<span class="kw">from</span> google.genai <span class="kw">import</span> types

<span class="var">response</span> = client.models.<span class="fn">generate_content</span>(
    model=<span class="str">"gemini-2.0-flash"</span>,
    contents=[
        <span class="str">"¿Qué hay en esta imagen?"</span>,
        types.<span class="fn">Part</span>.<span class="fn">from_uri</span>(
            file_uri=<span class="str">"gs://bucket/imagen.jpg"</span>,
            mime_type=<span class="str">"image/jpeg"</span>
        )
    ]
)

<span class="cm"># 5. Chat multi-turno</span>
<span class="var">chat</span> = client.chats.<span class="fn">create</span>(
    model=<span class="str">"gemini-2.0-flash"</span>,
    history=[
        {<span class="str">"role"</span>: <span class="str">"user"</span>, <span class="str">"parts"</span>: [<span class="str">"Soy estudiante de programación"</span>]},
    ]
)
<span class="var">response</span> = chat.<span class="fn">send_message</span>(<span class="str">"¿Qué lenguaje me recomiendas?"</span>)</pre>
    </div>

    <div class="card card-gemini" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">system</span>
            <h3>System instructions y funciones</h3>
        </div>
        <pre><span class="cm"># System instructions (definen el comportamiento del modelo)</span>
<span class="var">response</span> = client.models.<span class="fn">generate_content</span>(
    model=<span class="str">"gemini-2.0-flash"</span>,
    contents=<span class="str">"¿Cuál es la capital de Francia?"</span>,
    config=types.<span class="fn">GenerateContentConfig</span>(
        system_instruction=<span class="str">"Eres un tutor de geografía para niños de 8 años"</span>
    )
)

<span class="cm"># Function calling (el modelo puede llamar funciones definidas)</span>
<span class="var">tools</span> = [
    types.<span class="fn">Tool</span>(
        function_declarations=[
            types.<span class="fn">FunctionDeclaration</span>(
                name=<span class="str">"get_weather"</span>,
                description=<span class="str">"Obtiene el clima de una ciudad"</span>,
                parameters=types.<span class="fn">Schema</span>(
                    type=<span class="str">"OBJECT"</span>,
                    properties={
                        <span class="str">"city"</span>: types.<span class="fn">Schema</span>(type=<span class="str">"STRING"</span>),
                    },
                    required=[<span class="str">"city"</span>]
                )
            )
        ]
    )
]

<span class="cm"># JSON mode (respuesta estructurada)</span>
<span class="var">response</span> = client.models.<span class="fn">generate_content</span>(
    model=<span class="str">"gemini-2.0-flash"</span>,
    contents=<span class="str">"Lista 5 lenguajes de programación populares"</span>,
    config=types.<span class="fn">GenerateContentConfig</span>(
        response_mime_type=<span class="str">"application/json"</span>
    )
)</pre>
    </div>
</section>

<!-- 03 – ANTIGRAVITY -->
<section class="section">
    <div class="section-header">
        <div class="section-num">03</div>
        <h2 class="section-title">Antigravity</h2>
    </div>

    <div class="g2">
        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">conceptos</span>
                <h3>¿Qué es Antigravity?</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;">Antigravity es una <strong>herramienta experimental de Google</strong> que permite <strong>crear aplicaciones web completas usando solo lenguaje natural</strong>. Escribes lo que quieres en texto normal y la IA genera la aplicación.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Acceso:</strong> <code>antigravity.google</code></p>
                <p><strong>Tecnología:</strong> Usa Gemini para entender instrucciones y generar código HTML/CSS/JS funcional.</p>
            </div>
        </div>

        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">uso</span>
                <h3>Cómo usar Antigravity</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>1.</strong> Describe la app que quieres crear en lenguaje natural</p>
                <p style="margin-bottom: 0.5rem;"><strong>2.</strong> La IA genera el código y la vista previa en tiempo real</p>
                <p style="margin-bottom: 0.5rem;"><strong>3.</strong> Itera pidiendo cambios: "agrega un botón", "cambia el color"</p>
                <p style="margin-bottom: 0.5rem;"><strong>4.</strong> Exporta el código generado</p>
                <p><strong>Ideal para:</strong> prototipos rápidos, landing pages, herramientas internas, dashboards simples.</p>
            </div>
        </div>
    </div>

    <div class="card card-gemini" style="margin-top: 1rem;">
        <div class="card-head">
            <span class="badge" style="background: var(--gemini-bg); color: var(--gemini-color);">ejemplos</span>
            <h3>Prompts de ejemplo para Antigravity</h3>
        </div>
        <pre><span class="cm"># Aplicaciones simples</span>
"Crea una calculadora con diseño moderno y modo oscuro"
"Haz un temporizador Pomodoro con sonidos de notificación"
"Crea un generador de contraseñas seguras"

<span class="cm"># Dashboards</span>
"Crea un dashboard con gráficos de ventas usando datos de ejemplo"
"Haz un panel de control con métricas de redes sociales"

<span class="cm"># Herramientas</span>
"Crea un convertidor de unidades (temperatura, distancia, peso)"
"Haz un generador de paletas de colores con códigos HEX"
"Crea un editor de Markdown con vista previa en vivo"

<span class="cm"># Landing pages</span>
"Crea una landing page para una app de fitness con secciones hero, features y pricing"
"Haz una página de portafolio personal con galería de proyectos"

<span class="cm"># Juegos</span>
"Crea un juego de Snake con controles de teclado"
"Haz un quiz de trivia con puntuación y temporizador"

<span class="cm"># Iteración (después de crear la app base):</span>
"Agrega un botón de exportar a PDF"
"Cambia la paleta de colores a tonos azules"
"Haz que sea responsive para móviles"
"Agrega animaciones de entrada"</pre>
    </div>
</section>

<!-- 04 – USOS PRÁCTICOS -->
<section class="section">
    <div class="section-header">
        <div class="section-num">04</div>
        <h2 class="section-title">Usos prácticos del ecosistema Gemini</h2>
    </div>

    <div class="g2">
        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge b-blue">investigación</span>
                <h3>Investigación académica</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>NotebookLM:</strong> Subir papers y artículos, generar resúmenes, crear preguntas de estudio, obtener Audio Overview para repasar.</p>
                <p style="margin-bottom: 0.5rem;"><strong>AI Studio:</strong> Analizar datos, generar hipótesis, revisar literatura, traducir documentos académicos.</p>
                <p><strong>Flujo:</strong> NotebookLM para fuentes → AI Studio para análisis → Gemini chat para redacción.</p>
            </div>
        </div>

        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge b-green">desarrollo</span>
                <h3>Desarrollo de software</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>AI Studio:</strong> Generar código, debuggear, explicar errores, crear documentación, escribir tests.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Antigravity:</strong> Prototipar interfaces rápidas, crear herramientas internas sin código.</p>
                <p><strong>API Gemini:</strong> Integrar IA en apps, chatbots, análisis de documentos, generación de contenido.</p>
            </div>
        </div>

        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge b-purple">productividad</span>
                <h3>Productividad personal</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>NotebookLM:</strong> Organizar notas de reuniones, resumir documentos largos, preparar presentaciones.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Gemini (chat):</strong> Redactar emails, planificar proyectos, brainstorming, traducir textos.</p>
                <p><strong>Antigravity:</strong> Crear herramientas personalizadas: trackers, calculadoras, organizadores.</p>
            </div>
        </div>

        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge b-orange">educación</span>
                <h3>Educación y aprendizaje</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>NotebookLM:</strong> Crear guías de estudio, generar exámenes de práctica, Audio Overview para aprender auditivamente.</p>
                <p style="margin-bottom: 0.5rem;"><strong>AI Studio:</strong> Tutor personalizado, explicar conceptos complejos, generar ejercicios personalizados.</p>
                <p><strong>Antigravity:</strong> Crear apps educativas interactivas, quizzes, simuladores.</p>
            </div>
        </div>

        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge b-amber">datos</span>
                <h3>Análisis de datos</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>AI Studio:</strong> Escribir queries SQL, generar scripts Python/pandas, interpretar resultados estadísticos.</p>
                <p style="margin-bottom: 0.5rem;"><strong>Gemini con código:</strong> Analizar datasets, crear visualizaciones, detectar patrones.</p>
                <p><strong>API:</strong> Procesar datos en batch, clasificación automática, extracción de información.</p>
            </div>
        </div>

        <div class="card card-gemini">
            <div class="card-head">
                <span class="badge b-red">contenido</span>
                <h3>Creación de contenido</h3>
            </div>
            <div class="card-body" style="margin-top: 0.5rem;">
                <p style="margin-bottom: 0.5rem;"><strong>Gemini:</strong> Redactar artículos, posts de blog, guiones de video, descripciones de productos.</p>
                <p style="margin-bottom: 0.5rem;"><strong>AI Studio:</strong> Generar contenido en masa con templates, traducir a múltiples idiomas.</p>
                <p><strong>Antigravity:</strong> Crear landing pages, portfolios, páginas de producto sin programar.</p>
            </div>
        </div>
    </div>

    <div class="tip" style="margin-top: 1rem;">
        La combinación más potente es <strong>NotebookLM + AI Studio</strong>: usa NotebookLM para entender tus fuentes y AI Studio para generar contenido, código o análisis basado en ese conocimiento. Juntos forman un flujo completo de investigación → análisis → producción.
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>