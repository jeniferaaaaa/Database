<?php

namespace app\Libs;

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


}