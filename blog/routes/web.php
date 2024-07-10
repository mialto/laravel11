<?php

use Illuminate\Support\Facades\Route;

//get => desde la url
//post => desde un formulario con info oculta
//put => para actualizar
//patch => para actualizar
//delete => para eliminar

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function(){
    return "Estos son los posts";
});

/*
Route::get('/posts/{post}', function($post){
    return "Este es el post {$post}";
});
*/

Route::get('/posts/create', function(){
    return "Crear un nuevo post";
});

Route::get('/posts/{post}/{categoria?}', function($post, $categoria = null){
    if($categoria){
        return "Este es el post {$post} de la categoria {$categoria}";
    }else{
        return "Este es el post {$post} sin categoria";
    }
    
});

