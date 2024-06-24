<!-- Heredar el código de la plantilla  -->
@extends('layouts.plantilla')

<!-- Modificar la sección del título -->
@section('title', 'Cursos')

<!-- Personalizar el contenido de la página (content) -->
@section('content')
    <h1>Bienvenido a la página de los cursos</h1>

    <!-- Hipervínculo para crear un nuevo registro -->
    <a href="{{route('cursos.create')}}">Crear Curso</a>

    <ul>
        <!-- se crea un bucle para mostrar todos los cursos, de uno en uno -->
        @foreach ($cursos as $curso)
            <!-- recuerde las sentencias en TINKER, mostraremos únicamente los nombres de los cursos -->
            <li>
                <!-- Hipervínculo para mostrar un solo registro -->
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    <!-- Paginación de los registros -->
    {{$cursos->links()}}
@endsection
