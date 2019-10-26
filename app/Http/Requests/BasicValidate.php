<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicValidate extends FormRequest
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
            'name' => 'required|max:30|',
            'email' => 'required|max:255|email',
            'site_name' => 'required|max:30|min:2',
            'site_purpose' => 'required|max:100|min:5',
        ];
    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前は30文字以内で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.max' => 'メールアドレスは255文字以内で入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'site_name.required' => 'サイト名称を入力してください',
            'site_name.max' => 'サイト名称は2文字以上30文字以内で入力してください',
            'site_name.min' => 'サイト名称は2文字以上30文字以内で入力してください',
            'site_purpose.required' => 'サイト利用目的を入力してください',
            'site_purpose.max' => 'サイト利用目的は5文字以上100文字以内で入力してください',
            'site_purpose.min' => 'サイト利用目的は5文字以上100文字以内で入力してください',
        ];
    }
}
