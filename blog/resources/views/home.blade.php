@extends('layout.app')
@section('title', 'Home')
@push('css')
    <style>
        body{
            background-color: #f5f5f5;
        }
    </style>
@endpush
@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <!--<h1>Bienvenido a la pagina principal</h1>-->
        <x-alert2 type="info" class="mb-4">
            <x-slot name="title">
                Título
            </x-slot>
            contenido de la alerta en la clase
        </x-alert2>
        <p>Hola mundo</p>
    </div>
@endsection
    
