<?php

namespace App\Http\Controllers\Arbi\design;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class EditController extends Controller
{
    /**
     * ログインユーザのデータを取得して入力画面表示
     * 
     */
    public function __invoke () 
    {
        //ログインユーザに基づくサイトテーブルを取得
        $sites = Auth::user()->sites;

        return view ('arbi.design.edit', compact('sites'));
    }
}
