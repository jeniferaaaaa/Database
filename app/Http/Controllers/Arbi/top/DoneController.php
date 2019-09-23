<?php

namespace App\Http\Controllers\Arbi\top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Arbi;
use App\Model\Site;
use Auth;
use Illuminate\Support\Facades\Storage;

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
        //最終的に置くパス（定数化してもよき）
        $documentPath = 'public/images/';
        //セッションから配列データ取得
        $data = $request->session()->get('data');
        //DBに保存するパス取得
        $main_path = $this->moveMainPath($data['main_tmp'],$documentPath);
        $sub1_path = $this->moveSubPath($data['sub1_tmp'],$documentPath);
        $sub2_path = $this->moveSubPath($data['sub2_tmp'],$documentPath);
        $sub3_path = $this->moveSubPath($data['sub3_tmp'],$documentPath);

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
    
    /**
     * tmpフォルダからリネームしてimages/mainに移動させるメソッド
     * 
     * 
     */
    private function moveMainPath (string $tmpPath,$docPath)
    {
        //取り除く文字列
        $delPathName = 'public/tmp';
        $filename = str_replace($delPathName,'',$tmpPath);
        //リネーム
        $docPath .= 'main';
        $db_Path = $docPath.$filename;
        Storage::move($tmpPath,$db_Path); 
        
        return $db_Path;
    }

    /**
     * tmpフォルダからリネームしてimages/subに移動させるメソッド
     * 
     * 
     */
    private function moveSubPath (string $tmpPath,$docPath)
    {
        if ($tmpPath == ''){
            return '';
        }
        //取り除く文字列
        $delPathName = 'public/tmp';
        $filename = str_replace($delPathName,'',$tmpPath);
        //リネーム
        $docPath .= 'sub';
        $db_Path = $docPath.$filename;
        Storage::move($tmpPath,$db_Path); 
        
        return $db_Path;
    }

}
