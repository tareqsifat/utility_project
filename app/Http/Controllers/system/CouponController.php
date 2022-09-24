<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon = Coupon::all();
        return view('admin.system.coupon.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.system.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);


        $coupon = new Coupon();

        $coupon->name = $request->name;
        $coupon->discount = $request->discount;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->save();

        return redirect()->route('coupon.index')->with("Success", "Coupon saved Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.system.coupon.view',compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.system.coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $coupon = Coupon::find($id);

        $coupon->name = $request->name;
        $coupon->discount = $request->discount;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->save();

        return redirect()->route('coupon.index')->with("Success", "Coupon Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);

        $coupon->delete();
        
        return redirect()->route('coupon.index')->with("Success", "Coupon deleted Successfully");
    }

    public function apply_coupon(Request $request, $order_id)
    {
        // dd($request->all());
        $now = Carbon::now()->format('Y') . Carbon::now()->format('m') . Carbon::now()->format('d');
        $coupon = Coupon::where('name', $request->name)->first();
        $order = Order::find($order_id);
        if(isset($coupon)){
            $coupon_price = $order->service->price;
            $start = str_replace('-' , "", $coupon->start_date);
            $end = str_replace('-',  "", $coupon->end_date);
            if((int) $start <= (int) $now  && (int) $end <= (int) $now) {
                $coupon_price = (int) $order->service->price - (((int) $order->service->price/100) * (int)$coupon->discount);
            }
            else {
                return view('website.order.payment', compact('coupon_price', 'order'))->with("success","coupon is not avaolable");
            }
        }else {
            return view('website.order.payment', compact('order'))->with('success','coupon not Found');
        }


        return view('website.order.payment', compact('coupon_price', 'order'))->with('success','coupon applied successfully');
    }
}
