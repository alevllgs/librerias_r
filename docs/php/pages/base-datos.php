<?php
$page_title = 'Base de datos';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">03</div>
    <h2 class="section-title">Conectar PHP a MariaDB</h2>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">phpMyAdmin</span>
      <h3>Acceder a phpMyAdmin</h3>
    </div>
    <p><strong>Pop!_OS:</strong> Abre tu navegador y visita <code>http://localhost/phpmyadmin</code></p>
    <p><strong>Windows:</strong> Abre <code>http://localhost/phpmyadmin</code> o haz clic en <strong>Admin</strong> en la fila de MySQL del XAMPP Control Panel.</p>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">mysqli</span>
      <h3>Conexión orientada a objetos</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="var">$host</span>     = <span class="str">"localhost"</span>;
<span class="var">$usuario</span>  = <span class="str">"root"</span>;
<span class="var">$password</span> = <span class="str">""</span>;        <span class="cm">// vacío por defecto en XAMPP</span>
<span class="var">$base</span>     = <span class="str">"mi_bd"</span>;

<span class="var">$conn</span> = <span class="kw">new</span> <span class="fn">mysqli</span>(<span class="var">$host</span>, <span class="var">$usuario</span>, <span class="var">$password</span>, <span class="var">$base</span>);

<span class="kw">if</span> (<span class="var">$conn</span>->connect_error) {
    <span class="fn">die</span>(<span class="str">"Error: "</span> . <span class="var">$conn</span>->connect_error);
}

<span class="fn">echo</span> <span class="str">"Conexión exitosa ✓"</span>;
<span class="kw">?&gt;</span></pre>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">PDO</span>
      <h3>Conexión con PDO (recomendado)</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">try</span> {
    <span class="var">$pdo</span> = <span class="kw">new</span> <span class="fn">PDO</span>(
        <span class="str">"mysql:host=localhost;dbname=mi_bd;charset=utf8"</span>,
        <span class="str">"root"</span>,
        <span class="str">""</span>
    );
    <span class="var">$pdo</span>-><span class="fn">setAttribute</span>(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    <span class="fn">echo</span> <span class="str">"Conectado con PDO ✓"</span>;

} <span class="kw">catch</span> (PDOException <span class="var">$e</span>) {
    <span class="fn">die</span>(<span class="str">"Error: "</span> . <span class="var">$e</span>-><span class="fn">getMessage</span>());
}
<span class="kw">?&gt;</span></pre>
    <div class="tip">
      💡 PDO es más flexible: soporta múltiples motores (MySQL, PostgreSQL, SQLite) con el mismo código.
    </div>
  </div>

  <div class="card">
    <div class="card-head">
      <span class="badge b-green">query</span>
      <h3>Consulta básica con PDO</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// Consulta preparada (previene SQL Injection)</span>
<span class="var">$stmt</span> = <span class="var">$pdo</span>-><span class="fn">prepare</span>(<span class="str">"SELECT * FROM usuarios WHERE id = :id"</span>);
<span class="var">$stmt</span>-><span class="fn">execute</span>([<span class="str">':id'</span> => <span class="var">$id</span>]);
<span class="var">$usuario</span> = <span class="var">$stmt</span>-><span class="fn">fetch</span>(PDO::FETCH_ASSOC);

<span class="fn">print_r</span>(<span class="var">$usuario</span>);
<span class="kw">?&gt;</span></pre>
  </div>

</section>

<?php
