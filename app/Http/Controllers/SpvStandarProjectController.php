<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StandarProject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\support\facades\Validator;

class SpvStandarProjectController extends Controller
{
    public function StandarProject()
    {
        $spCount = StandarProject::all()->count('id');
        $standarproject = StandarProject::all()->where('marking', 'Standar-1');
        return view('supervisor.standarproject.tambah-standar-project', [
            'standarproject' => $standarproject,
            'spCount' => $spCount,
        ]);
    }
    public function ProcessStandarProject(Request $request)
    {
        StandarProject::create($request->all());
        return redirect()->action([
            SpvStandarProjectController::class,
            'StandarProject',
        ]);
    }
    public function ProcessEditStandarProject(Request $request)
    {
        $standarproject = StandarProject::all()
            ->where('marking', 'Standar-1')
            ->first();

            $filesToValidate = [
                'as_file_fr_sheet_form' => 'Fund Request',
                'as_file_dr_m_sheet_form' => 'Drawing Mechanical',
                'as_file_dr_e_sheet_form' => 'Drawing Electrical',
                'as_file_lay_aprvl_sheet_form' => 'Layout Approval',
                'as_file_dr_aprvl_sheet_form' => 'Drawing Approval',
                'as_file_design_sheet_form' => 'Design Sheet',
                'as_file_dr_meeting_form' => 'DR Meeting',
                'as_file_est_budget_form' => 'Estimasi Budget',
                'as_file_pr_parts_material_form' => 'PR Parts & Material',
                'as_file_pr_pekerjaan_jasa_form' => 'PR Pekerjaan/Jasa',
                'as_file_pr_manufaktur_form' => 'PR Manufaktur',
                'as_file_pr_per_form' => 'PR PER',
                'as_file_pr_rfq_form' => 'PR RFQ',
                'as_file_mn_ir' => 'Manuf. Inspection Report',
                'as_file_ipo_form' => 'Izin Power On',
                'as_file_ecr_form' => 'Equipment Check Reports',
                'as_file_sc_form' => 'Safety Check',
                'as_file_sccs_form' => 'Safety Completeness Check',
                'as_file_in_ir_form' => 'Inspection Report',
                'as_file_iperiksam_form' => 'Izin Periksa Mesin',
                'as_file_qas_form' => 'Quality Assurance System',
                'as_file_ipakaim_form' => 'Izin Pakai Mesin',
                'as_file_training_form' => 'Dokumen Training',
                'as_file_lup_form' => 'Listup Trouble',
                'as_file_camb_form' => 'Kontrol Awal Mesin Baru',
                'as_file_cl_im_form' => 'Instruction Manual',
                'as_file_chor_form' => 'Completion & Handover Report'
            ];

            $rules = [];
            $messages = [];

            foreach ($filesToValidate as $fieldName => $nama) {
            $rules["$fieldName"] = 'nullable|mimes:docx,xlsx,dwg,txt|max:4096';
            $messages["$fieldName.mimes"] = "File $nama harus memiliki ekstensi .docx, .xlsx, atau .dwg.";
            $messages["$fieldName.max"] = "Ukuran file $nama tidak boleh lebih dari 4 MB.";
            }
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

        $newNamefr_sheet_form = '';
        $newNamedr_m_sheet_form = '';
        $newNamedr_e_sheet_form = '';
        $newNamelay_aprvl_sheet_form = '';
        $newNamedr_aprvl_sheet_form = '';
        $newNamedesign_sheet_form = '';
        $newNamedr_meeting_form = '';
        $newNameest_budget_form = '';
        $newNamepr_parts_material_form = '';
        $newNamepr_pekerjaan_jasa_form = '';
        $newNamepr_manufaktur_form = '';
        $newNamepr_rfq_form = '';
        $newNamepr_per_form = '';
        $newNamemn_ir_form = '';
        $newNameipo_form = '';
        $newNameecr_form = '';
        $newNamesc_form = '';
        $newNamesccs_form = '';
        $newNamein_ir_form = '';
        $newNameiperiksam_form = '';
        $newNameqas_form = '';
        $newNameipakaim_form = '';
        $newNametraining_form = '';
        $newNamelup_form = '';
        $newNamecamb_form = '';
        $newNamecl_im_form = '';
        $newNamechor_form = '';

        if ($request->file('as_file_fr_sheet_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_fr_sheet_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_fr_sheet_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamefr_sheet_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_fr_sheet_form')
                ->storeAs('supervisor/standarproject', $newNamefr_sheet_form);
        }
        // batas arrangement
        if ($request->file('as_file_dr_m_sheet_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_dr_m_sheet_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_dr_m_sheet_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamedr_m_sheet_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_dr_m_sheet_form')
                ->storeAs('supervisor/standarproject', $newNamedr_m_sheet_form);
        }
        if ($request->file('as_file_dr_e_sheet_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_dr_e_sheet_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_dr_e_sheet_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamedr_e_sheet_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_dr_e_sheet_form')
                ->storeAs('supervisor/standarproject', $newNamedr_e_sheet_form);
        }
        if ($request->file('as_file_lay_aprvl_sheet_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_lay_aprvl_sheet_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_lay_aprvl_sheet_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamelay_aprvl_sheet_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_lay_aprvl_sheet_form')
                ->storeAs(
                    'supervisor/standarproject',
                    $newNamelay_aprvl_sheet_form
                );
        }
        if ($request->file('as_file_dr_aprvl_sheet_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_dr_aprvl_sheet_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_dr_aprvl_sheet_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamedr_aprvl_sheet_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_dr_aprvl_sheet_form')
                ->storeAs(
                    'supervisor/standarproject',
                    $newNamedr_aprvl_sheet_form
                );
        }
        if ($request->file('as_file_design_sheet_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_design_sheet_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_design_sheet_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamedesign_sheet_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_design_sheet_form')
                ->storeAs(
                    'supervisor/standarproject',
                    $newNamedesign_sheet_form
                );
        }
        if ($request->file('as_file_dr_meeting_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_dr_meeting_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_dr_meeting_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamedr_meeting_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_dr_meeting_form')
                ->storeAs('supervisor/standarproject', $newNamedr_meeting_form);
        }
        if ($request->file('as_file_est_budget_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_est_budget_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_est_budget_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNameest_budget_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_est_budget_form')
                ->storeAs('supervisor/standarproject', $newNameest_budget_form);
        }
        // batas purchasing
        if ($request->file('as_file_pr_parts_material_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_pr_parts_material_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_pr_parts_material_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamepr_parts_material_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_pr_parts_material_form')
                ->storeAs(
                    'supervisor/standarproject',
                    $newNamepr_parts_material_form
                );
        }
        if ($request->file('as_file_pr_pekerjaan_jasa_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_pr_pekerjaan_jasa_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_pr_pekerjaan_jasa_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamepr_pekerjaan_jasa_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_pr_pekerjaan_jasa_form')
                ->storeAs(
                    'supervisor/standarproject',
                    $newNamepr_pekerjaan_jasa_form
                );
        }
        if ($request->file('as_file_pr_manufaktur_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_pr_manufaktur_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_pr_manufaktur_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamepr_manufaktur_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_pr_manufaktur_form')
                ->storeAs(
                    'supervisor/standarproject',
                    $newNamepr_manufaktur_form
                );
        }
        if ($request->file('as_file_pr_rfq_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_pr_rfq_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_pr_rfq_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamepr_rfq_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_pr_rfq_form')
                ->storeAs('supervisor/standarproject', $newNamepr_rfq_form);
        }
        if ($request->file('as_file_pr_per_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_pr_per_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_pr_per_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamepr_per_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_pr_per_form')
                ->storeAs('supervisor/standarproject', $newNamepr_per_form);
        }
        //manufacturing
        if ($request->file('as_file_mn_ir_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_mn_ir_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_mn_ir_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamemn_ir_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_mn_ir_form')
                ->storeAs('supervisor/standarproject', $newNamemn_ir_form);
        }
        //installation
        if ($request->file('as_file_ipo_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_ipo_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_ipo_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNameipo_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_ipo_form')
                ->storeAs('supervisor/standarproject', $newNameipo_form);
        }
        if ($request->file('as_file_ecr_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_ecr_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_ecr_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNameecr_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_ecr_form')
                ->storeAs('supervisor/standarproject', $newNameecr_form);
        }
        if ($request->file('as_file_sc_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_sc_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_sc_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamesc_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_sc_form')
                ->storeAs('supervisor/standarproject', $newNamesc_form);
        }
        if ($request->file('as_file_sccs_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_sccs_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_sccs_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamesccs_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_sccs_form')
                ->storeAs('supervisor/standarproject', $newNamesccs_form);
        }
        if ($request->file('as_file_in_ir_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_in_ir_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_in_ir_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamein_ir_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_in_ir_form')
                ->storeAs('supervisor/standarproject', $newNamein_ir_form);
        }
        if ($request->file('as_file_iperiksam_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_iperiksam_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_iperiksam_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNameiperiksam_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_iperiksam_form')
                ->storeAs('supervisor/standarproject', $newNameiperiksam_form);
        }
        if ($request->file('as_file_qas_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_qas_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_qas_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNameqas_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_qas_form')
                ->storeAs('supervisor/standarproject', $newNameqas_form);
        }
        if ($request->file('as_file_ipakaim_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_ipakaim_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_ipakaim_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNameipakaim_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_ipakaim_form')
                ->storeAs('supervisor/standarproject', $newNameipakaim_form);
        }
        if ($request->file('as_file_training_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_training_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_training_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNametraining_form =
                $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_training_form')
                ->storeAs('supervisor/standarproject', $newNametraining_form);
        }
        if ($request->file('as_file_lup_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_lup_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_lup_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamelup_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_lup_form')
                ->storeAs('supervisor/standarproject', $newNamelup_form);
        }
        if ($request->file('as_file_camb_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_camb_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_camb_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamecamb_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_camb_form')
                ->storeAs('supervisor/standarproject', $newNamecamb_form);
        }
        if ($request->file('as_file_cl_im_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_cl_im_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_cl_im_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamecl_im_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_cl_im_form')
                ->storeAs('supervisor/standarproject', $newNamecl_im_form);
        }
        if ($request->file('as_file_chor_form')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_file_chor_form')
                ->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_file_chor_form')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newNamechor_form = $filename . '_' . $kodeunik . '.' . $extension;

            // Menyimpan nama file
            $request
                ->file('as_file_chor_form')
                ->storeAs('supervisor/standarproject', $newNamechor_form);
        }

        //fr
        if ($request['as_file_fr_sheet_form'] != '') {
            $request['file_fr_sheet_form'] = $newNamefr_sheet_form;
            $request['up_fr_sheet_form'] = $request['as_up_fr_sheet_form'];
            $request['date_fr_sheet_form'] = $request['as_date_fr_sheet_form'];
        }
        //ar
        if ($request['as_file_dr_m_sheet_form'] != '') {
            $request['file_dr_m_sheet_form'] = $newNamedr_m_sheet_form;
            $request['up_dr_m_sheet_form'] = $request['as_up_dr_m_sheet_form'];
            $request['date_dr_m_sheet_form'] =
                $request['as_date_dr_m_sheet_form'];
        }
        if ($request['as_file_dr_e_sheet_form'] != '') {
            $request['file_dr_e_sheet_form'] = $newNamedr_e_sheet_form;
            $request['up_dr_e_sheet_form'] = $request['as_up_dr_e_sheet_form'];
            $request['date_dr_e_sheet_form'] =
                $request['as_date_dr_e_sheet_form'];
        }
        if ($request['as_file_lay_aprvl_sheet_form'] != '') {
            $request['file_lay_aprvl_sheet_form'] = $newNamelay_aprvl_sheet_form;
            $request['up_lay_aprvl_sheet_form'] =
                $request['as_up_lay_aprvl_sheet_form'];
            $request['date_lay_aprvl_sheet_form'] =
                $request['as_date_lay_aprvl_sheet_form'];
        }
        if ($request['as_file_dr_aprvl_sheet_form'] != '') {
            $request['file_dr_aprvl_sheet_form'] = $newNamedr_aprvl_sheet_form;
            $request['up_dr_aprvl_sheet_form'] =
                $request['as_up_dr_aprvl_sheet_form'];
            $request['date_dr_aprvl_sheet_form'] =
                $request['as_date_dr_aprvl_sheet_form'];
        }
        if ($request['as_file_design_sheet_form'] != '') {
            $request['file_design_sheet_form'] = $newNamedesign_sheet_form;
            $request['up_design_sheet_form'] =
                $request['as_up_design_sheet_form'];
            $request['date_design_sheet_form'] =
                $request['as_date_design_sheet_form'];
        }
        if ($request['as_file_dr_meeting_form'] != '') {
            $request['file_dr_meeting_form'] = $newNamedr_meeting_form;
            $request['up_dr_meeting_form'] = $request['as_up_dr_meeting_form'];
            $request['date_dr_meeting_form'] =
                $request['as_date_dr_meeting_form'];
        }
        if ($request['as_file_est_budget_form'] != '') {
            $request['file_est_budget_form'] = $newNameest_budget_form;
            $request['up_est_budget_form'] = $request['as_up_est_budget_form'];
            $request['date_est_budget_form'] =
                $request['as_date_est_budget_form'];
        }
        //pr
        if ($request['as_file_pr_parts_material_form'] != '') {
            $request['file_pr_parts_material_form'] = $newNamepr_parts_material_form;
            $request['up_pr_parts_material_form'] =
                $request['as_up_pr_parts_material_form'];
            $request['date_pr_parts_material_form'] =
                $request['as_date_pr_parts_material_form'];
        }
        if ($request['as_file_pr_pekerjaan_jasa_form'] != '') {
            $request['file_pr_pekerjaan_jasa_form'] = $newNamepr_pekerjaan_jasa_form;
            $request['up_pr_pekerjaan_jasa_form'] =
                $request['as_up_pr_pekerjaan_jasa_form'];
            $request['date_pr_pekerjaan_jasa_form'] =
                $request['as_date_pr_pekerjaan_jasa_form'];
        }
        if ($request['as_file_pr_manufaktur_form'] != '') {
            $request['file_pr_manufaktur_form'] = $newNamepr_manufaktur_form;
            $request['up_pr_manufaktur_form'] =
                $request['as_up_pr_manufaktur_form'];
            $request['date_pr_manufaktur_form'] =
                $request['as_date_pr_manufaktur_form'];
        }
        if ($request['as_file_pr_rfq_form'] != '') {
            $request['file_pr_rfq_form'] = $newNamepr_rfq_form;
            $request['up_pr_rfq_form'] = $request['as_up_pr_rfq_form'];
            $request['date_pr_rfq_form'] = $request['as_date_pr_rfq_form'];
        }
        if ($request['as_file_pr_per_form'] != '') {
            $request['file_pr_per_form'] = $newNamepr_per_form;
            $request['up_pr_per_form'] = $request['as_up_pr_per_form'];
            $request['date_pr_per_form'] = $request['as_date_pr_per_form'];
        }
        //manufacturing
        if ($request['as_file_mn_ir_form'] != '') {
            $request['file_mn_ir_form'] = $newNamemn_ir_form;
            $request['up_mn_ir_form'] = $request['as_up_mn_ir_form'];
            $request['date_mn_ir_form'] = $request['as_date_mn_ir_form'];
        }
        //installation
        if ($request['as_file_ipo_form'] != '') {
            $request['file_ipo_form'] = $newNameipo_form;
            $request['up_ipo_form'] = $request['as_up_ipo_form'];
            $request['date_ipo_form'] = $request['as_date_ipo_form'];
        }
        if ($request['as_file_ecr_form'] != '') {
            $request['file_ecr_form'] = $newNameecr_form;
            $request['up_ecr_form'] = $request['as_up_ecr_form'];
            $request['date_ecr_form'] = $request['as_date_ecr_form'];
        }
        if ($request['as_file_sc_form'] != '') {
            $request['file_sc_form'] = $newNamesc_form;
            $request['up_sc_form'] = $request['as_up_sc_form'];
            $request['date_sc_form'] = $request['as_date_sc_form'];
        }
        if ($request['as_file_sccs_form'] != '') {
            $request['file_sccs_form'] = $newNamesccs_form;
            $request['up_sccs_form'] = $request['as_up_sccs_form'];
            $request['date_sccs_form'] = $request['as_date_sccs_form'];
        }
        if ($request['as_file_in_ir_form'] != '') {
            $request['file_in_ir_form'] = $newNamein_ir_form;
            $request['up_in_ir_form'] = $request['as_up_in_ir_form'];
            $request['date_in_ir_form'] = $request['as_date_in_ir_form'];
        }
        //closed
        if ($request['as_file_iperiksam_form'] != '') {
            $request['file_iperiksam_form'] = $newNameiperiksam_form;
            $request['up_iperiksam_form'] = $request['as_up_iperiksam_form'];
            $request['date_iperiksam_form'] =
                $request['as_date_iperiksam_form'];
        }
        if ($request['as_file_qas_form'] != '') {
            $request['file_qas_form'] = $newNameqas_form;
            $request['up_qas_form'] = $request['as_up_qas_form'];
            $request['date_qas_form'] = $request['as_date_qas_form'];
        }
        if ($request['as_file_ipakaim_form'] != '') {
            $request['file_ipakaim_form'] = $newNameipakaim_form;
            $request['up_ipakaim_form'] = $request['as_up_ipakaim_form'];
            $request['date_ipakaim_form'] = $request['as_date_ipakaim_form'];
        }
        if ($request['as_file_training_form'] != '') {
            $request['file_training_form'] = $newNametraining_form;
            $request['up_training_form'] = $request['as_up_training_form'];
            $request['date_training_form'] = $request['as_date_training_form'];
        }
        if ($request['as_file_lup_form'] != '') {
            $request['file_lup_form'] = $newNamelup_form;
            $request['up_lup_form'] = $request['as_up_lup_form'];
            $request['date_lup_form'] = $request['as_date_lup_form'];
        }
        if ($request['as_file_camb_form'] != '') {
            $request['file_camb_form'] = $newNamecamb_form;
            $request['up_camb_form'] = $request['as_up_camb_form'];
            $request['date_camb_form'] = $request['as_date_camb_form'];
        }
        if ($request['as_file_cl_im_form'] != '') {
            $request['file_cl_im_form'] = $newNamecl_im_form;
            $request['up_cl_im_form'] = $request['as_up_cl_im_form'];
            $request['date_cl_im_form'] = $request['as_date_cl_im_form'];
        }
        if ($request['as_file_chor_form'] != '') {
            $request['file_chor_form'] = $newNamechor_form;
            $request['up_chor_form'] = $request['as_up_chor_form'];
            $request['date_chor_form'] = $request['as_date_chor_form'];
        }

        $standarproject->update($request->all());
        Session::flash('status', 'sukses');
        Session::flash('message', 'Berhasil melakukan perubahan!');
        //redirect
        return redirect()->action([
            SpvStandarProjectController::class,
            'StandarProject',
        ]);
    }
}
