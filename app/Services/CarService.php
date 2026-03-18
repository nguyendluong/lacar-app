<?php

namespace App\Services;

use App\Repositories\Contracts\CarRepositoryInterface;

class CarService
{
    /**
     * @var CarRepositoryInterface
     */
    protected $carRepository;

    /**
     * CarService constructor.
     *
     * @param CarRepositoryInterface $carRepository
     */
    public function __construct(CarRepositoryInterface $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * Get featured cars for the homepage display.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeaturedCarsForHome()
    {
        return $this->carRepository->getFeaturedCars(4);
    }

    /**
     * Get all available cars.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllAvailableCars()
    {
        return $this->carRepository->getAvailableCars();
    }

    /**
     * Get car details and related cars for the detail page.
     *
     * @param int $id
     * @return array|null
     */
    public function getCarDetail($id)
    {
        $car = $this->carRepository->findById($id);
        
        if (!$car) {
            return null;
        }

        $relatedCars = $this->carRepository->getRandomCars(3, $car->id);

        return [
            'car' => $car,
            'relatedCars' => $relatedCars
        ];
    }
}
