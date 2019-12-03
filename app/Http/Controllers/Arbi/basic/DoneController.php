<?php

namespace App\Http\Controllers\Arbi\basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Arbi;
use App\Model\Site;
use Auth;

class DoneController extends Controller
{
    /**
     * セッションからデータを取得し
     * 管理者テーブルと管理者に紐付くサイトテーブルを更新する
     * 
     */
    public function __invoke (Request $request)
    {
        //セッションから申し込みデータ取得
        $name = $request->session()->pull('name');
        $email = $request->session()->pull('email');
        $site_name = $request->session()->pull('site_name');
        $site_purpose = $request->session()->pull('site_purpose');

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
