<?php

namespace App\Http\Controllers\Arbi\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BasicValidateRequest;

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
        //リクエストデータの受け取り
        $category_name = $request->input('category_name');
        $category_text = $request->input('category_text');

        //tmpファイルのパス
        $tmpPath = fileConst::TMP_PATH;
        $category_tmp_path = (fileCommon::uploadCheck($request->file('category_path')))->store($tmpPath);
        $category_read_path = fileCommon::replaceReadName($category_tmp_path);

        //セッション用の配列作成
        $data = [
            'category_name' => $category_name,
            'category_tmp_path' => $category_tmp_path,
            'category_read_path' => $category_read_path,
            'category_text' => $category_text,
        ];

        //セッションへデータ保存
        $request->session()->put('data',$data);
        
        return view ('arbi.category.confirm',compact('data'));
    }
}
