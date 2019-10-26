<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidate extends FormRequest
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
            'name' => 'required|max:30|unique:arbi',
            'email' => 'required|max:255|email|unique:arbi',
            'password' => 'required|max:30|min:4',
            'password-confirmation' => 'same:password',
            'site_name' => 'required|max:30|min:2',
            'site_purpose' => 'required|max:100|min:5',
            'domain' => 'required|max:30|unique:site',
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
            'name.unique' => 'この名前h既に使用されています',
            'email.required' => 'メールアドレスを入力してください',
            'email.max' => 'メールアドレスは255文字以内で入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'email.unique' => 'このメールアドレスは既に使用されています',
            'password.required' => 'パスワードを入力してください',
            'password.max' => 'パスワードは4文字以上30文字以内で入力してください',
            'password.min' => 'パスワードは4文字以上30文字以内で入力してください',
            'password-confirmation.same' => 'パスワードが一致しません',
            'site_name.required' => 'サイト名称を入力してください',
            'site_name.max' => 'サイト名称は2文字以上30文字以内で入力してください',
            'site_name.min' => 'サイト名称は2文字以上30文字以内で入力してください',
            'site_purpose.required' => 'サイト利用目的を入力してください',
            'site_purpose.max' => 'サイト利用目的は5文字以上100文字以内で入力してください',
            'site_purpose.min' => 'サイト利用目的は5文字以上100文字以内で入力してください',
            'domain.required' => 'ドメイン名を入力してください',
            'domain.max' => 'ドメイン名は30文字以内で入力してください',
        ];
    }
}
