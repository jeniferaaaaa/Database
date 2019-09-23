<?php

namespace App\Http\Controllers\Arbi\top;

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
    public function index (Request $request)
    {
        //リクエストデータの受け取り
        $data = $request->all();

        //セッションへ保存
        $request->session()->put('main',$request->input('main'));
        $request->session()->put('sub1',$request->input('sub1'));
        $request->session()->put('sub2',$request->input('sub2'));
        $request->session()->put('sub3',$request->input('sub3'));

        return view ('arbi.top.confirm',compact('data'));
    }

    private function imagePathStore ()
    {
        
    }
}
