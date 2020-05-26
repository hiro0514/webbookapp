<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
  public $timestamps=false;
  public function registers(){
    return $this->hasMany('App\Register','catalog_number','catalog_number');
    //１番目のcatalog_number registers
    //２番目のcatalog_number catalogs
  }

//本間
//資料変更のバリデーション
public static $document_change_rules = array(
'catalog_id'=>'integer|digits_between:1,10|required',
'catalog_name'=>'max:50|required',
'disposal_date'=>'required|date',
'catalog_remark'=>'max:200'
);

public static $document_change_messages = array(
'catalog_id.integer'=>'資料IDは半角数字で入力してください',
'catalog_id.digits_between'=>'資料IDは10桁または13桁で入力してください',
'catalog_id.required'=>'資料IDはは必須です',
'catalog_name.required'=>'資料名は必須です。',
'catalog_name.max'=>'資料名は50文字以下にしてください',
'disposal_date.date'=>'廃棄年月日は日付で入力してください',
'disposal_date.required'=>'廃棄年月日は必須です',
'catalog_remark.max'=>'備考は200文字以内で入力してください'
);
}
