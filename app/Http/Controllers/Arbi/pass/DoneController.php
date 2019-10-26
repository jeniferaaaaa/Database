<?php

namespace App\Http\Controllers\Arbi\pass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PassValidate;
use App\Model\Arbi;
use Auth;


class DoneController extends Controller
{
    /**
     * セッションからデータを取得し
     * 管理者テーブルとサ管理者に紐付くサイトテーブルを更新する
     * 
     */
    public function __invoke (PassValidate $request)
    {
        //リクエストデータ受け取り
        $password = $request->input('new_password');

        //管理者テーブルを更新
        $arbis = Auth::user();//ログイン中のユーザのモデルを取得
        $arbis->password = bcrypt($password);
        $arbis->save();

        return view('arbi.pass.done');

    }
    
}
