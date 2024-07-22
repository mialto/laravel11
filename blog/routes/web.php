<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//get => desde la url
//post => desde un formulario con info oculta
//put => para actualizar
//patch => para actualizar
//delete => para eliminar

Route::get('/', HomeController::class); //esta forma de invocarlo es por el método __invoke
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('prueba', function(){
    /*
    //CREAR REGISTROS
    $post = new Post;
    $post->title = 'Titulo DE Prueba 4';
    $post->content = 'Este es el contenido 4';
    $post->categoria = 'Categoria de prueba 4';
    $post->save();
    return $post;
    */

    $post = Post::find(1);
    dd($post->is_active);
    return $post->is_active;
    
    /*
    ///Modificar un registro
    $post = Post::where('title', 'Titulo de prueba 1')->first();
    $post->categoria='Desarrollo Web';
    $post->save();
    return $post;
    */
    /*
    //Obtener registros
    $post = Post::orderBy('id', 'DESC')
        ->select('id', 'title')
        ->take(5)
        ->get();
    return $post;
    */

    //eliminar un registro
    /*$post = Post::find(1);
    $post->delete();
    return "Eliminado";*/
   
});


/*Route::get('/posts/{post}/{categoria?}', function($post, $categoria = null){
    if($categoria){
        return "Este es el post {$post} de la categoria {$categoria}";
    }else{
        return "Este es el post {$post} sin categoria";
    }
    
});*/