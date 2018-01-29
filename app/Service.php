<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $table = "services";
  // protected $fillable = ['name', 'photo', 'description', 'slider_id'];

  public function slider()
  {
    return $this->belongsTo('App\Slider');
  }
}
