<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title class="display-4 font-weight-bold">TECHIFY</title>

    <style>
    .bg-cover {
        background-size: cover !important;
    }

    .carousel-caption {
        position: absolute;
        background: rgba(0, 0, 0, 0.4);

    }
    </style>
</head>

<body>
    <?php include 'partials/__header.php';?>
    <?php include 'partials/__conn.php';?>



    <?php

$id = $_GET['catid'];    
$sql = "SELECT * FROM `categories` WHERE category_id=$id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

    $cat_id = $row['category_id'];
    $cat_name = $row['category_name'];
    $cat_desc = $row['category_description'];
}

?>


    <!-- Page Content -->
    <div class="container py-5">
        <!-- Design inspired from https://www.hotjar.com/ -->
        <div class="jumbotron">
            <div class="container text-center text-lg-left">

                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="display-4">Welcome
                            <span class="highlight-word">to <?php echo $cat_name;?> forum</span>
                        </h1>
                        <p class="lead"><?php echo substr($cat_desc,0,100).'...';?></p>
                        <span class="text-center d-inline-block">
                            <a class="btn btn-primary btn-lg w-100" href="#" role="button">Learn more</a>
                            <p class="text-muted">terms & Condition</p>
                        </span>

                    </div>
                    <div class="col-lg-4 align-items-center d-flex">
                        <img src="https://source.unsplash.com/700x400/?javascript,code" alt="" class="img-fluid">
                    </div>
                </div>


            </div>
        </div>

        <!-- Page Heading -->
        <h2 class="my-4 pb-4">Browse
            <small>Questions</small>
        </h2>


        <ul class="list-unstyled">


            <?php
    
            
    $id = $_GET['catid'];    
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){

        $thread_title = $row["thread_title"];
        $thread_desc = $row["thread_desc"];
        $thread_id = $row["thread_id"];

        echo '
        <li class="media">
          <img src="https://source.unsplash.com/64x64/?avatar" class="mr-3" alt="...">
          <div class="media-body">
            <h5 class="mt-0 mb-1"><a href="thread.php?threadid='. $thread_id .'">'.$thread_title.'</a></h5>
            <p>'.$thread_desc.'</p>
          </div>
        </li>';
    }
    
    
    ?>
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