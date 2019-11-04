<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassValidate extends FormRequest
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
            'old_password' => 'required',
            'new_password' => 'required|max:30|min:4',
            'new_password-confirmation' => 'same:new_password',
        ];
    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'old_password.required' => '現在のパスワードを入力してください',
            'new_password.required' => '新しいパスワードを入力してください',
            'new_password.max' => '新しいパスワードは4文字以上30文字以内で入力してください',
            'new_password.min' => '新しいパスワードは4文字以上30文字以内で入力してください',
            'new_password-confirmation.same' => '新しいパスワードと新しいパスワード（確認）が一致しません',
        ];
    }
}
