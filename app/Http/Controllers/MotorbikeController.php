<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorbikes = Motorbike::all();
        return view('motorbikes.index', compact('motorbikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::all();
        return view('motorbikes.create', compact('vehicles'));
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
            'suspension' => 'required',
            'transmision' => 'required',
            'vehicle_id' => 'required',
        ]);

        Motorbike::create([
            'engine' => $request->engine,
            'suspension' => $request->suspension,
            'transmision' => $request->transmision,
            'vehicle_id' => $request->vehicle_id,
        ]);

        return redirect()->route('motorbikes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Motorbike $motorbike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorbike $motorbike)
    {
        $vehicles = Vehicle::all();
        return view('motorbikes.edit', compact('motorbike','vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motorbike $motorbike)
    {
        $request->validate([
            'engine' => 'required',
            'suspension' => 'required',
            'transmision' => 'required',
            'vehicle_id' => 'required',
        ]);

        $motorbike->update([
            'engine' => $request->engine,
            'suspension' => $request->suspension,
            'transmision' => $request->transmision,
            'vehicle_id' => $request->vehicle_id,
        ]);

        return redirect()->route('motorbikes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorbike $motorbike)
    {
        $motorbike->delete();
        return redirect()->route('motorbikes.index');
    }
}
