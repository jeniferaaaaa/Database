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
     * ログインしていないユーザを弾く初期化処理
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * セッションからデータを取得し
     * 管理者テーブルとサ管理者に紐付くサイトテーブルを更新する
     * 
     */
    public function index (Request $request)
    {
        //セッションから申し込みデータ取得
        $layout = $request->session()->get('layout');
        $color = $request->session()->get('color');

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
