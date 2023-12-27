<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Pagination\Paginator;

class AdministratorController extends Controller
{
    public function IndexAdministrator(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::select(
            'id',
            'name',
            'first_name',
            'nik',
            'jabatan',
            'created_by'
        )
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('first_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nik', 'LIKE', '%' . $keyword . '%')
            ->orWhere('section', 'LIKE', '%' . $keyword . '%')
            ->latest('id')
            ->paginate(10);

        return view('administrator.account.kelola-akun', [
            'users' => $users,
        ]);
    }

    // Mengalihkan ke view register
    public function register()
    {
        $users = User::select('id', 'first_name', 'nik')
            ->latest('id')
            ->paginate(8);
        $roles = Role::select('id', 'name')->get();
        return view('administrator.account.registrasi', [
            'users' => $users,
            'roles' => $roles,
        ]);
        // melanjutkan ke halaman registrasi via administrator
        // return view('administrator.registrasi');
    }

    // Proses register
    public function registerprocess(Request $request)
    {
        // validasi data dari inputan
        $validated = $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'nik' => 'required',
            'jabatan' => 'required',
            'created_by' => 'required',
            'role_id' => 'required',
        ]);

        // Hash Password
        $request['password'] = Hash::make($request->password);
        // simpan inputan
        $user = User::create($request->all());

        // jika berhasil akan menampilkan berikut
        Session::flash('status', 'succses');
        Session::flash('message', 'Registrasi Berhasil! Silakan Gunakan Akun.');

        // melanjutkan ke halaman registrasi
        return redirect('registrasi-account');
    }


    public function KelolaAkun(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::select(
            'id',
            'name',
            'first_name',
            'nik',
            'jabatan',
            'created_by'
        )
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('first_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nik', 'LIKE', '%' . $keyword . '%')
            ->orWhere('section', 'LIKE', '%' . $keyword . '%')
            ->latest('id')
            ->paginate(10);

        return view('administrator.account.kelola-akun', [
            'users' => $users,
        ]);
    }
    public function EditAkun($id)
    {
        $users = User::findOrfail($id);
        $roles = Role::select('id', 'name')->get();

        $users1 = User::select('id', 'first_name', 'nik')
            ->latest('id')
            ->paginate(8);

        return view('administrator.account.edit-akun', [
            'users' => $users,
            'users1' => $users1,
            'roles' => $roles,
        ]);
    }

    public function ProcessEditAkun(Request $request, $id)
    {
        $users = User::findOrfail($id);

        // Hash Password
        $request['password'] = Hash::make($request->password);
        $users->update($request->all());

        return redirect()->action([
            AdministratorController::class,
            'KelolaAkun',
        ]);
    }
    public function HapusAkun($id)
    {
        $users = User::findOrfail($id);

        $users1 = User::select('id', 'first_name', 'nik')
            ->latest('id')
            ->paginate(8);

        return view('administrator.account.hapus-akun', [
            'users' => $users,
            'users1' => $users1,
        ]);
    }

    public function ProcessHapusAkun(Request $request, $id)
    {
        $users = User::findOrfail($id);

        $users->delete();
        return redirect()->action([
            AdministratorController::class,
            'KelolaAkun',
        ]);
    }
}
