<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class AdminCarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('created_at', 'desc')->get();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'license_plate' => 'required|string|unique:cars',
            'model' => 'required|string',
            'image' => 'required|string', 
            'battery_percent' => 'required|integer|min:0|max:100',
            'range_km' => 'required|integer',
            'price_per_hour' => 'required|numeric',
            'price_per_day' => 'required|numeric',
            'price_per_week' => 'required|numeric',
            'status' => 'required|in:available,rented,maintenance',
        ]);

        Car::create($validated);
        return redirect()->route('admin.cars.index')->with('success', 'Đã thêm xe thành công');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'license_plate' => 'required|string|unique:cars,license_plate,' . $car->id,
            'model' => 'required|string',
            'image' => 'required|string',
            'battery_percent' => 'required|integer|min:0|max:100',
            'range_km' => 'required|integer',
            'price_per_hour' => 'required|numeric',
            'price_per_day' => 'required|numeric',
            'price_per_week' => 'required|numeric',
            'status' => 'required|in:available,rented,maintenance',
        ]);

        $car->update($validated);
        return redirect()->route('admin.cars.index')->with('success', 'Đã cập nhật xe thành công');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Đã xóa xe thành công');
    }
}
