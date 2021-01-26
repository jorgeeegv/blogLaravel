<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;

class RolCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$rol)
    {
        $post_id = $request->route()->parameters()['post'];
        $post = Post::findOrFail($post_id);
        if (auth()->user()->rol === $rol || auth()->user()->id === $post->usuario_id)
            return $next($request);
        else
            return redirect()->route('posts.index');
    }
}
