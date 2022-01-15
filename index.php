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

           



    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
                  <img src="assets/media/images/logo.PNG" alt="logo Hana fast food " >
                  <h3 class="mt-3">Hana</h3>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                    role="button" data-bs-toggle="dropdown" 
                    aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Pizza</a></li>
                      <li><a class="dropdown-item" href="#">Sandwich</a></li>
                      <li><a class="dropdown-item" href="#">Hamberger</a></li>
                      <li><hr class="dropdown-divider"></li>
    
                      <li><a class="dropdown-item" href="#">frise</a></li>
                      <li><a class="dropdown-item" href="#">Salad</a></li>
                      <li><hr class="dropdown-divider"></li>
    
                      <li><a class="dropdown-item" href="#">Cola</a></li>
                      <li><a class="dropdown-item" href="#">Cola</a></li>
                    </ul>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
        </nav>
    </header>

        <!-- Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


        <!-- Popular Products -->
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 my-5">
                <div class="col">
                  <div class="card h-100">
                    <img src="assets/media/images/pizza/800-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <button class="d-block m-auto btn btn-warning">Add to Cart</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="assets/media/images/pizza/chicken.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a short card.</p>
                    </div>
                    <div class="card-footer">
                        <button class="d-block m-auto btn btn-warning">Add to Cart</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="assets/media/images/pizza/vegetable.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <button class="d-block m-auto btn btn-warning">Add to Cart</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="assets/media/images/pizza/meet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <button class="d-block m-auto btn btn-warning">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>


    </main>

 <div class="bg-red h-25">
    <?php 

    echo "hello";

    ?> 
 </div>


    <footer class="bg-dark p-5">

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>