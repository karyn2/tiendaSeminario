<?php

namespace App\Controllers;

class Producto extends BaseController
{
    public function index()
    {
        return view('productos/listado');
    }
    public function registrar()
    {
        return view('productos/form_registro');
    }
}
