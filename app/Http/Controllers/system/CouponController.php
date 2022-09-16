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
        $service = Coupon::all();
        return view('admin.system.coupon.index',compact('service'));
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

        $service = new Coupon();

        $service->name = $request->name;
        $service->user_id = $request->user_id;
        $service->service_id = $request->service_id;
        $service->promotion_id = $request->promotion_id;
        $service->technician_id = $request->technician_id;
        $service->charge = $request->charge;
        $service->service_time = $request->service_time;
        $service->save();

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
        $service = Coupon::find($id);
        return view('admin.system.coupon.view',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Coupon::find($id);
        return view('admin.system.coupon.edit',compact('service'));
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

        $service = Coupon::find($id);

        $service->name = $request->name;
        $service->user_id = $request->user_id;
        $service->service_id = $request->service_id;
        $service->promotion_id = $request->promotion_id;
        $service->technician_id = $request->technician_id;
        $service->charge = $request->charge;
        $service->service_time = $request->service_time;
        $service->save();

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
        $service = Coupon::find($id);

        $service->delete();
        
        return redirect()->route('coupon_index')->with("Success", "Coupon deleted Successfully");
    }
}
