<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidateRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            //'password-confirmation' => 'required',
            'site_name' => 'required',
            'site_purpose' => 'required',
            'domain' => 'required',
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
            'email.required' => 'メールアドレスを入力してください',
            'password.required' => 'パスワードを入力してください',
            //'password-confirmation.required' => 'パスワード（確認）を入力してください',
            'site_name.required' => 'サイト名称を入力してください',
            'site_purpose.required' => 'サイト利用目的を入力してください',
            'domain.required' => 'ドメイン名を入力してください',
        ];
    }
}
