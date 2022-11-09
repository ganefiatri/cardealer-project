@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Edit a New Motorbikes') }}</div>

        <div class="card-body">
            <form action="{{route('motorbikes.update', [$motorbike])}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="engine">Engine</label>
                    <input type="text" name="engine" class="form-control" id="engine" value="{{$motorbike->engine}}">
                </div>
                <div class="form-roup">
                    <label for="suspension">Suspension</label>
                    <input type="text" name="suspension" class="form-control" id="suspension" value="{{$motorbike->suspension}}">
                </div>
                <div class="form-roup">
                    <label for="transmision">Tranmision</label>
                    <input type="text" name="transmision" class="form-control" id="transmision" value="{{$motorbike->transmision}}">
                </div>
                <div class="form-group">
                    <label for="vehicle_id">Color - Year - Price</label>
                    <select name="vehicle_id" id="vehicle_id" class="form-control">
                        @forelse ($vehicles as $vehicle)
                            <option value="{{$vehicle->id}}" @if ($motorbike->vehicle->id == $vehicle->id)
                                selected
                            @endif>{{$vehicle->color,'-',$vehicle->year,'-',$vehicle->price}}</option>
                        @empty
                            <option value="">No add Yet</option>
                        @endforelse
                    </select>
                </div>
                <button class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
