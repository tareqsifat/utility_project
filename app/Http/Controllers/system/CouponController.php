<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
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
            'charge' => 'required',
            'service_time' => 'required',
        ]);

        $coupon = new Coupon();

        $coupon->name = $request->name;
        $coupon->user_id = $request->user_id;
        $coupon->service_id = $request->service_id;
        $coupon->promotion_id = $request->promotion_id;
        $coupon->technician_id = $request->technician_id;
        $coupon->charge = $request->charge;
        $coupon->service_time = $request->service_time;
        $coupon->save();

        return redirect()->route('service_index')->with("Success", "Coupon saved Successfully");
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
            'charge' => 'required',
            'service_time' => 'required',
        ]);

        $coupon = Coupon::find($id);

        $coupon->name = $request->name;
        $coupon->user_id = $request->user_id;
        $coupon->service_id = $request->service_id;
        $coupon->promotion_id = $request->promotion_id;
        $coupon->technician_id = $request->technician_id;
        $coupon->charge = $request->charge;
        $coupon->service_time = $request->service_time;
        $coupon->save();

        return redirect()->route('service_index')->with("Success", "Coupon Updated Successfully");
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
        
        return redirect()->route('coupon_index')->with("Success", "Coupon deleted Successfully");
    }
}
