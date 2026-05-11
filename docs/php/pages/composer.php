<?php
$page_title = 'Composer';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">C1</div>
    <h2 class="section-title">Composer: Gestor de Dependencias</h2>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">intro</span>
      <h3>¿Qué es Composer?</h3>
    </div>
    <p>Composer es el gestor de dependencias estándar para PHP. No gestiona el proyecto en sí, sino las librerías que tu proyecto necesita para funcionar (como Laravel, Symfony, PHPUnit, etc.).</p>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-green">Pop!_OS</span>
      <h3>Instalación en Linux</h3>
    </div>
    <ul class="steps">
      <li>
        <div class="step-n">1</div>
        <div class="step-text">
          <strong>Descargar instalador</strong>
          <pre>php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</pre>
        </div>
      </li>
      <li>
        <div class="step-n">2</div>
        <div class="step-text">
          <strong>Instalación global</strong>
          <pre>sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer</pre>
        </div>
      </li>
      <li>
        <div class="step-n">3</div>
        <div class="step-text">
          <strong>Verificar</strong>
          <pre>composer --version</pre>
        </div>
      </li>
    </ul>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">Windows</span>
      <h3>Instalación en Windows</h3>
    </div>
    <ul class="steps">
      <li>
        <div class="step-n">1</div>
        <div class="step-text">
          <strong>Descargar Composer-Setup.exe</strong>
          <span>Descarga el instalador oficial desde <code>getcomposer.org</code></span>
        </div>
      </li>
      <li>
        <div class="step-n">2</div>
        <div class="step-text">
          <strong>Ejecutar Instalador</strong>
          <span>Sigue los pasos del asistente. Selecciona la ruta de <code>php.exe</code> (ej. <code>C:\xampp\php\php.exe</code>).</span>
        </div>
      </li>
      <li>
        <div class="step-n">3</div>
        <div class="step-text">
          <strong>Verificar</strong>
          <span>Abre CMD o PowerShell y escribe:</span>
          <pre>composer --version</pre>
        </div>
      </li>
    </ul>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">comandos</span>
      <h3>Comandos básicos</h3>
    </div>
    <ul class="steps">
      <li>
        <div class="step-n">1</div>
        <div class="step-text">
          <strong>Iniciar proyecto</strong>
          <pre>composer init</pre>
        </div>
      </li>
      <li>
        <div class="step-n">2</div>
        <div class="step-text">
          <strong>Instalar una librería</strong>
          <pre>composer require vendor/package</pre>
        </div>
      </li>
      <li>
        <div class="step-n">3</div>
        <div class="step-text">
          <strong>Instalar desde composer.json</strong>
          <pre>composer install</pre>
        </div>
      </li>
      <li>
        <div class="step-n">4</div>
        <div class="step-text">
          <strong>Actualizar dependencias</strong>
          <pre>composer update</pre>
        </div>
      </li>
    </ul>
  </div>

  <div class="tip">
    💡 El archivo <code>composer.json</code> es el corazón de tu proyecto; ahí se definen todas las versiones y dependencias necesarias.
  </div>
</section>

<?php
