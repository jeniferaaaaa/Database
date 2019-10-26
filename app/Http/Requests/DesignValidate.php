<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignValidate extends FormRequest
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
            'layout' => 'required',
            'color' => 'required',
        ];
    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'layout.required' => 'レイアウトを選択してください',
            'color.required' => 'カラーを選択してください',
        ];
    }
}
