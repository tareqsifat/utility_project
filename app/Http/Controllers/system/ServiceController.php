<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Service::all();
        return view('admin.system.service.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technician = User::where('role_id',2)->get();
        return view('admin.system.service.create', compact('technician'));
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
            'price' => 'required',
            'service_time' => 'required',
        ]);

        $service = new Service();

        $service->photo = $request->photo;
        $service->name = $request->name;
        $service->service_id = $request->service_id;
        $service->promotion_id = $request->promotion_id;
        $service->technician_id = $request->technician_id;
        $service->price = $request->price;
        $service->service_time = $request->service_time;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('service.index')->with("Success", "service saved Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('admin.system.service.view',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $technician = User::where('role_id',2)->get();
        return view('admin.system.service.edit',compact('service','technician'));
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

        $service = Service::find($id);

        $service->name = $request->name;
        $service->user_id = $request->user_id;
        $service->service_id = $request->service_id;
        $service->promotion_id = $request->promotion_id;
        $service->technician_id = $request->technician_id;
        $service->charge = $request->charge;
        $service->service_time = $request->service_time;
        $service->save();

        return redirect()->route('service_index')->with("Success", "service Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        $service->delete();
        
        return redirect()->route('service_index')->with("Success", "service deleted Successfully");
    }
}
