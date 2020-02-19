<?php

namespace App\Http\Controllers\test_Fukase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Site;

class DetailController extends Controller
{
    // 一覧画面
    public function detail(Request $request) 
    {
        $items = DB::select('select * from site where id=1');
        \Log::info('ログ出力テスト');
        logger($items);
        return view('fukase_test.detail', ['items'=>$items]);
    }
}
