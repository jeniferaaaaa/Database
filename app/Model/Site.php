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
        'site_name','site_purpose','domain','at1_name','at2_name','at3_name','at4_name','at5_name','dt1_name','dt2_name','dt3_name',
        'design','logo_path','layout','color','main_path','sub_path1','sub_path2','sub_path3','site_text','arbi_id','sns_word'
    ];

    /**
     * 管理者テーブルとのリレーション
     * 
     */
    public function arbi () 
    {
        return $this->belongsTo('App\Model\Arbi');
    }

    /**
     * カテゴリテーブルとのリレーション
     * 
     */
    public function category ()
    {
        return $this->hasMany('App\Model\Category');
    }

}
