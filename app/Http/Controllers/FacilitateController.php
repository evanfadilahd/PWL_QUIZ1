<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_request;
use App\Models\tb_sell;
use Illuminate\Support\Facades\Session;

class FacilitateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = tb_request::orderBy('request_id', 'desc');
        $data2 = tb_sell::orderBy('sell_id', 'desc');
        return view('facilitate.facilitate');
    }

    public function create()
    {
            return view('tb_request.create').view('tb_sell.create');
    }

    public function store(Request $request)
    {
        Session::flash('request_username', $request->request_username);
        Session::flash('request_goods', $request->request_goods);
        Session::flash('request_desc', $request->request_desc);

        Session::flash('sell_username', $request->sell_username);
        Session::flash('sell_goods', $request->sell_goods);
        Session::flash('sell_stock', $request->sell_stock);
        Session::flash('sell_price', $request->sell_price);
        Session::flash('sell_desc', $request->sell_desc);
        // $request->validate([
        //     'kode_barang'=>'required|unique:goods,kode_barang',
        //     'nama_barang'=>'required',
        //     'kategori_barang'=>'required',
        //     'harga'=>'required|numeric',
        //     'qty'=>'required|numeric',
        // ],[
        //     'kode_barang.required'=>'kode_barang wajib diisi',
        //     'kode_barang.unique'=>'kode_barang wajib diisi',
        //     'nama_barang.required'=>'nama_barang yang diisikan sudah ada dalam database',
        //     'kategori_barang.required'=>'kategori_barang wajib diisi',
        //     'harga.required'=>'harga wajib diisi',
        //     'harga.numeric'=>'harga wajib dalam angka',
        //     'qty.required'=>'qty wajib diisi',
        //     'qty.numeric'=>'qty wajib dalam angka',
        // ]);

        $datas = [$request->submit2];
        
        if($datas == null){
            $data = [
                'request_username'=>$request->request_username,
                'request_goods'=>$request->request_goods,
                'request_desc'=>$request->request_desc,
            ];
    
            tb_request::create($data);
        }
        if($datas != null){
            $data2 = [
                'sell_username'=>$request->sell_username,
                'sell_goods'=>$request->sell_goods,
                'sell_stock'=>$request->sell_stock,
                'sell_price'=>$request->sell_price,
                'sell_desc'=>$request->sell_desc,
            ];
            tb_sell::create($data2);
        }
        
        return redirect('facilitate')->with('success','Berhasil menambahkan data');
    }

}
