<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PlannedPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // redirect ke halaman login
    public function login()
    {
        $count_user = User::select('id')->count('id');

        return view('login', [
            'count_user' => $count_user,
        ]);
    }

    // cek form dari inputan user
    public function authenticating(Request $request)
    {
        $count_user = User::select('id')->count('id');
        if ($count_user == 0) {
            PlannedPayment::create($request->all());
            User::create($request->all());

            return redirect()->action([AuthController::class, 'login']);
        }
        // Autentikasi dari form inputan login
        $credentials = $request->validate([
            //    validasi menurut nik dan password
            'nik' => ['required'],
            'password' => ['required'],
        ]);

        // redirect ke masing masing level halaman
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // redirect hal index
            // return redirect()->intended('/');

            // redirect page berdasarkan level
            if (Auth::user()->role_id == 4) {
                return redirect('dashboard-administrator');
            }
            if (Auth::user()->role_id == 3) {
                return redirect('dashboard-staff');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('dashboard-supervisor');
            }
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard-manager');
            }
        }

        Session::flash('status', 'failed');
        Session::flash(
            'message',
            'NIK atau Password Salah! Silakan masukan kembali.'
        );

        return redirect('/login');
    }

    // function logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function ViewProfilemanager()
    {
        # code...
        return view('layouts.layout_viewprofilemanager');
    }
    public function ViewProfilesupervisor()
    {
        return view('layouts.layout_viewprofilesupervisor');
    }
    public function ViewProfilestaff()
    {
        # code...
        return view('layouts.layout_viewprofilestaff');
    }
    public function ViewProfileadministrator()
    {
        # code...
        return view('layouts.layout_viewprofileadministrator');
    }
}
