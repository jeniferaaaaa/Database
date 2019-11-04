<?php

namespace App\Http\Controllers\Arbi\pass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PassValidate;
use App\Model\Arbi;
use Auth;
use Illuminate\Support\Facades\Hash;

class DoneController extends Controller
{
    /**
     * セッションからデータを取得し
     * 管理者テーブルを更新する
     * 
     */
    public function __invoke (PassValidate $request)
    {
        $oldInputPass = $request->input('old_password');
        $oldDbPass = Auth::user()->password;
        //現在のパスワード一致確認
        if (!Hash::check($oldInputPass, $oldDbPass)){
            return redirect('change_pass')->with('false', '現在のパスワードが一致しません');
        }
        //リクエストデータ受け取り
        $newPass = $request->input('new_password');

        //管理者テーブルを更新
        $arbis = Auth::user();//ログイン中のユーザのモデルを取得
        $arbis->password = bcrypt($newPass);
        $arbis->save();

        return view('arbi.pass.done');

    }
    
}
