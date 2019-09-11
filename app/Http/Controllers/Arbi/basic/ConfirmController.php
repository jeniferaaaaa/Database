<?php

namespace App\Http\Controllers\Arbi\basic;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function index (Request $request)
    {
        //リクエストデータの受け取り
        $data = $request->all();

        //セッションへ保存
        $request->session()->put('name',$request->input('name'));//申込み者名前
        $request->session()->put('email',$request->input('email'));//メールアドレス
        $request->session()->put('site_name',$request->input('site_name'));//サイト名称
        $request->session()->put('site_purpose',$request->input('site_purpose'));//サイト利用目的

        return view ('arbi.basic.confirm',compact('data'));
    }
}
