<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Data;

class ListController extends Controller
{
    // 一覧画面
    public function list(Request $request) 
    {
        $items = Data::all();
        return view('fukase_test.list', ['items'=>$items]);
    }
    
}
