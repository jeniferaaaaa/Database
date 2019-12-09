<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidate extends FormRequest
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
            'disp_flag' => 'required',
            'name' => 'required|max:30|',
            'sns_keyword' => 'required|max:255',
            'attribute1' => 'required|max:30',
            'attribute2' => 'required|max:30',
            'attribute3' => 'required|max:30',
            'attribute4' => 'required|max:30',
            'attribute5' => 'required|max:30',
            'detail1' => 'required|max:2000',
            'detail2' => 'required|max:2000',
            'detail3' => 'required|max:2000',
        ];
    }
    
    /**
     * エラーメッセージのオーバーライド
     * 
     */
    public function messages()
    {
        return [
            'disp_flag.required' => '表示の有無を選択してください',
            'name.required' => '名前を入力してください',
            'name.max' => '名前は30文字以内で入力してください',
            'sns_keyword.required' => 'SNSキーワードを入力してください',
            'sns_keyword.max' => 'SNSキーワードは255文字以内で入力してください',
            'attribute1.required' => '入力してください',
            'attribute1.max' => '30文字以内で入力してください',
            'attribute2.required' => '入力してください',
            'attribute2.max' => '30文字以内で入力してください',
            'attribute3.required' => '入力してください',
            'attribute3.max' => '30文字以内で入力してください',
            'attribute4.required' => '入力してください',
            'attribute4.max' => '30文字以内で入力してください',
            'attribute5.required' => '入力してください',
            'attribute5.max' => '30文字以内で入力してください',
            'detail1.required' => '入力してください',
            'detail1.max' => '2000文字以内で入力してください',
            'detail2.required' => '入力してください',
            'detail2.max' => '2000文字以内で入力してください',
            'detail3.required' => '入力してください',
            'detail3.max' => '2000文字以内で入力してください',
        ];
    }
}
