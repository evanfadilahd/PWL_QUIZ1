<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_productfarms;

class CostumerController extends Controller
{
    public function index()
    {
        $productfarm = tb_productfarms::latest()->get();

        return view('frontend.transactionpage', compact('productfarm'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function detail(tb_productfarms $productfarm)
    {
        return view('frontend.detail', compact('productfarm'));
    }

}
