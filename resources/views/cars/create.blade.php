@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Create a New Cars') }}</div>

        <div class="card-body">
            <form action="{{route('cars.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="engine">Engine</label>
                    <input type="text" name="engine" class="form-control" id="engine">
                </div>
                <div class="form-roup">
                    <label for="seats">Seats</label>
                    <input type="text" name="seats" class="form-control" id="seats">
                </div>
                <div class="form-roup">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" id="type">
                </div>
                <div class="form-group">
                    <label for="vehicle_id">Color - Year - Price</label>
                    <select name="vehicle_id" id="vehicle_id" class="form-control">
                        @forelse ($vehicles as $vehicle)
                            <option value="{{$vehicle->id}}">{{$vehicle->color}} - {{$vehicle->year}} - {{$vehicle->price}}</option>
                        @empty
                            <option value="empty">Empty</option>
                        @endforelse
                    </select>
                </div>
                <button class="btn btn-primary mt-2">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
