<?php
/* =========================================
   pages/laravel-eloquent.php
   ========================================= */

$page_title = 'Laravel — Eloquent ORM';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">L3</div>
    <h2 class="section-title">Eloquent ORM</h2>
  </div>

  <!-- Qué es -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">¿qué es?</span>
      <h3>Eloquent en una oración</h3>
    </div>
    <p>Es el ORM de Laravel. Cada tabla de tu base de datos tiene un Modelo PHP correspondiente, y puedes hacer consultas sin escribir SQL directo.</p>
  </div>

  <!-- Crear modelo -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">modelo</span>
      <h3>Crear modelo y migración</h3>
    </div>
    <pre><span class="cm"># Crea el modelo + migración juntos</span>
php artisan make:model Producto -m</pre>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// app/Models/Producto.php</span>
<span class="kw">namespace</span> App\Models;

<span class="kw">use</span> Illuminate\Database\Eloquent\<span class="fn">Model</span>;

<span class="kw">class</span> <span class="fn">Producto</span> <span class="kw">extends</span> <span class="fn">Model</span> {
    <span class="cm">// Campos que se pueden asignar en masa</span>
    <span class="kw">protected</span> <span class="var">$fillable</span> = [<span class="str">'nombre'</span>, <span class="str">'precio'</span>, <span class="str">'stock'</span>];
}
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Migración -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">migración</span>
      <h3>Definir la tabla con migración</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// database/migrations/xxxx_create_productos_table.php</span>
<span class="kw">public function</span> <span class="fn">up</span>(): <span class="kw">void</span> {
    Schema::<span class="fn">create</span>(<span class="str">'productos'</span>, <span class="kw">function</span> (Blueprint <span class="var">$table</span>) {
        <span class="var">$table</span>-><span class="fn">id</span>();
        <span class="var">$table</span>-><span class="fn">string</span>(<span class="str">'nombre'</span>);
        <span class="var">$table</span>-><span class="fn">decimal</span>(<span class="str">'precio'</span>, 10, 2);
        <span class="var">$table</span>-><span class="fn">integer</span>(<span class="str">'stock'</span>)-><span class="fn">default</span>(0);
        <span class="var">$table</span>-><span class="fn">timestamps</span>();
    });
}
<span class="kw">?&gt;</span></pre>
    <pre><span class="cm"># Ejecutar la migración</span>
php artisan migrate</pre>
  </div>

  <!-- CRUD con Eloquent -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">CRUD</span>
      <h3>Operaciones básicas</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">use</span> App\Models\<span class="fn">Producto</span>;

<span class="cm">// CREATE</span>
Producto::<span class="fn">create</span>([
    <span class="str">'nombre'</span> => <span class="str">'Laptop'</span>,
    <span class="str">'precio'</span> => 599990,
    <span class="str">'stock'</span>  => 10,
]);

<span class="cm">// READ — todos</span>
<span class="var">$productos</span> = Producto::<span class="fn">all</span>();

<span class="cm">// READ — uno por id</span>
<span class="var">$producto</span> = Producto::<span class="fn">find</span>(1);
<span class="var">$producto</span> = Producto::<span class="fn">findOrFail</span>(1); <span class="cm">// lanza 404 si no existe</span>

<span class="cm">// READ — con filtro</span>
<span class="var">$caros</span> = Producto::<span class="fn">where</span>(<span class="str">'precio'</span>, <span class="str">'>'</span>, 100000)-><span class="fn">get</span>();

<span class="cm">// UPDATE</span>
<span class="var">$producto</span>->precio = 549990;
<span class="var">$producto</span>-><span class="fn">save</span>();

<span class="cm">// DELETE</span>
<span class="var">$producto</span>-><span class="fn">delete</span>();
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Relaciones -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">relaciones</span>
      <h3>Relaciones entre modelos</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// Un usuario tiene muchos pedidos</span>
<span class="kw">class</span> <span class="fn">Usuario</span> <span class="kw">extends</span> <span class="fn">Model</span> {
    <span class="kw">public function</span> <span class="fn">pedidos</span>() {
        <span class="kw">return</span> <span class="var">$this</span>-><span class="fn">hasMany</span>(Pedido::class);
    }
}

<span class="cm">// Un pedido pertenece a un usuario</span>
<span class="kw">class</span> <span class="fn">Pedido</span> <span class="kw">extends</span> <span class="fn">Model</span> {
    <span class="kw">public function</span> <span class="fn">usuario</span>() {
        <span class="kw">return</span> <span class="var">$this</span>-><span class="fn">belongsTo</span>(Usuario::class);
    }
}

<span class="cm">// Usar la relación</span>
<span class="var">$usuario</span> = Usuario::<span class="fn">find</span>(1);
<span class="var">$pedidos</span> = <span class="var">$usuario</span>->pedidos;         <span class="cm">// colección</span>
<span class="var">$nombre</span>  = <span class="var">$pedido</span>->usuario->nombre;  <span class="cm">// string</span>
<span class="kw">?&gt;</span></pre>
  </div>

</section>

<?php
