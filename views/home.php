<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Document</title>
</head>

<body>


    <!-- carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/newspaper-g7efb334a0_640.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/businessman-g04317133a_640.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/scroll-g51098b7fc_640.jpg" class="d-block w-100" alt="...">
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


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../assets/img/news-paper.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pixels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controllers/parameters.controller.php"><img src="../assets/img/adjust.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row actus my-1 ">

            <div class="actus-img col-4"><img src="../assets/img/news-paper.png" alt=""></div>
            <div class="actus-article col-8">
                <h3>titre</h3>
                Lorem ipsum dolor sit, amet consectetur
            </div>
        </div>
        <div class="row culture my-1 ">

            <div class="culture-img col-4"><img src="../assets/img/news-paper.png" alt=""></div>
            <div class="culture-article col-8">
                <h3>titre</h3>
                Lorem ipsum dolor sit, amet consectetur
            </div>
        </div>
        <div class="row pixels my-1 ">

            <div class="pixels-img col-4 "><img src="../assets/img/news-paper.png" alt=""></div>
            <div class="pixels-article col-8">
                <h3>titre</h3>
                Lorem ipsum dolor sit, amet consectetur
            </div>
        </div>
    </div>
    <footer>

<div class="row">
    <div class="col-12">
        <div class="footer text-center ">
            <p>© 2023 </p>
        </div>
    </div>
</div>

</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>