@extends('prueba')

@section('titulo', 'Listado de posts')

@section('contenido')
<h3 class="p-2 text-dark">Listado de posts</h3>

 <table class="table">   
@foreach($posts as $post)
<tr>
 <td scope="row"><b>{{ $post->titulo }}<b></td>
<td scope="row"><p>{{ $post->contenido }}</p></td>
<td scope="row"><p>( {{ $post->autor->nombre }} )</p></td>
<td>
<form action="{{ route('posts.destroy', $post['id']) }}" method="POST">
 @method('DELETE')
 @csrf
 <button class="btn btn-danger">Borrar</button>
</form>
</td>
<td>
<form action="{{ route('posts.edit', $post['id']) }}" method="GET">
 @csrf
 <button class="btn btn-success">Editar</button>
</form>
</td>
<td>
<form action="{{ route('posts.show', $post['id']) }}" method="GET">
 @csrf
 <button class="btn btn-warning">Ver</button>
</form>
</td>
</tr>
@endforeach
 </table>   
@endsection