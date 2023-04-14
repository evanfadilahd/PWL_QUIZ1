<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="public/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>Home || Farm System Information</title>

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
        
    </head>

    <body class="antialiased">

        <header class="container-fluid p-3 " style="height:320px;">
            <div class="navbar navbar-expand-lg navbar-primary bg-success shadow-lg fixed-top">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="home" class="nav-link text-light">
                            <h2 style=" text-align:left; margin-left:20px;"> Integrated Farm Information System</h2>
                        </a>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col">
                                <a href='{{ url('home') }}' class="nav-link text-light">
                                    <svg class="bi me-2" width="32" height="16"><use xlink:href="#home"></use></svg>
                                    Home
                                </a><hr>
                            </div>
                            <div class="col">
                                <a href='{{ url('location') }}' class="nav-link text-light">
                                    <svg class="bi me-2" width="32" height="16"><use xlink:href="#products"></use></svg>
                                    Location
                                </a><hr>
                            </div>
                            <div class="col">
                                <a href='{{ url('transaction') }}' class="nav-link text-light">
                                <svg class="bi me-2" width="32" height="16"><use xlink:href="#logout"></use></svg>
                                    Transaction
                                </a><hr>
                            </div>
                            <div class="col">
                                <a href='{{ url('facilitate') }}' class="nav-link text-light">
                                    <svg class="bi me-2" width="32" height="16"><use xlink:href="#cart"></use></svg>
                                    Facilitate
                                </a><hr>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        
        <section>
            
        </section>
    </body>

</html>