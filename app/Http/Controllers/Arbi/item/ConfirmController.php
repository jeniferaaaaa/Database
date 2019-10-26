<?php

namespace App\Http\Controllers\Arbi\item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ItemValidate;


class ConfirmController extends Controller
{
    /**
     * 入力画面で入力された内容を受け取って、確認画面に送信
     * 完了画面で登録するために入力データをセッションに保存
     * 
     */
    public function __invoke (ItemValidate $request)
    {
        //リクエストデータの受け取り
        $data = $request->all();

        //セッションへ保存
        $request->session()->put('attribute1',$request->input('attribute1'));
        $request->session()->put('attribute2',$request->input('attribute2'));
        $request->session()->put('attribute3',$request->input('attribute3'));
        $request->session()->put('attribute4',$request->input('attribute4'));
        $request->session()->put('attribute5',$request->input('attribute5'));
        $request->session()->put('detail1',$request->input('detail1'));
        $request->session()->put('detail2',$request->input('detail2'));
        $request->session()->put('detail3',$request->input('detail3'));        

        return view ('arbi.item.confirm',compact('data'));
    }
}
