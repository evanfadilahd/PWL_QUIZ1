<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_productfarms;
use App\Http\Requests\Admin\ProductFarmStoreRequest;
use illuminate\Support\Str;
use App\Http\Requests\Admin\ProductFarmUpdateRequest;


// use App\Http\Requests\Admin\ProdukFarmStoreRequest;
// use illuminate\Support\Str;
// use App\Http\Requests\Admin\ProdukFarmUpdateRequest;

class ProductFarmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productfarm = tb_productfarms::latest()->get();

        return view('admin.productfarm.index', compact('productfarm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productfarm.create');
    }

    public function createAnother(){
        return view('frontend.suppliers.createAnother');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFarmStoreRequest $request)
    {
        if ($request->validated()){
            $gambar_produk = $request->file('gambar_produk')->store('gambar/productfarm', 'public');

            //Kurang tau
            $slug = Str::slug($request->nama_produk, '-');

            // MASIH EROR
            tb_productfarms::create($request->except('gambar_produk') + ['gambar_produk' => $gambar_produk, 'slug' => $slug]);
        }

        return redirect()->route('productfarm.index')->with([
            'massage' => 'data sukses input',
            'alert-type' => 'succes'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tb_productfarms $productfarm)
    {
        return view('admin.productfarm.edit', compact('productfarm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFarmUpdateRequest $request, tb_productfarms $productfarm)
    {
        $slug = Str::slug($request -> nama_produk, '-');

        if($request->validated()){
            $productfarm->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('productfarm.index')->with([
            'massage' => 'data berhasil di edit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tb_productfarms $productfarm)
    {
        if($productfarm -> gambar_product){
            unlink('storage/'. $productfarm->gambar_product);
        }

        $productfarm->delete();
         
        return redirect()->back()->with([
            'massage' => 'gambar berhasil dihapus ',
            'alert-type' => 'info'
        ]);
    }

    public function updateImage(Request $request, $productfarmId)
    {
        $productfarmImage = tb_productfarms::findOrFail($productfarmId);
        $request->validate([
            'gambar_produk' => 'required|image'
        ]);
        
        if($request->gambar_produk){
            unlink('storage/'.$productfarmImage->gambar_produk);

            $gambar_produk = $request->file('gambar_produk')->store('asset/gambar/productfarm', 'public');

            $productfarmImage-> update(['gambar_produk' => $gambar_produk]);
        }

        return redirect()->back()->with([
            'massage' => 'gambar berhasil diedit ',
            'alert-type' => 'info'
        ]);
    }


}
