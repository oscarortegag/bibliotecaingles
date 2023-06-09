@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Nuevo préstamo</h1>
@stop

@section('content')

<style type="text/css">
    [class*=sidebar-dark-] {
    background-color:#00ab84;
}
    </style>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Solicitud de préstamo</h3>
</div>


<form action="{{ route('guardarprestamo.store') }}" method="POST">
 @csrf   
<div class="card-body">
  <div class="form-group">
     <label for="titulofrances">libro</label>
      <select name="libro_id" id="libro_id" class="form-control" required>
        <option value="">Seleccione el libro</option>
        @foreach($libro as $id => $libros_frances)
              <option value="{{$id}}">{{$libros_frances}}</option>
              @endforeach
</select>
</div>
  
<div class="form-group">
<label>Comentario</label>
<select name="comentario" class="form-control" id="comentario" name="comentario" required>
<option>Estudio</option>
<option>Consulta</option>
<option>Resolver ejercicios</option>
<option>Planeacion</option>
<option>Clase</option>
<option>Reforzamiento</option>

</select>
</div>
</div>

<label>Fecha de prestamo</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-clock"></i></span>
<input type="datetime-local" class="form-control float-right" id="fecha_prestamo" name="fecha_prestamo" required/>
</div>
</div>

<label>Fecha final de prestamo</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-clock"></i></span>
<input type="datetime-local" class="form-control float-right" id="fecha_final" name="fecha_final" required/>
</div>
</div>






<div class="col-sm-6">
<div class="form-group">

</div>
</div>



</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop