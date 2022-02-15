<!doctype html>
<html lang="en">
<head>
    <title>About Us </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
include "Layout/header.php"
?>
<div class="container bg-white">
    <h1 class="text-center p-3">What is in my fridge?</h1>
    <div class="row row-cols-2">
        <div class="col">
            <img src="assets/media/images/About-picture.JPG" alt=""/>
        </div>
        <div class="col">
            <h4>Find recipes using what you have</h4>
            <p class="w-75">
                Find recipes that use as many of the
                ingredients you have available as
                possible while limiting missing
                ingredients.
            </p>
            <div class="d-flex flex-column ">
                <img src="assets/media/images/Food.png" alt="" class="w-50 m-auto rounded-top"/>
                <div class="w-50 bg-primary text-white text-center m-auto p-3 rounded-bottom">Cheesy Salami</div>
            </div>
        </div>
    </div>
</div>
<?php
include "Layout/footer.php"
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
