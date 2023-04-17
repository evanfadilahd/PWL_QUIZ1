<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="public/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>Farm System Information</title>

        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script type="text/javascript" src="/js/app.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
 
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <!--BootStrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">

        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

          <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link href="assets/css/style.css" rel="stylesheet">

        <style>
        .hero {
            background-image: url("assets/img/hero-bg.jpg");
          }
        </style>
        
    </head>

    <body class="antialiased" style="color: #444444;">
        
        <section>
        <header class="container-fluid p-3 " style="height:240px;" id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
            <div class="navbar navbar-expand-lg navbar-primary shadow-lg fixed-top">
                <div class="row">
                    <div class="col-sm-4" style="border-width:2px">
                        <a href="home" class="nav-link">
                            <h2 style=" text-align:left; margin-left:20px;"> Integrated Farm Information System</h2>
                        </a>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col">
                                <a href='{{ url('home') }}' class="nav-link">
                                    <svg class="bi me-2" width="32" height="16"><use xlink:href="#home"></use></svg>
                                    Home
                                </a><hr>
                            </div>
                            <div class="col">
                                <a href='{{ url('location') }}' class="nav-link">
                                    <svg class="bi me-2" width="32" height="16"><use xlink:href="#products"></use></svg>
                                    Location
                                </a><hr>
                            </div>
                            <div class="col">
                                <a href='{{ url('transaction') }}' class="nav-link">
                                <svg class="bi me-2" width="32" height="16"><use xlink:href="#logout"></use></svg>
                                    Transaction
                                </a><hr>
                            </div>
                            <div class="col">
                                <a href='{{ url('facilitate') }}' class="nav-link">
                                    <svg class="bi me-2" width="32" height="16"><use xlink:href="#cart"></use></svg>
                                    Facilitate
                                </a><hr>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        </div>

        <section>
            
            @yield('isi')
        </section>

    </section>

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>


    </body>

</html>