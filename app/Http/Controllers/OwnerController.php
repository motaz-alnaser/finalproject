<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function dashboard()
    {
        return view('owner.dashboard');
    }
     public function bookings()
    {
        return view('owner.bookings'); 
    }

    public function add_activity()
    {
        return view('owner.add_activity'); 
    }
     public function earnings()
    {
        return view('owner.earnings'); 
    }

    public function reviews()
    {
        return view('owner.reviews'); 
    }
}