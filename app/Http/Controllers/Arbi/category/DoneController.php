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
     * ログインしていないユーザを弾く初期化処理
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * セッションからデータを取得し
     * 管理者テーブルとサ管理者に紐付くサイトテーブルを更新する
     * 
     */
    public function index (Request $request)
    {
        //最終的に置くパス
        $documentPath = fileConst::IMG_PATH;
        //セッションから配列データ取得
        $data = $request->session()->get('data');        
        //DBに保存するパス取得
        $cate_path = $this->getMovedDBPath($data['category_tmp_path'],$documentPath,fileConst::CATEGORY_PATH);

        //ログインユーザに紐づくサイトIDを取得(TODO)
        $sites = Auth::user()->sites;

        Category::create([
            'site_id' => 1,
            'category_name' => $data['category_name'],
            'category_path' => $cate_path,
            'category_text' => $data['category_text'],
        ]);

        return view('arbi.category.done');

    }
    
}
