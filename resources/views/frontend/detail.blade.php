@extends('layout.backend.frontend')

@section('content')

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
          <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Detail Product</h1>
          </div>
        </div>
      </header>

      <!-- Section-->
      <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
          <div class="row justify-content-center">
            <div class="col-lg-8 mb-5">
              <div class="card h-100">
                <!-- Product image-->
                <img
                  class="card-img-top"
                  src="{{ Storage::url($productfarm->gambar_produk) }}"
                  alt="{{ $productfarm->nama_produk }}"
                />
                <!-- Product details-->
                <div class="card-body card-body-custom pt-4">
                  <div>
                    <!-- Product name-->
                    <h3 class="fw-bolder text-primary">Deskripsi</h3>
                    <p>
                      {{ $productfarm->deskripsi_produk }}
                    </p>
                    <div class="mobil-info-list border-top pt-4">
                      <ul class="list-unstyled">

                        <li>
                          @if ($productfarm->halal)
                            <i class="ri-checkbox-circle-line"></i>
                            <span>Halal</span>
                          @else
                            <i class="ri-close-circle-line text-secondary"></i>
                            <span>Halal</span>
                          @endif
                        </li>

                        <li>
                          @if ($productfarm->redah_lemak)
                            <i class="ri-checkbox-circle-line"></i>
                            <span>Lemak Rendah</span>
                          @else
                            <i class="ri-close-circle-line text-secondary"></i>
                            <span>Lemak Rendah</span>
                          @endif
                        </li>

                        <li>
                          @if ($productfarm->qty)
                            <i class="ri-checkbox-circle-line"></i>
                            <span>Kualitas Bagus</span>
                          @else
                            <i class="ri-close-circle-line text-secondary"></i>
                            <span>Kualitas Bagus</span>
                          @endif
                        </li>

                        <li>
                          <i class="ri-checkbox-circle-line"></i>
                          <span>{{ $productfarm->jenis_potong }}</span>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-5">
              <div class="card">
                <!-- Product details-->
                <div class="card-body card-body-custom pt-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <h5 class="fw-bolder">{{ $productfarm->nama_produk }}</h5>
                      <div class="rent-price mb-3">
                        <span style="font-size: 1rem" class="text-primary"
                          >{{ $productfarm->harga_produk }}/</span
                        >Kg
                      </div>
                    </div>
                    <ul class="list-unstyled list-style-group">
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Potongan</span>
                        <span style="font-weight: 600">{{ $productfarm->jenis_potong }}</span>
                      </li>
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Asal Produk</span>
                        <span style="font-weight: 600">{{ $productfarm->asal_produk }}</span>
                      </li>
                      <li
                        class="border-bottom p-2 d-flex justify-content-between"
                      >
                        <span>Produsen</span>
                        <span style="font-weight: 600">{{ $productfarm->produsen_produk }}</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer border-top-0 bg-transparent">
                  <div class="text-center">
                    <a
                      class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                      href="https://wa.me/6281355538777?text=Saya%20tertarik%20untuk%20membeli%20produk%20%20sale"
                      style="column-gap: 0.4rem"
                      >Beli Product<i class="ri-whatsapp-line"></i
                    ></a>
                      <br>
                    {{-- SimbolRATING DISINI --}}
                    <a
                      class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                      href="#"
                      style="column-gap: 0.4rem"
                      >Rating Product<i class="ri-whatsapp-line"></i
                    ></a>
                  </div>
                </div>

                {{-- Rating --}}
                <div class="average-rating">
                  @if ($averageRating !== null)
                      @for ($i = 1; $i <= 5; $i++)
                          @if ($i <= $averageRating)
                              <span class="star filled"></span>
                          @else
                              <span class="star"></span>
                          @endif
                      @endfor
                  @else
                      No ratings available.
                  @endif
              </div>

              </div>
            </div>
          </div>
        </div>
      </section>
    
@endsection