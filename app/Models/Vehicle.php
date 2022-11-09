<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Vehicle extends Model
{

     /*
    *Vehicle observer

    *event - deleting

    *info - Relationship with Cars & Motorbikes delete on vehicle delete
    
    *check on Observer/VehicleObserver

    *check on Providers/EventServiceProvider on function boot add Vehicle::observe(VehicleObserver::class);
    */

    use HasFactory;

    protected $guarded = [];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function motorbikes()
    {
        return $this->hasMany(Motorbike::class);
    }
}
