<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aircraft extends Model
{
  protected $table = 'aircrafttype';
  protected $fillable = ['nameAircraft', 'id', 'aircraftType', 'flightTime'];
}
