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
        $startDateStr = $request->query('start_date');
        $endDateStr = $request->query('end_date');
        
        $startDate = $startDateStr ? \Carbon\Carbon::parse($startDateStr)->startOfDay() : now()->startOfDay();
        $endDate = $endDateStr ? \Carbon\Carbon::parse($endDateStr)->endOfDay() : null;

        // Prevent seeing past dates
        if ($startDate->isPast() && !$startDate->isToday()) {
            $startDate = now()->startOfDay();
        }

        $query = \App\Models\Car::query()->where('status', 'available');

        // Filter out cars that are booked in the selected date range
        if ($startDateStr && $endDateStr && $endDate && $endDate->greaterThanOrEqualTo($startDate)) {
            $query->whereDoesntHave('bookings', function($q) use ($startDate, $endDate) {
                $q->whereIn('status', ['pending', 'confirmed', 'picked_up'])
                  ->where(function($q2) use ($startDate, $endDate) {
                      $q2->whereBetween('start_date', [$startDate, $endDate])
                         ->orWhereBetween('end_date', [$startDate, $endDate])
                         ->orWhere(function($q3) use ($startDate, $endDate) {
                             $q3->where('start_date', '<=', $startDate)
                                ->where('end_date', '>=', $endDate);
                         });
                  });
            });
        }

        $featuredCars = $query->get();
        
        // Load bookings strictly for the calendar visualization part
        $featuredCars->load(['bookings' => function($query) {
            $query->whereIn('status', ['pending', 'confirmed'])
                  ->where('end_date', '>=', now()->startOfDay());
        }]);

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
