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
    public function fleet()
    {
        $featuredCars = $this->carService->getFeaturedCarsForHome();
        return view('fleet', compact('featuredCars'));
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
