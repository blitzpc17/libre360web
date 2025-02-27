<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Somos(Request $r){
        return view('Home.SomosPage');
    }

    public function Registro(Request $r){
        $tipo = $r->t;
        return view('Home.RegistroPage', compact('tipo'));
    }

    public function Terminos(Request $r){
        return view('Home.TerminosUso');
    }

    public function PoliticaPrivacidad(Request $r){
        return view('Home.PoliticaPrivacidad');
    }
}
