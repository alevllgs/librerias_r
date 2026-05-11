<?php
/* =========================================
   pages/laravel-blade.php
   ========================================= */

$page_title = 'Laravel — Blade';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
  <div class="section-header">
    <div class="section-num">L4</div>
    <h2 class="section-title">Blade — Sistema de plantillas</h2>
  </div>

  <!-- Qué es -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">¿qué es?</span>
      <h3>Blade en una oración</h3>
    </div>
    <p>Motor de plantillas de Laravel. Archivos <code>.blade.php</code> que mezclan HTML con directivas <code>@</code> para lógica, loops y herencia de layouts. Se compilan a PHP puro y se cachean.</p>
  </div>

  <!-- Variables -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-green">variables</span>
      <h3>Mostrar variables</h3>
    </div>
    <pre><span class="cm">{{-- Esto es un comentario Blade --}}</span>

<span class="cm">{{-- Mostrar variable (escapa HTML automáticamente) --}}</span>
{{ $nombre }}

<span class="cm">{{-- Sin escapar HTML (cuidado con XSS) --}}</span>
{!! $html !!}

<span class="cm">{{-- Valor por defecto si es null --}}</span>
{{ $nombre ?? 'Invitado' }}</pre>
  </div>

  <!-- Condicionales -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">condicionales</span>
      <h3>@if / @unless / @isset</h3>
    </div>
    <pre>@if ($usuario->esAdmin())
    &lt;span&gt;Administrador&lt;/span&gt;
@elseif ($usuario->esEditor())
    &lt;span&gt;Editor&lt;/span&gt;
@else
    &lt;span&gt;Invitado&lt;/span&gt;
@endif

@isset($producto)
    &lt;p&gt;Precio: {{ $producto->precio }}&lt;/p&gt;
@endisset

@unless ($usuario->activo)
    &lt;p&gt;Cuenta inactiva&lt;/p&gt;
@endunless</pre>
  </div>

  <!-- Loops -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-amber">loops</span>
      <h3>@foreach / @forelse</h3>
    </div>
    <pre>@foreach ($productos as $producto)
    &lt;div&gt;
        &lt;strong&gt;{{ $loop->iteration }}. {{ $producto->nombre }}&lt;/strong&gt;
        &lt;span&gt;$\{{ number_format($producto->precio) }}&lt;/span&gt;
    &lt;/div&gt;
@endforeach

{{-- forelse: muestra mensaje si el array está vacío --}}
@forelse ($pedidos as $pedido)
    &lt;p&gt;Pedido #{{ $pedido->id }}&lt;/p&gt;
@empty
    &lt;p&gt;No hay pedidos aún.&lt;/p&gt;
@endforelse</pre>
    <div class="tip">💡 Dentro del foreach tienes <code>$loop->first</code>, <code>$loop->last</code>, <code>$loop->index</code>, <code>$loop->iteration</code>, <code>$loop->count</code>.</div>
  </div>

  <!-- Layouts -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-orange">layouts</span>
      <h3>Herencia de layouts</h3>
    </div>
    <pre><span class="cm">{{-- resources/views/layouts/app.blade.php --}}</span>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;@yield('titulo', 'Mi App')&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    @include('partials.navbar')

    &lt;main&gt;
        @yield('contenido')
    &lt;/main&gt;

    @stack('scripts')
&lt;/body&gt;
&lt;/html&gt;</pre>
    <pre><span class="cm">{{-- resources/views/productos/index.blade.php --}}</span>
@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')
    &lt;h1&gt;Lista de productos&lt;/h1&gt;
    @foreach ($productos as $p)
        &lt;p&gt;{{ $p->nombre }}&lt;/p&gt;
    @endforeach
@endsection

@push('scripts')
    &lt;script src="/js/productos.js"&gt;&lt;/script&gt;
@endpush</pre>
  </div>

  <!-- Componentes -->
  <div class="card">
    <div class="card-head">
      <span class="badge b-blue">componentes</span>
      <h3>Componentes Blade</h3>
    </div>
    <pre><span class="cm"># Crear componente</span>
php artisan make:component Alerta</pre>
    <pre><span class="cm">{{-- resources/views/components/alerta.blade.php --}}</span>
&lt;div class="alerta alerta-{{ $tipo }}"&gt;
    {{ $slot }}
&lt;/div&gt;</pre>
    <pre><span class="cm">{{-- Usar el componente en cualquier vista --}}</span>
&lt;x-alerta tipo="exito"&gt;
    ¡Producto guardado correctamente!
&lt;/x-alerta&gt;

&lt;x-alerta tipo="error"&gt;
    Hubo un problema al guardar.
&lt;/x-alerta&gt;</pre>
  </div>

</section>

<?php
