<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarResource;
use App\Models\Car;
use App\Models\CarMake;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\CarRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


class CarController extends Controller
{

    public function get_car_makes(): Collection
    {
        return CarMake::all();
    }
    public function get_car_models(): Collection
    {
        return CarModel::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        if($request->has('owner')){
            return  CarResource::collection(Car::where('owner', $request->input('owner'))->get());
        }
        return CarResource::collection(Car::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request): CarResource
    {
        $car = Car::create($request->validated());
        return new CarResource($car);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car): CarResource
    {
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car): CarResource
    {
        $car->update($request->validated());
        return new CarResource($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car): \Illuminate\Foundation\Application|Response|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $car->delete();
        return response('null', 200);
    }
}
