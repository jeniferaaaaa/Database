<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Model\Arbi;
use App\Model\Site;
use App\formException;
use DB;

class DoneController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //セッションから申し込みデータ取得
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $pass = $request->session()->get('pass');
        $site_name = $request->session()->get('site_name');
        $site_purpose = $request->session()->get('site_purpose');
        $domain = $request->session()->get('domain');

        //テスト(DB二重登録防止)
        $boolean = DB::table('arbi')->where('email',$email)->exists();
        if ($boolean){
            throw new \Exception('すでに登録されているメールアドレスです');
        }

        //管理者をまず登録
        Arbi::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($pass),
        ]);

        //登録した管理者のIDを取得
        $id = Arbi::where('email',$email)->value('arbi_id');

        //siteテーブルへ登録
        Site::create([
            'site_name' => $site_name,
            'site_purpose' => $site_purpose,
            'domain' => $domain,
            'arbi_id' => $id,
        ]);

        //入力されたメールアドレスにメールを送信
        $chkMail = $this->sendMail($email);
        if($chkMail == null){
            throw new \Exception('メールが送信できませんでした');
        }

        return view('form.done');
    }

    private function sendMail ($email)
    {
        // Mail::sendで送信できる.
        // 第1引数に、テンプレートファイルのパスを指定し、
        // 第2引数に、テンプレートファイルで使うデータを指定する
        Mail::send(['text' => 'emails.register'], [
            "aaa" => "こんにちは！"

        ], function($message) use ($email){

            // 第3引数にはコールバック関数を指定し、
            // その中で、送信先やタイトルの指定を行う.
            $message
                ->to($email)
                ->bcc('admin@sample.com')
                ->subject("ユーザー登録ありがとうございます");
        });

        return 1;
    }

}
