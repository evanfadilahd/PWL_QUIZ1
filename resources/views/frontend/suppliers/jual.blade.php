@extends('layout.backend.frontendSupplier')

@section('content')

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">DAGING SHOP</h1>
            <p class="lead fw-normal text-white-50 mb-0">
            Daftarkan Produck daging anda
            </p>
            <h3>    </h3>
            <a href="{{ url('suppliers/jual/createAnother') }}" class="btn btn-primary">Jual Product kalian</a>
        </div>
        </div>
    </header>


@endsection