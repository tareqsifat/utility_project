<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller 
{
    public function index()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function service()
    {
        return view('website.services');
    }
    public function contact()
    {
        return view('website.contact');
    }
}
