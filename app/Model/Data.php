<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'data_detail';

    /**
     * デフォルトの主キーをオーバーライド
     * 
     */
    protected $primaryKey = 'data_id';

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'site_id','name','image_path','attribute1','attribute2','attribute3','attribute4','attribute5',
        'detail1','detail2','detail3',
    ];

}
