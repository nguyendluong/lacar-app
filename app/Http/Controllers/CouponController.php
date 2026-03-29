<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function apply(Request $request)
    {
        $request->validate(['code' => 'required|string']);

        $coupon = Coupon::whereRaw('LOWER(code) = ?', [strtolower($request->code)])->first();

        if (!$coupon) {
            return response()->json([
                'success' => false,
                'message' => 'Mã khuyến mãi không tồn tại.'
            ]);
        }
        
        if (!$coupon->isValid()) {
            return response()->json([
                'success' => false,
                'message' => 'Mã ưu đãi đã hết hạn hoặc tạm ngưng.'
            ]);
        }

        return response()->json([
            'success' => true,
            'coupon' => $coupon
        ]);
    }
}
