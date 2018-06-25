<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newschedule extends Model
{
  protected $table = 'newschedules';
  protected $fillable = ['number', 'beginning', 'ending', 'type', 'configuration', 'airportOfDeparture', 'timeOfDeparture', 'airportOfArriving', 'timeOfArriving', 'id', 'newschedules_id', 'timeOfMaintenanceTwo', 'timeOfMaintenanceOne'];
}
