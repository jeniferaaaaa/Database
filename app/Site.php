<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'site';

    /**
     * モデルのタイムスタンプ更新の有無
     * 
     */
    public $timestamps = false;

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'id','name','domain'
    ];

    /**
     * data_detailテーブルとのリレーション
     * 
     */
    public function data_details ()
    {
        return $this->hasMany('App\Data');
    }

    /**
     * adminテーブルとのリレーション
     * 
     */
    public function admins ()
    {
        return $this->hasMany('App\Admin');
    }

}
