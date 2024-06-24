<!-- Heredar el código de la plantilla  -->
@extends('layouts.plantilla')

<!-- Modificar la sección del título -->
@section('title', 'Nuevo Curso')

<!-- Personalizar el contenido de la página (content) -->
@section('content')
    <h1>En esta página podrás crear un nuevo curso.</h1>

    <!-- formulario registro de nuevo curso -->
    <form action="{{route('cursos.store')}}" method="POST">

        <!-- TOKEN de seguridad -->
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name"> <!-- el campo "name" es de tipo STRING -->
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5"> </textarea> <!-- el campo "description" es de tipo TEXT -->
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category"> <!-- el campo "category" es de tipo STRING -->
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection