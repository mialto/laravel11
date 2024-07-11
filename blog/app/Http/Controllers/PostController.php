<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aqui estan todos los posts";
    }
    
    public function create(){
        return "Aqui se crea un nuevo post";
    }

    public function show($post){
        return "Este es el post {$post}";
    }
}
