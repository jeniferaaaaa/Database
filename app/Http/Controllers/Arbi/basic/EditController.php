<?php

namespace App\Http\Controllers\Arbi\basic;

use Illuminate\Http\Request;
use Auth;

class EditController extends Controller
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
     * ログインユーザのデータを取得して入力画面表示
     * 
     */
    public function index () {

        //ログイン中のユーザに紐付くサイトテーブルのオフジェクトを取得
        $sites = Auth::user()->sites;

        return view ('arbi.basic.edit',compact('sites'));
    }
}
