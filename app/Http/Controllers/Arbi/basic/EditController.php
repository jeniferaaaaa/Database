<?php

namespace App\Http\Controllers\Arbi\basic;

use Illuminate\Http\Request;
use Auth;

class EditController extends Controller
{
    public function index () {

        //ログイン中のユーザに紐付くサイトテーブルのオフジェクトを取得
        $sites = Auth::user()->sites;

        return view ('arbi.basic.edit',compact('sites'));
    }
}
