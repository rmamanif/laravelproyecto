@extends('layouts.app')

@section('content')

<div class="container">

Sección para actualizar libros
<form action="{{ url('/biblioteca/' .$libro->id) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}

<label for="Titulo">{{'Titulo'}}</label>
<input type="text" class="form-control" name="Titulo" id="Titulo" value="{{ $libro->Titulo }}">
<br>

<label for="Reseña">{{'Reseña'}}</label>
<input type="text" class="form-control"  name="Reseña" id="Reseña" value="{{ $libro->Reseña }}">
<br>

<label for="Editorial">{{'Editorial'}}</label>
<input type="text" class="form-control"  name="Editorial" id="Editorial" value="{{ $libro->Editorial }}">
<br>

<label for="Autor">{{'Autor'}}</label>
<input type="text" class="form-control"  name="Autor" id="Autor" value="{{ $libro->Autor }}">
<br>
<br>
<input type="submit" class='btn btn-success' value="Modificar">
<a class='btn btn-primary' href="{{ url('biblioteca')}}">Regresar</a>

</form>
</div>
@endsection


