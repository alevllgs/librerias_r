<?php
$page_title = 'Extras';
require_once __DIR__ . '/../includes/header.php';

$extras_popos = [
    ['label' => 'Ver errores en tiempo real',  'badge' => 'b-green',  'code' => 'tail -f /opt/lampp/logs/error_log'],
    ['label' => 'Editar configuración PHP',     'badge' => 'b-blue',   'code' => 'nano /opt/lampp/etc/php.ini'],
    ['label' => 'Alias rápido en terminal',     'badge' => 'b-amber',  'code' => "alias xampp='sudo /opt/lampp/lampp'"],
    ['label' => 'Virtual hosts',                'badge' => 'b-orange', 'code' => 'nano /opt/lampp/etc/extra/httpd-vhosts.conf'],
    ['label' => 'Reiniciar Apache solo',        'badge' => 'b-green',  'code' => 'sudo /opt/lampp/lampp reloadapache'],
    ['label' => 'Ver info completa de PHP',     'badge' => 'b-blue',   'code' => 'echo "<?php phpinfo(); ?>" | sudo tee /opt/lampp/htdocs/info.php'],
    ['label' => 'Cambiar puerto de Apache',     'badge' => 'b-amber',  'code' => 'nano /opt/lampp/etc/httpd.conf'],
    ['label' => 'Acceso a MySQL por terminal',  'badge' => 'b-orange', 'code' => '/opt/lampp/bin/mysql -u root'],
];

$extras_windows = [
    ['label' => 'Ver errores en tiempo real',  'badge' => 'b-green',  'code' => 'type C:\\xampp\\apache\\logs\\error.log'],
    ['label' => 'Editar configuración PHP',     'badge' => 'b-blue',   'code' => 'notepad C:\\xampp\\php\\php.ini'],
    ['label' => 'Acceder a MySQL',             'badge' => 'b-amber',  'code' => 'C:\\xampp\\mysql\\bin\\mysql.exe -u root'],
    ['label' => 'Virtual hosts',                'badge' => 'b-orange', 'code' => 'C:\\xampp\\apache\\conf\\extra\\httpd-vhosts.conf'],
    ['label' => 'Reiniciar Apache',            'badge' => 'b-green',  'code' => 'Desde el panel: Stop → Start Apache'],
    ['label' => 'Ver info completa de PHP',     'badge' => 'b-blue',   'code' => 'Crear archivo info.php con <?php phpinfo(); ?>'],
];
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">05</div>
    <h2 class="section-title">Extras útiles</h2>
  </div>

  <h3 style="margin-bottom:0.75rem;font-size:15px;"><span class="badge b-blue">Pop!_OS</span></h3>
  <div class="g2">
    <?php foreach ($extras_popos as $ex): ?>
    <div class="card" style="margin-bottom:0;">
      <div class="card-head">
        <span class="badge <?= $ex['badge'] ?>"><?= htmlspecialchars($ex['label']) ?></span>
      </div>
      <pre style="margin:0;font-size:12px;"><?= htmlspecialchars($ex['code']) ?></pre>
    </div>
    <?php endforeach; ?>
  </div>

  <h3 style="margin:1.5rem 0 0.75rem;font-size:15px;"><span class="badge b-orange">Windows</span></h3>
  <div class="g2">
    <?php foreach ($extras_windows as $ex): ?>
    <div class="card" style="margin-bottom:0;">
      <div class="card-head">
        <span class="badge <?= $ex['badge'] ?>"><?= htmlspecialchars($ex['label']) ?></span>
      </div>
      <pre style="margin:0;font-size:12px;"><?= htmlspecialchars($ex['code']) ?></pre>
    </div>
    <?php endforeach; ?>
  </div>

  <hr class="divider">

  <div class="section-header" style="margin-top:1rem;">
    <div class="section-num">+</div>
    <h2 class="section-title">Configurar dominio local</h2>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">Pop!_OS</span>
      <h3>VirtualHost en Linux</h3>
    </div>
    <pre><span class="cm"># /opt/lampp/etc/extra/httpd-vhosts.conf</span>
&lt;VirtualHost *:80&gt;
    ServerName miproyecto.local
    DocumentRoot <span class="str">"/opt/lampp/htdocs/miproyecto"</span>
    &lt;Directory <span class="str">"/opt/lampp/htdocs/miproyecto"</span>&gt;
        AllowOverride All
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;</pre>
    <div class="tip">
      💡 Agrega en <code>/etc/hosts</code>:<br>
      <code>127.0.0.1   miproyecto.local</code>
    </div>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">Windows</span>
      <h3>VirtualHost en Windows</h3>
    </div>
    <pre><span class="cm"># C:\xampp\apache\conf\extra\httpd-vhosts.conf</span>
&lt;VirtualHost *:80&gt;
    ServerName miproyecto.local
    DocumentRoot <span class="str">"C:/xampp/htdocs/miproyecto"</span>
    &lt;Directory <span class="str">"C:/xampp/htdocs/miproyecto"</span>&gt;
        AllowOverride All
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;</pre>
    <div class="tip">
      💡 Agrega en <code>C:\Windows\System32\drivers\etc\hosts</code>:<br>
      <code>127.0.0.1   miproyecto.local</code>
    </div>
  </div>

</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>