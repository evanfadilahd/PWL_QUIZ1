<?php

namespace App\Http\Controllers;
use App\Models\tb_productfarms;
use App\Models\tb_supplier_location;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.suppliers.supplier');
    }

    public function jual(){
        return view('frontend.suppliers.jual');
    }

    public function location()
    {
        return view('frontend.suppliers.location');
    }

    public function gps()
    {
        $location = tb_location::latest()->get();
        return view('frontend.suppliers.gps');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $location = tb_supplier_location::latest()->get();

        // $location -> latlong            =  $request -> latlong;
        // $location -> nama_tempat        =  $request -> nama_tempat;
        // $location -> namapem_tempat     =  $request -> namapem_tempat;
        // $location -> kategori           =  $request -> kategori;
        // $location -> jalan_tempat       =  $request -> jalan_tempat;
        // $location -> asalkot            =  $request -> asalkot_tempat;
        // $location -> keterangan         = $request -> keterangan;

        // $location -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $tampil = mysqli_query($mysqli, "select * from lokasi"); //ambil data dari tabel lokasi
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
