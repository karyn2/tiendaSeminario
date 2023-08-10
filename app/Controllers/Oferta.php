<?php

namespace App\Controllers;

class Oferta extends BaseController
{
    public function ofertar()
    {
        return view('/ofertas/listado');
    }
}
