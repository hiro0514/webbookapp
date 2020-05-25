<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
  public $timestamps=false;
  protected $primaryKey='catalog_id';

  public function catalog(){
    return $this->belongsTo('App\Catalog','catalog_number','catalog_number');
  }
}
