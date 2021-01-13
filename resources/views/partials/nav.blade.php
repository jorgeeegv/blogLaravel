<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="ml-5">
        <a href=" {{ route('inicio') }} " class="btn btn-secondary">Inicio</a>
        &nbsp;&nbsp;
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Listado de Posts</a>
        &nbsp;&nbsp;
        @if(auth()->check())
        <a href="{{ route('posts.create') }}" class="btn btn-secondary">Crear Post</a>
        &nbsp;&nbsp;
    </div>
    <div class="ml-auto">
        <a href="{{ route('logout') }}" class="btn btn-secondary">Logout</a>
        &nbsp;&nbsp;
        @else
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>

        &nbsp;&nbsp;
        @endif
        </div>
        <b class="ml-auto text-white">{{ fechaActual()}}</b>
    
</nav>
