@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Reportes</h1>
@stop

@section('content')

<style type="text/css">
    [class*=sidebar-dark-] {
    background-color:#00ab84;
}
    </style>

<section class="content">

<div class="card">
<div class="card-header">
<h3 class="card-title">Detalles de prestamos</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
<div class="row">
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Prestamos hoy</span>
<span class="info-box-number text-center text-muted mb-0">4</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Total prestamos mes</span>
<span class="info-box-number text-center text-muted mb-0">21</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Prestamos totales cuatrimestre</span>
<span class="info-box-number text-center text-muted mb-0">56</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<h4>
    Historial de prestamos
</h4>
<div class="post">
<div class="user-block">


<a href="#">Jonathan Burke Jr.</a>
<span class="description">prestamos realizado - 7:45 PM today</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
</p>
</div>
<div class="post clearfix">
<div class="user-block">

<a href="#">Sarah Ross</a>
<span class="description">prestamos realizado - 3 days ago</span>
</div>

<p>
course 1 ingles- 9 am - 11 am 
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
</p>
</div>
<div class="post">
<div class="user-block">


 <a href="#">Jonathan Burke Jr.</a>

<span class="description">Prestamos realizado - 5 days ago</span>
</div>

<p>
Frances 3 5pm - 7pm 
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
</p>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
<h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
<p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
<br>
<div class="text-muted">
<p class="text-sm">Client Company
<b class="d-block">Deveint Inc</b>
</p>
<p class="text-sm">Project Leader
<b class="d-block">Tony Chicken</b>
</p>
</div>
<h5 class="mt-5 text-muted">Project files</h5>
<ul class="list-unstyled">
<li>
<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
</li>
<li>
<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
</li>
<li>
<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
</li>
<li>
<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
</li>
<li>
<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
</li>
</ul>
<div class="text-center mt-5 mb-3">
<a href="#" class="btn btn-sm btn-primary">Add files</a>
<a href="#" class="btn btn-sm btn-warning">Report contact</a>
</div>
</div>
</div>
</div>

</div>

</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop