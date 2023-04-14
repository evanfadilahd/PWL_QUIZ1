@extends('layout.layout')

@section('isi')

    {{-- Request --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">request_id</th>
                <th class="col-md-2">request_username</th>
                <th class="col-md-2">request_goods</th>
                <th class="col-md-2">request_desc</th>
                <th class="col-md-2">create_at</th>
                <th class="col-md-1">updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td> {{ $item->request_id }} </td>
                <td> {{ $item->request_username }} </td>
                <td> {{ $item->request_goods }} </td>
                <td> {{ $item->request_desc }} </td>
                <td> {{ $item->create_at }} </td>
                <td> {{ $item->updated_at }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- AKHIR DATA -->

    
    {{-- Sell --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">sell_id</th>
                <th class="col-md-1">sell_username</th>
                <th class="col-md-1">sell_goods</th>
                <th class="col-md-1">sell_stock</th>
                <th class="col-md-1">sell_price</th>
                <th class="col-md-1">sell_desc</th>
                <th class="col-md-1">create_at</th>
                <th class="col-md-1">updated_at</th>
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
                <td> {{ $item->create_at }} </td>
                <td> {{ $item->updated_at }} </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- AKHIR DATA -->

@endsection