<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 入力画面でのバリデーションチェック
     *
     * @return array
     */
    public function rules()
    {
        return [
            'main' => 'required|file|image|mimes:jpeg,png,PNG,jpg',
            'sub1' => 'file|image|mimes:jpeg,png,PNG,jpg',
            'sub2' => 'file|image|mimes:jpeg,png,PNG,jpg',
            'sub3' => 'file|image|mimes:jpeg,png,PNG,jpg',
        ];    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'main.required' => 'メイン画像は必須です',
            'main.file' => 'メイン画像のファイルのアップロードに失敗しました',
            'main.image' => 'ファイルの形式が間違っています',
            'main.mines' => '画像はjpeg,pngのみアップロード可能です',
            'sub1.file' => 'サブ画像1のファイルのアップロードに失敗しました',
            'sub1.image' => 'ファイルの形式が間違っています',
            'sub1.mines' => '画像はjpeg,pngのみアップロード可能です',
            'sub2.file' => 'サブ画像2のファイルのアップロードに失敗しました',
            'sub2.image' => 'ファイルの形式が間違っています',
            'sub2.mines' => '画像はjpeg,pngのみアップロード可能です',
            'sub3.file' => 'サブ画像3のファイルのアップロードに失敗しました',
            'sub3.image' => 'ファイルの形式が間違っています',
            'sub3.mines' => '画像はjpeg,pngのみアップロード可能です',
        ];
    }
}
