@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Edit a New Car') }}</div>

        <div class="card-body">
            <form action="{{route('cars.update', [$car])}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="engine">Engine</label>
                    <input type="text" name="engine" class="form-control" id="engine" value="{{$car->engine}}">
                </div>
                <div class="form-roup">
                    <label for="seats">Seats</label>
                    <input type="text" name="seats" class="form-control" id="seats" value="{{$car->seats}}">
                </div>
                <div class="form-roup">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" id="type" value="{{$car->type}}">
                </div>
                <div class="form-group">
                    <label for="vehicle_id">Color - Year - Price</label>
                    <select name="vehicle_id" id="vehicle_id" class="form-control">
                        @forelse ($vehicles as $vehicle)
                            <option value="{{$vehicle->id}}" @if ($car->vehicle->id == $vehicle->id)
                                selected
                            @endif>{{$vehicle->color,'-',$vehicle->year,'-',$vehicle->price}}</option>
                        @empty
                            
                        @endforelse
                    </select>
                </div>
                <button class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
