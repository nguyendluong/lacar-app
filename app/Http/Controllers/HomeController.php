<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CarService;

class HomeController extends Controller
{
    /**
     * @var CarService
     */
    protected $carService;

    /**
     * HomeController constructor.
     *
     * @param CarService $carService
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * Show the application dashboard (Home).
     */
    public function index()
    {
        $featuredCars = $this->carService->getFeaturedCarsForHome();
        return view('home', compact('featuredCars'));
    }

    /**
     * Show the fleet page.
     */
    public function fleet(Request $request)
    {
        $featuredCars = $this->carService->getFeaturedCarsForHome();
        $featuredCars->load(['bookings' => function($query) {
            $query->whereIn('status', ['pending', 'confirmed'])
                  ->where('end_date', '>=', now()->startOfDay());
        }]);

        $startDateStr = $request->query('start_date');
        $startDate = $startDateStr ? \Carbon\Carbon::parse($startDateStr)->startOfDay() : now()->startOfDay();
        // Prevent seeing past dates
        if ($startDate->isPast() && !$startDate->isToday()) {
            $startDate = now()->startOfDay();
        }

        $days = [];
        $currentDate = clone $startDate;
        for($i = 0; $i < 15; $i++) {
            $days[] = clone $currentDate;
            $currentDate->addDay();
        }

        $showCalendar = $request->query('show_calendar') == '1';

        return view('fleet', compact('featuredCars', 'days', 'showCalendar', 'startDate'));
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the how to rent page.
     */
    public function howToRent()
    {
        return view('how_to_rent');
    }

    /**
     * Show the pricing page.
     */
    public function pricing()
    {
        $cars = $this->carService->getAllAvailableCars();
        return view('pricing', compact('cars'));
    }
}
