<?php echo $this->extend('index'); 
echo $this->section('content'); ?>

<div class="container text-center">
    <div id="carouselExample" class="carousel slide m-3">
    <div class="carousel-inner" >
        <div class="carousel-item active">
        <img src="https://cdn.pixabay.com/photo/2023/06/18/18/05/rose-8072535_1280.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2023/06/28/21/48/dragonfly-8095243_1280.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2023/05/21/01/08/flowers-8007614_1280.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>

<?php echo $this->endSection();?>