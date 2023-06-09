@extends('layout.backend.frontendSupplier')

@section('content')

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">DAGING SHOP</h1>
            <p class="lead fw-normal text-white-50 mb-0">
            Daftarkan Lokasi Peternakan Anda
            </p>
            <h3>    </h3>
            <a href="#" class="btn btn-primary">Daftar</a>
            {{-- {{ url('suppliers/jual/createAnother') }} --}}
        </div>
        </div>
    </header>

@endsection