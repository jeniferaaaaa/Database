<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    /**
     * 入力画面で入力された値をセッションへ保存
     * 入力値を確認画面へ渡す
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //リクエストデータの受け取り
        $data = $request->all();

        //セッションへ保存
        $name = $request->session()->put('name',$request->input('name'));//申込み者名前
        $email = $request->session()->put('email',$request->input('email'));//メールアドレス
        $pass = $request->session()->put('pass',$request->input('password'));//パスワード
        $site = $request->session()->put('site',$request->input('site_name'));//サイト名称
        $domain = $request->session()->put('domain',$request->input('domain'));//ドメイン名
        
        return view('form.confirm',compact('data'));
    }

}
