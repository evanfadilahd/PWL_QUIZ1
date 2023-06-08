@extends('layout.backend.admin')

@section('content')
<div class="row">

    {{-- DATA EDIT --}}
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Form Edit Data
            </div>

            <div class="card-body">
                {{-- ROUTE --}}
                <form action="{{ route('productfarm.update', $productfarm->id) }}" method="post" enctype="multipart/form-data" >
    
                    @csrf
                    @method('put')
    
                    <div class="from-group">
                        <label for="nama_produk">Name Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk', $productfarm->nama_produk) }}">
                    </div>
                    
                    <div class="from-group">
                        <label for="harga_produk">Harga Produk</label>
                        <input type="number" name="harga_produk" class="form-control" value="{{ old('harga_produk', $productfarm->harga_produk) }}">
                    </div>
    
                    <div class="from-group">
                        <label for="asal_produk">Asal Produk</label>
                        <input type="text" name="asal_produk" class="form-control" value="{{ old('asal_produk', $productfarm->asal_produk) }}">
                    </div>
    
                    <div class="from-group">
                        <label for="produsen_produk">Produsen Produk</label>
                        <input type="text" name="produsen_produk" class="form-control" value="{{ old('produsen_produk', $productfarm->produsen_produk) }}">
                    </div>
    
                    <div class="from-group">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi_produk" class="form-control" cols="30" rows="5"> {{ old('deskripsi_produk', $productfarm->deskripsi_produk) }}</textarea>
                    </div>
    
                    <div class="from-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option {{ $productfarm->status == 'tersedia' ? 'selected' : null}} value="tersedia">tersedia</option>
                            <option {{ $productfarm->status == 'tidak tersedia' ? 'selected' : null}} value="tidak tersedia">tidak tersedia</option>
                        </select>
                    </div>
    
                    <div class="from-group">
                        <label for="jenis_potong">Jenis Potong</label>
                        <select name="jenis_potong" id="jenis_potong" class="form-control">
                            <option {{ $productfarm->jenis_potong == 'Besar' ? 'selected' : null}} value="Besar">Besar</option>
                            <option {{ $productfarm->jenis_potong == 'Kecil' ? 'selected' : null}} value="Kecil">Kecil</option>
                            <option {{ $productfarm->jenis_potong == 'Fillet' ? 'selected' : null}} value="Fillet">Fillet</option>
                            <option {{ $productfarm->jenis_potong == 'Utuh' ? 'selected' : null}} value="Utuh">Utuh</option>
                        </select>
                    </div>
    
                    <div class="from-group">
                        <label for="halal">Halal </label>
                        <select name="halal" id="halal" class="form-control">
                            <option {{ $productfarm->halal == '1' ? 'selected' : null}} value="1">Halal</option>
                            <option {{ $productfarm->halal == '0' ? 'selected' : null}} value="0">Haram</option>
                        </select>
                    </div>
    
                    <div class="from-group">
                        <label for="rendah_lemak">Kadar Lemak</label>
                        <select name="rendah_lemak" id="rendah_lemak" class="form-control">
                            <option {{ $productfarm->rendah_lemak == '1' ? 'selected' : null}} value="1">Tinggi</option>
                            <option {{ $productfarm->rendah_lemak == '0' ? 'selected' : null}} value="0">Rendah</option>
                        </select>
                    </div>
    
                    <div class="from-group">
                        <label for="qty">Kualitas Daging</label>
                        <select name="qty" id="qty" class="form-control">
                            <option {{ $productfarm->qty == '1' ? 'selected' : null}} value="1">Bagus</option>
                            <option {{ $productfarm->qty == '0' ? 'selected' : null}} value="0">Kurang Bagus</option>
                        </select>
                    </div>
    
                    <div class="from-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    {{-- GAMBAR --}}
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                Form Edit Gambar
            </div>
            <div class="card-body">
                {{-- ROUTE --}}
                <form action="{{ route('admin.productfarm.updateImage', $productfarm->id) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <img src="{{ Storage::url($productfarm->gambar_produk) }}" width="200" class="image-fluid" alt="" >
                    </div>

                    <div class="form-group">
                        <label for="gambar_produk">Gambar</label>
                        <input type="file" name="gambar_produk" class="form-control">
                    </div>
            
                    <div class="from-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
@endsection