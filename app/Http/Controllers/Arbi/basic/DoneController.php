<?php

namespace App\Http\Controllers\Arbi\basic;

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
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $site_name = $request->session()->get('site_name');
        $site_purpose = $request->session()->get('site_purpose');

        //管理者テーブルを更新
        $arbis = Auth::user();//ログイン中のユーザのモデルを取得
        $arbis->name = $name;
        $arbis->email = $email;
        $arbis->save();

        //管理者に紐付くサイトテーブルを更新
        $sites = Auth::user()->sites;
        foreach ($sites as $site){
            $site->site_name = $site_name;
            $site->site_purpose = $site_purpose;
            $site->save();
        }

        return view('arbi.basic.done');

    }
}
