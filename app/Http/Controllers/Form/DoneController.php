<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use App\Admin;
use App\Site;
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
        $site = $request->session()->get('site');
        $domain = $request->session()->get('domain');

        //siteテーブルへ登録
        Site::create([
            'name' => $site,
            'domain' => $domain,
        ]);

        //site_idの取得
        $id = Site::where('domain','=',$domain)->value('id');

        //adminテーブルの登録
        Admin::create([
            'site_id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $pass,
        ]);

        return view('form.done');
    }

}
