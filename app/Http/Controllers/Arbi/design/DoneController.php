<?php

namespace App\Http\Controllers\Arbi\design;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Arbi;
use App\Model\Site;
use Auth;

class DoneController extends Controller
{
    /**
     * セッションからデータを取得し
     * 管理者テーブルに紐付くサイトテーブルを更新する
     * 
     */
    public function __invoke (Request $request)
    {
        //セッションから申し込みデータ取得
        $layout = $request->session()->pull('layout');
        $color = $request->session()->pull('color');

        //サイトテーブルを更新
        $sites = Auth::user()->sites;
        foreach ($sites as $site){
            $site->layout = $layout;
            $site->color = $color;
            $site->save();
        }

        return view('arbi.design.done');

    }
}
