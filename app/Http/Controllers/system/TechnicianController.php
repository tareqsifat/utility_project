<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function index()
    {
        $collection = User::where('role_id',2)->where('is_active',1)->where('is_blocked',0)->get();
        return view('admin.system.technician.index', compact('collection'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.system.technician.create');
    }

    public function block($id)
    {
        $technician = User::where('id', $id)->first();
        if($technician->role_id == 2 && $technician->is_blocked == 0){

            $technician->is_blocked = 1;

            $technician->save();

            return redirect()->route('technician.index')->with('success', "Technician blocked Successfully");
        }else {
            return redirect()->route('technician.index')->with('success', "Technician not found");
        }
    }

    public function unblock($id)
    {
        $technician = User::where('id', $id)->first();
        if($technician->role_id == 2 && $technician->is_blocked == 1){
            $technician->is_blocked = 0;
            $technician->save();

            return redirect()->route('technician.index')->with('success', "Technician unblocked Successfully");
        }else {
            return redirect()->route('technician.index')->with('success', "Technician not found");
        }
    }
    public function activate($id)
    {
        $technician = User::where('id', $id)->first();

        if($technician->role_id == 2 && $technician->is_active == 0){
            $technician->is_active = 1;
            $technician->save();

            return redirect()->route('technician.index')->with('success', "Technician Activated Successfully");
        }else {
            return redirect()->route('technician.index')->with('success', "Technician not found");
        }
    }

    public function block_list()
    {
        $collection = User::where('role_id', 2)->where('is_active',1)->where('is_blocked', 1)->get();

        return view('admin.system.technician.index', compact('collection'));
    }
    
    public function waiting_list()
    {
        $collection = User::where('role_id', 2)->where('is_active',0)->where('is_blocked',0)->get();

        return view('admin.system.technician.index', compact('collection'));
    }
}
