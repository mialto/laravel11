<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//get => desde la url
//post => desde un formulario con info oculta
//put => para actualizar
//patch => para actualizar
//delete => para eliminar

Route::get('/', HomeController::class); //esta forma de invocarlo es por el método __invoke
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);


/*Route::get('/posts/{post}/{categoria?}', function($post, $categoria = null){
    if($categoria){
        return "Este es el post {$post} de la categoria {$categoria}";
    }else{
        return "Este es el post {$post} sin categoria";
    }
    
});*/

