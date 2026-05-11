<?php
/* =========================================
   pages/laravel-rutas.php
   ========================================= */

$page_title = 'Laravel — Rutas';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">L2</div>
    <h2 class="section-title">Rutas en Laravel</h2>
  </div>

  <!-- Rutas básicas -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">básico</span>
      <h3>Rutas básicas — routes/web.php</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">use</span> Illuminate\Support\Facades\<span class="fn">Route</span>;

<span class="cm">// GET simple</span>
Route::<span class="fn">get</span>(<span class="str">'/'</span>, <span class="kw">function</span>() {
    <span class="kw">return</span> <span class="fn">view</span>(<span class="str">'welcome'</span>);
});

<span class="cm">// GET con texto</span>
Route::<span class="fn">get</span>(<span class="str">'/hola'</span>, <span class="kw">function</span>() {
    <span class="kw">return</span> <span class="str">'Hola desde Laravel'</span>;
});

<span class="cm">// POST</span>
Route::<span class="fn">post</span>(<span class="str">'/formulario'</span>, <span class="kw">function</span>() {
    <span class="kw">return</span> <span class="str">'Formulario enviado'</span>;
});</pre>
  </div>

  <!-- Parámetros -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">parámetros</span>
      <h3>Rutas con parámetros</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// Parámetro requerido</span>
Route::<span class="fn">get</span>(<span class="str">'/usuarios/{id}'</span>, <span class="kw">function</span>(<span class="kw">int</span> <span class="var">$id</span>) {
    <span class="kw">return</span> <span class="str">"Usuario #$id"</span>;
});

<span class="cm">// Parámetro opcional</span>
Route::<span class="fn">get</span>(<span class="str">'/categorias/{slug?}'</span>, <span class="kw">function</span>(<span class="var">$slug</span> = <span class="str">'todas'</span>) {
    <span class="kw">return</span> <span class="str">"Categoría: $slug"</span>;
});

<span class="cm">// Con restricción de tipo</span>
Route::<span class="fn">get</span>(<span class="str">'/productos/{id}'</span>, <span class="kw">function</span>(<span class="var">$id</span>) {
    <span class="kw">return</span> <span class="str">"Producto $id"</span>;
})-><span class="fn">whereNumber</span>(<span class="str">'id'</span>);</pre>
  </div>

  <!-- Controladores -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">controladores</span>
      <h3>Rutas apuntando a controladores</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">use</span> App\Http\Controllers\<span class="fn">UsuarioController</span>;

<span class="cm">// Método específico</span>
Route::<span class="fn">get</span>(<span class="str">'/usuarios'</span>, [UsuarioController::class, <span class="str">'index'</span>]);
Route::<span class="fn">get</span>(<span class="str">'/usuarios/{id}'</span>, [UsuarioController::class, <span class="str">'show'</span>]);
Route::<span class="fn">post</span>(<span class="str">'/usuarios'</span>, [UsuarioController::class, <span class="str">'store'</span>]);
Route::<span class="fn">put</span>(<span class="str">'/usuarios/{id}'</span>, [UsuarioController::class, <span class="str">'update'</span>]);
Route::<span class="fn">delete</span>(<span class="str">'/usuarios/{id}'</span>, [UsuarioController::class, <span class="str">'destroy'</span>]);

<span class="cm">// Resource: crea las 7 rutas CRUD de una vez</span>
Route::<span class="fn">resource</span>(<span class="str">'usuarios'</span>, UsuarioController::class);</pre>
  </div>

  <!-- Controlador ejemplo -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">controller</span>
      <h3>Ejemplo de controlador</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// app/Http/Controllers/UsuarioController.php</span>
<span class="kw">namespace</span> App\Http\Controllers;

<span class="kw">use</span> App\Models\<span class="fn">Usuario</span>;
<span class="kw">use</span> Illuminate\Http\<span class="fn">Request</span>;

<span class="kw">class</span> <span class="fn">UsuarioController</span> <span class="kw">extends</span> <span class="fn">Controller</span> {

    <span class="kw">public function</span> <span class="fn">index</span>() {
        <span class="var">$usuarios</span> = Usuario::<span class="fn">all</span>();
        <span class="kw">return</span> <span class="fn">view</span>(<span class="str">'usuarios.index'</span>, <span class="fn">compact</span>(<span class="str">'usuarios'</span>));
    }

    <span class="kw">public function</span> <span class="fn">show</span>(<span class="kw">int</span> <span class="var">$id</span>) {
        <span class="var">$usuario</span> = Usuario::<span class="fn">findOrFail</span>(<span class="var">$id</span>);
        <span class="kw">return</span> <span class="fn">view</span>(<span class="str">'usuarios.show'</span>, <span class="fn">compact</span>(<span class="str">'usuario'</span>));
    }

    <span class="kw">public function</span> <span class="fn">store</span>(Request <span class="var">$request</span>) {
        <span class="var">$request</span>-><span class="fn">validate</span>([
            <span class="str">'nombre'</span> => <span class="str">'required|string|max:100'</span>,
            <span class="str">'email'</span>  => <span class="str">'required|email|unique:usuarios'</span>,
        ]);
        Usuario::<span class="fn">create</span>(<span class="var">$request</span>-><span class="fn">all</span>());
        <span class="kw">return</span> <span class="fn">redirect</span>(<span class="str">'/usuarios'</span>)-><span class="fn">with</span>(<span class="str">'ok'</span>, <span class="str">'Usuario creado'</span>);
    }
}
<span class="kw">?&gt;</span></pre>
  </div>

</section>

<?php
