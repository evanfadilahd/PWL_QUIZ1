@extends('layout.layout')

@section('isi')
        
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
                            <form action='{{ url('facilitate') }}' method='post'>
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label for="sell_username" class="form-label">Username:</label>
                                    <input type="text" class="form-control" id="sell_username" placeholder="Enter username" value="{{ Session::get('sell_username') }}" name="sell_username">
                                </div>
                                <div class="mb-3">
                                    <label for="sell_goods" class="form-label">Goods:</label>
                                    <input type="text" class="form-control" id="sell_goods" placeholder="Enter goods" value="{{ Session::get('sell_goods') }}" name="sell_goods">
                                </div>
                                <div class="mb-3">
                                    <label for="sell_stock" class="form-label">Stock:</label>
                                    <input type="number" class="form-control" id="sell_stock" placeholder="Enter stock" value="{{ Session::get('sell_stock') }}" name="sell_stock">
                                </div>
                                <div class="mb-3">
                                    <label for="sell_price" class="form-label">Price:</label>
                                    <input type="number" class="form-control" id="sell_price" placeholder="Enter price" value="{{ Session::get('sell_price') }}" name="sell_price">
                                </div>
                                <div class="mb-3">
                                    <label for="sell_desc" class="form-label">Description:</label>
                                    <input type="text" class="form-control" id="sell_desc" placeholder="Enter desc" value="{{ Session::get('sell_desc') }}" name="sell_desc">
                                </div>
                                <button type="submit" class="btn btn-primary" id="submit2">Submit</button>
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

    <div style="height:160px;"></div>

    </div>

@endsection