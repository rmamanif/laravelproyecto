@extends('layouts.app')

@section('content')

<div class="container">

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>
        {{ $error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

Sección para crear libros
<form action="{{ url('/biblioteca')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

@include('biblioteca.form',['Modo'=>'crear'])

</form>
</div>
@endsection