<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CarService;

class CarController extends Controller
{
    /**
     * @var CarService
     */
    protected $carService;

    /**
     * CarController constructor.
     *
     * @param CarService $carService
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * Show the car detail page.
     *
     * @param int $id
     */
    public function show($id)
    {
        $data = $this->carService->getCarDetail($id);

        if (!$data) {
            abort(404, 'Car not found');
        }

        return view('car_detail', [
            'car' => $data['car'],
            'relatedCars' => $data['relatedCars']
        ]);
    }
}
