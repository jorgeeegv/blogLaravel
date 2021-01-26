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
    <b class="ml-auto text-success">{{ auth()->user()->login}}</b>


    <div class="mr-0">
        <a href="{{ route('logout') }}" class="ml-3 btn btn-danger">Logout</a>
        &nbsp;&nbsp;
    
         @else
         <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

         &nbsp;&nbsp;    
        @endif
        <b class="ml-1 text-white">{{ fechaActual()}}</b>
    </div>

</nav>
