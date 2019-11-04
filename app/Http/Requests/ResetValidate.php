<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetValidate extends FormRequest
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
     * パスワードリセット画面でのバリデーションチェック
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|max:255|email',
        ];
    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'email.required' => 'メールアドレスを入力してください',
            'email.max' => 'メールアドレスは255文字以内で入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
        ];
    }
}
