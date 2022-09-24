<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ViewErrorBag;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(Auth::check() && Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            return view('admin.index');
        }else {
            return View('website.user.index');
        }
    }
}
