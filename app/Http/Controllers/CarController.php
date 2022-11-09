<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::all();
        return view('cars.create', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'engine' => 'required',
            'seats' => 'required',
            'type' => 'required',
            'vehicle_id' => 'required',
        ]);

        Car::create([
            'engine' => $request->engine,
            'seats' => $request->seats,
            'type' => $request->type,
            'vehicle_id' => $request->vehicle_id,
        ]);

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $vehicles = Vehicle::all();
        return view('cars.edit', compact('car','vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'engine' => 'required',
            'seats' => 'required',
            'type' => 'required',
            'vehicle_id' => 'required',
        ]);

        $car->update([
            'engine' => $request->engine,
            'seats' => $request->seats,
            'type' => $request->type,
            'vehicle_id' => $request->vehicle_id,
        ]);

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');

    }
}
