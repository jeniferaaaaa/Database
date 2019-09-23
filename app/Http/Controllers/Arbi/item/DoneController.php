<?php

namespace App\Http\Controllers\Arbi\item;

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
        $at1_name = $request->session()->get('attribute1');
        $at2_name = $request->session()->get('attribute2');
        $at3_name = $request->session()->get('attribute3');
        $at4_name = $request->session()->get('attribute4');
        $at5_name = $request->session()->get('attribute5');
        $dt1_name = $request->session()->get('detail1');
        $dt2_name = $request->session()->get('detail2');
        $dt3_name = $request->session()->get('detail3');

        //サイトテーブルを更新
        $sites = Auth::user()->sites;
        foreach ($sites as $site){
            $site->at1_name = $at1_name;
            $site->at2_name = $at2_name;
            $site->at3_name = $at3_name;
            $site->at4_name = $at4_name;
            $site->at5_name = $at5_name;
            $site->dt1_name = $dt1_name;
            $site->dt2_name = $dt2_name;
            $site->dt3_name = $dt3_name;
            $site->save();
        }

        return view('arbi.item.done');

    }
}
