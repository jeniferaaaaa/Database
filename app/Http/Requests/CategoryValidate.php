<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidate extends FormRequest
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
     * Form入力画面でのバリデーションチェック
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_name' => 'required|max:30|',
            'category_path' => 'required|file|image|mimes:jpeg,png,PNG,jpg',
            'category_text' => 'required|max:2000',
        ];
    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'category_name.required' => 'カテゴリ名称を入力してください',
            'category_name.max' => 'カテゴリ名称は30文字以内で入力してください',
            'category_path.required' => 'カテゴリ画像は必須です',
            'category_path.file' => 'カテゴリ画像のファイルのアップロードに失敗しました',
            'category_path.image' => 'ファイルの形式が間違っています',
            'category_path.mines' => '画像はjpeg,pngのみアップロード可能です',
            'category_text.required' => 'カテゴリ説明を入力してください',
            'category_text.max' => 'カテゴリ説明は2000文字以内で入力してください',
        ];
    }
}
