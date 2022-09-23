<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\ServerBag;

class WebsiteController extends Controller 
{
    public function index()
    {
        $service = Service::where('featured', 1)->select(['id','technician_id','name', 'description'])->get();
        return view('website.index',compact('service'));
    }
    public function about()
    {
        return view('website.about');
    }
    public function service()
    {
        $service = Service::select(['id','name', 'price','technician_id', 'service_time'])->get();
        return view('website.services',compact('service'));
    }
    public function service_details($id)
    {
        $service = Service::find($id);
        return view('website.services_details',compact('service'));
    }
    public function contact()
    {
        return view('website.contact');
    }
}
