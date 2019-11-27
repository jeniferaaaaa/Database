<?php

namespace App\Http\Controllers\Arbi\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Data;

class EditController extends Controller
{
    /**
     * ログインユーザのデータを取得して入力画面表示
     * 
     */
    public function __invoke (Request $request) 
    {
        //ログインユーザに紐付くサイトモデル取得
        $siteObjects = Auth::user()->sites;
        $maybeExistSession = $request->session()->get('data_id');
        var_dump($maybeExistSession);

        //リクエスト受け取り
        $data_id = $request->input('data_id');
        $request->session()->put('data_id',$data_id);
        $dataDetail = Data::findOrFail($data_id);

        return view ('arbi.post.edit', compact('siteObjects','dataDetail'));
    }
}
