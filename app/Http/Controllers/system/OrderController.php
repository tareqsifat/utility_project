<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Facade\Ignition\Exceptions\ViewExceptionWithSolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role_id == 1){
            $order = Order::where('serve_status', '!=', 5)->get();
        }else if(Auth::user()->role_id == 2){
            $order = Order::where('serve_status', '!=',5)->where('technician_id', Auth::user()->id)->get();
        }else if(Auth::user()->role_id == 3){
            $order = Order::where('serve_status', '!=',5)->where('user_id', Auth::user()->id)->get();
        }
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            return view('admin.system.order.index', compact('order'));
        }
        else {
            return View('website.order.index', compact('order'));
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();

        $order->user_id = Auth::user()->id;
        $order->technician_id  = $request->technician_id;
        $order->service_id = $request->service_id;
        $order->creator = Auth::user()->id;
        $order->service_id = $request->service_id;
        $order->save();
        $order->slug = $order->id.uniqid(10);
        $order->save();

        return redirect()->route('active_order_list')->with("success", "Order Created Successfully");
    }

    /*
    // accept function 
    // technician will accept the request
    */
    public function accept_request($id)
    {
        $order = Order::find($id);
        $order->serve_status = 2;
        $order->save();

        return redirect()->back()->with('success','request Accepted successfully');
    }
    public function service_done($id)
    {
        $order = Order::find($id);
        $order->serve_status = 3;
        $order->save();

        return redirect()->back()->with('success','Service done successfully');
    }
    public function payment_page($id)
    {
        $order = Order::find($id);
        return view('website.order.payment',compact('order'));
    }
    public function pay_to_service_man($id)
    {
        $order = Order::find($id);
        $order->serve_status = 4;
        $order->save();
        
        return redirect()->back()->with('success','paid successfully');
    }
    public function get_paid($id)
    {
        $order = Order::find($id);
        $order->serve_status = 5;
        $order->save();

        return redirect()->back()->with('success','Service Completed successfully');
    }
}
