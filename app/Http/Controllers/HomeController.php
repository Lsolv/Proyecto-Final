<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Crear el método principal del aplicativo
    public function __invoke()
    {
        //return view('welcome');
        return view('home');
    }
}
