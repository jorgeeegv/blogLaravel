@extends('prueba')

@section('titulo', 'Listado de posts')

@section('contenido')
<h3>Listado de posts</h3>

 <table>   
@foreach($posts as $post)
<tr>
 <td><b>{{ $post->titulo }}<b></td>
<td><p>{{ $post->contenido }}</p></td>
<td><p>{{ $post->autor->nombre }}</p></td>
<td>
<form action="{{ route('post.destroy', $post['id']) }}" method="POST">
 @method('DELETE')
 @csrf
 <button>Borrar</button>
</form>
</td>
</tr>
@endforeach
 </table>   
@endsection