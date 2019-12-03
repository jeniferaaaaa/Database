<?php

namespace App\Http\Controllers\Arbi\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Arbi;
use App\Model\Site;
use App\Model\Category;
use Illuminate\Support\Facades\Storage;
use Auth;

use App\Consts\fileConst;
use App\Libs\fileCommon;

class DoneController extends Controller
{
    /**
     * セッションからデータを取得し
     * 管理者に紐付けてカテゴリテーブルを更新する
     * 
     */
    public function __invoke (Request $request)
    {
        //最終的に置くパス
        $documentPath = fileConst::IMG_PATH;
        //セッションから配列データ取得
        $data = $request->session()->pull('data');        
        //DBに保存するパス取得
        $cate_path = fileCommon::getMovedDBPath($data['category_tmp_path'],$documentPath,fileConst::CATEGORY_PATH);

        //ログインユーザに紐づくサイトIDを取得
        $sites = Auth::user()->sites;
        //この取得の仕方はかっこ悪いのでなんとかしたい
        foreach ($sites as $site){
            $id = $site->id;
        }

        //登録処理
        Category::create([
            'site_id' => $id,
            'category_name' => $data['category_name'],
            'category_path' => $cate_path,
            'category_text' => $data['category_text'],
        ]);

        return view('arbi.category.done');

    }
    
}
