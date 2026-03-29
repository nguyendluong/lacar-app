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

        $bookedRanges = \App\Models\Booking::where('car_id', $id)
            ->whereIn('status', ['confirmed', 'picked_up', 'pending'])
            ->where('end_date', '>=', now())
            ->get(['start_date', 'end_date'])
            ->map(function ($booking) {
                return [
                    'from' => \Carbon\Carbon::parse($booking->start_date)->format('Y-m-d H:i'),
                    'to' => \Carbon\Carbon::parse($booking->end_date)->format('Y-m-d H:i')
                ];
            })->toJson();

        return view('car_detail', [
            'car' => $data['car'],
            'relatedCars' => $data['relatedCars'],
            'bookedRanges' => $bookedRanges
        ]);
    }
}
