<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="public/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>Billboard || Farm System Information</title>

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
            <div style="height:280px;">
                <div class="row">

                    <div class="col" style="text-align:center;">
                        <h1>Request Products or Items</h1>
                    </div>

                    <div class="col" style="text-align:center;">
                        <h1>Sell Products or Items</h1>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col">

                        <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="height:80px; width:120px;">
                            <h4>Request</h4>
                        </button>
                        </div>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Request Items</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action='{{ url('facilitate') }}' method='post'>
                                        @csrf
                                        <div class="mb-3 mt-3">
                                            <label for="request_username" class="form-label">Username:</label>
                                            <input type="text" class="form-control" id="request_username" placeholder="Enter username" value="{{ Session::get('request_username') }}" name="request_username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="request_goods" class="form-label">Goods:</label>
                                            <input type="text" class="form-control" id="request_goods" placeholder="Enter goods" value="{{ Session::get('request_goods') }}" name="request_goods">
                                        </div>
                                        <div class="mb-3">
                                            <label for="request_desc" class="form-label">Description:</label>
                                            <input type="text" class="form-control" id="request_desc" placeholder="Enter desc" value="{{ Session::get('request_desc') }}" name="request_desc">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>

                </div>
                <div class="col">

                <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2" style="height:80px; width:120px;">
                            <h4>Sell</h4>
                        </button>
                        </div>

                        <!-- The Modal -->
                        <div class="modal" id="myModal2">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Sell Items</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action='{{ url('facilitate') }}'>
                                        <div class="mb-3 mt-3">
                                            <label for="s_username" class="form-label">Username:</label>
                                            <input type="s_username" class="form-control" id="s_username" placeholder="Enter username" name="username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="s_goods" class="form-label">Goods:</label>
                                            <input type="s_goods" class="form-control" id="s_goods" placeholder="Enter goods" name="goods">
                                        </div>
                                        <div class="mb-3">
                                            <label for="s_stock" class="form-label">Stock:</label>
                                            <input type="s_stock" class="form-control" id="s_stock" placeholder="Enter stock" name="stock">
                                        </div>
                                        <div class="mb-3">
                                            <label for="s_price" class="form-label">Price:</label>
                                            <input type="s_price" class="form-control" id="s_price" placeholder="Enter price" name="price">
                                        </div>
                                        <div class="mb-3">
                                            <label for="s_description" class="form-label">Description:</label>
                                            <input type="s_description" class="form-control" id="s_description" placeholder="Enter description" name="description">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </section>
    </body>

</html>