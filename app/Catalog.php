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

}
