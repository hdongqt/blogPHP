<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bờ Lóc</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../public/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="./mvc/Views/web/assets/css/styles.css">
        <base href="http://localhost:8088/blog/">
    </head>
    <body>
        <!-- Responsive navbar-->
  <?php
    include_once "./mvc/Views/web/block/header.php";
  ?>
        <!-- Page content-->
        <div class="container">
           <div class="main" style="margin-top:20px">
           <div class="row">
                <!-- Blog entries-->
                <?php 
                    include_once "./mvc/Views/web/page/".$data['page'].".php";
                ?>
                <!-- Side widgets-->
                <div class="col-lg-4">
                <?php
                    include_once "./mvc/Views/web/block/category.php";
                    include_once "./mvc/Views/web/block/tag.php";
                ?>
                </div>
            </div>
           </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
