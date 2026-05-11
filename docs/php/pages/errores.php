<?php
$page_title = 'Errores comunes';
require_once __DIR__ . '/../includes/header.php';

$errores_popos = [
    ['error' => 'Puerto 80 ocupado',      'causa' => 'Otro proceso usa Apache',        'fix' => 'sudo fuser -k 80/tcp',              'badge' => 'b-orange'],
    ['error' => 'Puerto 3306 ocupado',     'causa' => 'MySQL del sistema activo',         'fix' => 'sudo systemctl stop mysql',         'badge' => 'b-orange'],
    ['error' => 'Permiso denegado',        'causa' => 'Usuario sin permisos de escritura','fix' => 'sudo chown -R $USER:$USER htdocs/', 'badge' => 'b-amber'],
    ['error' => '500 Internal Server Error','causa' => 'Error en PHP',                    'fix' => 'tail -f /opt/lampp/logs/error_log', 'badge' => 'b-orange'],
    ['error' => 'Página en blanco',         'causa' => 'display_errors desactivado',     'fix' => 'ini_set("display_errors", 1)',       'badge' => 'b-amber'],
    ['error' => 'Class not found',          'causa' => 'Falta autoload o require',        'fix' => 'require_once "includes/MiClase.php"', 'badge' => 'b-blue'],
];

$errores_windows = [
    ['error' => 'Puerto 80 ocupado',       'causa' => 'IIS o Skype usando el puerto',      'fix' => 'net stop w3svc o cerrar Skype',           'badge' => 'b-orange'],
    ['error' => 'Puerto 3306 ocupado',      'causa' => 'Otro MySQL corriendo',              'fix' => 'net stop mysql',                           'badge' => 'b-orange'],
    ['error' => 'Permiso denegado',         'causa' => 'Sin permisos de escritura',          'fix' => 'Ejecutar editor como Administrador',      'badge' => 'b-amber'],
    ['error' => '500 Internal Server Error','causa' => 'Error en PHP',                       'fix' => 'Revisar C:\xampp\php\logs\php_error_log', 'badge' => 'b-orange'],
    ['error' => 'SSL certificate problem',  'causa' => 'Apache no encuentra el certificado', 'fix' => 'Verificar C:\xampp\apache\conf\ssl.conf', 'badge' => 'b-amber'],
    ['error' => 'XAMPP no inicia',          'causa' => 'Puerto bloqueado por antivirus',     'fix' => 'Deshabilitar antivirus o agregar excepción','badge' => 'b-orange'],
];
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">04</div>
    <h2 class="section-title">Errores frecuentes</h2>
  </div>

  <h3 style="margin-bottom:0.75rem;font-size:15px;"><span class="badge b-blue">Pop!_OS</span></h3>
  <div class="card" style="padding:0;overflow:hidden;">
    <table class="data-table">
      <thead>
        <tr><th>Error</th><th>Causa</th><th>Solución</th></tr>
      </thead>
<tbody>
        <?php foreach ($errores_popos as $e): ?>
        <tr>
          <td><span class="badge <?= $e['badge'] ?>"><?= htmlspecialchars($e['error']) ?></span></td>
          <td style="color:var(--muted);"><?= htmlspecialchars($e['causa']) ?></td>
          <td><code><?= htmlspecialchars($e['fix']) ?></code></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <h3 style="margin:1.5rem 0 0.75rem;font-size:15px;"><span class="badge b-orange">Windows</span></h3>
  <div class="card" style="padding:0;overflow:hidden;">
    <table class="data-table">
      <thead>
        <tr><th>Error</th><th>Causa</th><th>Solución</th></tr>
      </thead>
      <tbody>
        <?php foreach ($errores_windows as $e): ?>
        <tr>
          <td><span class="badge <?= $e['badge'] ?>"><?= htmlspecialchars($e['error']) ?></span></td>
          <td style="color:var(--muted);"><?= htmlspecialchars($e['causa']) ?></td>
          <td><code><?= htmlspecialchars($e['fix']) ?></code></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="tip">
    💡 Siempre activa los errores en desarrollo agregando esto al inicio de tu archivo PHP:<br>
    <code>ini_set('display_errors', 1); error_reporting(E_ALL);</code>
  </div>
</section>

<?php
