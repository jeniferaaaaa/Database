<?php

namespace App\Http\Controllers\Arbi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * ログインしていないユーザを弾く初期化処理
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ログインユーザの情報に応じてページを切り替えるため、必要な情報を送る
     * （画面の切り替えはフロントでやる？）
     */
    public function index ()
    {
        return view ('arbi.menu');
    }
}
