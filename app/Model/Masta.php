<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Masta extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'masta';

    /**
     * デフォルトの主キーを無効にする
     * 
     */
    public $incrementing = false;

    /**
     * デフォルトのタイムスタンプを無効にする
     * 
     */
    public $timestamps = false;

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'category_id','data_id'
    ];

    /**
     * カテゴリテーブルとのリレーション(従属)
     * 
     */
    public function category ()
    {
        return $this->belongsTo('App\Model\Category');
    }

}
