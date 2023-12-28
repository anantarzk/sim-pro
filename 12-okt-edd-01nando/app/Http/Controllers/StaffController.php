<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function IndexStaff()
    {
        // melanjutkan ke halaman staff dashboard
        return view('staff.dashboard-staff');
    }
    
}
