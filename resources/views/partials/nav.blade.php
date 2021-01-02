<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a href=" {{ url('/') }} " class="btn btn-dark">Inicio</a>
    &nbsp;&nbsp;
    <a href="{{ route('post.index') }}" class="btn btn-dark">Lista de POSTS</a>
    &nbsp;&nbsp;
    <a href="{{ route('post.create') }}" class="btn btn-dark">Crear POST</a>
    &nbsp;&nbsp;
    <b class="ml-auto text-white">{{ fechaActual()}}</b>
</nav>
