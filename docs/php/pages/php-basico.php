<?php
/* =========================================
   pages/php-basico.php
   ========================================= */

$page_title = 'PHP Básico';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">P1</div>
    <h2 class="section-title">PHP Básico</h2>
  </div>

  <!-- Variables y tipos -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">variables</span>
      <h3>Variables y tipos de datos</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// String</span>
<span class="var">$nombre</span> = <span class="str">"Alejandro"</span>;

<span class="cm">// Integer</span>
<span class="var">$edad</span> = 30;

<span class="cm">// Float</span>
<span class="var">$precio</span> = 9990.50;

<span class="cm">// Boolean</span>
<span class="var">$activo</span> = <span class="kw">true</span>;

<span class="cm">// Array</span>
<span class="var">$colores</span> = [<span class="str">"rojo"</span>, <span class="str">"verde"</span>, <span class="str">"azul"</span>];

<span class="cm">// Array asociativo</span>
<span class="var">$usuario</span> = [
    <span class="str">"nombre"</span> => <span class="str">"Alejandro"</span>,
    <span class="str">"email"</span>  => <span class="str">"ale@mail.com"</span>,
];
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Condicionales -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">condicionales</span>
      <h3>If / else / match</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="var">$edad</span> = 20;

<span class="cm">// If clásico</span>
<span class="kw">if</span> (<span class="var">$edad</span> >= 18) {
    <span class="fn">echo</span> <span class="str">"Mayor de edad"</span>;
} <span class="kw">elseif</span> (<span class="var">$edad</span> >= 13) {
    <span class="fn">echo</span> <span class="str">"Adolescente"</span>;
} <span class="kw">else</span> {
    <span class="fn">echo</span> <span class="str">"Menor"</span>;
}

<span class="cm">// Operador ternario</span>
<span class="var">$msg</span> = (<span class="var">$edad</span> >= 18) ? <span class="str">"adulto"</span> : <span class="str">"menor"</span>;

<span class="cm">// match (PHP 8+)</span>
<span class="var">$rol</span> = <span class="str">"admin"</span>;
<span class="var">$label</span> = <span class="kw">match</span>(<span class="var">$rol</span>) {
    <span class="str">"admin"</span>  => <span class="str">"Administrador"</span>,
    <span class="str">"editor"</span> => <span class="str">"Editor"</span>,
    <span class="kw">default</span>  => <span class="str">"Invitado"</span>,
};
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Bucles -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">bucles</span>
      <h3>For / foreach / while</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="var">$frutas</span> = [<span class="str">"manzana"</span>, <span class="str">"pera"</span>, <span class="str">"uva"</span>];

<span class="cm">// foreach — el más usado en PHP</span>
<span class="kw">foreach</span> (<span class="var">$frutas</span> <span class="kw">as</span> <span class="var">$fruta</span>) {
    <span class="fn">echo</span> <span class="var">$fruta</span> . <span class="str">"&lt;br&gt;"</span>;
}

<span class="cm">// foreach con clave => valor</span>
<span class="var">$usuario</span> = [<span class="str">"nombre"</span> => <span class="str">"Ale"</span>, <span class="str">"rol"</span> => <span class="str">"admin"</span>];
<span class="kw">foreach</span> (<span class="var">$usuario</span> <span class="kw">as</span> <span class="var">$clave</span> => <span class="var">$valor</span>) {
    <span class="fn">echo</span> <span class="str">"$clave: $valor&lt;br&gt;"</span>;
}

<span class="cm">// for clásico</span>
<span class="kw">for</span> (<span class="var">$i</span> = 0; <span class="var">$i</span> < 5; <span class="var">$i</span>++) {
    <span class="fn">echo</span> <span class="var">$i</span>;
}
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Funciones -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">funciones</span>
      <h3>Funciones</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// Función básica</span>
<span class="kw">function</span> <span class="fn">saludar</span>(<span class="var">$nombre</span>) {
    <span class="kw">return</span> <span class="str">"Hola, $nombre!"</span>;
}

