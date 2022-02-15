<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
include "Layout/header.php";
include "utils/products.php";
include "utils/connect_db.php";
$connect_db = connectDB();

?>
<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/media/images/slider/pizza.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/media/images/slider/pasta.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/media/images/slider/umlet.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Popular Products -->
<div class="container-fluid">
    <section class="pizza-category bg-danger my-4 rounded-3">
        <h4 class="bg-dark text-white p-3 rounded-top">Newest Pizza</h4>
        <?php
            $list = getProductFromDB(1, $connect_db);
            echo createListCard($list);
        ?>
    </section>

    <section class="pizza-category bg-danger my-4 rounded-3">
        <h4 class="bg-dark text-white p-3 rounded-top">Newest Sandwich</h4>
        <?php
        $list = getProductFromDB(2, $connect_db);
        echo createListCard($list);
        ?>
    </section>
    <section class="pizza-category bg-danger my-4 rounded-3">
        <h4 class="bg-dark text-white p-3 rounded-top">Newest Hamberger</h4>
        <?php
        $list = getProductFromDB(3, $connect_db);
        echo createListCard($list);
        ?>
    </section>
</div>


</main>


<?php
include "Layout/footer.php"
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
</body>
</html>