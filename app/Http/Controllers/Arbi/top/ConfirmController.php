<?php

namespace App\Http\Controllers\Arbi\top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BasicValidateRequest;

use App\Consts\fileConst;
use App\Libs\fileCommon;


class ConfirmController extends Controller
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
     * 入力画面で入力された内容を受け取って、確認画面に送信
     * 完了画面で登録するために入力データをセッションに保存
     * 
     */
    public function index (Request $request)
    {
        //tmpファイルのパス
        $tmpPath = fileConst::TMP_PATH;
        //メイン画像処理
        $main_tmp_path = (fileCommon::uploadCheck($request->file('main')))->store($tmpPath);
        $main_read_path = fileCommon::replaceReadName($main_tmp_path);
        //サブ画像の存在確認
        $sub1_tmp_path = $this->existSubImage($request->file('sub1'),$tmpPath);
        $sub2_tmp_path = $this->existSubImage($request->file('sub2'),$tmpPath);
        $sub3_tmp_path = $this->existSubImage($request->file('sub3'),$tmpPath);
        //リクエストデータを受け取り、tmpフォルダへ一時保存する
        $sub1_read_path = fileCommon::replaceReadName($sub1_tmp_path);
        $sub2_read_path = fileCommon::replaceReadName($sub2_tmp_path);
        $sub3_read_path = fileCommon::replaceReadName($sub3_tmp_path);

        //配列へ格納
        $data = array(
            'main' => $main_read_path,
            'sub1' => $sub1_read_path,
            'sub2' => $sub2_read_path,
            'sub3' => $sub3_read_path,
            'main_tmp' => $main_tmp_path,
            'sub1_tmp' => $sub1_tmp_path,
            'sub2_tmp' => $sub2_tmp_path,
            'sub3_tmp' => $sub3_tmp_path,
        );

        //セッションへデータ保存
        $request->session()->put('data',$data);

        return view ('arbi.top.confirm', compact('data'));
    }

    /**
     * サブ画像が存在するかどうかを判別してtmpパスを作成し、アップロードするメソッド
     * 
     */
    private function existSubImage ($imageName, $tmpPath)
    {
        if ($imageName){
            return ($this->uploadCheck($imageName))->store($tmpPath);
        }
        return '';
    }

}
