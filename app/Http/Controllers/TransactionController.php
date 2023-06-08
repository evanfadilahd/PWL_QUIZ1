<?php

namespace App\Http\Controllers;

use App\Models\tb_productfarms;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // $data = tb_request::orderBy('request_id', 'request_desc');
        // $data2 = tb_sell::orderBy('sell_id', 'sell_desc');
        // return view('transaction.transaction');
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
