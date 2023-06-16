<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_supplier_location;    

class SupplierLocationController extends Controller
{
    public function index()
    {
        $locations = tb_supplier_location::all();

        return view('suppliers.', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $location = tb_supplier_location::create($request->all());

        return redirect()->route('suppliers.index');
    }
}
