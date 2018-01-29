<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = "sliders";
  // protected $fillable = ['title', 'photo', 'description', 'other'];

  public function services()
  {
    return $this->hasMany('App\Service');
  }
}
