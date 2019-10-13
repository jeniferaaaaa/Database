<?php

namespace app\Libs;

use Illuminate\Support\Facades\Storage;

class FileCommon
{
    /**
     * tmpパスの名前を読み込み用パスに書き換えるメソッド
     * 
     */
    public static function replaceReadName (string $path): ?string
    {
        $search = 'public/';//変更前文字列
        $replace = 'storage/';//変更後文字列
        $read_path = str_replace($search,$replace, $path);

        return $read_path;
    }

    /**
     * アップロードが正常に行われたかチェックするメソッド
     * 
     */
    public static function uploadCheck ($imagePath) 
    {
        if ($imagePath->isValid([])){
            return $imagePath;
        }
        throw new \Exception ('画像のアップロードに失敗しました');
    }

    /**
     * tmpフォルダからリネームしてimagesフォルダ下の特定の場所に移動させるメソッド
     * （データベースに登録するパスを返す）
     * 
     */
    public static function getMovedDBPath (string $tmpPath,$docPath,$imageUnderDir): ?string
    {
        //存在確認
        if (empty($tmpPath)){
            return '';
        }
        //取り除く文字列
        $delPathName = 'public/tmp';
        $filename = str_replace($delPathName,'',$tmpPath);
        //リネーム
        $docPath .= $imageUnderDir;
        $move_Path = $docPath.$filename;
        Storage::move($tmpPath,$move_Path); 
        //DB登録用呼び出しネーム
        $db_Path = \str_replace('public','storage',$move_Path);
        
        return $db_Path;
    }



}