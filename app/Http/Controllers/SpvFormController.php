<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SpvFormController extends Controller
{
    //Proses yang ada pada fitur Standar Formulir level supervisor

    // Proses fitur tambah formulir

    public function StandarForm(Request $request)
    {
        $keyword = $request->keyword;

        $standar_forms = Forms::withTrashed()->get();
        $standar_forms = Forms::where(
            'name_form',
            'LIKE',
            '%' . $keyword . '%'
        )->paginate(20);
        // melanjutkan ke halaman standar form
        return view('supervisor.standar_form.standar-form', [
            'standar_forms' => $standar_forms,
        ]);
    }

    public function EditDataForm(Request $request, $id)
    {
        $standar_forms = Forms::findOrFail($id);

        $list_forms = Forms::select('name_form')->get();

        // melanjutkan ke halaman standar form
        return view('supervisor.standar_form.edit-form', [
            'standar_forms' => $standar_forms,
            'list_forms' => $list_forms,
        ]);
    }

    public function ProcessTambahDataForm(Request $request)
    {
        $newNameFileExcel = '';
        $newNameFilePdf = '';

        if ($request->file('form_excel')) {
            // merubah namafile excel
            $extensionExcel = $request
                ->file('form_excel')
                ->getClientOriginalExtension();
            // membuat kode unik berdasarkan data waktu
            $waktu = now()->timestamp;
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            $newNameFileExcel =
                $request->name_form . '-' . $kodeunik . '.' . $extensionExcel;

            $request
                ->file('form_excel')
                ->storeAs('supervisor/form/excel', $newNameFileExcel);
        }

        $request['file_form_excel'] = $newNameFileExcel;

        // validasi data  dari inputan
        $validated = $request->validate([
            'name_form' => 'required',

            'uploaded_by' => 'required',
        ]);

        // simpan inputan
        $standar_forms = Forms::create($request->all());

        DB::table('log_activity')->insert([
            'aktivitas' => $request->aktivitas . ' ' . $request['name_form'],
            'waktu' => $request->waktu,
        ]);

        if ($standar_forms) {
            Session::flash('status', 'sukses');
            Session::flash('message', 'Data berhasil ditambahkan!');
        }

        return redirect('supervisor-standar-form');
    }

    public function UpdateDataForm(Request $request, $id)
    {
        $standar_forms = Forms::findOrfail($id);

        $newNameFileExcel = $standar_forms->file_form_excel;

        if ($request->file('form_excel')) {
            // merubah namafile excel
            $extensionExcel = $request
                ->file('form_excel')
                ->getClientOriginalExtension();

            $waktu = now()->timestamp;
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            $newNameFileExcel =
                $request->name_form . '-' . $kodeunik . '.' . $extensionExcel;

            $request
                ->file('form_excel')
                ->storeAs('supervisor/form/excel', $newNameFileExcel);
        }

        $request['file_form_excel'] = $newNameFileExcel;

        // validasi data  dari inputan
        $validated = $request->validate([
            'name_form' => 'required',
            'uploaded_by' => 'required',
        ]);

        $standar_forms->update($request->all());

        DB::table('log_activity')->insert([
            'aktivitas' => $request->aktivitas . ' ' . $request['name_form'],
            'waktu' => $request->waktu,
        ]);

        if ($standar_forms) {
            Session::flash('status', 'sukses');
            Session::flash('message', 'Edit Data berhasil!');
        }

        // melanjutkan ke halaman standar form
        return redirect('/supervisor-standar-form');
    }

    public function DeleteDataForm($id)
    {
        $standar_forms = Forms::findOrfail($id);

        // melanjutkan ke halaman standar form
        return view('supervisor.standar_form.delete-form', [
            'standar_forms' => $standar_forms,
        ]);
    }

    public function DeleteDetailDataForm(Request $request, $id)
    {
        // Hapus dengan query builder
        // $deletedForms  = DB::table('standar_forms')->where('id', $id)->delete();

        // hapus dengan elquoment
        $deletedForms = Forms::findOrFail($id);

        DB::table('log_activity')->insert([
            'aktivitas' => $request->aktivitas,
            'waktu' => $request->waktu,
        ]);
        $deletedForms->delete();

        if ($deletedForms) {
            Session::flash('statusdeleted', 'delete');
            Session::flash('messagedeleted', 'Hapus Form Berhasil!');
        }

        return redirect('/supervisor-standar-form');
    }

    public function StandarFormDeadActive(Request $request)
    {
        $keyword = $request->keyword;

        // $deadactiveforms = Forms::onlyTrashed()->get();
        $deadactiveforms = Forms::onlyTrashed()
            ->where('name_form', 'LIKE', '%' . $keyword . '%')
            ->paginate(20);

        return view('supervisor.standar_form.standar-form-deadactive', [
            'standar_forms' => $deadactiveforms,
        ]);
    }

    public function StandarFormRestore($id)
    {
        $deadactiveforms = Forms::withTrashed()
            ->where('id', $id)
            ->restore();

        if ($deadactiveforms) {
            Session::flash('status', 'succes');
            Session::flash('message', 'Restore telah berhasil!');
        }

        return redirect('/supervisor-standar-form');
    }

    public function TambahDataForm()
    {
        // melanjutkan ke halaman standar form
        return view('supervisor.standar_form.tambah-form');
    }
}
