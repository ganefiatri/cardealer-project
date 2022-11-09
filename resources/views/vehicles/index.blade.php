@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Vehicles') }}</div>

        <div class="card-body">
            <a href="{{route('vehicles.create')}}" class="btn btn-primary">Create a new vehicle</a>
            <div class="mt-3">
                <h3>List of Vehicle</h3>
                <table class="table">
                    <tr>
                        <th>Color</th>
                        <th>Year</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($vehicles as $vehicle)
                        <tr>
                            <td>{{$vehicle->color}}</td>
                            <td>{{$vehicle->year}}</td>
                            <td>{{$vehicle->price}}</td>
                            <td class="d-flex">
                                <a href="{{route('vehicles.edit', [$vehicle])}}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{route('vehicles.destroy', [$vehicle])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Vehicle added yet</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
