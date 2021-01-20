@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-primary" role="alert">

{{Session::get('Mensaje')}}
   
</div>

@endif

<a href="{{ url('biblioteca/create')}}" class="btn btn-success">Agregar libro</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <th>#</th>
        <th>Titulo</th>
        <th>Reseña</th> 
        <th>Editorial</th>
        <th>Autor</th>
        <th>Acciones</th>
    </thead>
    <tbody>
    @foreach($libros as $libro)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $libro->Titulo}}</td>
            <td>{{ $libro->Reseña}}</td>
            <td>{{ $libro->Editorial}}</td>
            <td>{{ $libro->Autor}}</td>
            <td>
            <a class="btn btn-warning" href="{{ url('/biblioteca/'.$libro->id.'/edit')}}">Editar</a>

            |

            <form method="post" action="{{ url('/biblioteca/'.$libro->id) }}" style="display:inline">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>

            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    

</table>

{{ $libros->links()}}

</div>

@endsection
