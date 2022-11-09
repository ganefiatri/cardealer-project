@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Create a New Authors') }}</div>

        <div class="card-body">
            <form action="{{route('vehicles.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" name="color" class="form-control" id="color">
                    <label for="year">Year</label>
                    <input type="text" name="year" class="form-control" id="year">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>
                <button class="btn btn-primary mt-2">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
