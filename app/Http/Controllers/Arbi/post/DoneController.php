<?php

namespace App\Http\Controllers\Arbi\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Arbi;
use App\Model\Site;
use App\Model\Data;
use Illuminate\Support\Facades\Storage;
use Auth;

use App\Consts\fileConst;
use App\Libs\fileCommon;

class DoneController extends Controller
{
    /**
     * セッションからデータを取得し
     * 管理者テーブルとサ管理者に紐付くサイトテーブルを更新する
     * 
     */
    public function __invoke (Request $request)
    {
        //最終的に置くパス
        $documentPath = fileConst::IMG_PATH;
        //セッションから配列データ取得
        $data_id = $request->session()->get('data_id');
        $data = $request->session()->get('data');
        //DBに保存するパス取得
        //TODO::現在カテゴリフォルダに最終保存しているので変えること
        $image_path = fileCommon::getMovedDBPath($data['image_tmp_path'],$documentPath,fileConst::CATEGORY_PATH);

        //登録処理
        $dataDetail = Data::findOrFail($data_id);
        $dataDetail->name = $data['nameData'];
        $dataDetail->image_path = $image_path;
        $dataDetail->attribute1 = $data['at1Data'];
        $dataDetail->attribute2 = $data['at2Data'];
        $dataDetail->attribute3 = $data['at3Data'];
        $dataDetail->attribute4 = $data['at4Data'];
        $dataDetail->attribute5 = $data['at5Data'];
        $dataDetail->detail1 = $data['dt1Data'];
        $dataDetail->detail2 = $data['dt2Data'];
        $dataDetail->detail3 = $data['dt3Data'];
        $dataDetail->save();


        return view('arbi.post.done');

    }
    
}
