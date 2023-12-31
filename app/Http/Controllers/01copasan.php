<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ARproject;
use App\Models\CLproject;
use App\Models\FRproject;
use App\Models\INproject;
use App\Models\MNproject;
use App\Models\PAproject;
use App\Models\POproject;
use App\Models\PRproject;
use App\Models\PAYproject;
use Illuminate\Http\Request;
use App\Models\CONTROLPROJECT;
use App\Models\StandarProject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SpvProjectController extends Controller
{
    public function ProcessTigaTitikSatuFormProgress(
        Request $request,
        $id,
        // hingga ke.. //
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // hingga ke.. //
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::findOrFail($id_pa_02_3);
        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',
            'status_po_03_date'
        )->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',
            'status_pay_04_date'
        )->findOrFail($id_pay_04_3);
        // hingga ke.. //
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamepr_parts1 = $koneksipr->pr_parts_1;
         // ======= diulang hingga ke atribut.. //
        $oldnamepr_rfq5 = $koneksipr->pr_rfq_5;

        //nama file baru
        $newnamepr_parts1 = $koneksipr->pr_parts_1;
        // ======= diulang hingga ke atribut.. //
        $newnamepr_rfq5 = $koneksipr->pr_rfq_5;

        // inputan disimpan
        // inputan 1
        if ($request->file('as_pr_parts_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_1')
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
                ->file('as_pr_parts_1')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts1 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;

            // Menyimpan nama file
            $request
                ->file('as_pr_parts_1')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts1);
        }
        // ======= diulang hingga ke atribut.. //
        if ($request->file('as_pr_rfq_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_rfq_5')->getClientOriginalName();
            // Mengambil waktu sekarang
            $waktu = now()->timestamp;
            $tgl = date('d-M-Y');
            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);
            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);
            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_rfq_5')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_rfq5 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_pr_rfq_5')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_rfq5);
        }

        // menyimpan jika kosong atau menimpa
        if ($oldnamepr_parts1 != $newnamepr_parts1) {
            $request['pr_parts_1'] = $newnamepr_parts1;
            $request['up_by_parts_pr_1'] = $request['as_up_by_parts_pr_1'];
            $request['mny_parts_pr_1'] = $request['as_mny_parts_pr_1'];
            $request['date_pr_parts_1'] = $request['as_date_pr_parts_1'];
        }
        // hingga ke.. //
        if ($oldnamepr_rfq5 != $newnamepr_rfq5) {
            $request['pr_rfq_5'] = $newnamepr_rfq5;
            $request['up_by_rfq_pr_5'] = $request['as_up_by_rfq_pr_5'];
            $request['date_pr_rfq_5'] = $request['as_date_pr_rfq_5'];
        }
        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksipr->update($request->all());
        return redirect()->action(
            [StaffProjectController::class, 'TigaTitikSatuFormProgress'],
            [
                'id' => $viewdataproject->id,
                // hingga ke.. //
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }


    public function ProcessTigaTitikDuaFormProgress(
        Request $request,
        $id,
        // hingga ke.. //
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // hingga ke.. //
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::findOrFail($id_pa_02_3);
        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        // hingga ke.. //
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        // namafilelama
        $oldnamepa_parts1 = $koneksipa->pa_parts_1;
        // ======= diulang hingga ke atribut.. //
        $oldnamepa_epq5 = $koneksipa->pa_epq_5;
        //nama file baru
        $newnamepa_parts1 = $koneksipa->pa_parts_1;
        // ======= diulang hingga ke atribut.. //
        $newnamepa_epq5 = $koneksipa->pa_epq_5;
        // inputan disimpan
        // inputan 1
        if ($request->file('as_pa_parts_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_1')
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
                ->file('as_pa_parts_1')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepa_parts1 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_pa_parts_1')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts1);
        }
        // ======= diulang hingga ke atribut.. //
        // inputan 5
        if ($request->file('as_pa_epq_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_epq_5')->getClientOriginalName();
            // Mengambil waktu sekarang
            $waktu = now()->timestamp;
            $tgl = date('d-M-Y');
            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);
            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);
            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_epq_5')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepa_epq5 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_pa_epq_5')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_epq5);
        }
        // menyimpan jika kosong atau menimpa
        if ($oldnamepa_parts1 != $newnamepa_parts1) {
            $request['pa_parts_1'] = $newnamepa_parts1;
            $request['up_by_parts_pa_1'] = $request['as_up_by_parts_pa_1'];
            $request['mny_parts_pa_1'] = $request['as_mny_parts_pa_1'];
            $request['date_pa_parts_1'] = $request['as_date_pa_parts_1'];
        }
        // ======= diulang hingga ke atribut.. //
        if ($oldnamepa_epq5 != $newnamepa_epq5) {
            $request['pa_epq_5'] = $newnamepa_epq5;
            $request['up_by_epq_pa_5'] = $request['as_up_by_epq_pa_5'];
            $request['mny_epq_pa_5'] = $request['as_mny_epq_pa_5'];
            $request['date_pa_epq_5'] = $request['as_date_pa_epq_5'];
        }
        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksipa->update($request->all());
        //untuk update status purchasing
        $koneksipr->update($request->all());
        return redirect()->action(
            [SpvProjectController::class, 'TigaTitikDuaFormProgress'],
            [
                'id' => $viewdataproject->id,

                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }




    public function ProcessTigaTitikTigaFormProgress(
        Request $request,
        $id,
        // hingga ke.. //
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // hingga ke.. //
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',
            'status_pa_02_date'
        )->findOrFail($id_pa_02_3);
        $koneksipo = POproject::findOrFail($id_po_03_3);
        $koneksipay = PAYproject::findOrFail($id_pay_04_3);
        // hingga ke.. //
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        // Inisialisasi name file
        // namafilelama
        $oldnamepo_parts1 = $koneksipo->po_parts_1;
         // ======= diulang hingga ke atribut.. //
        $oldnamepo_capo5 = $koneksipo->po_capo_5;
        //nama file baru
        $newnamepo_parts1 = $koneksipo->po_parts_1;
         // ======= diulang hingga ke atribut.. //
        $newnamepo_capo5 = $koneksipo->po_capo_5;
        // inputan disimpan
        // inputan 1
        if ($request->file('as_po_parts_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_1')
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
                ->file('as_po_parts_1')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepo_parts1 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;

            // Menyimpan nama file
            $request
                ->file('as_po_parts_1')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts1);
        }
         // ======= diulang hingga ke atribut.. //
        // inputan 5
        if ($request->file('as_po_capo_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_capo_5')->getClientOriginalName();
            // Mengambil waktu sekarang
            $waktu = now()->timestamp;
            $tgl = date('d-M-Y');
            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);
            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);
            // Mengambil extensi file
            $extension = $request
                ->file('as_po_capo_5')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepo_capo5 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_po_capo_5')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_capo5);
        }
        // menyimpan jika kosong atau menimpa
        if ($oldnamepo_parts1 != $newnamepo_parts1) {
            $request['po_parts_1'] = $newnamepo_parts1;
            $request['up_by_parts_po_1'] = $request['as_up_by_parts_po_1'];
            $request['mny_parts_po_1'] = $request['as_mny_parts_po_1'];
            $request['date_po_parts_1'] = $request['as_date_po_parts_1'];
        }
        // ======= diulang hingga ke atribut.. //
        if ($oldnamepo_capo5 != $newnamepo_capo5) {
            $request['po_capo_5'] = $newnamepo_capo5;
            $request['up_by_capo_po_5'] = $request['as_up_by_capo_po_5'];
            $request['mny_capo_po_5'] = $request['as_mny_capo_po_5'];
            $request['date_po_capo_5'] = $request['as_date_po_capo_5'];
        }
        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksipo->update($request->all());
        //untuk update status purchasing
        $koneksipr->update($request->all());
        return redirect()->action(
            [SpvProjectController::class, 'TigaTitikTigaFormProgress'],
            [
                'id' => $viewdataproject->id,
                // hingga ke.. //
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }




    public function ProcessTigaTitikEmpatFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        // ======= diulang hingga ke atribut.. //
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // hingga ke.. //
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',
            'status_pa_02_date'
        )->findOrFail($id_pa_02_3);
        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',
            'status_po_03_date'
        )->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::findOrFail($id_pay_04_3);
        // hingga ke.. //
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamepay_parts1 = $koneksipay->pay_parts_1;
        // ======= diulang hingga ke atribut.. //
        $oldnamepay_da5 = $koneksipay->pay_da_5;

        //nama file baru
        $newnamepay_parts1 = $koneksipay->pay_parts_1;
        // ======= diulang hingga ke atribut.. //
        $newnamepay_da5 = $koneksipay->pay_da_5;

        // inputan disimpan
        // inputan 1
        if ($request->file('as_pay_parts_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_1')
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
                ->file('as_pay_parts_1')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepay_parts1 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_pay_parts_1')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts1);
        }
        // ======= diulang hingga ke atribut.. //
        // inputan 5
        if ($request->file('as_pay_da_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pay_da_5')->getClientOriginalName();
            // Mengambil waktu sekarang
            $waktu = now()->timestamp;
            $tgl = date('d-M-Y');
            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);
            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);
            // Mengambil extensi file
            $extension = $request
                ->file('as_pay_da_5')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepay_da5 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_pay_da_5')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_da5);
        }
        // menyimpan jika kosong atau menimpa
        if ($oldnamepay_parts1 != $newnamepay_parts1) {
            $request['pay_parts_1'] = $newnamepay_parts1;
            $request['up_by_parts_pay_1'] = $request['as_up_by_parts_pay_1'];
            $request['mny_parts_pay_1'] = $request['as_mny_parts_pay_1'];
            $request['date_pay_parts_1'] = $request['as_date_pay_parts_1'];
        }
        // ======= diulang hingga ke atribut.. //
        if ($oldnamepay_da5 != $newnamepay_da5) {
            $request['pay_da_5'] = $newnamepay_da5;
            $request['up_by_da_pay_5'] = $request['as_up_by_da_pay_5'];
            $request['mny_da_pay_5'] = $request['as_mny_da_pay_5'];
            $request['date_pay_da_5'] = $request['as_date_pay_da_5'];
        }
        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksipay->update($request->all());
        $koneksipr->update($request->all());
        return redirect()->action(
            [SpvProjectController::class, 'TigaTitikEmpatFormProgress'],
            [
                'id' => $viewdataproject->id,
                // hingga ke.. //
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }






    public function ProcessEmpatFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        // hingga ke.. //
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // hingga ke.. //
        $koneksimn = MNproject::findOrFail($id_mn_4);
        // hingga ke.. //
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        // namafilelama
        $oldnamemn_atribut1 = $koneksipay->mn_atribut_1;
        // ======= diulang hingga ke atribut.. //
        $oldnamemn_atribut10 = $koneksipay->mn_atribut_10;
        //nama file baru
        $newnamemn_atribut1 = $koneksipay->mn_atribut_1;
        // ======= diulang hingga ke atribut.. //
        $newnamemn_atribut10 = $koneksipay->mn_atribut_10;
        // inputan disimpan
        // inputan 1
        if ($request->file('as_mn_atribut_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_1')
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
                ->file('as_mn_atribut_1')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamemn_atribut1 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_mn_atribut_1')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut1);
        }
        // ======= diulang hingga ke atribut.. //
        // inputan 10
        if ($request->file('as_mn_atribut_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_10')
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
                ->file('as_mn_atribut_10')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamemn_atribut10 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_mn_atribut_10')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut10);
        }
        // batas 10 inputan
        // menyimpan jika kosong atau menimpa
        if ($oldnamemn_atribut1 != $newnamemn_atribut1) {
            $request['mn_atribut_1'] = $newnamemn_atribut1;
            $request['up_by_atribut_mn_1'] = $request['as_up_by_atribut_mn_1'];
            $request['date_mn_atribut_1'] = $request['as_date_mn_atribut_1'];
        }
        // ======= diulang hingga ke atribut.. //
        if ($oldnamemn_atribut10 != $newnamemn_atribut10) {
            $request['mn_atribut_10'] = $newnamemn_atribut10;
            $request['up_by_atribut_mn_10'] =
                $request['as_up_by_atribut_mn_10'];
            $request['date_mn_atribut_10'] = $request['as_date_mn_atribut_10'];
        }
        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksimn->update($request->all());
        $koneksipr->update($request->all());
        return redirect()->action(
            [SpvProjectController::class, 'EmpatFormProgress'],
            [
                'id' => $viewdataproject->id,
                // hingga ke.. //
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }




    public function ProcessLimaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        // hingga ke.. //
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // hingga ke.. //
        $koneksiin = INproject::findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        // namafilelama
        $oldnamein_ipo1 = $koneksiin->in_ipo_1;
        // ======= diulang hingga ke atribut.. //
        $oldnamein_ir2 = $koneksiin->in_ir_2;
        // namafilebaru
        $newnamein_ipo1 = $koneksiin->in_ipo_1;
        // ======= diulang hingga ke atribut.. //
        $newnamein_ir2 = $koneksiin->in_ir_2;
        // inputan disimpan
        // inputan 1
        if ($request->file('as_in_ipo_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ipo_1')->getClientOriginalName();
            // Mengambil waktu sekarang
            $waktu = now()->timestamp;
            $tgl = date('d-M-Y');
            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);
            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);
            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ipo_1')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamein_ipo1 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;

            // Menyimpan nama file
            $request
                ->file('as_in_ipo_1')
                ->storeAs('supervisor/project/05_IN', $newnamein_ipo1);
        }
        // ======= diulang hingga ke atribut.. //
        // inputan 2
        if ($request->file('as_in_ir_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ir_2')->getClientOriginalName();
            // Mengambil waktu sekarang
            $waktu = now()->timestamp;
            $tgl = date('d-M-Y');
            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);
            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);
            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ir_2')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamein_ir2 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_in_ir_2')
                ->storeAs('supervisor/project/05_IN', $newnamein_ir2);
        }
        // menyimpan jika kosong atau menimpa
        if ($oldnamein_ipo1 != $newnamein_ipo1) {
            $request['in_ipo_1'] = $newnamein_ipo1;
            $request['up_by_ipo_in_1'] = $request['as_up_by_ipo_in_1'];
            $request['date_in_ipo_1'] = $request['as_date_in_ipo_1'];
        }
        // ======= diulang hingga ke atribut.. //
        if ($oldnamein_ir2 != $newnamein_ir2) {
            $request['in_ir_2'] = $newnamein_ir2;
            $request['up_by_ir_in_2'] = $request['as_up_by_ir_in_2'];
            $request['date_in_ir_2'] = $request['as_date_in_ir_2'];
        }
        // menyimpan seluruh ke tabel installation
        $viewdataproject->update($request->all());
        $koneksiin->update($request->all());
        return redirect()->action(
            [SpvProjectController::class, 'LimaFormProgress'],
            [
                'id' => $viewdataproject->id,
                // hingga ke.. //
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }


    public function ProcessEnamFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        // hingga ke.. //
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // hingga ke.. //
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::findOrFail($id_cl_6);
        // Inisialisasi name file
        // namafilelama
        $oldnamecl_i_periksa_m1 = $koneksicl->cl_i_periksa_m_1;
        // ======= diulang hingga ke atribut.. //
        $oldnamecl_chor2 = $koneksicl->cl_chor_2;
        // namafilebaru
        $newnamecl_i_periksa_m1 = $koneksicl->cl_i_periksa_m_1;
        // ======= diulang hingga ke atribut.. //
        $newnamecl_chor2 = $koneksicl->cl_chor_2;
        // inputan disimpan
        // inputan 1
        if ($request->file('as_cl_i_periksa_m_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_i_periksa_m_1')
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
                ->file('as_cl_i_periksa_m_1')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamecl_i_periksa_m1 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_cl_i_periksa_m_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_i_periksa_m1);
        }
        // ======= diulang hingga ke atribut.. //
        // inputan 2
        if ($request->file('as_cl_chor_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_chor_2')->getClientOriginalName();
            // Mengambil waktu sekarang
            $waktu = now()->timestamp;
            $tgl = date('d-M-Y');
            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);
            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);
            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_chor_2')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamecl_chor2 =
                $id .
                '_' .
                $filename .
                '_' .
                $tgl .
                '_' .
                $kodeunik .
                '.' .
                $extension;
            // Menyimpan nama file
            $request
                ->file('as_cl_chor_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_chor2);
        }
        // menyimpan jika kosong atau menimpa
        if ($oldnamecl_i_periksa_m1 != $newnamecl_i_periksa_m1) {
            $request['cl_i_periksa_m_1'] = $newnamecl_i_periksa_m1;
            $request['up_by_i_periksa_m_cl_1'] =
                $request['as_up_by_i_periksa_m_cl_1'];
            $request['date_cl_i_periksa_m_1'] =
                $request['as_date_cl_i_periksa_m_1'];
        }
        // ======= diulang hingga ke atribut.. //
        if ($oldnamecl_chor2 != $newnamecl_chor2) {
            $request['cl_chor_2'] = $newnamecl_chor2;
            $request['up_by_chor_cl_2'] = $request['as_up_by_chor_cl_2'];
            $request['date_cl_chor_2'] = $request['as_date_cl_chor_2'];
        }
        //dikit lagi
        // menyimpan seluruh ke table handover
        $viewdataproject->update($request->all());
        $koneksicl->update($request->all());
        return redirect()->action(
            [SpvProjectController::class, 'EnamFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                // hingga ke.. //
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }
}


