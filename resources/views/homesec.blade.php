@extends('layout.layout')

@section('isi')

    <div data-aos="fade-up">

    <section style="height:100%">
    <div class="gradient-custom h-100">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div id="datatable">
                {{-- Request --}}
                <h2>Request List Table</h2><br>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th class="col-md-1">request_id</th>
                            <th class="col-md-2">request_username</th>
                            <th class="col-md-2">request_goods</th>
                            <th class="col-md-2">request_desc</th>
                            {{-- <th class="col-md-2">create_at</th>
                            <th class="col-md-1">updated_at</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td> {{ $item->request_id }} </td>
                            <td> {{ $item->request_username }} </td>
                            <td> {{ $item->request_goods }} </td>
                            <td> {{ $item->request_desc }} </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                </div>
                <!-- AKHIR DATA -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    
    <br><br><br>

    <section style="height:100%">
    <div class="gradient-custom h-100" style="">
        <div class="mask d-flex align-items-center h-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div id="datatable">
                    {{-- Sell --}}
                    <h2>Sell List Table</h2><br>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="col-md-1">sell_id</th>
                                <th class="col-md-1">sell_username</th>
                                <th class="col-md-2">sell_goods</th>
                                <th class="col-md-1">sell_stock</th>
                                <th class="col-md-1">sell_price</th>
                                <th class="col-md-2">sell_desc</th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($data2 as $item)
                            <tr>
                                <td> {{ $item->sell_id }} </td>
                                <td> {{ $item->sell_username }} </td>
                                <td> {{ $item->sell_goods }} </td>
                                <td> {{ $item->sell_stock }} </td>
                                <td> {{ $item->sell_price }} </td>
                                <td> {{ $item->sell_desc }} </td>

                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    </div>
                    <!-- AKHIR DATA -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <div style="height:160px;"></div>

    </div>

    

@endsection