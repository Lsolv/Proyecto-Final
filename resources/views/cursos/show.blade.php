<!-- Heredar el código de la plantilla  -->
@extends('layouts.plantilla')

<!-- Modificar la sección del título con parámetro personalizado -->
@section('title', 'Curso ' . $curso->name)

<!-- Personalizar el contenido de la página (content) -->
@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>

    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
    <br>

    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>

    <p>Categoría: {{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection
