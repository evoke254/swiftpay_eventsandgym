<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\RedeemCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('SessionAlerts');       
    }

    public function index()
    {
        //
        $coupons = Coupon::paginate(40);;

        return view('admin.coupons', compact('coupons'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $coupon = new Coupon;
        $coupon->code = $this->couponCodeGenerator();
        $coupon->redeemable = $request->input('redeemable');
        $coupon->desc = $request->input('title');
        $coupon->validFrom = $request->input('validFrom');
        $coupon->validTo = $request->input('validTo');
        $coupon->amount = $request->input('amount');
/*        $coupon->redeemable = $request->input('redeemClass');
        $coupon->redeemSlots = $request->input('redeemSlots'); */
        $coupon->status = $request->input('status'); 
        $saveCoupon = $coupon->save();
        if (! $saveCoupon) {
            return response()->json(['error'=>'Something went wrong. Please check your values and try again. If you keep getting this error, contact Kahaki Systems on +254 742 968 713']);
        } else {
            return response()->json(['success' =>'Coupon Saved and applied System wide.']);
        }
    }


    public function show(coupon $coupon)
    {
        //
        dd('ttt');
    }

    public function edit(coupon $coupon)
    {
        //
    }


    public function update(Request $request, coupon $coupon)
    {
        $updateCoupon = Coupon::findOrFail($coupon->id);
         if ($updateCoupon->status == 'Active') {
            $updateCoupon->status = 'Cancelled';
        } else {
            $updateCoupon->status = 'Active';
        }
        $updateCoupon->save();

        return redirect()->back()->withSuccessMessage('Coupon Status Updated Succesfully');
    }

    public function destroy(coupon $coupon)
    {
        //
    }


    public function couponCheck(Request $request)
    {
        $getCoupon = DB::table('coupons')
                        ->where('code', '=', $request->input('couponCode'))
                        ->first();
        //Count events/classes already taken
        $countRedeemable = DB::table('redeem_coupons')
                              ->where('couponCode', '=', $getCoupon->code)
                              ->where('user_id', '=', Auth::user()->id)
                              ->count();
        $validTo = strtotime($getCoupon->validTo);
        $today = strtotime(date("Y-m-d H:i:s"));
        //Check coupon validity number of classes, Admin Cancelled and validity date
        if (($countRedeemable > $getCoupon->redeemable) || ($getCoupon->status == 'Cancelled') || ($validTo < $today)) {
                return response()->json(['status'=>'Cancelled']);
        } elseif(($countRedeemable <= $getCoupon->redeemable) && ($getCoupon->status == 'Active') && ($validTo >= $today) ) {
            $redeem = new RedeemCoupon;
            $redeem->user_id = Auth::user()->id;
            $redeem->couponCode = $getCoupon->code;
            $redeem->class_events_id = $getCoupon->id;
            $redeem->save();
            return response()->json($getCoupon);   
        }
    }
}
