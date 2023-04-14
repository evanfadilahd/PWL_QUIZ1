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
        return view('tb_request.create');
    }

    public function store(Request $request)
    {
        Session::flash('request_username', $request->request_username);
        Session::flash('request_goods', $request->request_goods);
        Session::flash('request_desc', $request->request_desc);
        Session::flash('created_at', $request->created_at);
        Session::flash('updated_at', $request->updated_at);
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
        $data = [
            'request_username'=>$request->request_username,
            'request_goods'=>$request->request_goods,
            'request_desc'=>$request->request_desc,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
        ];
        tb_request::create($data);
        return redirect('facilitate.facilitate')->with('success','Berhasil menambahkan data');
    }

}
