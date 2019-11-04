<?php

namespace App\Http\Controllers\Arbi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ResetValidate;

use App\Model\Arbi;

class ResetController extends Controller
{
    /**
     * パスワードに乱数を設定し、メールを送る
     * 
     */
    public function __invoke (ResetValidate $request)
    {
        $email = $request->input('email');
        $user = Arbi::where('email', $email)->first();
        if (!$user){
            return redirect ('reset_pass')->with('false', 'データの取得に失敗しました');
        }
        $newPass = $this->generateRandomPass();
        var_dump($newPass);
        $user->password = bcrypt($newPass);
        $user->save();

        //TODO:以下にメール送信の機能を作成するが、formのものとメソッドを共通化すること
        
        return view ('auth.reset_pass.done');
    }

    private function generateRandomPass ( $length = 8 ): ?string
    {
        $pass = [];
        $pass_str = [
            'sletter' => range('a', 'z'),
            'cletter' => range('A', 'Z'),
            'number' => range('0', '9'),
            'symbol' => array_merge(range('!', '/'), range(':', '?'), range('{', '~')),
        ];

        while (count($pass) < $length ) {
            //pass_strから4種類それぞれを必ず入れる
            if (count($pass) < 4 ) {
                $key = key($pass_str);
                next($pass_str);
            } else {
                $key = array_rand($pass_str);
            }
            $pass[] = $pass_str[$key][array_rand($pass_str[$key])];
        }
        shuffle($pass);

        return implode($pass);
    }
}
