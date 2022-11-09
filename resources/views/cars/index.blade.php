@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Cars') }}</div>

        <div class="card-body">
            <a href="{{route('cars.create')}}" class="btn btn-primary">Create a new car</a>
            <div class="mt-3">
                <h3>List of Cars</h3>
                <table class="table">
                    <tr>
                        <th>Engine</th>
                        <th>Seats</th>
                        <th>Type</th>
                        <th>Color</th>
                        <th>Year</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($cars as $car)
                        <tr>
                            <td>{{$car->engine}}</td>
                            <td>{{$car->seats}}</td>
                            <td>{{$car->type}}</td>
                            <td>{{$car->vehicle->color}}</td>
                            <td>{{$car->vehicle->year}}</td>
                            <td>{{$car->vehicle->price}}</td>
                            <td class="d-flex">
                                <a href="{{route('cars.edit', [$car])}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{route('cars.destroy', [$car])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Car added yet</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
