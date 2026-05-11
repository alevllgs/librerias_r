<?php
/* =========================================
   pages/laravel-intro.php
   ========================================= */

$page_title = 'Laravel — Introducción';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">L1</div>
    <h2 class="section-title">Laravel — Introducción</h2>
  </div>

  <!-- Qué es Laravel -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">¿qué es?</span>
      <h3>Laravel en una oración</h3>
    </div>
    <p>Framework PHP que sigue el patrón MVC. Te da rutas, ORM, autenticación, plantillas y colas de trabajo listas para usar, siguiendo el principio de "convención sobre configuración".</p>
  </div>

  <!-- Requisitos -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">requisitos</span>
      <h3>Requisitos previos</h3>
    </div>
    <pre><span class="cm"># Verificar versiones necesarias</span>
php --version      <span class="cm"># PHP >= 8.1</span>
composer --version <span class="cm"># Composer >= 2</span>
node --version     <span class="cm"># Node.js (para assets)</span></pre>
    <div class="tip">💡 Si no tienes Composer: <code>sudo apt install composer</code></div>
  </div>

  <!-- Instalación -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">instalación</span>
      <h3>Crear un proyecto Laravel</h3>
    </div>
    <pre><span class="cm"># Instalar en htdocs de XAMPP</span>
<span class="kw">cd</span> /opt/lampp/htdocs

composer create-project laravel/laravel miapp

<span class="cm"># Entrar al proyecto</span>
<span class="kw">cd</span> miapp

<span class="cm"># Iniciar servidor de desarrollo</span>
php artisan serve</pre>
    <p style="margin-top:8px;">Abre <code>http://127.0.0.1:8000</code> en el navegador.</p>
  </div>

  <!-- Estructura de carpetas -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">estructura</span>
      <h3>Carpetas importantes</h3>
    </div>
    <pre>miapp/
├── app/
│   ├── Http/
│   │   └── Controllers/    ← tus controladores
│   └── Models/             ← tus modelos (Eloquent)
├── database/
│   └── migrations/         ← estructura de la BD
├── resources/
│   └── views/              ← plantillas Blade (.blade.php)
├── routes/
│   └── web.php             ← todas tus rutas
├── .env                    ← configuración local (BD, mail…)
└── artisan                 ← CLI de Laravel</pre>
  </div>

  <!-- Artisan -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">artisan</span>
      <h3>Comandos Artisan más usados</h3>
    </div>
    <pre><span class="cm"># Servidor de desarrollo</span>
php artisan serve

<span class="cm"># Crear controlador</span>
php artisan make:controller UsuarioController

<span class="cm"># Crear modelo + migración</span>
php artisan make:model Producto -m

<span class="cm"># Ejecutar migraciones</span>
php artisan migrate

<span class="cm"># Revertir última migración</span>
php artisan migrate:rollback

<span class="cm"># Ver todas las rutas</span>
php artisan route:list

<span class="cm"># Limpiar caché</span>
php artisan cache:clear
php artisan config:clear</pre>
  </div>

  <!-- .env -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">.env</span>
      <h3>Configurar base de datos</h3>
    </div>
    <pre><span class="cm"># Editar el archivo .env en la raíz del proyecto</span>

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mi_bd
DB_USERNAME=root
DB_PASSWORD=</pre>
    <div class="tip">💡 Crea la base de datos en phpMyAdmin primero, luego configura el <code>.env</code> y ejecuta <code>php artisan migrate</code>.</div>
  </div>

</section>

<?php
