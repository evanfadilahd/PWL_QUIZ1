@extends('layout.backend.frontendSupplier')

@section('content')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">DAGING SHOP</h1>
            <p class="lead fw-normal text-white-50 mb-0">
            Daftarkan Produck daging anda
            </p>
            <h3></h3>
        </div>
        </div>
    </header>

    <body>
        <div class="card-body card-body-custom pt-15">
            <div class="card-header">
                Form Data Daging
            </div>
    
            <div class="card-body">
                {{-- ROUTE Action --}}
                <form action="{{ route('productfarm.storeAnother')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    {{-- INPUTING DATA --}}
                    <div class="from-group">
                        <label for="nama_produk">Name Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') }}">
                        <br>
                    </div>
                    
                    <div class="from-group">
                        <label for="harga_produk">Harga Produk</label>
                        <input type="number" name="harga_produk" class="form-control" value="{{ old('harga_produk') }}">
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="asal_produk">Asal Produk</label>
                        <input type="text" name="asal_produk" class="form-control" value="{{ old('asal_produk') }}">
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="produsen_produk">Produsen Produk</label>
                        <input type="text" name="produsen_produk" class="form-control" value="{{ old('produsen_produk') }}">
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="gambar_produk">Gambar Produk</label>
                        <input type="file" name="gambar_produk" class="form-control">
                        <br>
                    </div>
                    
    
                    <div class="from-group">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi_produk" class="form-control" cols="30" rows="5"></textarea>
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="tersedia">tersedia</option>
                            <option value="tidak tersedia">tidak tersedia</option>
                        </select>
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="jenis_potong">Jenis Potong</label>
                        <select name="jenis_potong" id="jenis_potong" class="form-control">
                            <option value="Besar">Besar</option>
                            <option value="Kecil">Kecil</option>
                            <option value="Fillet">Fillet</option>
                            <option value="Utuh">Utuh</option>
                        </select>
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="halal">Halal </label>
                        <select name="halal" id="halal" class="form-control">
                            <option value="1">Halal</option>
                            <option value="0">Haram</option>
                        </select>
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="rendah_lemak">Kadar Lemak</label>
                        <select name="rendah_lemak" id="rendah_lemak" class="form-control">
                            <option value="1">Tinggi</option>
                            <option value="0">Rendah</option>
                        </select>
                        <br>
                    </div>
    
                    <div class="from-group">
                        <label for="qty">Kualitas Daging</label>
                        <select name="qty" id="qty" class="form-control">
                            <option value="1">Bagus</option>
                            <option value="0">Kurang Bagus</option>
                        </select>
                        <br>
                    </div>
    
                    <div class="from-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
    
                </form>
            </div>
        </div>
    </body>

@endsection