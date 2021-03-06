<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $guarded = array('id');

  //バリデーションでデータをチェックする
  public static $rules = array(
    'title' => 'required',
    'body' => 'required',
  );

  //NewsモデルからHistoryモデルへの関連付けを行う
  public function histories()
  {
    return $this->hasMany('App\History');
  }
}
