<?php
echo $this->extend('index');
echo $this->section('content');

?>



<div class="container text-center">
    <label class="fs-1">Formulario categorias</label>
</div>
<div  class="container-fluid mt-4">
    <form method="POST" action="<?php echo base_url()?>categorias/registrar">
        <div class="row g-3">
            <div class="col">
                <input type="text" id="nombre_cat" name="nombre_cat" class="form-control" placeholder="Nombre" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" id="desc_cat" name="desc_cat" class="form-control" placeholder="Descripcion" aria-label="Last name">
            </div>
        </div>
        <button class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>









<?php echo $this->endSection('content'); ?>