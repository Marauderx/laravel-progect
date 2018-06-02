<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = ['number', 'beginning', 'ending', 'type', 'configuration', 'airportOfDeparture', 'timeOfDeparture', 'airportOfArriving', 'timeOfArriving', 'id', 'shedules_id'];
    public $timestamps = false;
  //  public function comments()
  //  {
    //    return $this->hasMany('App\schedule');
  //  }
}
