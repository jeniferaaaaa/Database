<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'admin';

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'site_id','name','email','password',
    ];

    /**
     * 配列に含めない属性
     * 
     */
    protected $hidden = [
        'password',
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
