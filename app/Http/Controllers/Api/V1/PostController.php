<?php
/* Este controlador fue creado con este comando: php artisan make:controller Api/V1/PostController --api --model=Post
se crea el controlador y las carpetas para ponerlo dentro de ellas.
--api significa que se creen los metodos correctos de api en el controlador como un controlador resource.
--model=Post significa que se conecte con el modelo que ya existe llamado Post. */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
//agregados:
use App\Http\Resources\V1\PostResource;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PostResource::collection(Post::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //1
        // return ($post);
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return response()->json([
            'message' => 'Post Deleted'
        ], Response::HTTP_NO_CONTENT);//regresa el codigo del suceso en este caso 204 que significa borrado exitoso
    }
}
