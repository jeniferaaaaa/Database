<?php

namespace App\Http\Controllers\Arbi\top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Arbi;
use App\Model\Site;
use Auth;
use Illuminate\Support\Facades\Storage;

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
     * 管理者テーブルと管理者に紐付くサイトテーブルを更新する
     * 
     */
    public function index (Request $request)
    {
        //最終的に置くパス
        $documentPath = fileConst::IMG_PATH;
        //セッションから配列データ取得
        $data = $request->session()->get('data');
        //DBに保存するパス取得
        $main_path = fileCommon::getMovedDBPath($data['main_tmp'],$documentPath,fileConst::MAIN_PATH);
        $sub1_path = fileCommon::getMovedDBPath($data['sub1_tmp'],$documentPath,fileConst::SUB_PATH);
        $sub2_path = fileCommon::getMovedDBPath($data['sub2_tmp'],$documentPath,fileConst::SUB_PATH);
        $sub3_path = fileCommon::getMovedDBPath($data['sub3_tmp'],$documentPath,fileConst::SUB_PATH);

        //サイトテーブルを更新
        $sites = Auth::user()->sites;
        foreach ($sites as $site){
            $site->main_path = $main_path;
            $site->sub_path1 = $sub1_path;
            $site->sub_path2 = $sub2_path;
            $site->sub_path3 = $sub3_path;
            $site->save();
        }

        return view('arbi.top.done');
    }
    

}
