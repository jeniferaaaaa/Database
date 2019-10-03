<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'category';

    /**
     * デフォルトの主キーをオーバーライド
     * 
     */
    protected $primaryKey = 'category_id';

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'site_id','category_name','category_path','category_text',
    ];

    /**
     * サイトテーブルとのリレーション
     * 
     */
    public function site ()
    {
        return $this->belongsTo('App\Model\Site','site_id','id');
    }

}
