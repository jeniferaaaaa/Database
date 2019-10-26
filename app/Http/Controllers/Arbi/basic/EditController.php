<?php

namespace App\Http\Controllers\Arbi\basic;

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
        //ログイン中のユーザに紐付くサイトテーブルのオフジェクトを取得
        $sites = Auth::user()->sites;

        return view ('arbi.basic.edit',compact('sites'));
    }
}
