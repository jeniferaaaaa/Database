<?php

namespace App\Http\Controllers\Arbi\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Site;

class ListController extends Controller
{
    public function __invoke ()
    {
        //ログインユーザに紐付くサイトモデル取得
        $siteObject = Auth::user()->sites;
        //サイトに紐付くカテゴリテーブルのデータ取得
        foreach ($siteObject as $value){
            $ctgData = $value->category;
        }

        return view ('arbi.category.list',compact('ctgData'));
    }
}
