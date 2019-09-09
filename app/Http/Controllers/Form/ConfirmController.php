<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidateRequest;

class ConfirmController extends Controller
{
    /**
     * 入力画面で入力された値をセッションへ保存
     * 入力値を確認画面へ渡す
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FormValidateRequest $request)
    {
        //リクエストデータの受け取り
        $data = $request->all();

        //セッションへ保存
        $request->session()->put('name',$request->input('name'));//申込み者名前
        $request->session()->put('email',$request->input('email'));//メールアドレス
        $request->session()->put('pass',$request->input('password'));//パスワード
        $request->session()->put('site_name',$request->input('site_name'));//サイト名称
        $request->session()->put('site_purpose',$request->input('site_purpose'));//サイト利用目的
        $request->session()->put('domain',$request->input('domain'));//ドメイン名
        
        return view('form.confirm',compact('data'));
    }

}
