<?php

namespace App\Http\Controllers\Arbi\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BasicValidateRequest;


class ConfirmController extends Controller
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
     * 入力画面で入力された内容を受け取って、確認画面に送信
     * 完了画面で登録するために入力データをセッションに保存
     * 
     */
    public function index (BasicValidateRequest $request)
    {
        //リクエストデータの受け取り
        $data = $request->all();

        //セッションへ保存
        $request->session()->put('name',$request->input('name'));//申込み者名前
        $request->session()->put('email',$request->input('email'));//メールアドレス
        $request->session()->put('site_name',$request->input('site_name'));//サイト名称
        $request->session()->put('site_purpose',$request->input('site_purpose'));//サイト利用目的

        return view ('arbi.category.confirm',compact('data'));
    }
}
