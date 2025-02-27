<!-- include header /component/header.php link :css
require_once fonction -->


<?php
require_once("function/article-db.php");
$articles = getArticles();
include_once("component/header.php");

?>


<h1>Home</h1>

<!-- Caroussel -->

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/image/lolapalouza_2025.jpg" class="d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/assets/image/musillac_2025.jpg" class="d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/assets/image/Vieille_charue_2025.jpg" class="d-block w-50" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>









<?php
include_once("component/footer.php");
?>