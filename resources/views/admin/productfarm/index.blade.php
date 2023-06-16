@extends('layout.backend.admin')

@section('content')
    <div class="card">

        <div class="card-header ">
            <h3>Daftar Daging</h3>
            <a href="{{ route('productfarm.create') }}" class="btn btn-primary">Tambah Data</a>
        </div> 

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Daging</th>
                            <th>Gambar Daging</th>
                            <th>Harga Daging</th>
                            <th>Model Daging</th>
                            <th>Status Daging</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($productfarm as $productfarm)
                            <tr>
                                <td> {{ $loop -> iteration}} </td>
                                <td> {{ $productfarm -> nama_produk}}</td>
                                <td>
                                    <img src="{{ Storage::url($productfarm->gambar_produk) }}" width="200">
                                </td>
                                <td> {{ $productfarm->harga_produk}}</td>
                                <td> {{ $productfarm->jenis_potong}}</td>
                                <td> {{ $productfarm->status}}</td>
                                <td>
                                    {{-- EDIT SIMBOL --}}
                                    <a href="{{ route('productfarm.edit', $productfarm->id) }}" class="btn btm-sm btn-warning">Edit</a>

                                    {{-- DELETE SIMBOL --}}
                                    <form onclick="return confirm('anda yakin data di hapus?') " class="d-inline" action="{{ route ('productfarm.destroy', $productfarm->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>    
                                    </form>

                                    {{-- {{ route('admin.productfarm.edit', $dataDaging->id) }} --}}
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection