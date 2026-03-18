<?php

namespace App\Repositories\Eloquent;

use App\Models\Car;
use App\Repositories\Contracts\CarRepositoryInterface;

class CarRepository implements CarRepositoryInterface
{
    /**
     * @var Car
     */
    protected $model;

    /**
     * CarRepository constructor.
     *
     * @param Car $model
     */
    public function __construct(Car $model)
    {
        $this->model = $model;
    }

    /**
     * Get all available cars.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAvailableCars()
    {
        return $this->model->where('status', 'available')->get();
    }

    /**
     * Get featured cars for the homepage.
     *
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeaturedCars($limit = 4)
    {
        return $this->model->where('status', 'available')->take($limit)->get();
    }

    /**
     * Find a car by its ID.
     *
     * @param int $id
     * @return \App\Models\Car|null
     */
    public function findById($id)
    {
        return $this->model->find($id);
    }
}
