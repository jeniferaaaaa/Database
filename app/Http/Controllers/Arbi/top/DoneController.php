<?php

namespace App\Http\Controllers\Arbi\top;

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
        $main_path = $request->session()->get('main');
        $sub_path1 = $request->session()->get('sub1');
        $sub_path2 = $request->session()->get('sub2');
        $sub_path3 = $request->session()->get('sub3');

        //サイトテーブルを更新
        $sites = Auth::user()->sites;
        foreach ($sites as $site){
            $site->main_path = $main_path;
            $site->sub_path1 = $sub_path1;
            $site->sub_path2 = $sub_path2;
            $site->sub_path3 = $sub_path3;
            $site->save();
        }

        return view('arbi.item.done');

    }
}
