<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Model\Arbi;
use App\Model\Site;

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

        return view('form.done');
    }

}
