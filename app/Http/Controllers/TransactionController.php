<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // $data = tb_request::orderBy('request_id', 'request_desc');
        // $data2 = tb_sell::orderBy('sell_id', 'sell_desc');
        return view('transaction.transaction');
    }

}
