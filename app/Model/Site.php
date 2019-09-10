<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'site';

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'site_name','site_purpose','domain','design','logo_path','layout','color','main_path','sub_path1',
        'sub_path2','sub_path3','site_text','arbi_id',
    ];

    public function arbi () 
    {
        return $this->belongsTo('App\Model\Arbi');
    }

}
