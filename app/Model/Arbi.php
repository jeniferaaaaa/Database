<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Arbi extends Authenticatable
{
    /**
     * モデルと関連しているテーブル
     * 
     */
    protected $table = 'arbi';

    /**
     * デフォルトの主キーをオーバーライド
     * 
     */
    protected $primaryKey = 'arbi_id';

    /**
     * ホワイトボックス指定
     * 
     */
    protected $fillable =[
        'name','email','password','last_login'
    ];

    /**
     * 配列に含めない属性
     * 
     */
    protected $hidden = [
        'password',
    ];

    /**
     * デフォルトではログアウト時にremember_tokenを書き換えようとして
     * エラーを吐くので、その処理を一旦無効化
     * 
     */

    public function setAttribute($key,$value)
    {
        if ($key !== $this->getRememberTokenName()){
            parent::setAttribute($key,$value);
        }
    }

    public function sites()
    {
        return $this->hasMany('App\Model\Site','arbi_id','arbi_id');
    }

}
