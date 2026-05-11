<?php
/* =========================================
   pages/php-avanzado.php
   ========================================= */

$page_title = 'PHP Avanzado';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">P2</div>
    <h2 class="section-title">PHP Avanzado</h2>
  </div>

  <!-- Clases y OOP -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">OOP</span>
      <h3>Clases y objetos</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">class</span> <span class="fn">Usuario</span> {
    <span class="cm">// Propiedades</span>
    <span class="kw">public</span> <span class="kw">string</span> <span class="var">$nombre</span>;
    <span class="kw">private</span> <span class="kw">string</span> <span class="var">$email</span>;
    <span class="kw">protected</span> <span class="kw">int</span> <span class="var">$edad</span>;

    <span class="cm">// Constructor</span>
    <span class="kw">public function</span> <span class="fn">__construct</span>(<span class="kw">string</span> <span class="var">$nombre</span>, <span class="kw">string</span> <span class="var">$email</span>) {
        <span class="var">$this</span>->nombre = <span class="var">$nombre</span>;
        <span class="var">$this</span>->email  = <span class="var">$email</span>;
    }

    <span class="cm">// Método</span>
    <span class="kw">public function</span> <span class="fn">saludar</span>(): <span class="kw">string</span> {
        <span class="kw">return</span> <span class="str">"Hola, soy {$this->nombre}"</span>;
    }

    <span class="cm">// Getter</span>
    <span class="kw">public function</span> <span class="fn">getEmail</span>(): <span class="kw">string</span> {
        <span class="kw">return</span> <span class="var">$this</span>->email;
    }
}

<span class="cm">// Crear instancia</span>
<span class="var">$user</span> = <span class="kw">new</span> <span class="fn">Usuario</span>(<span class="str">"Alejandro"</span>, <span class="str">"ale@mail.com"</span>);
<span class="fn">echo</span> <span class="var">$user</span>-><span class="fn">saludar</span>();
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Herencia -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">herencia</span>
      <h3>Herencia y clases abstractas</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">abstract class</span> <span class="fn">Animal</span> {
    <span class="kw">public function</span> <span class="fn">__construct</span>(<span class="kw">protected string</span> <span class="var">$nombre</span>) {}

    <span class="cm">// Método abstracto — obliga a implementarlo</span>
    <span class="kw">abstract public function</span> <span class="fn">sonido</span>(): <span class="kw">string</span>;

    <span class="kw">public function</span> <span class="fn">presentarse</span>(): <span class="kw">string</span> {
        <span class="kw">return</span> <span class="str">"{$this->nombre} hace: "</span> . <span class="var">$this</span>-><span class="fn">sonido</span>();
    }
}

<span class="kw">class</span> <span class="fn">Perro</span> <span class="kw">extends</span> <span class="fn">Animal</span> {
    <span class="kw">public function</span> <span class="fn">sonido</span>(): <span class="kw">string</span> {
        <span class="kw">return</span> <span class="str">"¡Guau!"</span>;
    }
}

<span class="var">$perro</span> = <span class="kw">new</span> <span class="fn">Perro</span>(<span class="str">"Rex"</span>);
<span class="fn">echo</span> <span class="var">$perro</span>-><span class="fn">presentarse</span>(); <span class="cm">// Rex hace: ¡Guau!</span>
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Interfaces -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">interfaces</span>
      <h3>Interfaces</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">interface</span> <span class="fn">Autenticable</span> {
    <span class="kw">public function</span> <span class="fn">login</span>(<span class="kw">string</span> <span class="var">$email</span>, <span class="kw">string</span> <span class="var">$pass</span>): <span class="kw">bool</span>;
    <span class="kw">public function</span> <span class="fn">logout</span>(): <span class="kw">void</span>;
}

<span class="kw">class</span> <span class="fn">Admin</span> <span class="kw">implements</span> <span class="fn">Autenticable</span> {
    <span class="kw">public function</span> <span class="fn">login</span>(<span class="kw">string</span> <span class="var">$email</span>, <span class="kw">string</span> <span class="var">$pass</span>): <span class="kw">bool</span> {
        <span class="kw">return</span> <span class="var">$email</span> === <span class="str">"admin@mail.com"</span> && <span class="var">$pass</span> === <span class="str">"1234"</span>;
    }

    <span class="kw">public function</span> <span class="fn">logout</span>(): <span class="kw">void</span> {
        <span class="fn">session_destroy</span>();
    }
}
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- Namespaces -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">namespaces</span>
      <h3>Namespaces y autoload</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="cm">// archivo: App/Models/Usuario.php</span>
<span class="kw">namespace</span> App\Models;

<span class="kw">class</span> <span class="fn">Usuario</span> {
    <span class="kw">public string</span> <span class="var">$nombre</span>;
}

<span class="cm">// ─────────────────────────────────────</span>
<span class="cm">// archivo: index.php</span>
<span class="kw">use</span> App\Models\<span class="fn">Usuario</span>;

<span class="var">$u</span> = <span class="kw">new</span> <span class="fn">Usuario</span>();
<span class="kw">?&gt;</span></pre>
    <div class="tip">
      💡 Con Composer puedes configurar autoload PSR-4 en <code>composer.json</code> y olvidarte de los <code>require_once</code> manuales.
    </div>
  </div>

  <!-- Manejo de errores -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">excepciones</span>
      <h3>Manejo de excepciones</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="kw">function</span> <span class="fn">dividir</span>(<span class="kw">int</span> <span class="var">$a</span>, <span class="kw">int</span> <span class="var">$b</span>): <span class="kw">float</span> {
    <span class="kw">if</span> (<span class="var">$b</span> === 0) {
        <span class="kw">throw new</span> <span class="fn">InvalidArgumentException</span>(<span class="str">"No se puede dividir por cero"</span>);
    }
    <span class="kw">return</span> <span class="var">$a</span> / <span class="var">$b</span>;
}

<span class="kw">try</span> {
    <span class="fn">echo</span> <span class="fn">dividir</span>(10, 0);
} <span class="kw">catch</span> (InvalidArgumentException <span class="var">$e</span>) {
    <span class="fn">echo</span> <span class="str">"Error: "</span> . <span class="var">$e</span>-><span class="fn">getMessage</span>();
} <span class="kw">finally</span> {
    <span class="fn">echo</span> <span class="str">"Esto siempre se ejecuta"</span>;
}
<span class="kw">?&gt;</span></pre>
  </div>

  <!-- JSON -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">json</span>
      <h3>Trabajar con JSON</h3>
    </div>
    <pre><span class="kw">&lt;?php</span>
<span class="var">$usuario</span> = [
    <span class="str">"nombre"</span> => <span class="str">"Alejandro"</span>,
    <span class="str">"rol"</span> => <span class="str">"Admin"</span>,
    <span class="str">"activo"</span> => <span class="kw">true</span>
];

<span class="cm">// De Array a JSON (para enviar al cliente)</span>
<span class="var">$json</span> = <span class="fn">json_encode</span>(<span class="var">$usuario</span>);
<span class="fn">echo</span> <span class="var">$json</span>; <span class="cm">// {"nombre":"Alejandro","rol":"Admin","activo":true}</span>

<span class="cm">// De JSON a Array (para procesar datos recibidos)</span>
<span class="var">$datos</span> = <span class="fn">json_decode</span>(<span class="var">$json</span>, <span class="kw">true</span>);
<span class="fn">echo</span> <span class="var">$datos</span>[<span class="str">'nombre'</span>]; <span class="cm">// Alejandro</span>
<span class="kw">?&gt;</span></pre>
  </div>

</section>

<?php
