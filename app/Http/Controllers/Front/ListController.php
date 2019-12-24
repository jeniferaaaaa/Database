<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Site;

class ListController extends Controller
{
    // 一覧画面
    public function list(Request $request) 
    {
        $items = DB::select('select * from site where id=1');
        \Log::info('ログ出力テスト');
        logger($items);
        return view('fukase_test.list', ['items'=>$items]);
    }
    
}
