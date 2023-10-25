<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function IndexManager()
    {
        // melanjutkan ke halaman manager dashboard
        return view('manager.dashboard-manager');
    }
    
}
