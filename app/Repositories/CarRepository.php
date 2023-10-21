<?php

namespace App\Repositories;

use App\Models\Car;

class CarRepository
{
    public function getAll()
    {
        return Car::all();
    }

	public function find($id)
    {
        return Car::find($id);
    }

    public function create(array $data)
    {
        return Car::create($data);
    }

    public function update($id, array $data)
    {
        $car = Car::find($id);
        $car->update($data);
        return $car;
    }

    public function delete($id)
    {
        $car = Car::find($id);
        $car->delete();
    }
}