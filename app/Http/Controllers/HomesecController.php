<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_request;
use App\Models\tb_sell;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
    //     $data = tb_request::orderBy('request_id', 'desc');
    //     $data2 = tb_sell::orderBy('sell_id', 'desc');
    //     return view('home')->with('data', $data)->with('data2', $data2);
    $data = tb_request::all();
    $data2 = tb_sell::all();
        return view('home', compact('data'), compact('data2'));
    }

}
