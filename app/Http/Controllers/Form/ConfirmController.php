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
        $request->session()->put('data',$data);

        return view('confirm',compact('data'));
    }

}
