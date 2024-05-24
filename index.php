<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>PJ Sistema de Segurança</title>
<body>


<?php
    include ("header.php");
    include ("navbar.php");
?>

<div class="container align-content-center">
    <h2 class="text-center text-light">Trabalhos Executados</h2>
    <div id="myCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="_imagem/instalacao-de-camera-I.png" class="d-block img-fluid mx-auto" alt="Trabalho 1">
            </div>
            <div class="carousel-item">
                <img src="_imagem/instalacao-de-camera-II.png" class="d-block img-fluid mx-auto" alt="Trabalho 2">
            </div>
            <div class="carousel-item">
                <img src="_imagem/instalacao-de-camera-III.png" class="d-block img- mx-auto" alt="Trabalho 3">
            </div>
            <div class="carousel-item">
                <img src="_imagem/instalacao-de-camera-IV.png" class="d-block img-fluid mx-auto" alt="Trabalho 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?php
    include ("footer.php")

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
