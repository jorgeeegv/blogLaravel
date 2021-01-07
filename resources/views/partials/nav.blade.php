<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="ml-5">
    <a href=" {{ url('/') }} " class="btn btn-secondary">Inicio</a>
    &nbsp;&nbsp;
    <a href="{{ route('post.index') }}" class="btn btn-secondary">Listado de Posts</a>
    &nbsp;&nbsp;
    <a href="{{ route('post.create') }}" class="btn btn-secondary">Crear Post</a>
    &nbsp;&nbsp;
    </div>
    <b class="ml-auto text-white">{{ fechaActual()}}</b>
</nav>
