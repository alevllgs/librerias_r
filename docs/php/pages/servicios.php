<?php
$page_title = 'Servicios';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">01</div>
    <h2 class="section-title">Gestionar servicios</h2>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">Pop!_OS</span>
      <h3>Comandos de Terminal</h3>
    </div>
    <ul class="steps">
      <li>
        <div class="step-n">1</div>
        <div class="step-text">
          <strong>Iniciar XAMPP</strong>
          <span>Arranca Apache y MariaDB juntos</span>
          <pre><span class="kw">sudo</span> /opt/lampp/lampp <span class="fn">start</span></pre>
        </div>
      </li>
      <li>
        <div class="step-n">2</div>
        <div class="step-text">
          <strong>Detener XAMPP</strong>
          <pre><span class="kw">sudo</span> /opt/lampp/lampp <span class="fn">stop</span></pre>
        </div>
      </li>
      <li>
        <div class="step-n">3</div>
        <div class="step-text">
          <strong>Reiniciar servicios</strong>
          <pre><span class="kw">sudo</span> /opt/lampp/lampp <span class="fn">restart</span></pre>
        </div>
      </li>
      <li>
        <div class="step-n">4</div>
        <div class="step-text">
          <strong>Verificar estado</strong>
          <pre><span class="kw">sudo</span> /opt/lampp/lampp <span class="fn">status</span></pre>
        </div>
      </li>
      <li>
        <div class="step-n">5</div>
        <div class="step-text">
          <strong>Panel gráfico</strong>
          <pre><span class="kw">cd</span> /opt/lampp
<span class="kw">sudo</span> ./manager-linux-x64.run</pre>
        </div>
      </li>
    </ul>
    <div class="tip">
      💡 Puedes crear un alias en tu <code>~/.bashrc</code> para no escribir la ruta completa cada vez:<br>
      <code>alias xampp='sudo /opt/lampp/lampp'</code>
    </div>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">Windows</span>
      <h3>XAMPP Control Panel</h3>
    </div>
    <ul class="steps">
      <li>
        <div class="step-n">1</div>
        <div class="step-text">
          <strong>Abrir Panel de Control</strong>
          <span>Ejecuta <code>xampp-control.exe</code> ubicado en:</span>
          <pre>C:\xampp\xampp-control.exe</pre>
        </div>
      </li>
      <li>
        <div class="step-n">2</div>
        <div class="step-text">
          <strong>Iniciar Apache y MySQL</strong>
          <span>Haz clic en <strong>Start</strong> junto a cada módulo en el panel gráfico.</span>
        </div>
      </li>
      <li>
        <div class="step-n">3</div>
        <div class="step-text">
          <strong>Detener Servicios</strong>
          <span>Haz clic en <strong>Stop</strong> para apagar los servicios.</span>
        </div>
      </li>
      <li>
        <div class="step-n">4</div>
        <div class="step-text">
          <strong>Ubicación de Proyectos</strong>
          <span>Tus archivos van en <code>C:\xampp\htdocs</code></span>
        </div>
      </li>
    </ul>
    <div class="tip">
      💡 Ejecuta el Panel de Control como <strong>Administrador</strong> para evitar problemas de permisos.
    </div>
  </div>
</section>

<?php
