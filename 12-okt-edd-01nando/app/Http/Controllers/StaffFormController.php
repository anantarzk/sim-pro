<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;

class StaffFormController extends Controller
{
    public function StaffStandarForm(Request $request)
    {
        $keyword = $request->keyword;

        $standar_forms = Forms::withTrashed()->get();
        $standar_forms = Forms::where(
            'name_form',
            'LIKE',
            '%' . $keyword . '%'
        )->paginate(20);
        // melanjutkan ke halaman standar form
        return view('staff.standar_form.standar-form', [
            'standar_forms' => $standar_forms,
        ]);
    }
}
