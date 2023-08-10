<?php
echo $this->extend('index');
echo $this->section('content');
?>


<div class="container ">
    <label class="fs-1">Listado de categorias</label>
<br><br>
<a href="<?php echo base_url()?>/categorias/registrar" type="button" class="btn btn-success">Añadir</a>
<br><br>
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($data as $i): ?>
            <tr>
                <th scope="row">
                <?php echo $i['id_categoria'] ?>
                </th>
                <th>
                <?php echo $i['nom_categoria'] ?>
                </th>
                <th>
                <?php echo $i['desc_categoria'] ?>
                </th>
                <th>
                    <a href="#" type="button" class="btn btn-info">Editar</a>
                    <a href="#" type="button" class="btn btn-warning">Ver</a>
                    <a href="#" type="button" class="btn btn-danger">Eliminar</a>
                </th>
        
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

</div>




<?php echo $this->endSection('content'); ?>