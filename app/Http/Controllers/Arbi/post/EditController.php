<?php

namespace App\Http\Controllers\Arbi\post;

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
        return view ('arbi.pass.edit');
    }
}
