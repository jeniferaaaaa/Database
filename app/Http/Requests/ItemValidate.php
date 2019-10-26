<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemValidate extends FormRequest
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
            'attribute1' => 'required|max:30|',
            'attribute2' => 'max:30|',
            'attribute3' => 'max:30|',
            'attribute4' => 'max:30|',
            'attribute5' => 'max:30|',
            'detail1' => 'required|max:30|',
            'detail2' => 'max:30|',
            'detail3' => 'max:30|',
        ];
    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'attribute1.required' => '属性1は必須項目です',
            'attribute1.max' => '属性1は30文字以内で入力してください',
            'attribute2.max' => '属性2は30文字以内で入力してください',
            'attribute3.max' => '属性3は30文字以内で入力してください',
            'attribute4.max' => '属性4は30文字以内で入力してください',
            'attribute5.max' => '属性5は30文字以内で入力してください',
            'detail1.required' => '詳細説明1は必須項目です',
            'detail1.max' => '属性1は30文字以内で入力してください',
            'detail2.max' => '属性1は30文字以内で入力してください',
            'detail3.max' => '属性1は30文字以内で入力してください',
        ];
    }
}
