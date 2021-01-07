@extends('prueba')

@section('titulo', 'Listado de posts')

@section('contenido')
<h3 class="mt-3 text-center p-2 text-dark">Listado de posts</h3>

 <table class="table">   
@foreach($posts as $post)
<tr>
 <td scope="row"><b>{{ $post->titulo }}<b></td>
<td scope="row"><p>{{ $post->contenido }}</p></td>
<td scope="row"><p>( {{ $post->autor->nombre }} )</p></td>
<td>
<form action="{{ route('posts.destroy', $post['id']) }}" method="GET">
 @method('DELETE')
 @csrf
 <button class="btn btn-danger">Borrar</button>
</form>
</td>
<td>
<form action="{{ route('posts.edit', $post['id']) }}" method="PUT">
 @csrf
 <button class="btn btn-warning">Editar</button>
</form>
</td>
<td>
<form action="{{ route('posts.show', $post['id']) }}" method="GET">
 @csrf
 <button class="btn btn-success">Ver</button>
</form>
</td>
</tr>
@endforeach
 </table>   
@endsection