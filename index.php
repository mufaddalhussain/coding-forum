<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title class="display-4 font-weight-bold">TECHIFY</title>

    <style>
    .bg-cover {
        background-size: cover !important;
    }

    .carousel-caption {
    position: absolute;
    background: rgba(0,0,0,0.4);
    
    }
    </style>
</head>

<body>
<!-- sliders starts here -->
    <div class="carousel slide" id="main-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
            <li data-target="#main-carousel" data-slide-to="3"></li>
        </ol><!-- /.carousel-indicators -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?code,javascript" alt="">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <span>
                        <h1 class="display-4 font-weight-bold">TECHIFY<i class="fa fa-code" aria-hidden="true"></i>
                    </span></h1>
                    <p class="font-italic ml-5">Get Connected</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?code,design" alt="">
                <div class=""></div>
                <div class="carousel-caption  d-flex h-100 align-items-center justify-content-center">
                    <span>
                        <h1 class="display-4 font-weight-bold">TECHIFY<i class="fa fa-code" aria-hidden="true"></i>
                    </span></h1>
                    <p class="font-italic ml-5">Get Connected</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?code,building" alt="">
                <div class="carousel-caption  d-flex h-100 align-items-center justify-content-center">
                    <span>
                        <h1 class="display-4 font-weight-bold">TECHIFY<i class="fa fa-code" aria-hidden="true"></i>
                    </span></h1>
                    <p class="font-italic ml-5">Get Connected</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?code,javascript" alt="" class="d-block w-100">
                <div class="carousel-caption  d-flex h-100 align-items-center justify-content-center">
                    <span>
                        <h1 class="display-4 font-weight-bold">TECHIFY<i class="fa fa-code" aria-hidden="true"></i>
                    </span></h1>
                    <p class="font-italic ml-5">Get Connected</p>
                </div>
            </div>
        </div><!-- /.carousel-inner -->

        <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only" aria-hidden="true">Prev</span>
        </a>
        <a href="#main-carousel" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only" aria-hidden="true">Next</span>
        </a>
    </div><!-- /.carousel -->
    <!-- /.container -->


    <?php include 'partials/__header.php';?>
    <?php include 'partials/__conn.php';?>

    <!-- Page Content -->
    <div class="container py-5">

        <!-- Page Heading -->
        <h1 class="my-4">Welcome to TECHIFY -
            <small>Tech Forums</small>
        </h1>
    <!-- cards sarts here -->
        <div class="row">

            <?php
            
                $sql = "SELECT * FROM `categories`";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){

                    $cat_id = $row['category_id'];
                    $cat_name = $row['category_name'];
                    $cat_desc = $row['category_description'];

                    echo ' <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://source.unsplash.com/700x400/?'.$cat_name.',coding"
                                alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="threadlist.php?catid=' . $cat_id . '">'.$cat_name.'</a>
                            </h4>
                            <p class="card-text">'.substr($cat_desc,0,150).'...</p>
                            <a href="threadlist.php?catid=' . $cat_id . '" class="btn btn-primary">view Threads</a>
                        </div>
                    </div>
                </div>';

                }
            
            ?>

        </div>
        <!-- /.row -->

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.container -->







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

</body>

</html>
