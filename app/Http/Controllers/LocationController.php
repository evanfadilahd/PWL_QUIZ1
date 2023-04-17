<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_butchery;
use App\Models\tb_land;

class LocationController extends Controller
{
    public function index()
    {
        // $data = tb_request::orderBy('request_id', 'request_desc');
        // $data2 = tb_sell::orderBy('sell_id', 'sell_desc');
        return view('location.location');
    }

    public function butchery()
    {
    //     $data = tb_request::orderBy('request_id', 'desc');
    //     $data2 = tb_sell::orderBy('sell_id', 'desc');
    //     return view('home')->with('data', $data)->with('data2', $data2);
    $data = tb_butchery::all();
        return view('location.butchery-detail', compact('data'));
    }

    public function land()
    {
    //     $data = tb_request::orderBy('request_id', 'desc');
    //     $data2 = tb_sell::orderBy('sell_id', 'desc');
    //     return view('home')->with('data', $data)->with('data2', $data2);
    $data = tb_land::all();
        return view('location.land-detail', compact('data'));
    }


}

