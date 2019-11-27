<?php

namespace App\Http\Controllers\Arbi\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ListController extends Controller
{
    public function __invoke ()
    {
        //ログインユーザに紐付くサイトモデル取得
        $siteObject = Auth::user()->sites;

        //サイトに紐付くカテゴリテーブルのデータ取得
        foreach ($siteObject as $value){
            $dataDetail = $value->data;
        }

        return view ('arbi.post.list', compact('dataDetail'));
    }
}
