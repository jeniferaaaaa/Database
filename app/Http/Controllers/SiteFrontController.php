<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Data;

class SiteFrontController extends Controller
{
    // 一覧画面
    public function list(Request $request) 
    {
        $items = Data::all();
        return view('fukase_test.list', ['items'=>$items]);
    }
    
}
