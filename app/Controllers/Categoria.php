<?php

namespace App\Controllers;
use App\Models\CategoryModel; //se debe importar primero el modelo para usarse

class Categoria extends BaseController
{
    public function index()
    {
       $category = new CategoryModel();
       $data = $category->findAll();
       $data =['data' => $data];
       return view('categorias/listado', $data);
       
    }


    public function form_registrar()
    {
        return view('categorias/form_registro');
    }

    public function registrar()
    {
        $category = new CategoryModel();
        $data = [
            'nom_categoria'=> $this->request->getPost('nombre_cat'),
            'desc_categoria'=> $this->request->getPost('desc_cat')
        ];
        $category ->insert($data);

        return redirect()->to(base_url().'categorias');
    }
}
