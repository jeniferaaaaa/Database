<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Site;
use App\formException;

class TopController extends Controller
{
    /**
     * TOP画面表示
     * 
     */
    public function index ()
    {
        //siteテーブルからviewへ情報を渡す（後に記載）
        return view ('top');
    }
}
