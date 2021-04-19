<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function bienvenida ($nombre = 'Viajero', $apellido = null)
    {
        return view('./paginas-inicio/bienvenida', compact('nombre', 'apellido'));
    }

    public function contacto()
    {
        return view('./paginas-inicio/contacto');
    }
}