<span class="cm">// Con tipo de dato (PHP 7+)</span>
<span class="kw">function</span> <span class="fn">sumar</span>(<span class="kw">int</span> <span class="var">$a</span>, <span class="kw">int</span> <span class="var">$b</span>): <span class="kw">int</span> {
    <span class="kw">return</span> <span class="var">$a</span> + <span class="var">$b</span>;
}

<span class="cm">// Con valor por defecto</span>
<span class="kw">function</span> <span class="fn">bienvenida</span>(<span class="var">$nombre</span> = <span class="str">"Invitado"</span>) {
    <span class="kw">return</span> <span class="str">"Bienvenido, $nombre"</span>;
}

<span class="fn">echo</span> <span class="fn">saludar</span>(<span class="str">"Alejandro"</span>);  <span class="cm">// Hola, Alejandro!</span>
<span class="fn">echo</span> <span class="fn">sumar</span>(3, 4);            <span class="cm">// 7</span>
<span class="fn">echo</span> <span class="fn">bienvenida</span>();           <span class="cm">// Bienvenido, Invitado</span>
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Strings útiles -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">strings</span>
      <h3>Funciones de string más usadas</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="var">$texto</span> = <span class="str">"  Hola Mundo  "</span>;

<span class="fn">strlen</span>(<span class="var">$texto</span>);           <span class="cm">// largo</span>
<span class="fn">strtolower</span>(<span class="var">$texto</span>);       <span class="cm">// hola mundo</span>
<span class="fn">strtoupper</span>(<span class="var">$texto</span>);       <span class="cm">// HOLA MUNDO</span>
<span class="fn">trim</span>(<span class="var">$texto</span>);             <span class="cm">// "Hola Mundo" (sin espacios)</span>
<span class="fn">str_replace</span>(<span class="str">"Mundo"</span>, <span class="str">"PHP"</span>, <span class="var">$texto</span>); <span class="cm">// Hola PHP</span>
<span class="fn">explode</span>(<span class="str">" "</span>, <span class="var">$texto</span>);     <span class="cm">// ["Hola", "Mundo"]</span>
<span class="fn">implode</span>(<span class="str">", "</span>, [<span class="str">"a"</span>,<span class="str">"b"</span>]); <span class="cm">// "a, b"</span>
<span class="fn">strpos</span>(<span class="var">$texto</span>, <span class="str">"Mundo"</span>);  <span class="cm">// posición</span>
<span class="fn">substr</span>(<span class="var">$texto</span>, 0, 4);     <span class="cm">// "Hola"</span>
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Formularios -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">formularios</span>
      <h3>$_GET y $_POST</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// Recibir datos de un formulario</span>
<span class="var">$nombre</span> = <span class="fn">$_POST</span>[<span class="str">'nombre'</span>] ?? <span class="str">'Invitado'</span>;
<span class="var">$id</span>     = <span class="fn">$_GET</span>[<span class="str">'id'</span>] ?? 0;

<span class="fn">echo</span> <span class="str">"Hola $nombre, el ID es $id"</span>;
<span class="kw">?&gt;</span></pre>
    <div class="tip">
      💡 <code>$_POST</code> es más seguro para enviar contraseñas o datos largos, ya que no se muestran en la URL.
    </div>
  </div>

  <!-- Sesiones y Cookies -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">estado</span>
      <h3>Sesiones y Cookies</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// Sesiones (Se guardan en el servidor)</span>
<span class="fn">session_start</span>(); 
<span class="fn">$_SESSION</span>[<span class="str">'user'</span>] = <span class="str">'Alejandro'</span>;

<span class="cm">// Cookies (Se guardan en el navegador del cliente)</span>
<span class="fn">setcookie</span>(<span class="str">'tema'</span>, <span class="str">'oscuro'</span>, time() + 3600);
<span class="var">$mi_tema</span> = <span class="fn">$_COOKIE</span>[<span class="str">'tema'</span>] ?? <span class="str">'claro'</span>;
<span class="kw">?&gt;</span></pre>
  </div>

</section>

<?php
