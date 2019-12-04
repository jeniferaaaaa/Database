<?php

namespace App\Http\Controllers\Arbi\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BasicValidateRequest;
use Auth;

use App\Consts\fileConst;
use App\Libs\fileCommon;

class ConfirmController extends Controller
{
    /**
     * 入力画面で入力された内容を受け取って、確認画面に送信
     * 完了画面で登録するために入力データをセッションに保存
     * 
     */
    public function __invoke (Request $request)
    {
        //ログインユーザに紐付くサイトモデル取得
        $siteObjects = Auth::user()->sites;

        //リクエストデータの受け取り
        $nameData = $request->input('name');
        $keywordData = $request->input('sns_keyword');
        $at1Data = $request->input('attribute1');
        $at2Data = $request->input('attribute2');
        $at3Data = $request->input('attribute3');
        $at4Data = $request->input('attribute4');
        $at5Data = $request->input('attribute5');
        $dt1Data = $request->input('detail1');
        $dt2Data = $request->input('detail2');
        $dt3Data = $request->input('detail3');

        //tmpファイルのパス
        $tmpPath = fileConst::TMP_PATH;
        $image_tmp_path = (fileCommon::uploadCheck($request->file('image_path')))->store($tmpPath);
        $image_read_path = fileCommon::replaceReadName($image_tmp_path);

        //セッション用の配列作成
        $data = [
            'nameData' => $nameData,
            'sns_keyword' => $keywordData,
            'at1Data' => $at1Data,
            'at2Data' => $at2Data,
            'at3Data' => $at3Data,
            'at4Data' => $at4Data,
            'at5Data' => $at5Data,
            'dt1Data' => $dt1Data,
            'dt2Data' => $dt2Data,
            'dt3Data' => $dt3Data,
            'image_tmp_path' => $image_tmp_path,
            'image_read_path' => $image_read_path,
        ];

        //セッションへデータ保存
        $request->session()->put('data',$data);
        
        return view ('arbi.post.confirm',compact('data','siteObjects'));
    }

}
