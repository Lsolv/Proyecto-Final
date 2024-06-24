<!-- Heredar el código de la plantilla  -->
@extends('layouts.plantilla')

<!-- Modificar la sección del título -->
@section('title', 'Editar Curso')

<!-- Personalizar el contenido de la página (content) -->
@section('content')
    <h1>EDITAR UN CURSO</h1>

    <!-- formulario registro de nuevo curso -->
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        <!-- TOKEN de seguridad -->
        @csrf
        <!-- directiva para indicar el método PUT -->
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{$curso->category}}">
        </label>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection