@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Motorbikes') }}</div>

        <div class="card-body">
            <a href="{{route('motorbikes.create')}}" class="btn btn-primary">Create a new Motorbikes</a>
            <div class="mt-3">
                <h3>List of Motorbikes</h3>
                <table class="table">
                    <tr>
                        <th>Engine</th>
                        <th>Suspension</th>
                        <th>Transmision</th>
                        <th>Color</th>
                        <th>Year</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($motorbikes as $motorbike)
                        <tr>
                            <td>{{$motorbike->engine}}</td>
                            <td>{{$motorbike->suspension}}</td>
                            <td>{{$motorbike->transmision}}</td>
                            <td>{{$motorbike->vehicle->color}}</td>
                            <td>{{$motorbike->vehicle->year}}</td>
                            <td>{{$motorbike->vehicle->price}}</td>
                            <td class="d-flex">
                                <a href="{{route('motorbikes.edit', [$motorbike])}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{route('motorbikes.destroy', [$motorbike])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Motorbikes added yet</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
