<?php

namespace App\Http\Controllers\Arbi\basic;

use Illuminate\Http\Request;
use App\Model\Arbi;
use App\Model\Site;
use Auth;

class DoneController extends Controller
{
    public function index (Request $request)
    {
        //セッションから申し込みデータ取得
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $site_name = $request->session()->get('site_name');
        $site_purpose = $request->session()->get('site_purpose');

        //管理者テーブルを更新

        //管理者に紐付くサイトテーブルを更新
        $sites = Auth::user()->sites;
        $sites->site_name = $site_name;
        $sites->site_purpose = $site_purpose;

        return view('form.done');

    }
}
