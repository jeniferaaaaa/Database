<?php

namespace App\Http\Controllers\Arbi\design;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BasicValidateRequest;


class ConfirmController extends Controller
{
    /**
     * 入力画面で入力された内容を受け取って、確認画面に送信
     * 完了画面で登録するために入力データをセッションに保存
     * 
     */
    public function __invoke (Request $request)
    {
        //リクエストデータの受け取り
        $data = $request->all();

        //セッションへ保存
        $request->session()->put('layout',$request->input('layout'));
        $request->session()->put('color',$request->input('color'));

        return view ('arbi.design.confirm',compact('data'));
    }
}
