<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //método para mostrar la página principal de los cursos
    public function index() {

        //llamar a todos los registros de la tabla CURSOS
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        
        return view('cursos.index', compact('cursos'));
    }

    //método para mostrar el formulario para crear un nuevo curso
    public function create() {
        return view('cursos.create');
    }

    //método para registrar lo enviado por el formulario de nuevo curso
    public function store(Request $request) {
        //crear un nuevo objeto de la clase CURSO
        $curso = new Curso();

        //asignar los valores del formulario a los atributos del objeto
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        //guardar los valores
        $curso->save();

        //redireccionar a una vista en específico
        return redirect()->route('cursos.show', $curso);
    }

    //método para mostrar la información de un curso en específico
    public function show(Curso $curso) {
        return view('cursos.show', compact('curso'));
    }

    //método para mostrar el formulación de edición
    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso'));
    }

    //método para registrar lo modificado por el formulario de edición
    public function update(Request $request, Curso $curso) {
        //asignar los valores del formulario a los atributos del objeto
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        //guardar los valores
        $curso->save();

        //redireccionar a una vista en específico
        return redirect()->route('cursos.show', $curso);
    }
}
