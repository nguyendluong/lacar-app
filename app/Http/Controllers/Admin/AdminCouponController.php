<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class AdminCouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::orderBy('created_at', 'desc')->get();
        return view('admin.coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.coupons.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|unique:coupons|max:50',
            'type' => 'required|in:percent,fixed',
            'value' => 'required|numeric|min:0',
            'expires_at' => 'nullable|date',
        ]);
        
        $validated['status'] = $request->has('status');

        Coupon::create($validated);
        return redirect()->route('admin.coupons.index')->with('success', 'Đã rạo mã khuyến mãi mới thành công!');
    }

    public function edit(Coupon $coupon)
    {
        return view('admin.coupons.edit', compact('coupon'));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:50|unique:coupons,code,' . $coupon->id,
            'type' => 'required|in:percent,fixed',
            'value' => 'required|numeric|min:0',
            'expires_at' => 'nullable|date',
        ]);

        $validated['status'] = $request->has('status');

        $coupon->update($validated);
        return redirect()->route('admin.coupons.index')->with('success', 'Đã cập nhật mã khuyến mãi thành công!');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('admin.coupons.index')->with('success', 'Đã thu hồi / xóa mã khuyến mãi!');
    }
}
