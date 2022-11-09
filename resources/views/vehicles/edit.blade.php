@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Edit a New Vehicle') }}</div>

        <div class="card-body">
            <form action="{{route('vehicles.update', [$vehicle])}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" name="color" class="form-control" id="color" value="{{$vehicle->color}}">
                    <label for="year">Year</label>
                    <input type="text" name="year" class="form-control" id="year" value="{{$vehicle->year}}">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" value="{{$vehicle->price}}">
                </div>
                <button class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
