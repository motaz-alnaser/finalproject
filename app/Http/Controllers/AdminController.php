<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
     public function users()
    {
        return view('admin.users'); 
    }

    public function activities()
    {
        return view('admin.activities'); 
    }
    public function create_activity()
    {
        return view('admin.create_activity'); 
    }
    
    public function edit_activity()
    {
        return view('admin.create_activity'); 
    }
    public function bookings()
    {
        return view('admin.bookings'); 
    }
    public function admin_profile()
    {
        return view('admin.admin_profile'); 
    }
    public function reviews()
    {
        return view('admin.reviews'); 
    }   
}
