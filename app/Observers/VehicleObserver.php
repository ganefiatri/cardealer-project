<?php

namespace App\Observers;

use App\Models\Vehicle;

class VehicleObserver
{
    public function deleting(Vehicle $vehicle)
    {
        $vehicle->cars()->delete();
        $vehicle->motorbikes()->delete();
    }
}
