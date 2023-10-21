<?php

namespace App\Http\Controllers;

use App\Repositories\CarRepository;

class CarController extends Controller
{
    protected $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    public function index()
    {
        $cars = $this->carRepository->getAll();

        foreach ($cars as $car) {
            echo $car->name . "<br>";
        }
    }

    public function show($id)
    {
        return $this->carRepository->find($id);
    }

    public function store(Request $request)
    {
        return $this->carRepository->create($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->carRepository->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->carRepository->delete($id);
        return ['message' => 'Car deleted'];
    }
}