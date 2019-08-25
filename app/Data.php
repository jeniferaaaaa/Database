<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'data_detail';

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'id','name','domain'
    ];

    /**
     * siteテーブルとのリレーション
     * 
     */
    public function site ()
    {
        return $this->belongTo('App\Site');
    }

}
