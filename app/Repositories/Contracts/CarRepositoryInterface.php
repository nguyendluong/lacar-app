<?php

namespace App\Repositories\Contracts;

interface CarRepositoryInterface
{
    /**
     * Get all available cars.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAvailableCars();

    /**
     * Get featured cars for the homepage.
     *
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeaturedCars($limit = 4);

    /**
     * Find a car by its ID.
     *
     * @param int $id
     * @return \App\Models\Car|null
     */
    public function findById($id);

    /**
     * Get random cars for related cars section.
     *
     * @param int $limit
     * @param int|null $excludeId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRandomCars($limit = 3, $excludeId = null);
}
