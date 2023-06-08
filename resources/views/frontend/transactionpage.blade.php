@extends('layout.backend.frontend')

@section('content')

  {{-- HEADER --}}
    <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">DAGING SHOP</h1>
          <p class="lead fw-normal text-white-50 mb-0">
            hanya dengan satu sentuhan
          </p>
        </div>
      </div>
    </header>

    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mb-5">Daftar Daging</h3>
        <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >

          @foreach ($productfarm as $productfarm)
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Sale badge-->
                <div
                  class="badge badge-custom {{ $productfarm->status == 'tersedia' ? 'bg-success' : 'bg-warning' }}  text-white position-absolute"
                  style="top: 0; right: 0"
                >
                  {{ $productfarm->status }}
                </div>
                <!-- Product image-->
                <img
                  class="card-img-top"
                  src="{{ Storage::url($productfarm->gambar_produk) }}"
                  alt="{{ $productfarm->nama_produk}}"
                />
                <!-- Product details-->
                <div class="card-body card-body-custom pt-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">{{ $productfarm->nama_produk }}</h5>
                    <!-- Product price-->
                    <div class="rent-price mb-3">
                      <span class="text-primary">Rp. {{ number_format ($productfarm->harga_produk) }}/</span>Kg
                    </div>
                    <ul class="list-unstyled list-style-group">
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Asal</span>
                        <span style="font-weight: 600">{{ $productfarm->asal_produk }}</span>
                      </li>
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Produsen</span>
                        <span style="font-weight: 600">{{ $productfarm->produsen_produk}}</span>
                      </li>
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Jenis Potong</span>
                        <span style="font-weight: 600">{{ $productfarm->jenis_potong}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer border-top-0 bg-transparent">
                  <div class="text-center">
                    {{-- BELI --}}
                    <a class="btn btn-primary mt-auto" href="#">Beli</a>
                    {{-- DETAIL --}}
                    <a
                      class="btn btn-info mt-auto text-white"
                      href="{{ url('transaction/detail/'. $productfarm->id) }}"
                      >Detail</a
                    >
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </section>

@endsection