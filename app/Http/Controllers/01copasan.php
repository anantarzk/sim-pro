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




    public function ProcessEditStandarProject(Request $request)
    {
        $standarproject = StandarProject::all()
            ->where('marking', 'Standar-1')
            ->first();
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
        /* membuat nama file baru */
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
        // ======= diulang hingga ke atribut.. //
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
        // ======= diulang hingga ke atribut.. //
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




    /* buat dashboard spv */
    public function IndexSupervisor(Request $request)
    {
        DB::enableQueryLog();
        $keyword = $request->keyword;
        // for dashboard
        $cancel = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('status_project', 'Cancel')
            ->count('id');

        $not_started = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('progress', 'Not Started')
            ->count('id');

        $finished = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('progress', 'Closed')
            ->count('id');
        $in_progress = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('progress', 'Fund Request')
            ->Orwhere('progress', 'Waiting Approval Fund Request')
            ->Orwhere('progress', 'Waiting Approval Arrangement')
            ->Orwhere('progress', 'Arrangement')
            ->Orwhere('progress', 'Waiting Approval Purchasing - PR')
            ->Orwhere('progress', 'Purchasing - PR')
            ->Orwhere('progress', 'Waiting Approval Purchasing - PA')
            ->Orwhere('progress', 'Purchasing - PA')
            ->Orwhere('progress', 'Waiting Approval Purchasing - PO')
            ->Orwhere('progress', 'Purchasing - PO')
            ->Orwhere('progress', 'Waiting Approval Purchasing - PAY')
            ->Orwhere('progress', 'Purchasing - PAY')
            ->Orwhere('progress', 'Purchasing')
            ->Orwhere('progress', 'Waiting Approval Manufacturing')
            ->Orwhere('progress', 'Manufacturing')
            ->Orwhere('progress', 'Waiting Approval Installation')
            ->Orwhere('progress', 'Installation')
            ->Orwhere('progress', 'Waiting Approval Closed')
            ->count('id');

        $approved_fr = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('status_project', 'Approval')
            ->count('id');

        $on_progress_fr = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('status_project', 'On Progress')
            ->count('id');

        $totalproject = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->count('id');

        $totalprojectapproval = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('check', 'needcheck')
            ->count('id');

        //PR
        $mny_parts_pr_1 = PRproject::select('mny_parts_pr_1')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_1');
        $mny_parts_pr_2 = PRproject::select('mny_parts_pr_2')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_2');
        $mny_parts_pr_3 = PRproject::select('mny_parts_pr_3')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_3');
        $mny_parts_pr_4 = PRproject::select('mny_parts_pr_4')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_4');
        $mny_parts_pr_5 = PRproject::select('mny_parts_pr_5')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_5');
        $mny_parts_pr_6 = PRproject::select('mny_parts_pr_6')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_6');
        $mny_parts_pr_7 = PRproject::select('mny_parts_pr_7')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_7');
        $mny_parts_pr_8 = PRproject::select('mny_parts_pr_8')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_8');
        $mny_parts_pr_9 = PRproject::select('mny_parts_pr_9')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_9');
        $mny_parts_pr_10 = PRproject::select('mny_parts_pr_10')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_10');
        $mny_parts_pr_11 = PRproject::select('mny_parts_pr_11')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_11');
        $mny_parts_pr_12 = PRproject::select('mny_parts_pr_12')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_12');
        $mny_parts_pr_13 = PRproject::select('mny_parts_pr_13')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_13');
        $mny_parts_pr_14 = PRproject::select('mny_parts_pr_14')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_14');
        $mny_parts_pr_15 = PRproject::select('mny_parts_pr_15')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_15');
        $mny_parts_pr_16 = PRproject::select('mny_parts_pr_16')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_16');
        $mny_parts_pr_17 = PRproject::select('mny_parts_pr_17')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_17');
        $mny_parts_pr_18 = PRproject::select('mny_parts_pr_18')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_18');
        $mny_parts_pr_19 = PRproject::select('mny_parts_pr_19')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_19');
        $mny_parts_pr_20 = PRproject::select('mny_parts_pr_20')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_20');
        $mny_parts_pr_21 = PRproject::select('mny_parts_pr_21')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_21');
        $mny_parts_pr_22 = PRproject::select('mny_parts_pr_22')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_22');
        $mny_parts_pr_23 = PRproject::select('mny_parts_pr_23')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_23');
        $mny_parts_pr_24 = PRproject::select('mny_parts_pr_24')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_24');
        $mny_parts_pr_25 = PRproject::select('mny_parts_pr_25')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_25');
        $mny_parts_pr_26 = PRproject::select('mny_parts_pr_26')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_26');
        $mny_parts_pr_27 = PRproject::select('mny_parts_pr_27')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_27');
        $mny_parts_pr_28 = PRproject::select('mny_parts_pr_28')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_28');
        $mny_parts_pr_29 = PRproject::select('mny_parts_pr_29')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_29');
        $mny_parts_pr_30 = PRproject::select('mny_parts_pr_30')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_30');
        $mny_parts_pr_31 = PRproject::select('mny_parts_pr_31')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_31');
        $mny_parts_pr_32 = PRproject::select('mny_parts_pr_32')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_32');
        $mny_parts_pr_33 = PRproject::select('mny_parts_pr_33')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_33');
        $mny_parts_pr_34 = PRproject::select('mny_parts_pr_34')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_34');
        $mny_parts_pr_35 = PRproject::select('mny_parts_pr_35')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_35');
        $mny_parts_pr_36 = PRproject::select('mny_parts_pr_36')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_36');
        $mny_parts_pr_37 = PRproject::select('mny_parts_pr_37')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_37');
        $mny_parts_pr_38 = PRproject::select('mny_parts_pr_38')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_38');
        $mny_parts_pr_39 = PRproject::select('mny_parts_pr_39')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_39');
        $mny_parts_pr_40 = PRproject::select('mny_parts_pr_40')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_40');
        $mny_parts_pr_41 = PRproject::select('mny_parts_pr_41')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_41');
        $mny_parts_pr_42 = PRproject::select('mny_parts_pr_42')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_42');
        $mny_parts_pr_43 = PRproject::select('mny_parts_pr_43')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_43');
        $mny_parts_pr_44 = PRproject::select('mny_parts_pr_44')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_44');
        $mny_parts_pr_45 = PRproject::select('mny_parts_pr_45')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_45');
        $mny_parts_pr_46 = PRproject::select('mny_parts_pr_46')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_46');
        $mny_parts_pr_47 = PRproject::select('mny_parts_pr_47')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_47');
        $mny_parts_pr_48 = PRproject::select('mny_parts_pr_48')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_48');
        $mny_parts_pr_49 = PRproject::select('mny_parts_pr_49')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_49');
        $mny_parts_pr_50 = PRproject::select('mny_parts_pr_50')
            ->whereNull('archive_at')
            ->sum('mny_parts_pr_50');
        $mny_jasa_pr_1 = PRproject::select('mny_jasa_pr_1')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_1');
        $mny_jasa_pr_2 = PRproject::select('mny_jasa_pr_2')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_2');
        $mny_jasa_pr_3 = PRproject::select('mny_jasa_pr_3')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_3');
        $mny_jasa_pr_4 = PRproject::select('mny_jasa_pr_4')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_4');
        $mny_jasa_pr_5 = PRproject::select('mny_jasa_pr_5')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_5');
        $mny_jasa_pr_6 = PRproject::select('mny_jasa_pr_6')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_6');
        $mny_jasa_pr_7 = PRproject::select('mny_jasa_pr_7')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_7');
        $mny_jasa_pr_8 = PRproject::select('mny_jasa_pr_8')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_8');
        $mny_jasa_pr_9 = PRproject::select('mny_jasa_pr_9')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_9');
        $mny_jasa_pr_10 = PRproject::select('mny_jasa_pr_10')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_10');
        $mny_jasa_pr_11 = PRproject::select('mny_jasa_pr_11')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_11');
        $mny_jasa_pr_12 = PRproject::select('mny_jasa_pr_12')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_12');
        $mny_jasa_pr_13 = PRproject::select('mny_jasa_pr_13')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_13');
        $mny_jasa_pr_14 = PRproject::select('mny_jasa_pr_14')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_14');
        $mny_jasa_pr_15 = PRproject::select('mny_jasa_pr_15')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_15');
        $mny_jasa_pr_16 = PRproject::select('mny_jasa_pr_16')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_16');
        $mny_jasa_pr_17 = PRproject::select('mny_jasa_pr_17')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_17');
        $mny_jasa_pr_18 = PRproject::select('mny_jasa_pr_18')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_18');
        $mny_jasa_pr_19 = PRproject::select('mny_jasa_pr_19')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_19');
        $mny_jasa_pr_20 = PRproject::select('mny_jasa_pr_20')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_20');
        $mny_jasa_pr_21 = PRproject::select('mny_jasa_pr_21')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_21');
        $mny_jasa_pr_22 = PRproject::select('mny_jasa_pr_22')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_22');
        $mny_jasa_pr_23 = PRproject::select('mny_jasa_pr_23')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_23');
        $mny_jasa_pr_24 = PRproject::select('mny_jasa_pr_24')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_24');
        $mny_jasa_pr_25 = PRproject::select('mny_jasa_pr_25')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_25');
        $mny_jasa_pr_26 = PRproject::select('mny_jasa_pr_26')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_26');
        $mny_jasa_pr_27 = PRproject::select('mny_jasa_pr_27')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_27');
        $mny_jasa_pr_28 = PRproject::select('mny_jasa_pr_28')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_28');
        $mny_jasa_pr_29 = PRproject::select('mny_jasa_pr_29')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_29');
        $mny_jasa_pr_30 = PRproject::select('mny_jasa_pr_30')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pr_30');
        $mny_mnftr_pr_1 = PRproject::select('mny_mnftr_pr_1')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_1');
        $mny_mnftr_pr_2 = PRproject::select('mny_mnftr_pr_2')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_2');
        $mny_mnftr_pr_3 = PRproject::select('mny_mnftr_pr_3')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_3');
        $mny_mnftr_pr_4 = PRproject::select('mny_mnftr_pr_4')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_4');
        $mny_mnftr_pr_5 = PRproject::select('mny_mnftr_pr_5')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_5');
        $mny_mnftr_pr_6 = PRproject::select('mny_mnftr_pr_6')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_6');
        $mny_mnftr_pr_7 = PRproject::select('mny_mnftr_pr_7')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_7');
        $mny_mnftr_pr_8 = PRproject::select('mny_mnftr_pr_8')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_8');
        $mny_mnftr_pr_9 = PRproject::select('mny_mnftr_pr_9')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_9');
        $mny_mnftr_pr_10 = PRproject::select('mny_mnftr_pr_10')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pr_10');

        //PA
        $mny_parts_pa_1 = PAproject::select('mny_parts_pa_1')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_1');
        $mny_parts_pa_2 = PAproject::select('mny_parts_pa_2')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_2');
        $mny_parts_pa_3 = PAproject::select('mny_parts_pa_3')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_3');
        $mny_parts_pa_4 = PAproject::select('mny_parts_pa_4')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_4');
        $mny_parts_pa_5 = PAproject::select('mny_parts_pa_5')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_5');
        $mny_parts_pa_6 = PAproject::select('mny_parts_pa_6')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_6');
        $mny_parts_pa_7 = PAproject::select('mny_parts_pa_7')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_7');
        $mny_parts_pa_8 = PAproject::select('mny_parts_pa_8')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_8');
        $mny_parts_pa_9 = PAproject::select('mny_parts_pa_9')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_9');
        $mny_parts_pa_10 = PAproject::select('mny_parts_pa_10')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_10');
        $mny_parts_pa_11 = PAproject::select('mny_parts_pa_11')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_11');
        $mny_parts_pa_12 = PAproject::select('mny_parts_pa_12')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_12');
        $mny_parts_pa_13 = PAproject::select('mny_parts_pa_13')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_13');
        $mny_parts_pa_14 = PAproject::select('mny_parts_pa_14')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_14');
        $mny_parts_pa_15 = PAproject::select('mny_parts_pa_15')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_15');
        $mny_parts_pa_16 = PAproject::select('mny_parts_pa_16')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_16');
        $mny_parts_pa_17 = PAproject::select('mny_parts_pa_17')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_17');
        $mny_parts_pa_18 = PAproject::select('mny_parts_pa_18')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_18');
        $mny_parts_pa_19 = PAproject::select('mny_parts_pa_19')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_19');
        $mny_parts_pa_20 = PAproject::select('mny_parts_pa_20')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_20');
        $mny_parts_pa_21 = PAproject::select('mny_parts_pa_21')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_21');
        $mny_parts_pa_22 = PAproject::select('mny_parts_pa_22')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_22');
        $mny_parts_pa_23 = PAproject::select('mny_parts_pa_23')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_23');
        $mny_parts_pa_24 = PAproject::select('mny_parts_pa_24')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_24');
        $mny_parts_pa_25 = PAproject::select('mny_parts_pa_25')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_25');
        $mny_parts_pa_26 = PAproject::select('mny_parts_pa_26')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_26');
        $mny_parts_pa_27 = PAproject::select('mny_parts_pa_27')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_27');
        $mny_parts_pa_28 = PAproject::select('mny_parts_pa_28')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_28');
        $mny_parts_pa_29 = PAproject::select('mny_parts_pa_29')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_29');
        $mny_parts_pa_30 = PAproject::select('mny_parts_pa_30')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_30');
        $mny_parts_pa_31 = PAproject::select('mny_parts_pa_31')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_31');
        $mny_parts_pa_32 = PAproject::select('mny_parts_pa_32')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_32');
        $mny_parts_pa_33 = PAproject::select('mny_parts_pa_33')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_33');
        $mny_parts_pa_34 = PAproject::select('mny_parts_pa_34')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_34');
        $mny_parts_pa_35 = PAproject::select('mny_parts_pa_35')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_35');
        $mny_parts_pa_36 = PAproject::select('mny_parts_pa_36')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_36');
        $mny_parts_pa_37 = PAproject::select('mny_parts_pa_37')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_37');
        $mny_parts_pa_38 = PAproject::select('mny_parts_pa_38')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_38');
        $mny_parts_pa_39 = PAproject::select('mny_parts_pa_39')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_39');
        $mny_parts_pa_40 = PAproject::select('mny_parts_pa_40')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_40');
        $mny_parts_pa_41 = PAproject::select('mny_parts_pa_41')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_41');
        $mny_parts_pa_42 = PAproject::select('mny_parts_pa_42')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_42');
        $mny_parts_pa_43 = PAproject::select('mny_parts_pa_43')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_43');
        $mny_parts_pa_44 = PAproject::select('mny_parts_pa_44')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_44');
        $mny_parts_pa_45 = PAproject::select('mny_parts_pa_45')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_45');
        $mny_parts_pa_46 = PAproject::select('mny_parts_pa_46')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_46');
        $mny_parts_pa_47 = PAproject::select('mny_parts_pa_47')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_47');
        $mny_parts_pa_48 = PAproject::select('mny_parts_pa_48')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_48');
        $mny_parts_pa_49 = PAproject::select('mny_parts_pa_49')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_49');
        $mny_parts_pa_50 = PAproject::select('mny_parts_pa_50')
            ->whereNull('archive_at')
            ->sum('mny_parts_pa_50');
        $mny_jasa_pa_1 = PAproject::select('mny_jasa_pa_1')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_1');
        $mny_jasa_pa_2 = PAproject::select('mny_jasa_pa_2')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_2');
        $mny_jasa_pa_3 = PAproject::select('mny_jasa_pa_3')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_3');
        $mny_jasa_pa_4 = PAproject::select('mny_jasa_pa_4')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_4');
        $mny_jasa_pa_5 = PAproject::select('mny_jasa_pa_5')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_5');
        $mny_jasa_pa_6 = PAproject::select('mny_jasa_pa_6')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_6');
        $mny_jasa_pa_7 = PAproject::select('mny_jasa_pa_7')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_7');
        $mny_jasa_pa_8 = PAproject::select('mny_jasa_pa_8')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_8');
        $mny_jasa_pa_9 = PAproject::select('mny_jasa_pa_9')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_9');
        $mny_jasa_pa_10 = PAproject::select('mny_jasa_pa_10')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_10');
        $mny_jasa_pa_11 = PAproject::select('mny_jasa_pa_11')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_11');
        $mny_jasa_pa_12 = PAproject::select('mny_jasa_pa_12')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_12');
        $mny_jasa_pa_13 = PAproject::select('mny_jasa_pa_13')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_13');
        $mny_jasa_pa_14 = PAproject::select('mny_jasa_pa_14')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_14');
        $mny_jasa_pa_15 = PAproject::select('mny_jasa_pa_15')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_15');
        $mny_jasa_pa_16 = PAproject::select('mny_jasa_pa_16')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_16');
        $mny_jasa_pa_17 = PAproject::select('mny_jasa_pa_17')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_17');
        $mny_jasa_pa_18 = PAproject::select('mny_jasa_pa_18')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_18');
        $mny_jasa_pa_19 = PAproject::select('mny_jasa_pa_19')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_19');
        $mny_jasa_pa_20 = PAproject::select('mny_jasa_pa_20')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_20');
        $mny_jasa_pa_21 = PAproject::select('mny_jasa_pa_21')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_21');
        $mny_jasa_pa_22 = PAproject::select('mny_jasa_pa_22')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_22');
        $mny_jasa_pa_23 = PAproject::select('mny_jasa_pa_23')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_23');
        $mny_jasa_pa_24 = PAproject::select('mny_jasa_pa_24')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_24');
        $mny_jasa_pa_25 = PAproject::select('mny_jasa_pa_25')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_25');
        $mny_jasa_pa_26 = PAproject::select('mny_jasa_pa_26')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_26');
        $mny_jasa_pa_27 = PAproject::select('mny_jasa_pa_27')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_27');
        $mny_jasa_pa_28 = PAproject::select('mny_jasa_pa_28')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_28');
        $mny_jasa_pa_29 = PAproject::select('mny_jasa_pa_29')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_29');
        $mny_jasa_pa_30 = PAproject::select('mny_jasa_pa_30')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pa_30');
        $mny_mnftr_pa_1 = PAproject::select('mny_mnftr_pa_1')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_1');
        $mny_mnftr_pa_2 = PAproject::select('mny_mnftr_pa_2')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_2');
        $mny_mnftr_pa_3 = PAproject::select('mny_mnftr_pa_3')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_3');
        $mny_mnftr_pa_4 = PAproject::select('mny_mnftr_pa_4')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_4');
        $mny_mnftr_pa_5 = PAproject::select('mny_mnftr_pa_5')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_5');
        $mny_mnftr_pa_6 = PAproject::select('mny_mnftr_pa_6')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_6');
        $mny_mnftr_pa_7 = PAproject::select('mny_mnftr_pa_7')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_7');
        $mny_mnftr_pa_8 = PAproject::select('mny_mnftr_pa_8')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_8');
        $mny_mnftr_pa_9 = PAproject::select('mny_mnftr_pa_9')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_9');
        $mny_mnftr_pa_10 = PAproject::select('mny_mnftr_pa_10')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pa_10');
        $mny_epq_pa_1 = PAproject::select('mny_epq_pa_1')
            ->whereNull('archive_at')
            ->sum('mny_epq_pa_1');
        $mny_epq_pa_2 = PAproject::select('mny_epq_pa_2')
            ->whereNull('archive_at')
            ->sum('mny_epq_pa_2');
        $mny_epq_pa_3 = PAproject::select('mny_epq_pa_3')
            ->whereNull('archive_at')
            ->sum('mny_epq_pa_3');
        $mny_epq_pa_4 = PAproject::select('mny_epq_pa_4')
            ->whereNull('archive_at')
            ->sum('mny_epq_pa_4');
        $mny_epq_pa_5 = PAproject::select('mny_epq_pa_5')
            ->whereNull('archive_at')
            ->sum('mny_epq_pa_5');

        //PO
        $mny_parts_po_1 = POproject::select('mny_parts_po_1')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_1');
        $mny_parts_po_2 = POproject::select('mny_parts_po_2')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_2');
        $mny_parts_po_3 = POproject::select('mny_parts_po_3')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_3');
        $mny_parts_po_4 = POproject::select('mny_parts_po_4')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_4');
        $mny_parts_po_5 = POproject::select('mny_parts_po_5')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_5');
        $mny_parts_po_6 = POproject::select('mny_parts_po_6')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_6');
        $mny_parts_po_7 = POproject::select('mny_parts_po_7')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_7');
        $mny_parts_po_8 = POproject::select('mny_parts_po_8')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_8');
        $mny_parts_po_9 = POproject::select('mny_parts_po_9')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_9');
        $mny_parts_po_10 = POproject::select('mny_parts_po_10')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_10');
        $mny_parts_po_11 = POproject::select('mny_parts_po_11')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_11');
        $mny_parts_po_12 = POproject::select('mny_parts_po_12')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_12');
        $mny_parts_po_13 = POproject::select('mny_parts_po_13')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_13');
        $mny_parts_po_14 = POproject::select('mny_parts_po_14')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_14');
        $mny_parts_po_15 = POproject::select('mny_parts_po_15')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_15');
        $mny_parts_po_16 = POproject::select('mny_parts_po_16')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_16');
        $mny_parts_po_17 = POproject::select('mny_parts_po_17')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_17');
        $mny_parts_po_18 = POproject::select('mny_parts_po_18')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_18');
        $mny_parts_po_19 = POproject::select('mny_parts_po_19')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_19');
        $mny_parts_po_20 = POproject::select('mny_parts_po_20')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_20');
        $mny_parts_po_21 = POproject::select('mny_parts_po_21')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_21');
        $mny_parts_po_22 = POproject::select('mny_parts_po_22')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_22');
        $mny_parts_po_23 = POproject::select('mny_parts_po_23')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_23');
        $mny_parts_po_24 = POproject::select('mny_parts_po_24')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_24');
        $mny_parts_po_25 = POproject::select('mny_parts_po_25')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_25');
        $mny_parts_po_26 = POproject::select('mny_parts_po_26')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_26');
        $mny_parts_po_27 = POproject::select('mny_parts_po_27')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_27');
        $mny_parts_po_28 = POproject::select('mny_parts_po_28')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_28');
        $mny_parts_po_29 = POproject::select('mny_parts_po_29')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_29');
        $mny_parts_po_30 = POproject::select('mny_parts_po_30')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_30');
        $mny_parts_po_31 = POproject::select('mny_parts_po_31')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_31');
        $mny_parts_po_32 = POproject::select('mny_parts_po_32')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_32');
        $mny_parts_po_33 = POproject::select('mny_parts_po_33')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_33');
        $mny_parts_po_34 = POproject::select('mny_parts_po_34')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_34');
        $mny_parts_po_35 = POproject::select('mny_parts_po_35')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_35');
        $mny_parts_po_36 = POproject::select('mny_parts_po_36')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_36');
        $mny_parts_po_37 = POproject::select('mny_parts_po_37')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_37');
        $mny_parts_po_38 = POproject::select('mny_parts_po_38')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_38');
        $mny_parts_po_39 = POproject::select('mny_parts_po_39')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_39');
        $mny_parts_po_40 = POproject::select('mny_parts_po_40')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_40');
        $mny_parts_po_41 = POproject::select('mny_parts_po_41')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_41');
        $mny_parts_po_42 = POproject::select('mny_parts_po_42')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_42');
        $mny_parts_po_43 = POproject::select('mny_parts_po_43')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_43');
        $mny_parts_po_44 = POproject::select('mny_parts_po_44')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_44');
        $mny_parts_po_45 = POproject::select('mny_parts_po_45')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_45');
        $mny_parts_po_46 = POproject::select('mny_parts_po_46')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_46');
        $mny_parts_po_47 = POproject::select('mny_parts_po_47')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_47');
        $mny_parts_po_48 = POproject::select('mny_parts_po_48')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_48');
        $mny_parts_po_49 = POproject::select('mny_parts_po_49')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_49');
        $mny_parts_po_50 = POproject::select('mny_parts_po_50')
            ->whereNull('archive_at')
            ->sum('mny_parts_po_50');
        $mny_jasa_po_1 = POproject::select('mny_jasa_po_1')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_1');
        $mny_jasa_po_2 = POproject::select('mny_jasa_po_2')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_2');
        $mny_jasa_po_3 = POproject::select('mny_jasa_po_3')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_3');
        $mny_jasa_po_4 = POproject::select('mny_jasa_po_4')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_4');
        $mny_jasa_po_5 = POproject::select('mny_jasa_po_5')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_5');
        $mny_jasa_po_6 = POproject::select('mny_jasa_po_6')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_6');
        $mny_jasa_po_7 = POproject::select('mny_jasa_po_7')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_7');
        $mny_jasa_po_8 = POproject::select('mny_jasa_po_8')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_8');
        $mny_jasa_po_9 = POproject::select('mny_jasa_po_9')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_9');
        $mny_jasa_po_10 = POproject::select('mny_jasa_po_10')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_10');
        $mny_jasa_po_11 = POproject::select('mny_jasa_po_11')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_11');
        $mny_jasa_po_12 = POproject::select('mny_jasa_po_12')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_12');
        $mny_jasa_po_13 = POproject::select('mny_jasa_po_13')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_13');
        $mny_jasa_po_14 = POproject::select('mny_jasa_po_14')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_14');
        $mny_jasa_po_15 = POproject::select('mny_jasa_po_15')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_15');
        $mny_jasa_po_16 = POproject::select('mny_jasa_po_16')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_16');
        $mny_jasa_po_17 = POproject::select('mny_jasa_po_17')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_17');
        $mny_jasa_po_18 = POproject::select('mny_jasa_po_18')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_18');
        $mny_jasa_po_19 = POproject::select('mny_jasa_po_19')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_19');
        $mny_jasa_po_20 = POproject::select('mny_jasa_po_20')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_20');
        $mny_jasa_po_21 = POproject::select('mny_jasa_po_21')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_21');
        $mny_jasa_po_22 = POproject::select('mny_jasa_po_22')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_22');
        $mny_jasa_po_23 = POproject::select('mny_jasa_po_23')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_23');
        $mny_jasa_po_24 = POproject::select('mny_jasa_po_24')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_24');
        $mny_jasa_po_25 = POproject::select('mny_jasa_po_25')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_25');
        $mny_jasa_po_26 = POproject::select('mny_jasa_po_26')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_26');
        $mny_jasa_po_27 = POproject::select('mny_jasa_po_27')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_27');
        $mny_jasa_po_28 = POproject::select('mny_jasa_po_28')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_28');
        $mny_jasa_po_29 = POproject::select('mny_jasa_po_29')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_29');
        $mny_jasa_po_30 = POproject::select('mny_jasa_po_30')
            ->whereNull('archive_at')
            ->sum('mny_jasa_po_30');
        $mny_mnftr_po_1 = POproject::select('mny_mnftr_po_1')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_1');
        $mny_mnftr_po_2 = POproject::select('mny_mnftr_po_2')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_2');
        $mny_mnftr_po_3 = POproject::select('mny_mnftr_po_3')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_3');
        $mny_mnftr_po_4 = POproject::select('mny_mnftr_po_4')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_4');
        $mny_mnftr_po_5 = POproject::select('mny_mnftr_po_5')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_5');
        $mny_mnftr_po_6 = POproject::select('mny_mnftr_po_6')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_6');
        $mny_mnftr_po_7 = POproject::select('mny_mnftr_po_7')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_7');
        $mny_mnftr_po_8 = POproject::select('mny_mnftr_po_8')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_8');
        $mny_mnftr_po_9 = POproject::select('mny_mnftr_po_9')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_9');
        $mny_mnftr_po_10 = POproject::select('mny_mnftr_po_10')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_po_10');
        $mny_capo_po_1 = POproject::select('mny_capo_po_1')
            ->whereNull('archive_at')
            ->sum('mny_capo_po_1');
        $mny_capo_po_2 = POproject::select('mny_capo_po_2')
            ->whereNull('archive_at')
            ->sum('mny_capo_po_2');
        $mny_capo_po_3 = POproject::select('mny_capo_po_3')
            ->whereNull('archive_at')
            ->sum('mny_capo_po_3');
        $mny_capo_po_4 = POproject::select('mny_capo_po_4')
            ->whereNull('archive_at')
            ->sum('mny_capo_po_4');
        $mny_capo_po_5 = POproject::select('mny_capo_po_5')
            ->whereNull('archive_at')
            ->sum('mny_capo_po_5');

        //PAY
        $mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_1');
        $mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_2');
        $mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_3');
        $mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_4');
        $mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_5');
        $mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_6');
        $mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_7');
        $mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_8');
        $mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_9');
        $mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_10');
        $mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_11');
        $mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_12');
        $mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_13');
        $mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_14');
        $mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_15');
        $mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_16');
        $mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_17');
        $mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_18');
        $mny_parts_pay_19 = PAYproject::select('mny_parts_pay_19')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_19');
        $mny_parts_pay_20 = PAYproject::select('mny_parts_pay_20')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_20');
        $mny_parts_pay_21 = PAYproject::select('mny_parts_pay_21')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_21');
        $mny_parts_pay_22 = PAYproject::select('mny_parts_pay_22')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_22');
        $mny_parts_pay_23 = PAYproject::select('mny_parts_pay_23')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_23');
        $mny_parts_pay_24 = PAYproject::select('mny_parts_pay_24')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_24');
        $mny_parts_pay_25 = PAYproject::select('mny_parts_pay_25')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_25');
        $mny_parts_pay_26 = PAYproject::select('mny_parts_pay_26')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_26');
        $mny_parts_pay_27 = PAYproject::select('mny_parts_pay_27')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_27');
        $mny_parts_pay_28 = PAYproject::select('mny_parts_pay_28')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_28');
        $mny_parts_pay_29 = PAYproject::select('mny_parts_pay_29')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_29');
        $mny_parts_pay_30 = PAYproject::select('mny_parts_pay_30')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_30');
        $mny_parts_pay_31 = PAYproject::select('mny_parts_pay_31')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_31');
        $mny_parts_pay_32 = PAYproject::select('mny_parts_pay_32')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_32');
        $mny_parts_pay_33 = PAYproject::select('mny_parts_pay_33')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_33');
        $mny_parts_pay_34 = PAYproject::select('mny_parts_pay_34')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_34');
        $mny_parts_pay_35 = PAYproject::select('mny_parts_pay_35')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_35');
        $mny_parts_pay_36 = PAYproject::select('mny_parts_pay_36')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_36');
        $mny_parts_pay_37 = PAYproject::select('mny_parts_pay_37')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_37');
        $mny_parts_pay_38 = PAYproject::select('mny_parts_pay_38')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_38');
        $mny_parts_pay_39 = PAYproject::select('mny_parts_pay_39')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_39');
        $mny_parts_pay_40 = PAYproject::select('mny_parts_pay_40')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_40');
        $mny_parts_pay_41 = PAYproject::select('mny_parts_pay_41')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_41');
        $mny_parts_pay_42 = PAYproject::select('mny_parts_pay_42')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_42');
        $mny_parts_pay_43 = PAYproject::select('mny_parts_pay_43')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_43');
        $mny_parts_pay_44 = PAYproject::select('mny_parts_pay_44')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_44');
        $mny_parts_pay_45 = PAYproject::select('mny_parts_pay_45')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_45');
        $mny_parts_pay_46 = PAYproject::select('mny_parts_pay_46')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_46');
        $mny_parts_pay_47 = PAYproject::select('mny_parts_pay_47')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_47');
        $mny_parts_pay_48 = PAYproject::select('mny_parts_pay_48')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_48');
        $mny_parts_pay_49 = PAYproject::select('mny_parts_pay_49')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_49');
        $mny_parts_pay_50 = PAYproject::select('mny_parts_pay_50')
            ->whereNull('archive_at')
            ->sum('mny_parts_pay_50');
        $mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_1');
        $mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_2');
        $mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_3');
        $mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_4');
        $mny_jasa_pay_5 = PAYproject::select('mny_jasa_pay_5')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_5');
        $mny_jasa_pay_6 = PAYproject::select('mny_jasa_pay_6')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_6');
        $mny_jasa_pay_7 = PAYproject::select('mny_jasa_pay_7')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_7');
        $mny_jasa_pay_8 = PAYproject::select('mny_jasa_pay_8')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_8');
        $mny_jasa_pay_9 = PAYproject::select('mny_jasa_pay_9')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_9');
        $mny_jasa_pay_10 = PAYproject::select('mny_jasa_pay_10')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_10');
        $mny_jasa_pay_11 = PAYproject::select('mny_jasa_pay_11')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_11');
        $mny_jasa_pay_12 = PAYproject::select('mny_jasa_pay_12')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_12');
        $mny_jasa_pay_13 = PAYproject::select('mny_jasa_pay_13')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_13');
        $mny_jasa_pay_14 = PAYproject::select('mny_jasa_pay_14')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_14');
        $mny_jasa_pay_15 = PAYproject::select('mny_jasa_pay_15')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_15');
        $mny_jasa_pay_16 = PAYproject::select('mny_jasa_pay_16')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_16');
        $mny_jasa_pay_17 = PAYproject::select('mny_jasa_pay_17')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_17');
        $mny_jasa_pay_18 = PAYproject::select('mny_jasa_pay_18')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_18');
        $mny_jasa_pay_19 = PAYproject::select('mny_jasa_pay_19')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_19');
        $mny_jasa_pay_20 = PAYproject::select('mny_jasa_pay_20')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_20');
        $mny_jasa_pay_21 = PAYproject::select('mny_jasa_pay_21')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_21');
        $mny_jasa_pay_22 = PAYproject::select('mny_jasa_pay_22')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_22');
        $mny_jasa_pay_23 = PAYproject::select('mny_jasa_pay_23')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_23');
        $mny_jasa_pay_24 = PAYproject::select('mny_jasa_pay_24')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_24');
        $mny_jasa_pay_25 = PAYproject::select('mny_jasa_pay_25')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_25');
        $mny_jasa_pay_26 = PAYproject::select('mny_jasa_pay_26')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_26');
        $mny_jasa_pay_27 = PAYproject::select('mny_jasa_pay_27')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_27');
        $mny_jasa_pay_28 = PAYproject::select('mny_jasa_pay_28')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_28');
        $mny_jasa_pay_29 = PAYproject::select('mny_jasa_pay_29')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_29');
        $mny_jasa_pay_30 = PAYproject::select('mny_jasa_pay_30')
            ->whereNull('archive_at')
            ->sum('mny_jasa_pay_30');
        $mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_1');
        $mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_2');
        $mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_3');
        $mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_4');
        $mny_mnftr_pay_5 = PAYproject::select('mny_mnftr_pay_5')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_5');
        $mny_mnftr_pay_6 = PAYproject::select('mny_mnftr_pay_6')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_6');
        $mny_mnftr_pay_7 = PAYproject::select('mny_mnftr_pay_7')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_7');
        $mny_mnftr_pay_8 = PAYproject::select('mny_mnftr_pay_8')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_8');
        $mny_mnftr_pay_9 = PAYproject::select('mny_mnftr_pay_9')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_9');
        $mny_mnftr_pay_10 = PAYproject::select('mny_mnftr_pay_10')
            ->whereNull('archive_at')
            ->sum('mny_mnftr_pay_10');
        $mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->whereNull('archive_at')
            ->sum('mny_da_pay_1');
        $mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->whereNull('archive_at')
            ->sum('mny_da_pay_2');
        $mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->whereNull('archive_at')
            ->sum('mny_da_pay_3');
        $mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->whereNull('archive_at')
            ->sum('mny_da_pay_4');
        $mny_da_pay_5 = PAYproject::select('mny_da_pay_5')
            ->whereNull('archive_at')
            ->sum('mny_da_pay_5');

        //PR
        $mny_pr =
            $mny_parts_pr_1 +
            $mny_parts_pr_2 +
            $mny_parts_pr_3 +
            $mny_parts_pr_4 +
            $mny_parts_pr_5 +
            $mny_parts_pr_6 +
            $mny_parts_pr_7 +
            $mny_parts_pr_8 +
            $mny_parts_pr_9 +
            $mny_parts_pr_10 +
            $mny_parts_pr_11 +
            $mny_parts_pr_12 +
            $mny_parts_pr_13 +
            $mny_parts_pr_14 +
            $mny_parts_pr_15 +
            $mny_parts_pr_16 +
            $mny_parts_pr_17 +
            $mny_parts_pr_18 +
            $mny_parts_pr_19 +
            $mny_parts_pr_20 +
            $mny_parts_pr_21 +
            $mny_parts_pr_22 +
            $mny_parts_pr_23 +
            $mny_parts_pr_24 +
            $mny_parts_pr_25 +
            $mny_parts_pr_26 +
            $mny_parts_pr_27 +
            $mny_parts_pr_28 +
            $mny_parts_pr_29 +
            $mny_parts_pr_30 +
            $mny_parts_pr_31 +
            $mny_parts_pr_32 +
            $mny_parts_pr_33 +
            $mny_parts_pr_34 +
            $mny_parts_pr_35 +
            $mny_parts_pr_36 +
            $mny_parts_pr_37 +
            $mny_parts_pr_38 +
            $mny_parts_pr_39 +
            $mny_parts_pr_40 +
            $mny_parts_pr_41 +
            $mny_parts_pr_42 +
            $mny_parts_pr_43 +
            $mny_parts_pr_44 +
            $mny_parts_pr_45 +
            $mny_parts_pr_46 +
            $mny_parts_pr_47 +
            $mny_parts_pr_48 +
            $mny_parts_pr_49 +
            $mny_parts_pr_50 +
            $mny_jasa_pr_1 +
            $mny_jasa_pr_2 +
            $mny_jasa_pr_3 +
            $mny_jasa_pr_4 +
            $mny_jasa_pr_5 +
            $mny_jasa_pr_6 +
            $mny_jasa_pr_7 +
            $mny_jasa_pr_8 +
            $mny_jasa_pr_9 +
            $mny_jasa_pr_10 +
            $mny_jasa_pr_11 +
            $mny_jasa_pr_12 +
            $mny_jasa_pr_13 +
            $mny_jasa_pr_14 +
            $mny_jasa_pr_15 +
            $mny_jasa_pr_16 +
            $mny_jasa_pr_17 +
            $mny_jasa_pr_18 +
            $mny_jasa_pr_19 +
            $mny_jasa_pr_20 +
            $mny_jasa_pr_21 +
            $mny_jasa_pr_22 +
            $mny_jasa_pr_23 +
            $mny_jasa_pr_24 +
            $mny_jasa_pr_25 +
            $mny_jasa_pr_26 +
            $mny_jasa_pr_27 +
            $mny_jasa_pr_28 +
            $mny_jasa_pr_29 +
            $mny_jasa_pr_30 +
            $mny_mnftr_pr_1 +
            $mny_mnftr_pr_2 +
            $mny_mnftr_pr_3 +
            $mny_mnftr_pr_4 +
            $mny_mnftr_pr_5 +
            $mny_mnftr_pr_6 +
            $mny_mnftr_pr_7 +
            $mny_mnftr_pr_8 +
            $mny_mnftr_pr_9 +
            $mny_mnftr_pr_10;

        // PA
        $mny_pa =
            $mny_parts_pa_1 +
            $mny_parts_pa_2 +
            $mny_parts_pa_3 +
            $mny_parts_pa_4 +
            $mny_parts_pa_5 +
            $mny_parts_pa_6 +
            $mny_parts_pa_7 +
            $mny_parts_pa_8 +
            $mny_parts_pa_9 +
            $mny_parts_pa_10 +
            $mny_parts_pa_11 +
            $mny_parts_pa_12 +
            $mny_parts_pa_13 +
            $mny_parts_pa_14 +
            $mny_parts_pa_15 +
            $mny_parts_pa_16 +
            $mny_parts_pa_17 +
            $mny_parts_pa_18 +
            $mny_parts_pa_19 +
            $mny_parts_pa_20 +
            $mny_parts_pa_21 +
            $mny_parts_pa_22 +
            $mny_parts_pa_23 +
            $mny_parts_pa_24 +
            $mny_parts_pa_25 +
            $mny_parts_pa_26 +
            $mny_parts_pa_27 +
            $mny_parts_pa_28 +
            $mny_parts_pa_29 +
            $mny_parts_pa_30 +
            $mny_parts_pa_31 +
            $mny_parts_pa_32 +
            $mny_parts_pa_33 +
            $mny_parts_pa_34 +
            $mny_parts_pa_35 +
            $mny_parts_pa_36 +
            $mny_parts_pa_37 +
            $mny_parts_pa_38 +
            $mny_parts_pa_39 +
            $mny_parts_pa_40 +
            $mny_parts_pa_41 +
            $mny_parts_pa_42 +
            $mny_parts_pa_43 +
            $mny_parts_pa_44 +
            $mny_parts_pa_45 +
            $mny_parts_pa_46 +
            $mny_parts_pa_47 +
            $mny_parts_pa_48 +
            $mny_parts_pa_49 +
            $mny_parts_pa_50 +
            $mny_jasa_pa_1 +
            $mny_jasa_pa_2 +
            $mny_jasa_pa_3 +
            $mny_jasa_pa_4 +
            $mny_jasa_pa_5 +
            $mny_jasa_pa_6 +
            $mny_jasa_pa_7 +
            $mny_jasa_pa_8 +
            $mny_jasa_pa_9 +
            $mny_jasa_pa_10 +
            $mny_jasa_pa_11 +
            $mny_jasa_pa_12 +
            $mny_jasa_pa_13 +
            $mny_jasa_pa_14 +
            $mny_jasa_pa_15 +
            $mny_jasa_pa_16 +
            $mny_jasa_pa_17 +
            $mny_jasa_pa_18 +
            $mny_jasa_pa_19 +
            $mny_jasa_pa_20 +
            $mny_jasa_pa_21 +
            $mny_jasa_pa_22 +
            $mny_jasa_pa_23 +
            $mny_jasa_pa_24 +
            $mny_jasa_pa_25 +
            $mny_jasa_pa_26 +
            $mny_jasa_pa_27 +
            $mny_jasa_pa_28 +
            $mny_jasa_pa_29 +
            $mny_jasa_pa_30 +
            $mny_mnftr_pa_1 +
            $mny_mnftr_pa_2 +
            $mny_mnftr_pa_3 +
            $mny_mnftr_pa_4 +
            $mny_mnftr_pa_5 +
            $mny_mnftr_pa_6 +
            $mny_mnftr_pa_7 +
            $mny_mnftr_pa_8 +
            $mny_mnftr_pa_9 +
            $mny_mnftr_pa_10 +
            $mny_epq_pa_1 +
            $mny_epq_pa_2 +
            $mny_epq_pa_3 +
            $mny_epq_pa_4 +
            $mny_epq_pa_5;

        //PO
        $mny_po =
            $mny_parts_po_1 +
            $mny_parts_po_2 +
            $mny_parts_po_3 +
            $mny_parts_po_4 +
            $mny_parts_po_5 +
            $mny_parts_po_6 +
            $mny_parts_po_7 +
            $mny_parts_po_8 +
            $mny_parts_po_9 +
            $mny_parts_po_10 +
            $mny_parts_po_11 +
            $mny_parts_po_12 +
            $mny_parts_po_13 +
            $mny_parts_po_14 +
            $mny_parts_po_15 +
            $mny_parts_po_16 +
            $mny_parts_po_17 +
            $mny_parts_po_18 +
            $mny_parts_po_19 +
            $mny_parts_po_20 +
            $mny_parts_po_21 +
            $mny_parts_po_22 +
            $mny_parts_po_23 +
            $mny_parts_po_24 +
            $mny_parts_po_25 +
            $mny_parts_po_26 +
            $mny_parts_po_27 +
            $mny_parts_po_28 +
            $mny_parts_po_29 +
            $mny_parts_po_30 +
            $mny_parts_po_31 +
            $mny_parts_po_32 +
            $mny_parts_po_33 +
            $mny_parts_po_34 +
            $mny_parts_po_35 +
            $mny_parts_po_36 +
            $mny_parts_po_37 +
            $mny_parts_po_38 +
            $mny_parts_po_39 +
            $mny_parts_po_40 +
            $mny_parts_po_41 +
            $mny_parts_po_42 +
            $mny_parts_po_43 +
            $mny_parts_po_44 +
            $mny_parts_po_45 +
            $mny_parts_po_46 +
            $mny_parts_po_47 +
            $mny_parts_po_48 +
            $mny_parts_po_49 +
            $mny_parts_po_50 +
            $mny_jasa_po_1 +
            $mny_jasa_po_2 +
            $mny_jasa_po_3 +
            $mny_jasa_po_4 +
            $mny_jasa_po_5 +
            $mny_jasa_po_6 +
            $mny_jasa_po_7 +
            $mny_jasa_po_8 +
            $mny_jasa_po_9 +
            $mny_jasa_po_10 +
            $mny_jasa_po_11 +
            $mny_jasa_po_12 +
            $mny_jasa_po_13 +
            $mny_jasa_po_14 +
            $mny_jasa_po_15 +
            $mny_jasa_po_16 +
            $mny_jasa_po_17 +
            $mny_jasa_po_18 +
            $mny_jasa_po_19 +
            $mny_jasa_po_20 +
            $mny_jasa_po_21 +
            $mny_jasa_po_22 +
            $mny_jasa_po_23 +
            $mny_jasa_po_24 +
            $mny_jasa_po_25 +
            $mny_jasa_po_26 +
            $mny_jasa_po_27 +
            $mny_jasa_po_28 +
            $mny_jasa_po_29 +
            $mny_jasa_po_30 +
            $mny_mnftr_po_1 +
            $mny_mnftr_po_2 +
            $mny_mnftr_po_3 +
            $mny_mnftr_po_4 +
            $mny_mnftr_po_5 +
            $mny_mnftr_po_6 +
            $mny_mnftr_po_7 +
            $mny_mnftr_po_8 +
            $mny_mnftr_po_9 +
            $mny_mnftr_po_10 +
            $mny_capo_po_1 +
            $mny_capo_po_2 +
            $mny_capo_po_3 +
            $mny_capo_po_4 +
            $mny_capo_po_5;

        //
        //PAY
        $mny_pay =
            $mny_parts_pay_1 +
            $mny_parts_pay_2 +
            $mny_parts_pay_3 +
            $mny_parts_pay_4 +
            $mny_parts_pay_5 +
            $mny_parts_pay_6 +
            $mny_parts_pay_7 +
            $mny_parts_pay_8 +
            $mny_parts_pay_9 +
            $mny_parts_pay_10 +
            $mny_parts_pay_11 +
            $mny_parts_pay_12 +
            $mny_parts_pay_13 +
            $mny_parts_pay_14 +
            $mny_parts_pay_15 +
            $mny_parts_pay_16 +
            $mny_parts_pay_17 +
            $mny_parts_pay_18 +
            $mny_parts_pay_19 +
            $mny_parts_pay_20 +
            $mny_parts_pay_21 +
            $mny_parts_pay_22 +
            $mny_parts_pay_23 +
            $mny_parts_pay_24 +
            $mny_parts_pay_25 +
            $mny_parts_pay_26 +
            $mny_parts_pay_27 +
            $mny_parts_pay_28 +
            $mny_parts_pay_29 +
            $mny_parts_pay_30 +
            $mny_parts_pay_31 +
            $mny_parts_pay_32 +
            $mny_parts_pay_33 +
            $mny_parts_pay_34 +
            $mny_parts_pay_35 +
            $mny_parts_pay_36 +
            $mny_parts_pay_37 +
            $mny_parts_pay_38 +
            $mny_parts_pay_39 +
            $mny_parts_pay_40 +
            $mny_parts_pay_41 +
            $mny_parts_pay_42 +
            $mny_parts_pay_43 +
            $mny_parts_pay_44 +
            $mny_parts_pay_45 +
            $mny_parts_pay_46 +
            $mny_parts_pay_47 +
            $mny_parts_pay_48 +
            $mny_parts_pay_49 +
            $mny_parts_pay_50 +
            $mny_jasa_pay_1 +
            $mny_jasa_pay_2 +
            $mny_jasa_pay_3 +
            $mny_jasa_pay_4 +
            $mny_jasa_pay_5 +
            $mny_jasa_pay_6 +
            $mny_jasa_pay_7 +
            $mny_jasa_pay_8 +
            $mny_jasa_pay_9 +
            $mny_jasa_pay_10 +
            $mny_jasa_pay_11 +
            $mny_jasa_pay_12 +
            $mny_jasa_pay_13 +
            $mny_jasa_pay_14 +
            $mny_jasa_pay_15 +
            $mny_jasa_pay_16 +
            $mny_jasa_pay_17 +
            $mny_jasa_pay_18 +
            $mny_jasa_pay_19 +
            $mny_jasa_pay_20 +
            $mny_jasa_pay_21 +
            $mny_jasa_pay_22 +
            $mny_jasa_pay_23 +
            $mny_jasa_pay_24 +
            $mny_jasa_pay_25 +
            $mny_jasa_pay_26 +
            $mny_jasa_pay_27 +
            $mny_jasa_pay_28 +
            $mny_jasa_pay_29 +
            $mny_jasa_pay_30 +
            $mny_mnftr_pay_1 +
            $mny_mnftr_pay_2 +
            $mny_mnftr_pay_3 +
            $mny_mnftr_pay_4 +
            $mny_mnftr_pay_5 +
            $mny_mnftr_pay_6 +
            $mny_mnftr_pay_7 +
            $mny_mnftr_pay_8 +
            $mny_mnftr_pay_9 +
            $mny_mnftr_pay_10 +
            $mny_da_pay_1 +
            $mny_da_pay_2 +
            $mny_da_pay_3 +
            $mny_da_pay_4 +
            $mny_da_pay_5;

        // planned
        $planned = PlannedPayment::all()
            ->where('marking', 'Planned-1')
            ->first();

        // queri januari
        $jan_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_1');
        $jan_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_2');
        $jan_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_3');
        $jan_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_4');
        $jan_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_5');
        $jan_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_6');
        $jan_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_7');
        $jan_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_8');
        $jan_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_9');
        $jan_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_10');
        $jan_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_11');
        $jan_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_12');
        $jan_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_13');
        $jan_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_14');
        $jan_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_15');
        $jan_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_16');
        $jan_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_17');
        $jan_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_18');
        $jan_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_19');
        $jan_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_20');
        $jan_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_21');
        $jan_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_22');
        $jan_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_23');
        $jan_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_24');
        $jan_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_25');
        $jan_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_26');
        $jan_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_27');
        $jan_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_28');
        $jan_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_29');
        $jan_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_30');
        $jan_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_31');
        $jan_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_32');
        $jan_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_33');
        $jan_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_34');
        $jan_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_35');
        $jan_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_36');
        $jan_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_37');
        $jan_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_38');
        $jan_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_39');
        $jan_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_40');
        $jan_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_41');
        $jan_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_42');
        $jan_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_43');
        $jan_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_44');
        $jan_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_45');
        $jan_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_46');
        $jan_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_47');
        $jan_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_48');
        $jan_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_49');
        $jan_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_1))
            ->sum('mny_parts_pay_50');
        $jan_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_1');
        $jan_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_2');
        $jan_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_3');
        $jan_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_4');
        $jan_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_5');
        $jan_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_6');
        $jan_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_7');
        $jan_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_8');
        $jan_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_9');
        $jan_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_10');
        $jan_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_11');
        $jan_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_12');
        $jan_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_13');
        $jan_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_14');
        $jan_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_15');
        $jan_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_16');
        $jan_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_17');
        $jan_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_18');
        $jan_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_19');
        $jan_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_20');
        $jan_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_21');
        $jan_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_22');
        $jan_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_23');
        $jan_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_24');
        $jan_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_25');
        $jan_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_26');
        $jan_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_27');
        $jan_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_28');
        $jan_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_29');
        $jan_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_1))
            ->sum('mny_jasa_pay_30');

        $jan_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_1');

        $jan_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_2');

        $jan_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_3');

        $jan_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_4');

        $jan_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_5');

        $jan_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_6');

        $jan_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_7');

        $jan_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_8');

        $jan_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_9');

        $jan_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_1))
            ->sum('mny_mnftr_pay_10');

        $jan_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_1))
            ->sum('mny_da_pay_1');

        $jan_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_1))
            ->sum('mny_da_pay_2');

        $jan_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_1))
            ->sum('mny_da_pay_3');

        $jan_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_1))
            ->sum('mny_da_pay_4');

        $jan_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_1))
            ->sum('mny_da_pay_5');

        // februari
        $feb_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_1');
        $feb_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_2');
        $feb_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_3');
        $feb_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_4');
        $feb_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_5');
        $feb_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_6');
        $feb_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_7');
        $feb_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_8');
        $feb_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_9');
        $feb_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_10');
        $feb_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_11');
        $feb_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_12');
        $feb_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_13');
        $feb_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_14');
        $feb_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_15');
        $feb_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_16');
        $feb_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_17');
        $feb_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_18');
        $feb_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_19');
        $feb_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_20');
        $feb_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_21');
        $feb_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_22');
        $feb_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_23');
        $feb_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_24');
        $feb_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_25');
        $feb_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_26');
        $feb_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_27');
        $feb_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_28');
        $feb_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_29');
        $feb_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_30');
        $feb_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_31');
        $feb_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_32');
        $feb_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_33');
        $feb_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_34');
        $feb_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_35');
        $feb_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_36');
        $feb_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_37');
        $feb_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_38');
        $feb_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_39');
        $feb_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_40');
        $feb_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_41');
        $feb_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_42');
        $feb_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_43');
        $feb_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_44');
        $feb_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_45');
        $feb_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_46');
        $feb_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_47');
        $feb_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_48');
        $feb_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_49');
        $feb_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_2))
            ->sum('mny_parts_pay_50');
        $feb_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_1');
        $feb_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_2');
        $feb_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_3');
        $feb_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_4');
        $feb_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_5');
        $feb_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_6');
        $feb_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_7');
        $feb_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_8');
        $feb_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_9');
        $feb_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_10');
        $feb_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_11');
        $feb_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_12');
        $feb_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_13');
        $feb_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_14');
        $feb_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_15');
        $feb_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_16');
        $feb_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_17');
        $feb_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_18');
        $feb_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_19');
        $feb_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_20');
        $feb_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_21');
        $feb_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_22');
        $feb_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_23');
        $feb_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_24');
        $feb_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_25');
        $feb_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_26');
        $feb_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_27');
        $feb_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_28');
        $feb_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_29');
        $feb_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_2))
            ->sum('mny_jasa_pay_30');

        $feb_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_1');

        $feb_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_2');

        $feb_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_3');

        $feb_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_4');

        $feb_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_5');

        $feb_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_6');

        $feb_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_7');

        $feb_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_8');

        $feb_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_9');

        $feb_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_2))
            ->sum('mny_mnftr_pay_10');

        $feb_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_2))
            ->sum('mny_da_pay_1');

        $feb_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_2))
            ->sum('mny_da_pay_2');

        $feb_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_2))
            ->sum('mny_da_pay_3');

        $feb_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_2))
            ->sum('mny_da_pay_4');

        $feb_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_2))
            ->sum('mny_da_pay_5');
        //maret
        $mar_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_1');
        $mar_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_2');
        $mar_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_3');
        $mar_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_4');
        $mar_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_5');
        $mar_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_6');
        $mar_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_7');
        $mar_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_8');
        $mar_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_9');
        $mar_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_10');
        $mar_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_11');
        $mar_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_12');
        $mar_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_13');
        $mar_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_14');
        $mar_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_15');
        $mar_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_16');
        $mar_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_17');
        $mar_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_18');
        $mar_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_19');
        $mar_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_20');
        $mar_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_21');
        $mar_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_22');
        $mar_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_23');
        $mar_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_24');
        $mar_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_25');
        $mar_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_26');
        $mar_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_27');
        $mar_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_28');
        $mar_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_29');
        $mar_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_30');
        $mar_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_31');
        $mar_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_32');
        $mar_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_33');
        $mar_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_34');
        $mar_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_35');
        $mar_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_36');
        $mar_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_37');
        $mar_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_38');
        $mar_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_39');
        $mar_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_40');
        $mar_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_41');
        $mar_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_42');
        $mar_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_43');
        $mar_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_44');
        $mar_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_45');
        $mar_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_46');
        $mar_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_47');
        $mar_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_48');
        $mar_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_49');
        $mar_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_3))
            ->sum('mny_parts_pay_50');
        $mar_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_1');
        $mar_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_2');
        $mar_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_3');
        $mar_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_4');
        $mar_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_5');
        $mar_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_6');
        $mar_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_7');
        $mar_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_8');
        $mar_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_9');
        $mar_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_10');
        $mar_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_11');
        $mar_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_12');
        $mar_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_13');
        $mar_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_14');
        $mar_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_15');
        $mar_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_16');
        $mar_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_17');
        $mar_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_18');
        $mar_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_19');
        $mar_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_20');
        $mar_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_21');
        $mar_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_22');
        $mar_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_23');
        $mar_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_24');
        $mar_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_25');
        $mar_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_26');
        $mar_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_27');
        $mar_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_28');
        $mar_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_29');
        $mar_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_3))
            ->sum('mny_jasa_pay_30');

        $mar_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_1');

        $mar_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_2');

        $mar_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_3');

        $mar_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_4');

        $mar_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_5');

        $mar_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_6');

        $mar_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_7');

        $mar_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_8');

        $mar_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_9');

        $mar_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_3))
            ->sum('mny_mnftr_pay_10');

        $mar_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_3))
            ->sum('mny_da_pay_1');

        $mar_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_3))
            ->sum('mny_da_pay_2');

        $mar_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_3))
            ->sum('mny_da_pay_3');

        $mar_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_3))
            ->sum('mny_da_pay_4');

        $mar_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_3))
            ->sum('mny_da_pay_5');
        //april
        $apr_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_1');
        $apr_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_2');
        $apr_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_3');
        $apr_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_4');
        $apr_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_5');
        $apr_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_6');
        $apr_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_7');
        $apr_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_8');
        $apr_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_9');
        $apr_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_10');
        $apr_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_11');
        $apr_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_12');
        $apr_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_13');
        $apr_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_14');
        $apr_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_15');
        $apr_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_16');
        $apr_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_17');
        $apr_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_18');
        $apr_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_19');
        $apr_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_20');
        $apr_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_21');
        $apr_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_22');
        $apr_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_23');
        $apr_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_24');
        $apr_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_25');
        $apr_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_26');
        $apr_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_27');
        $apr_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_28');
        $apr_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_29');
        $apr_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_30');
        $apr_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_31');
        $apr_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_32');
        $apr_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_33');
        $apr_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_34');
        $apr_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_35');
        $apr_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_36');
        $apr_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_37');
        $apr_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_38');
        $apr_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_39');
        $apr_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_40');
        $apr_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_41');
        $apr_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_42');
        $apr_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_43');
        $apr_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_44');
        $apr_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_45');
        $apr_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_46');
        $apr_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_47');
        $apr_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_48');
        $apr_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_49');
        $apr_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_4))
            ->sum('mny_parts_pay_50');
        $apr_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_1');
        $apr_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_2');
        $apr_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_3');
        $apr_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_4');
        $apr_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_5');
        $apr_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_6');
        $apr_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_7');
        $apr_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_8');
        $apr_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_9');
        $apr_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_10');
        $apr_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_11');
        $apr_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_12');
        $apr_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_13');
        $apr_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_14');
        $apr_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_15');
        $apr_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_16');
        $apr_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_17');
        $apr_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_18');
        $apr_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_19');
        $apr_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_20');
        $apr_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_21');
        $apr_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_22');
        $apr_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_23');
        $apr_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_24');
        $apr_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_25');
        $apr_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_26');
        $apr_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_27');
        $apr_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_28');
        $apr_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_29');
        $apr_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_4))
            ->sum('mny_jasa_pay_30');

        $apr_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_1');

        $apr_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_2');

        $apr_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_3');

        $apr_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_4');

        $apr_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_5');

        $apr_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_6');

        $apr_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_7');

        $apr_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_8');

        $apr_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_9');

        $apr_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_4))
            ->sum('mny_mnftr_pay_10');

        $apr_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_4))
            ->sum('mny_da_pay_1');

        $apr_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_4))
            ->sum('mny_da_pay_2');

        $apr_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_4))
            ->sum('mny_da_pay_3');

        $apr_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_4))
            ->sum('mny_da_pay_4');

        $apr_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_4))
            ->sum('mny_da_pay_5');
        //mei
        $mei_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_1');
        $mei_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_2');
        $mei_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_3');
        $mei_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_4');
        $mei_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_5');
        $mei_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_6');
        $mei_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_7');
        $mei_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_8');
        $mei_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_9');
        $mei_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_10');
        $mei_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_11');
        $mei_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_12');
        $mei_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_13');
        $mei_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_14');
        $mei_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_15');
        $mei_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_16');
        $mei_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_17');
        $mei_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_18');
        $mei_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_19');
        $mei_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_20');
        $mei_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_21');
        $mei_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_22');
        $mei_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_23');
        $mei_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_24');
        $mei_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_25');
        $mei_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_26');
        $mei_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_27');
        $mei_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_28');
        $mei_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_29');
        $mei_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_30');
        $mei_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_31');
        $mei_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_32');
        $mei_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_33');
        $mei_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_34');
        $mei_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_35');
        $mei_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_36');
        $mei_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_37');
        $mei_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_38');
        $mei_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_39');
        $mei_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_40');
        $mei_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_41');
        $mei_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_42');
        $mei_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_43');
        $mei_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_44');
        $mei_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_45');
        $mei_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_46');
        $mei_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_47');
        $mei_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_48');
        $mei_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_49');
        $mei_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_5))
            ->sum('mny_parts_pay_50');
        $mei_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_1');
        $mei_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_2');
        $mei_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_3');
        $mei_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_4');
        $mei_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_5');
        $mei_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_6');
        $mei_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_7');
        $mei_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_8');
        $mei_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_9');
        $mei_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_10');
        $mei_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_11');
        $mei_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_12');
        $mei_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_13');
        $mei_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_14');
        $mei_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_15');
        $mei_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_16');
        $mei_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_17');
        $mei_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_18');
        $mei_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_19');
        $mei_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_20');
        $mei_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_21');
        $mei_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_22');
        $mei_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_23');
        $mei_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_24');
        $mei_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_25');
        $mei_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_26');
        $mei_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_27');
        $mei_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_28');
        $mei_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_29');
        $mei_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_5))
            ->sum('mny_jasa_pay_30');

        $mei_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_1');

        $mei_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_2');

        $mei_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_3');

        $mei_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_4');

        $mei_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_5');

        $mei_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_6');

        $mei_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_7');

        $mei_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_8');

        $mei_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_9');

        $mei_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_5))
            ->sum('mny_mnftr_pay_10');

        $mei_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_5))
            ->sum('mny_da_pay_1');

        $mei_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_5))
            ->sum('mny_da_pay_2');

        $mei_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_5))
            ->sum('mny_da_pay_3');

        $mei_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_5))
            ->sum('mny_da_pay_4');

        $mei_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_5))
            ->sum('mny_da_pay_5');
        //jun
        $jun_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_1');
        $jun_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_2');
        $jun_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_3');
        $jun_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_4');
        $jun_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_5');
        $jun_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_6');
        $jun_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_7');
        $jun_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_8');
        $jun_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_9');
        $jun_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_10');
        $jun_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_11');
        $jun_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_12');
        $jun_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_13');
        $jun_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_14');
        $jun_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_15');
        $jun_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_16');
        $jun_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_17');
        $jun_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_18');
        $jun_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_19');
        $jun_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_20');
        $jun_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_21');
        $jun_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_22');
        $jun_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_23');
        $jun_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_24');
        $jun_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_25');
        $jun_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_26');
        $jun_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_27');
        $jun_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_28');
        $jun_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_29');
        $jun_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_30');
        $jun_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_31');
        $jun_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_32');
        $jun_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_33');
        $jun_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_34');
        $jun_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_35');
        $jun_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_36');
        $jun_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_37');
        $jun_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_38');
        $jun_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_39');
        $jun_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_40');
        $jun_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_41');
        $jun_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_42');
        $jun_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_43');
        $jun_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_44');
        $jun_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_45');
        $jun_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_46');
        $jun_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_47');
        $jun_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_48');
        $jun_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_49');
        $jun_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_6))
            ->sum('mny_parts_pay_50');
        $jun_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_1');
        $jun_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_2');
        $jun_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_3');
        $jun_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_4');
        $jun_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_5');
        $jun_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_6');
        $jun_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_7');
        $jun_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_8');
        $jun_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_9');
        $jun_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_10');
        $jun_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_11');
        $jun_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_12');
        $jun_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_13');
        $jun_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_14');
        $jun_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_15');
        $jun_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_16');
        $jun_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_17');
        $jun_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_18');
        $jun_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_19');
        $jun_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_20');
        $jun_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_21');
        $jun_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_22');
        $jun_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_23');
        $jun_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_24');
        $jun_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_25');
        $jun_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_26');
        $jun_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_27');
        $jun_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_28');
        $jun_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_29');
        $jun_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_6))
            ->sum('mny_jasa_pay_30');

        $jun_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_1');

        $jun_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_2');

        $jun_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_3');

        $jun_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_4');

        $jun_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_5');

        $jun_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_6');

        $jun_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_7');

        $jun_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_8');

        $jun_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_9');

        $jun_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_6))
            ->sum('mny_mnftr_pay_10');

        $jun_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_6))
            ->sum('mny_da_pay_1');

        $jun_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_6))
            ->sum('mny_da_pay_2');

        $jun_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_6))
            ->sum('mny_da_pay_3');

        $jun_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_6))
            ->sum('mny_da_pay_4');

        $jun_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_6))
            ->sum('mny_da_pay_5');
        //juli
        $jul_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_1');
        $jul_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_2');
        $jul_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_3');
        $jul_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_4');
        $jul_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_5');
        $jul_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_6');
        $jul_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_7');
        $jul_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_8');
        $jul_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_9');
        $jul_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_10');
        $jul_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_11');
        $jul_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_12');
        $jul_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_13');
        $jul_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_14');
        $jul_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_15');
        $jul_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_16');
        $jul_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_17');
        $jul_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_18');
        $jul_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_19');
        $jul_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_20');
        $jul_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_21');
        $jul_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_22');
        $jul_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_23');
        $jul_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_24');
        $jul_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_25');
        $jul_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_26');
        $jul_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_27');
        $jul_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_28');
        $jul_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_29');
        $jul_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_30');
        $jul_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_31');
        $jul_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_32');
        $jul_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_33');
        $jul_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_34');
        $jul_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_35');
        $jul_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_36');
        $jul_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_37');
        $jul_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_38');
        $jul_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_39');
        $jul_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_40');
        $jul_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_41');
        $jul_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_42');
        $jul_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_43');
        $jul_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_44');
        $jul_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_45');
        $jul_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_46');
        $jul_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_47');
        $jul_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_48');
        $jul_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_49');
        $jul_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_7))
            ->sum('mny_parts_pay_50');
        $jul_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_1');
        $jul_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_2');
        $jul_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_3');
        $jul_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_4');
        $jul_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_5');
        $jul_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_6');
        $jul_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_7');
        $jul_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_8');
        $jul_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_9');
        $jul_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_10');
        $jul_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_11');
        $jul_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_12');
        $jul_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_13');
        $jul_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_14');
        $jul_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_15');
        $jul_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_16');
        $jul_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_17');
        $jul_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_18');
        $jul_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_19');
        $jul_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_20');
        $jul_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_21');
        $jul_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_22');
        $jul_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_23');
        $jul_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_24');
        $jul_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_25');
        $jul_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_26');
        $jul_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_27');
        $jul_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_28');
        $jul_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_29');
        $jul_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_7))
            ->sum('mny_jasa_pay_30');

        $jul_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_1');

        $jul_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_2');

        $jul_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_3');

        $jul_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_4');

        $jul_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_5');

        $jul_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_6');

        $jul_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_7');

        $jul_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_8');

        $jul_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_9');

        $jul_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_7))
            ->sum('mny_mnftr_pay_10');

        $jul_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_7))
            ->sum('mny_da_pay_1');

        $jul_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_7))
            ->sum('mny_da_pay_2');

        $jul_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_7))
            ->sum('mny_da_pay_3');

        $jul_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_7))
            ->sum('mny_da_pay_4');

        $jul_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_7))
            ->sum('mny_da_pay_5');
        //agustus
        $agu_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_1');
        $agu_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_2');
        $agu_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_3');
        $agu_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_4');
        $agu_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_5');
        $agu_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_6');
        $agu_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_7');
        $agu_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_8');
        $agu_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_9');
        $agu_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_10');
        $agu_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_11');
        $agu_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_12');
        $agu_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_13');
        $agu_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_14');
        $agu_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_15');
        $agu_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_16');
        $agu_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_17');
        $agu_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_18');
        $agu_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_19');
        $agu_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_20');
        $agu_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_21');
        $agu_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_22');
        $agu_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_23');
        $agu_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_24');
        $agu_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_25');
        $agu_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_26');
        $agu_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_27');
        $agu_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_28');
        $agu_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_29');
        $agu_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_30');
        $agu_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_31');
        $agu_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_32');
        $agu_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_33');
        $agu_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_34');
        $agu_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_35');
        $agu_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_36');
        $agu_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_37');
        $agu_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_38');
        $agu_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_39');
        $agu_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_40');
        $agu_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_41');
        $agu_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_42');
        $agu_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_43');
        $agu_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_44');
        $agu_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_45');
        $agu_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_46');
        $agu_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_47');
        $agu_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_48');
        $agu_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_49');
        $agu_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_8))
            ->sum('mny_parts_pay_50');
        $agu_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_1');
        $agu_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_2');
        $agu_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_3');
        $agu_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_4');
        $agu_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_5');
        $agu_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_6');
        $agu_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_7');
        $agu_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_8');
        $agu_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_9');
        $agu_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_10');
        $agu_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_11');
        $agu_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_12');
        $agu_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_13');
        $agu_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_14');
        $agu_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_15');
        $agu_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_16');
        $agu_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_17');
        $agu_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_18');
        $agu_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_19');
        $agu_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_20');
        $agu_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_21');
        $agu_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_22');
        $agu_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_23');
        $agu_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_24');
        $agu_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_25');
        $agu_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_26');
        $agu_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_27');
        $agu_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_28');
        $agu_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_29');
        $agu_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_8))
            ->sum('mny_jasa_pay_30');

        $agu_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_1');

        $agu_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_2');

        $agu_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_3');

        $agu_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_4');

        $agu_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_5');

        $agu_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_6');

        $agu_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_7');

        $agu_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_8');

        $agu_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_9');

        $agu_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_8))
            ->sum('mny_mnftr_pay_10');

        $agu_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_8))
            ->sum('mny_da_pay_1');

        $agu_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_8))
            ->sum('mny_da_pay_2');

        $agu_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_8))
            ->sum('mny_da_pay_3');

        $agu_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_8))
            ->sum('mny_da_pay_4');

        $agu_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_8))
            ->sum('mny_da_pay_5');
        //september
        $sep_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_1');
        $sep_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_2');
        $sep_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_3');
        $sep_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_4');
        $sep_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_5');
        $sep_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_6');
        $sep_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_7');
        $sep_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_8');
        $sep_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_9');
        $sep_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_10');
        $sep_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_11');
        $sep_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_12');
        $sep_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_13');
        $sep_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_14');
        $sep_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_15');
        $sep_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_16');
        $sep_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_17');
        $sep_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_18');
        $sep_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_19');
        $sep_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_20');
        $sep_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_21');
        $sep_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_22');
        $sep_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_23');
        $sep_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_24');
        $sep_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_25');
        $sep_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_26');
        $sep_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_27');
        $sep_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_28');
        $sep_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_29');
        $sep_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_30');
        $sep_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_31');
        $sep_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_32');
        $sep_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_33');
        $sep_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_34');
        $sep_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_35');
        $sep_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_36');
        $sep_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_37');
        $sep_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_38');
        $sep_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_39');
        $sep_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_40');
        $sep_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_41');
        $sep_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_42');
        $sep_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_43');
        $sep_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_44');
        $sep_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_45');
        $sep_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_46');
        $sep_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_47');
        $sep_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_48');
        $sep_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_49');
        $sep_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_9))
            ->sum('mny_parts_pay_50');
        $sep_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_1');
        $sep_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_2');
        $sep_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_3');
        $sep_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_4');
        $sep_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_5');
        $sep_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_6');
        $sep_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_7');
        $sep_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_8');
        $sep_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_9');
        $sep_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_10');
        $sep_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_11');
        $sep_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_12');
        $sep_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_13');
        $sep_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_14');
        $sep_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_15');
        $sep_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_16');
        $sep_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_17');
        $sep_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_18');
        $sep_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_19');
        $sep_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_20');
        $sep_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_21');
        $sep_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_22');
        $sep_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_23');
        $sep_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_24');
        $sep_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_25');
        $sep_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_26');
        $sep_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_27');
        $sep_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_28');
        $sep_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_29');
        $sep_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_9))
            ->sum('mny_jasa_pay_30');

        $sep_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_1');

        $sep_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_2');

        $sep_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_3');

        $sep_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_4');

        $sep_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_5');

        $sep_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_6');

        $sep_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_7');

        $sep_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_8');

        $sep_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_9');

        $sep_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_9))
            ->sum('mny_mnftr_pay_10');

        $sep_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_9))
            ->sum('mny_da_pay_1');

        $sep_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_9))
            ->sum('mny_da_pay_2');

        $sep_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_9))
            ->sum('mny_da_pay_3');

        $sep_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_9))
            ->sum('mny_da_pay_4');

        $sep_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_9))
            ->sum('mny_da_pay_5');
        //oktober
        $okt_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_1');
        $okt_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_2');
        $okt_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_3');
        $okt_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_4');
        $okt_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_5');
        $okt_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_6');
        $okt_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_7');
        $okt_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_8');
        $okt_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_9');
        $okt_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_10');
        $okt_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_11');
        $okt_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_12');
        $okt_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_13');
        $okt_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_14');
        $okt_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_15');
        $okt_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_16');
        $okt_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_17');
        $okt_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_18');
        $okt_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_19');
        $okt_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_20');
        $okt_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_21');
        $okt_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_22');
        $okt_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_23');
        $okt_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_24');
        $okt_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_25');
        $okt_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_26');
        $okt_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_27');
        $okt_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_28');
        $okt_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_29');
        $okt_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_30');
        $okt_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_31');
        $okt_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_32');
        $okt_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_33');
        $okt_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_34');
        $okt_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_35');
        $okt_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_36');
        $okt_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_37');
        $okt_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_38');
        $okt_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_39');
        $okt_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_40');
        $okt_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_41');
        $okt_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_42');
        $okt_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_43');
        $okt_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_44');
        $okt_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_45');
        $okt_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_46');
        $okt_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_47');
        $okt_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_48');
        $okt_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_49');
        $okt_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_10))
            ->sum('mny_parts_pay_50');
        $okt_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_1');
        $okt_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_2');
        $okt_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_3');
        $okt_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_4');
        $okt_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_5');
        $okt_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_6');
        $okt_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_7');
        $okt_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_8');
        $okt_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_9');
        $okt_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_10');
        $okt_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_11');
        $okt_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_12');
        $okt_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_13');
        $okt_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_14');
        $okt_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_15');
        $okt_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_16');
        $okt_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_17');
        $okt_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_18');
        $okt_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_19');
        $okt_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_20');
        $okt_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_21');
        $okt_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_22');
        $okt_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_23');
        $okt_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_24');
        $okt_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_25');
        $okt_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_26');
        $okt_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_27');
        $okt_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_28');
        $okt_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_29');
        $okt_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_10))
            ->sum('mny_jasa_pay_30');

        $okt_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_1');

        $okt_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_2');

        $okt_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_3');

        $okt_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_4');

        $okt_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_5');

        $okt_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_6');

        $okt_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_7');

        $okt_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_8');

        $okt_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_9');

        $okt_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_10))
            ->sum('mny_mnftr_pay_10');

        $okt_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_10))
            ->sum('mny_da_pay_1');

        $okt_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_10))
            ->sum('mny_da_pay_2');

        $okt_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_10))
            ->sum('mny_da_pay_3');

        $okt_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_10))
            ->sum('mny_da_pay_4');

        $okt_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_10))
            ->sum('mny_da_pay_5');
        //november
        $nov_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_1');
        $nov_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_2');
        $nov_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_3');
        $nov_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_4');
        $nov_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_5');
        $nov_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_6');
        $nov_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_7');
        $nov_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_8');
        $nov_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_9');
        $nov_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_10');
        $nov_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_11');
        $nov_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_12');
        $nov_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_13');
        $nov_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_14');
        $nov_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_15');
        $nov_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_16');
        $nov_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_17');
        $nov_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_18');
        $nov_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_19');
        $nov_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_20');
        $nov_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_21');
        $nov_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_22');
        $nov_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_23');
        $nov_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_24');
        $nov_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_25');
        $nov_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_26');
        $nov_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_27');
        $nov_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_28');
        $nov_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_29');
        $nov_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_30');
        $nov_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_31');
        $nov_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_32');
        $nov_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_33');
        $nov_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_34');
        $nov_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_35');
        $nov_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_36');
        $nov_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_37');
        $nov_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_38');
        $nov_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_39');
        $nov_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_40');
        $nov_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_41');
        $nov_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_42');
        $nov_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_43');
        $nov_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_44');
        $nov_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_45');
        $nov_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_46');
        $nov_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_47');
        $nov_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_48');
        $nov_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_49');
        $nov_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_11))
            ->sum('mny_parts_pay_50');
        $nov_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_1');
        $nov_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_2');
        $nov_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_3');
        $nov_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_4');
        $nov_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_5');
        $nov_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_6');
        $nov_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_7');
        $nov_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_8');
        $nov_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_9');
        $nov_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_10');
        $nov_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_11');
        $nov_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_12');
        $nov_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_13');
        $nov_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_14');
        $nov_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_15');
        $nov_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_16');
        $nov_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_17');
        $nov_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_18');
        $nov_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_19');
        $nov_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_20');
        $nov_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_21');
        $nov_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_22');
        $nov_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_23');
        $nov_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_24');
        $nov_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_25');
        $nov_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_26');
        $nov_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_27');
        $nov_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_28');
        $nov_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_29');
        $nov_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_11))
            ->sum('mny_jasa_pay_30');

        $nov_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_1');

        $nov_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_2');

        $nov_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_3');

        $nov_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_4');

        $nov_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_5');

        $nov_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_6');

        $nov_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_7');

        $nov_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_8');

        $nov_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_9');

        $nov_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_11))
            ->sum('mny_mnftr_pay_10');

        $nov_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_11))
            ->sum('mny_da_pay_1');

        $nov_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_11))
            ->sum('mny_da_pay_2');

        $nov_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_11))
            ->sum('mny_da_pay_3');

        $nov_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_11))
            ->sum('mny_da_pay_4');

        $nov_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_11))
            ->sum('mny_da_pay_5');
        //desember
        $des_mny_parts_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_1', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_1');
        $des_mny_parts_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_2', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_2');
        $des_mny_parts_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_3', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_3');
        $des_mny_parts_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_4', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_4');
        $des_mny_parts_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_5', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_5');
        $des_mny_parts_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_6', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_6');
        $des_mny_parts_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_7', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_7');
        $des_mny_parts_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_8', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_8');
        $des_mny_parts_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_9', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_9');
        $des_mny_parts_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_10', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_10');
        $des_mny_parts_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_11', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_11');
        $des_mny_parts_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_12', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_12');
        $des_mny_parts_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_13', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_13');
        $des_mny_parts_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_14', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_14');
        $des_mny_parts_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_15', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_15');
        $des_mny_parts_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_16', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_16');
        $des_mny_parts_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_17', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_17');
        $des_mny_parts_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_18', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_18');
        $des_mny_parts_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_19', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_19');
        $des_mny_parts_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_20', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_20');
        $des_mny_parts_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_21', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_21');
        $des_mny_parts_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_22', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_22');
        $des_mny_parts_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_23', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_23');
        $des_mny_parts_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_24', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_24');
        $des_mny_parts_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_25', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_25');
        $des_mny_parts_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_26', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_26');
        $des_mny_parts_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_27', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_27');
        $des_mny_parts_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_28', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_28');
        $des_mny_parts_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_29', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_29');
        $des_mny_parts_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_30', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_30');
        $des_mny_parts_pay_31 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_31', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_31');
        $des_mny_parts_pay_32 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_32', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_32');
        $des_mny_parts_pay_33 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_33', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_33');
        $des_mny_parts_pay_34 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_34', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_34');
        $des_mny_parts_pay_35 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_35', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_35');
        $des_mny_parts_pay_36 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_36', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_36');
        $des_mny_parts_pay_37 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_37', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_37');
        $des_mny_parts_pay_38 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_38', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_38');
        $des_mny_parts_pay_39 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_39', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_39');
        $des_mny_parts_pay_40 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_40', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_40');
        $des_mny_parts_pay_41 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_41', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_41');
        $des_mny_parts_pay_42 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_42', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_42');
        $des_mny_parts_pay_43 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_43', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_43');
        $des_mny_parts_pay_44 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_44', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_44');
        $des_mny_parts_pay_45 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_45', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_45');
        $des_mny_parts_pay_46 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_46', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_46');
        $des_mny_parts_pay_47 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_47', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_47');
        $des_mny_parts_pay_48 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_48', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_48');
        $des_mny_parts_pay_49 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_49', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_49');
        $des_mny_parts_pay_50 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_parts_50', '<=', date($planned->date_planned_12))
            ->sum('mny_parts_pay_50');
        $des_mny_jasa_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_1', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_1');
        $des_mny_jasa_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_2', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_2');
        $des_mny_jasa_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_3', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_3');
        $des_mny_jasa_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_4', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_4');
        $des_mny_jasa_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_5', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_5');
        $des_mny_jasa_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_6', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_6');
        $des_mny_jasa_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_7', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_7');
        $des_mny_jasa_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_8', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_8');
        $des_mny_jasa_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_9', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_9');
        $des_mny_jasa_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_10', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_10');
        $des_mny_jasa_pay_11 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_11', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_11');
        $des_mny_jasa_pay_12 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_12', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_12');
        $des_mny_jasa_pay_13 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_13', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_13');
        $des_mny_jasa_pay_14 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_14', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_14');
        $des_mny_jasa_pay_15 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_15', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_15');
        $des_mny_jasa_pay_16 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_16', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_16');
        $des_mny_jasa_pay_17 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_17', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_17');
        $des_mny_jasa_pay_18 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_18', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_18');
        $des_mny_jasa_pay_19 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_19', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_19');
        $des_mny_jasa_pay_20 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_20', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_20');
        $des_mny_jasa_pay_21 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_21', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_21');
        $des_mny_jasa_pay_22 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_22', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_22');
        $des_mny_jasa_pay_23 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_23', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_23');
        $des_mny_jasa_pay_24 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_24', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_24');
        $des_mny_jasa_pay_25 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_25', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_25');
        $des_mny_jasa_pay_26 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_26', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_26');
        $des_mny_jasa_pay_27 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_27', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_27');
        $des_mny_jasa_pay_28 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_28', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_28');
        $des_mny_jasa_pay_29 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_29', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_29');
        $des_mny_jasa_pay_30 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_jasa_30', '<=', date($planned->date_planned_12))
            ->sum('mny_jasa_pay_30');

        $des_mny_mnftr_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_1', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_1');

        $des_mny_mnftr_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_2', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_2');

        $des_mny_mnftr_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_3', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_3');

        $des_mny_mnftr_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_4', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_4');

        $des_mny_mnftr_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_5', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_5');

        $des_mny_mnftr_pay_6 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_6', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_6');

        $des_mny_mnftr_pay_7 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_7', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_7');

        $des_mny_mnftr_pay_8 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_8', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_8');

        $des_mny_mnftr_pay_9 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_9', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_9');

        $des_mny_mnftr_pay_10 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_mnftr_10', '<=', date($planned->date_planned_12))
            ->sum('mny_mnftr_pay_10');

        $des_mny_da_pay_1 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_1', '<=', date($planned->date_planned_12))
            ->sum('mny_da_pay_1');

        $des_mny_da_pay_2 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_2', '<=', date($planned->date_planned_12))
            ->sum('mny_da_pay_2');

        $des_mny_da_pay_3 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_3', '<=', date($planned->date_planned_12))
            ->sum('mny_da_pay_3');

        $des_mny_da_pay_4 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_4', '<=', date($planned->date_planned_12))
            ->sum('mny_da_pay_4');

        $des_mny_da_pay_5 = PAYproject::all()
            ->whereNull('archive_at')
            ->where('date_pay_da_5', '<=', date($planned->date_planned_12))
            ->sum('mny_da_pay_5');

        // $year = 2022;
        // $jan_mny_parts_pay_1 = DB::table('3_04_pay_project')
        //     ->where([
        //         ['date_pay_parts_1', '<=', date($year . '-12-22')],
        //         ['date_pay_parts_2', '<=', date($year . '-12-19')],
        //     ])
        //     ->sum(DB::raw('mny_parts_pay_1 + mny_parts_pay_2'));

        // bulan januari
        $jan_mny_pay =
            $jan_mny_parts_pay_1 +
            $jan_mny_parts_pay_2 +
            $jan_mny_parts_pay_3 +
            $jan_mny_parts_pay_4 +
            $jan_mny_parts_pay_5 +
            $jan_mny_parts_pay_6 +
            $jan_mny_parts_pay_7 +
            $jan_mny_parts_pay_8 +
            $jan_mny_parts_pay_9 +
            $jan_mny_parts_pay_10 +
            $jan_mny_parts_pay_11 +
            $jan_mny_parts_pay_12 +
            $jan_mny_parts_pay_13 +
            $jan_mny_parts_pay_14 +
            $jan_mny_parts_pay_15 +
            $jan_mny_parts_pay_16 +
            $jan_mny_parts_pay_17 +
            $jan_mny_parts_pay_18 +
            $jan_mny_parts_pay_19 +
            $jan_mny_parts_pay_20 +
            $jan_mny_parts_pay_21 +
            $jan_mny_parts_pay_22 +
            $jan_mny_parts_pay_23 +
            $jan_mny_parts_pay_24 +
            $jan_mny_parts_pay_25 +
            $jan_mny_parts_pay_26 +
            $jan_mny_parts_pay_27 +
            $jan_mny_parts_pay_28 +
            $jan_mny_parts_pay_29 +
            $jan_mny_parts_pay_30 +
            $jan_mny_parts_pay_31 +
            $jan_mny_parts_pay_32 +
            $jan_mny_parts_pay_33 +
            $jan_mny_parts_pay_34 +
            $jan_mny_parts_pay_35 +
            $jan_mny_parts_pay_36 +
            $jan_mny_parts_pay_37 +
            $jan_mny_parts_pay_38 +
            $jan_mny_parts_pay_39 +
            $jan_mny_parts_pay_40 +
            $jan_mny_parts_pay_41 +
            $jan_mny_parts_pay_42 +
            $jan_mny_parts_pay_43 +
            $jan_mny_parts_pay_44 +
            $jan_mny_parts_pay_45 +
            $jan_mny_parts_pay_46 +
            $jan_mny_parts_pay_47 +
            $jan_mny_parts_pay_48 +
            $jan_mny_parts_pay_49 +
            $jan_mny_parts_pay_50 +
            $jan_mny_jasa_pay_1 +
            $jan_mny_jasa_pay_2 +
            $jan_mny_jasa_pay_3 +
            $jan_mny_jasa_pay_4 +
            $jan_mny_jasa_pay_5 +
            $jan_mny_jasa_pay_6 +
            $jan_mny_jasa_pay_7 +
            $jan_mny_jasa_pay_8 +
            $jan_mny_jasa_pay_9 +
            $jan_mny_jasa_pay_10 +
            $jan_mny_jasa_pay_11 +
            $jan_mny_jasa_pay_12 +
            $jan_mny_jasa_pay_13 +
            $jan_mny_jasa_pay_14 +
            $jan_mny_jasa_pay_15 +
            $jan_mny_jasa_pay_16 +
            $jan_mny_jasa_pay_17 +
            $jan_mny_jasa_pay_18 +
            $jan_mny_jasa_pay_19 +
            $jan_mny_jasa_pay_20 +
            $jan_mny_jasa_pay_21 +
            $jan_mny_jasa_pay_22 +
            $jan_mny_jasa_pay_23 +
            $jan_mny_jasa_pay_24 +
            $jan_mny_jasa_pay_25 +
            $jan_mny_jasa_pay_26 +
            $jan_mny_jasa_pay_27 +
            $jan_mny_jasa_pay_28 +
            $jan_mny_jasa_pay_29 +
            $jan_mny_jasa_pay_30 +
            $jan_mny_jasa_pay_1 +
            $jan_mny_jasa_pay_2 +
            $jan_mny_jasa_pay_3 +
            $jan_mny_jasa_pay_4 +
            $jan_mny_jasa_pay_5 +
            $jan_mny_jasa_pay_6 +
            $jan_mny_jasa_pay_7 +
            $jan_mny_jasa_pay_8 +
            $jan_mny_jasa_pay_9 +
            $jan_mny_jasa_pay_10 +
            $jan_mny_mnftr_pay_1 +
            $jan_mny_mnftr_pay_2 +
            $jan_mny_mnftr_pay_3 +
            $jan_mny_mnftr_pay_4 +
            $jan_mny_mnftr_pay_5 +
            $jan_mny_mnftr_pay_6 +
            $jan_mny_mnftr_pay_7 +
            $jan_mny_mnftr_pay_8 +
            $jan_mny_mnftr_pay_9 +
            $jan_mny_mnftr_pay_10 +
            $jan_mny_da_pay_1 +
            $jan_mny_da_pay_2 +
            $jan_mny_da_pay_3 +
            $jan_mny_da_pay_4 +
            $jan_mny_da_pay_5;
        //februari
        $feb_mny_pay =
            $feb_mny_parts_pay_1 +
            $feb_mny_parts_pay_2 +
            $feb_mny_parts_pay_3 +
            $feb_mny_parts_pay_4 +
            $feb_mny_parts_pay_5 +
            $feb_mny_parts_pay_6 +
            $feb_mny_parts_pay_7 +
            $feb_mny_parts_pay_8 +
            $feb_mny_parts_pay_9 +
            $feb_mny_parts_pay_10 +
            $feb_mny_parts_pay_11 +
            $feb_mny_parts_pay_12 +
            $feb_mny_parts_pay_13 +
            $feb_mny_parts_pay_14 +
            $feb_mny_parts_pay_15 +
            $feb_mny_parts_pay_16 +
            $feb_mny_parts_pay_17 +
            $feb_mny_parts_pay_18 +
            $feb_mny_parts_pay_19 +
            $feb_mny_parts_pay_20 +
            $feb_mny_parts_pay_21 +
            $feb_mny_parts_pay_22 +
            $feb_mny_parts_pay_23 +
            $feb_mny_parts_pay_24 +
            $feb_mny_parts_pay_25 +
            $feb_mny_parts_pay_26 +
            $feb_mny_parts_pay_27 +
            $feb_mny_parts_pay_28 +
            $feb_mny_parts_pay_29 +
            $feb_mny_parts_pay_30 +
            $feb_mny_parts_pay_31 +
            $feb_mny_parts_pay_32 +
            $feb_mny_parts_pay_33 +
            $feb_mny_parts_pay_34 +
            $feb_mny_parts_pay_35 +
            $feb_mny_parts_pay_36 +
            $feb_mny_parts_pay_37 +
            $feb_mny_parts_pay_38 +
            $feb_mny_parts_pay_39 +
            $feb_mny_parts_pay_40 +
            $feb_mny_parts_pay_41 +
            $feb_mny_parts_pay_42 +
            $feb_mny_parts_pay_43 +
            $feb_mny_parts_pay_44 +
            $feb_mny_parts_pay_45 +
            $feb_mny_parts_pay_46 +
            $feb_mny_parts_pay_47 +
            $feb_mny_parts_pay_48 +
            $feb_mny_parts_pay_49 +
            $feb_mny_parts_pay_50 +
            $feb_mny_jasa_pay_1 +
            $feb_mny_jasa_pay_2 +
            $feb_mny_jasa_pay_3 +
            $feb_mny_jasa_pay_4 +
            $feb_mny_jasa_pay_5 +
            $feb_mny_jasa_pay_6 +
            $feb_mny_jasa_pay_7 +
            $feb_mny_jasa_pay_8 +
            $feb_mny_jasa_pay_9 +
            $feb_mny_jasa_pay_10 +
            $feb_mny_jasa_pay_11 +
            $feb_mny_jasa_pay_12 +
            $feb_mny_jasa_pay_13 +
            $feb_mny_jasa_pay_14 +
            $feb_mny_jasa_pay_15 +
            $feb_mny_jasa_pay_16 +
            $feb_mny_jasa_pay_17 +
            $feb_mny_jasa_pay_18 +
            $feb_mny_jasa_pay_19 +
            $feb_mny_jasa_pay_20 +
            $feb_mny_jasa_pay_21 +
            $feb_mny_jasa_pay_22 +
            $feb_mny_jasa_pay_23 +
            $feb_mny_jasa_pay_24 +
            $feb_mny_jasa_pay_25 +
            $feb_mny_jasa_pay_26 +
            $feb_mny_jasa_pay_27 +
            $feb_mny_jasa_pay_28 +
            $feb_mny_jasa_pay_29 +
            $feb_mny_jasa_pay_30 +
            $feb_mny_jasa_pay_1 +
            $feb_mny_jasa_pay_2 +
            $feb_mny_jasa_pay_3 +
            $feb_mny_jasa_pay_4 +
            $feb_mny_jasa_pay_5 +
            $feb_mny_jasa_pay_6 +
            $feb_mny_jasa_pay_7 +
            $feb_mny_jasa_pay_8 +
            $feb_mny_jasa_pay_9 +
            $feb_mny_jasa_pay_10 +
            $feb_mny_mnftr_pay_1 +
            $feb_mny_mnftr_pay_2 +
            $feb_mny_mnftr_pay_3 +
            $feb_mny_mnftr_pay_4 +
            $feb_mny_mnftr_pay_5 +
            $feb_mny_mnftr_pay_6 +
            $feb_mny_mnftr_pay_7 +
            $feb_mny_mnftr_pay_8 +
            $feb_mny_mnftr_pay_9 +
            $feb_mny_mnftr_pay_10 +
            $feb_mny_da_pay_1 +
            $feb_mny_da_pay_2 +
            $feb_mny_da_pay_3 +
            $feb_mny_da_pay_4 +
            $feb_mny_da_pay_5;
        //maret
        $mar_mny_pay =
            $mar_mny_parts_pay_1 +
            $mar_mny_parts_pay_2 +
            $mar_mny_parts_pay_3 +
            $mar_mny_parts_pay_4 +
            $mar_mny_parts_pay_5 +
            $mar_mny_parts_pay_6 +
            $mar_mny_parts_pay_7 +
            $mar_mny_parts_pay_8 +
            $mar_mny_parts_pay_9 +
            $mar_mny_parts_pay_10 +
            $mar_mny_parts_pay_11 +
            $mar_mny_parts_pay_12 +
            $mar_mny_parts_pay_13 +
            $mar_mny_parts_pay_14 +
            $mar_mny_parts_pay_15 +
            $mar_mny_parts_pay_16 +
            $mar_mny_parts_pay_17 +
            $mar_mny_parts_pay_18 +
            $mar_mny_parts_pay_19 +
            $mar_mny_parts_pay_20 +
            $mar_mny_parts_pay_21 +
            $mar_mny_parts_pay_22 +
            $mar_mny_parts_pay_23 +
            $mar_mny_parts_pay_24 +
            $mar_mny_parts_pay_25 +
            $mar_mny_parts_pay_26 +
            $mar_mny_parts_pay_27 +
            $mar_mny_parts_pay_28 +
            $mar_mny_parts_pay_29 +
            $mar_mny_parts_pay_30 +
            $mar_mny_parts_pay_31 +
            $mar_mny_parts_pay_32 +
            $mar_mny_parts_pay_33 +
            $mar_mny_parts_pay_34 +
            $mar_mny_parts_pay_35 +
            $mar_mny_parts_pay_36 +
            $mar_mny_parts_pay_37 +
            $mar_mny_parts_pay_38 +
            $mar_mny_parts_pay_39 +
            $mar_mny_parts_pay_40 +
            $mar_mny_parts_pay_41 +
            $mar_mny_parts_pay_42 +
            $mar_mny_parts_pay_43 +
            $mar_mny_parts_pay_44 +
            $mar_mny_parts_pay_45 +
            $mar_mny_parts_pay_46 +
            $mar_mny_parts_pay_47 +
            $mar_mny_parts_pay_48 +
            $mar_mny_parts_pay_49 +
            $mar_mny_parts_pay_50 +
            $mar_mny_jasa_pay_1 +
            $mar_mny_jasa_pay_2 +
            $mar_mny_jasa_pay_3 +
            $mar_mny_jasa_pay_4 +
            $mar_mny_jasa_pay_5 +
            $mar_mny_jasa_pay_6 +
            $mar_mny_jasa_pay_7 +
            $mar_mny_jasa_pay_8 +
            $mar_mny_jasa_pay_9 +
            $mar_mny_jasa_pay_10 +
            $mar_mny_jasa_pay_11 +
            $mar_mny_jasa_pay_12 +
            $mar_mny_jasa_pay_13 +
            $mar_mny_jasa_pay_14 +
            $mar_mny_jasa_pay_15 +
            $mar_mny_jasa_pay_16 +
            $mar_mny_jasa_pay_17 +
            $mar_mny_jasa_pay_18 +
            $mar_mny_jasa_pay_19 +
            $mar_mny_jasa_pay_20 +
            $mar_mny_jasa_pay_21 +
            $mar_mny_jasa_pay_22 +
            $mar_mny_jasa_pay_23 +
            $mar_mny_jasa_pay_24 +
            $mar_mny_jasa_pay_25 +
            $mar_mny_jasa_pay_26 +
            $mar_mny_jasa_pay_27 +
            $mar_mny_jasa_pay_28 +
            $mar_mny_jasa_pay_29 +
            $mar_mny_jasa_pay_30 +
            $mar_mny_jasa_pay_1 +
            $mar_mny_jasa_pay_2 +
            $mar_mny_jasa_pay_3 +
            $mar_mny_jasa_pay_4 +
            $mar_mny_jasa_pay_5 +
            $mar_mny_jasa_pay_6 +
            $mar_mny_jasa_pay_7 +
            $mar_mny_jasa_pay_8 +
            $mar_mny_jasa_pay_9 +
            $mar_mny_jasa_pay_10 +
            $mar_mny_mnftr_pay_1 +
            $mar_mny_mnftr_pay_2 +
            $mar_mny_mnftr_pay_3 +
            $mar_mny_mnftr_pay_4 +
            $mar_mny_mnftr_pay_5 +
            $mar_mny_mnftr_pay_6 +
            $mar_mny_mnftr_pay_7 +
            $mar_mny_mnftr_pay_8 +
            $mar_mny_mnftr_pay_9 +
            $mar_mny_mnftr_pay_10 +
            $mar_mny_da_pay_1 +
            $mar_mny_da_pay_2 +
            $mar_mny_da_pay_3 +
            $mar_mny_da_pay_4 +
            $mar_mny_da_pay_5;
        //april
        $apr_mny_pay =
            $apr_mny_parts_pay_1 +
            $apr_mny_parts_pay_2 +
            $apr_mny_parts_pay_3 +
            $apr_mny_parts_pay_4 +
            $apr_mny_parts_pay_5 +
            $apr_mny_parts_pay_6 +
            $apr_mny_parts_pay_7 +
            $apr_mny_parts_pay_8 +
            $apr_mny_parts_pay_9 +
            $apr_mny_parts_pay_10 +
            $apr_mny_parts_pay_11 +
            $apr_mny_parts_pay_12 +
            $apr_mny_parts_pay_13 +
            $apr_mny_parts_pay_14 +
            $apr_mny_parts_pay_15 +
            $apr_mny_parts_pay_16 +
            $apr_mny_parts_pay_17 +
            $apr_mny_parts_pay_18 +
            $apr_mny_parts_pay_19 +
            $apr_mny_parts_pay_20 +
            $apr_mny_parts_pay_21 +
            $apr_mny_parts_pay_22 +
            $apr_mny_parts_pay_23 +
            $apr_mny_parts_pay_24 +
            $apr_mny_parts_pay_25 +
            $apr_mny_parts_pay_26 +
            $apr_mny_parts_pay_27 +
            $apr_mny_parts_pay_28 +
            $apr_mny_parts_pay_29 +
            $apr_mny_parts_pay_30 +
            $apr_mny_parts_pay_31 +
            $apr_mny_parts_pay_32 +
            $apr_mny_parts_pay_33 +
            $apr_mny_parts_pay_34 +
            $apr_mny_parts_pay_35 +
            $apr_mny_parts_pay_36 +
            $apr_mny_parts_pay_37 +
            $apr_mny_parts_pay_38 +
            $apr_mny_parts_pay_39 +
            $apr_mny_parts_pay_40 +
            $apr_mny_parts_pay_41 +
            $apr_mny_parts_pay_42 +
            $apr_mny_parts_pay_43 +
            $apr_mny_parts_pay_44 +
            $apr_mny_parts_pay_45 +
            $apr_mny_parts_pay_46 +
            $apr_mny_parts_pay_47 +
            $apr_mny_parts_pay_48 +
            $apr_mny_parts_pay_49 +
            $apr_mny_parts_pay_50 +
            $apr_mny_jasa_pay_1 +
            $apr_mny_jasa_pay_2 +
            $apr_mny_jasa_pay_3 +
            $apr_mny_jasa_pay_4 +
            $apr_mny_jasa_pay_5 +
            $apr_mny_jasa_pay_6 +
            $apr_mny_jasa_pay_7 +
            $apr_mny_jasa_pay_8 +
            $apr_mny_jasa_pay_9 +
            $apr_mny_jasa_pay_10 +
            $apr_mny_jasa_pay_11 +
            $apr_mny_jasa_pay_12 +
            $apr_mny_jasa_pay_13 +
            $apr_mny_jasa_pay_14 +
            $apr_mny_jasa_pay_15 +
            $apr_mny_jasa_pay_16 +
            $apr_mny_jasa_pay_17 +
            $apr_mny_jasa_pay_18 +
            $apr_mny_jasa_pay_19 +
            $apr_mny_jasa_pay_20 +
            $apr_mny_jasa_pay_21 +
            $apr_mny_jasa_pay_22 +
            $apr_mny_jasa_pay_23 +
            $apr_mny_jasa_pay_24 +
            $apr_mny_jasa_pay_25 +
            $apr_mny_jasa_pay_26 +
            $apr_mny_jasa_pay_27 +
            $apr_mny_jasa_pay_28 +
            $apr_mny_jasa_pay_29 +
            $apr_mny_jasa_pay_30 +
            $apr_mny_jasa_pay_1 +
            $apr_mny_jasa_pay_2 +
            $apr_mny_jasa_pay_3 +
            $apr_mny_jasa_pay_4 +
            $apr_mny_jasa_pay_5 +
            $apr_mny_jasa_pay_6 +
            $apr_mny_jasa_pay_7 +
            $apr_mny_jasa_pay_8 +
            $apr_mny_jasa_pay_9 +
            $apr_mny_jasa_pay_10 +
            $apr_mny_mnftr_pay_1 +
            $apr_mny_mnftr_pay_2 +
            $apr_mny_mnftr_pay_3 +
            $apr_mny_mnftr_pay_4 +
            $apr_mny_mnftr_pay_5 +
            $apr_mny_mnftr_pay_6 +
            $apr_mny_mnftr_pay_7 +
            $apr_mny_mnftr_pay_8 +
            $apr_mny_mnftr_pay_9 +
            $apr_mny_mnftr_pay_10 +
            $apr_mny_da_pay_1 +
            $apr_mny_da_pay_2 +
            $apr_mny_da_pay_3 +
            $apr_mny_da_pay_4 +
            $apr_mny_da_pay_5;
        //mei
        $mei_mny_pay =
            $mei_mny_parts_pay_1 +
            $mei_mny_parts_pay_2 +
            $mei_mny_parts_pay_3 +
            $mei_mny_parts_pay_4 +
            $mei_mny_parts_pay_5 +
            $mei_mny_parts_pay_6 +
            $mei_mny_parts_pay_7 +
            $mei_mny_parts_pay_8 +
            $mei_mny_parts_pay_9 +
            $mei_mny_parts_pay_10 +
            $mei_mny_parts_pay_11 +
            $mei_mny_parts_pay_12 +
            $mei_mny_parts_pay_13 +
            $mei_mny_parts_pay_14 +
            $mei_mny_parts_pay_15 +
            $mei_mny_parts_pay_16 +
            $mei_mny_parts_pay_17 +
            $mei_mny_parts_pay_18 +
            $mei_mny_parts_pay_19 +
            $mei_mny_parts_pay_20 +
            $mei_mny_parts_pay_21 +
            $mei_mny_parts_pay_22 +
            $mei_mny_parts_pay_23 +
            $mei_mny_parts_pay_24 +
            $mei_mny_parts_pay_25 +
            $mei_mny_parts_pay_26 +
            $mei_mny_parts_pay_27 +
            $mei_mny_parts_pay_28 +
            $mei_mny_parts_pay_29 +
            $mei_mny_parts_pay_30 +
            $mei_mny_parts_pay_31 +
            $mei_mny_parts_pay_32 +
            $mei_mny_parts_pay_33 +
            $mei_mny_parts_pay_34 +
            $mei_mny_parts_pay_35 +
            $mei_mny_parts_pay_36 +
            $mei_mny_parts_pay_37 +
            $mei_mny_parts_pay_38 +
            $mei_mny_parts_pay_39 +
            $mei_mny_parts_pay_40 +
            $mei_mny_parts_pay_41 +
            $mei_mny_parts_pay_42 +
            $mei_mny_parts_pay_43 +
            $mei_mny_parts_pay_44 +
            $mei_mny_parts_pay_45 +
            $mei_mny_parts_pay_46 +
            $mei_mny_parts_pay_47 +
            $mei_mny_parts_pay_48 +
            $mei_mny_parts_pay_49 +
            $mei_mny_parts_pay_50 +
            $mei_mny_jasa_pay_1 +
            $mei_mny_jasa_pay_2 +
            $mei_mny_jasa_pay_3 +
            $mei_mny_jasa_pay_4 +
            $mei_mny_jasa_pay_5 +
            $mei_mny_jasa_pay_6 +
            $mei_mny_jasa_pay_7 +
            $mei_mny_jasa_pay_8 +
            $mei_mny_jasa_pay_9 +
            $mei_mny_jasa_pay_10 +
            $mei_mny_jasa_pay_11 +
            $mei_mny_jasa_pay_12 +
            $mei_mny_jasa_pay_13 +
            $mei_mny_jasa_pay_14 +
            $mei_mny_jasa_pay_15 +
            $mei_mny_jasa_pay_16 +
            $mei_mny_jasa_pay_17 +
            $mei_mny_jasa_pay_18 +
            $mei_mny_jasa_pay_19 +
            $mei_mny_jasa_pay_20 +
            $mei_mny_jasa_pay_21 +
            $mei_mny_jasa_pay_22 +
            $mei_mny_jasa_pay_23 +
            $mei_mny_jasa_pay_24 +
            $mei_mny_jasa_pay_25 +
            $mei_mny_jasa_pay_26 +
            $mei_mny_jasa_pay_27 +
            $mei_mny_jasa_pay_28 +
            $mei_mny_jasa_pay_29 +
            $mei_mny_jasa_pay_30 +
            $mei_mny_jasa_pay_1 +
            $mei_mny_jasa_pay_2 +
            $mei_mny_jasa_pay_3 +
            $mei_mny_jasa_pay_4 +
            $mei_mny_jasa_pay_5 +
            $mei_mny_jasa_pay_6 +
            $mei_mny_jasa_pay_7 +
            $mei_mny_jasa_pay_8 +
            $mei_mny_jasa_pay_9 +
            $mei_mny_jasa_pay_10 +
            $mei_mny_mnftr_pay_1 +
            $mei_mny_mnftr_pay_2 +
            $mei_mny_mnftr_pay_3 +
            $mei_mny_mnftr_pay_4 +
            $mei_mny_mnftr_pay_5 +
            $mei_mny_mnftr_pay_6 +
            $mei_mny_mnftr_pay_7 +
            $mei_mny_mnftr_pay_8 +
            $mei_mny_mnftr_pay_9 +
            $mei_mny_mnftr_pay_10 +
            $mei_mny_da_pay_1 +
            $mei_mny_da_pay_2 +
            $mei_mny_da_pay_3 +
            $mei_mny_da_pay_4 +
            $mei_mny_da_pay_5;
        //jun
        $jun_mny_pay =
            $jun_mny_parts_pay_1 +
            $jun_mny_parts_pay_2 +
            $jun_mny_parts_pay_3 +
            $jun_mny_parts_pay_4 +
            $jun_mny_parts_pay_5 +
            $jun_mny_parts_pay_6 +
            $jun_mny_parts_pay_7 +
            $jun_mny_parts_pay_8 +
            $jun_mny_parts_pay_9 +
            $jun_mny_parts_pay_10 +
            $jun_mny_parts_pay_11 +
            $jun_mny_parts_pay_12 +
            $jun_mny_parts_pay_13 +
            $jun_mny_parts_pay_14 +
            $jun_mny_parts_pay_15 +
            $jun_mny_parts_pay_16 +
            $jun_mny_parts_pay_17 +
            $jun_mny_parts_pay_18 +
            $jun_mny_parts_pay_19 +
            $jun_mny_parts_pay_20 +
            $jun_mny_parts_pay_21 +
            $jun_mny_parts_pay_22 +
            $jun_mny_parts_pay_23 +
            $jun_mny_parts_pay_24 +
            $jun_mny_parts_pay_25 +
            $jun_mny_parts_pay_26 +
            $jun_mny_parts_pay_27 +
            $jun_mny_parts_pay_28 +
            $jun_mny_parts_pay_29 +
            $jun_mny_parts_pay_30 +
            $jun_mny_parts_pay_31 +
            $jun_mny_parts_pay_32 +
            $jun_mny_parts_pay_33 +
            $jun_mny_parts_pay_34 +
            $jun_mny_parts_pay_35 +
            $jun_mny_parts_pay_36 +
            $jun_mny_parts_pay_37 +
            $jun_mny_parts_pay_38 +
            $jun_mny_parts_pay_39 +
            $jun_mny_parts_pay_40 +
            $jun_mny_parts_pay_41 +
            $jun_mny_parts_pay_42 +
            $jun_mny_parts_pay_43 +
            $jun_mny_parts_pay_44 +
            $jun_mny_parts_pay_45 +
            $jun_mny_parts_pay_46 +
            $jun_mny_parts_pay_47 +
            $jun_mny_parts_pay_48 +
            $jun_mny_parts_pay_49 +
            $jun_mny_parts_pay_50 +
            $jun_mny_jasa_pay_1 +
            $jun_mny_jasa_pay_2 +
            $jun_mny_jasa_pay_3 +
            $jun_mny_jasa_pay_4 +
            $jun_mny_jasa_pay_5 +
            $jun_mny_jasa_pay_6 +
            $jun_mny_jasa_pay_7 +
            $jun_mny_jasa_pay_8 +
            $jun_mny_jasa_pay_9 +
            $jun_mny_jasa_pay_10 +
            $jun_mny_jasa_pay_11 +
            $jun_mny_jasa_pay_12 +
            $jun_mny_jasa_pay_13 +
            $jun_mny_jasa_pay_14 +
            $jun_mny_jasa_pay_15 +
            $jun_mny_jasa_pay_16 +
            $jun_mny_jasa_pay_17 +
            $jun_mny_jasa_pay_18 +
            $jun_mny_jasa_pay_19 +
            $jun_mny_jasa_pay_20 +
            $jun_mny_jasa_pay_21 +
            $jun_mny_jasa_pay_22 +
            $jun_mny_jasa_pay_23 +
            $jun_mny_jasa_pay_24 +
            $jun_mny_jasa_pay_25 +
            $jun_mny_jasa_pay_26 +
            $jun_mny_jasa_pay_27 +
            $jun_mny_jasa_pay_28 +
            $jun_mny_jasa_pay_29 +
            $jun_mny_jasa_pay_30 +
            $jun_mny_jasa_pay_1 +
            $jun_mny_jasa_pay_2 +
            $jun_mny_jasa_pay_3 +
            $jun_mny_jasa_pay_4 +
            $jun_mny_jasa_pay_5 +
            $jun_mny_jasa_pay_6 +
            $jun_mny_jasa_pay_7 +
            $jun_mny_jasa_pay_8 +
            $jun_mny_jasa_pay_9 +
            $jun_mny_jasa_pay_10 +
            $jun_mny_mnftr_pay_1 +
            $jun_mny_mnftr_pay_2 +
            $jun_mny_mnftr_pay_3 +
            $jun_mny_mnftr_pay_4 +
            $jun_mny_mnftr_pay_5 +
            $jun_mny_mnftr_pay_6 +
            $jun_mny_mnftr_pay_7 +
            $jun_mny_mnftr_pay_8 +
            $jun_mny_mnftr_pay_9 +
            $jun_mny_mnftr_pay_10 +
            $jun_mny_da_pay_1 +
            $jun_mny_da_pay_2 +
            $jun_mny_da_pay_3 +
            $jun_mny_da_pay_4 +
            $jun_mny_da_pay_5;
        //juli
        $jul_mny_pay =
            $jul_mny_parts_pay_1 +
            $jul_mny_parts_pay_2 +
            $jul_mny_parts_pay_3 +
            $jul_mny_parts_pay_4 +
            $jul_mny_parts_pay_5 +
            $jul_mny_parts_pay_6 +
            $jul_mny_parts_pay_7 +
            $jul_mny_parts_pay_8 +
            $jul_mny_parts_pay_9 +
            $jul_mny_parts_pay_10 +
            $jul_mny_parts_pay_11 +
            $jul_mny_parts_pay_12 +
            $jul_mny_parts_pay_13 +
            $jul_mny_parts_pay_14 +
            $jul_mny_parts_pay_15 +
            $jul_mny_parts_pay_16 +
            $jul_mny_parts_pay_17 +
            $jul_mny_parts_pay_18 +
            $jul_mny_parts_pay_19 +
            $jul_mny_parts_pay_20 +
            $jul_mny_parts_pay_21 +
            $jul_mny_parts_pay_22 +
            $jul_mny_parts_pay_23 +
            $jul_mny_parts_pay_24 +
            $jul_mny_parts_pay_25 +
            $jul_mny_parts_pay_26 +
            $jul_mny_parts_pay_27 +
            $jul_mny_parts_pay_28 +
            $jul_mny_parts_pay_29 +
            $jul_mny_parts_pay_30 +
            $jul_mny_parts_pay_31 +
            $jul_mny_parts_pay_32 +
            $jul_mny_parts_pay_33 +
            $jul_mny_parts_pay_34 +
            $jul_mny_parts_pay_35 +
            $jul_mny_parts_pay_36 +
            $jul_mny_parts_pay_37 +
            $jul_mny_parts_pay_38 +
            $jul_mny_parts_pay_39 +
            $jul_mny_parts_pay_40 +
            $jul_mny_parts_pay_41 +
            $jul_mny_parts_pay_42 +
            $jul_mny_parts_pay_43 +
            $jul_mny_parts_pay_44 +
            $jul_mny_parts_pay_45 +
            $jul_mny_parts_pay_46 +
            $jul_mny_parts_pay_47 +
            $jul_mny_parts_pay_48 +
            $jul_mny_parts_pay_49 +
            $jul_mny_parts_pay_50 +
            $jul_mny_jasa_pay_1 +
            $jul_mny_jasa_pay_2 +
            $jul_mny_jasa_pay_3 +
            $jul_mny_jasa_pay_4 +
            $jul_mny_jasa_pay_5 +
            $jul_mny_jasa_pay_6 +
            $jul_mny_jasa_pay_7 +
            $jul_mny_jasa_pay_8 +
            $jul_mny_jasa_pay_9 +
            $jul_mny_jasa_pay_10 +
            $jul_mny_jasa_pay_11 +
            $jul_mny_jasa_pay_12 +
            $jul_mny_jasa_pay_13 +
            $jul_mny_jasa_pay_14 +
            $jul_mny_jasa_pay_15 +
            $jul_mny_jasa_pay_16 +
            $jul_mny_jasa_pay_17 +
            $jul_mny_jasa_pay_18 +
            $jul_mny_jasa_pay_19 +
            $jul_mny_jasa_pay_20 +
            $jul_mny_jasa_pay_21 +
            $jul_mny_jasa_pay_22 +
            $jul_mny_jasa_pay_23 +
            $jul_mny_jasa_pay_24 +
            $jul_mny_jasa_pay_25 +
            $jul_mny_jasa_pay_26 +
            $jul_mny_jasa_pay_27 +
            $jul_mny_jasa_pay_28 +
            $jul_mny_jasa_pay_29 +
            $jul_mny_jasa_pay_30 +
            $jul_mny_jasa_pay_1 +
            $jul_mny_jasa_pay_2 +
            $jul_mny_jasa_pay_3 +
            $jul_mny_jasa_pay_4 +
            $jul_mny_jasa_pay_5 +
            $jul_mny_jasa_pay_6 +
            $jul_mny_jasa_pay_7 +
            $jul_mny_jasa_pay_8 +
            $jul_mny_jasa_pay_9 +
            $jul_mny_jasa_pay_10 +
            $jul_mny_mnftr_pay_1 +
            $jul_mny_mnftr_pay_2 +
            $jul_mny_mnftr_pay_3 +
            $jul_mny_mnftr_pay_4 +
            $jul_mny_mnftr_pay_5 +
            $jul_mny_mnftr_pay_6 +
            $jul_mny_mnftr_pay_7 +
            $jul_mny_mnftr_pay_8 +
            $jul_mny_mnftr_pay_9 +
            $jul_mny_mnftr_pay_10 +
            $jul_mny_da_pay_1 +
            $jul_mny_da_pay_2 +
            $jul_mny_da_pay_3 +
            $jul_mny_da_pay_4 +
            $jul_mny_da_pay_5;
        //agustus
        $agu_mny_pay =
            $agu_mny_parts_pay_1 +
            $agu_mny_parts_pay_2 +
            $agu_mny_parts_pay_3 +
            $agu_mny_parts_pay_4 +
            $agu_mny_parts_pay_5 +
            $agu_mny_parts_pay_6 +
            $agu_mny_parts_pay_7 +
            $agu_mny_parts_pay_8 +
            $agu_mny_parts_pay_9 +
            $agu_mny_parts_pay_10 +
            $agu_mny_parts_pay_11 +
            $agu_mny_parts_pay_12 +
            $agu_mny_parts_pay_13 +
            $agu_mny_parts_pay_14 +
            $agu_mny_parts_pay_15 +
            $agu_mny_parts_pay_16 +
            $agu_mny_parts_pay_17 +
            $agu_mny_parts_pay_18 +
            $agu_mny_parts_pay_19 +
            $agu_mny_parts_pay_20 +
            $agu_mny_parts_pay_21 +
            $agu_mny_parts_pay_22 +
            $agu_mny_parts_pay_23 +
            $agu_mny_parts_pay_24 +
            $agu_mny_parts_pay_25 +
            $agu_mny_parts_pay_26 +
            $agu_mny_parts_pay_27 +
            $agu_mny_parts_pay_28 +
            $agu_mny_parts_pay_29 +
            $agu_mny_parts_pay_30 +
            $agu_mny_parts_pay_31 +
            $agu_mny_parts_pay_32 +
            $agu_mny_parts_pay_33 +
            $agu_mny_parts_pay_34 +
            $agu_mny_parts_pay_35 +
            $agu_mny_parts_pay_36 +
            $agu_mny_parts_pay_37 +
            $agu_mny_parts_pay_38 +
            $agu_mny_parts_pay_39 +
            $agu_mny_parts_pay_40 +
            $agu_mny_parts_pay_41 +
            $agu_mny_parts_pay_42 +
            $agu_mny_parts_pay_43 +
            $agu_mny_parts_pay_44 +
            $agu_mny_parts_pay_45 +
            $agu_mny_parts_pay_46 +
            $agu_mny_parts_pay_47 +
            $agu_mny_parts_pay_48 +
            $agu_mny_parts_pay_49 +
            $agu_mny_parts_pay_50 +
            $agu_mny_jasa_pay_1 +
            $agu_mny_jasa_pay_2 +
            $agu_mny_jasa_pay_3 +
            $agu_mny_jasa_pay_4 +
            $agu_mny_jasa_pay_5 +
            $agu_mny_jasa_pay_6 +
            $agu_mny_jasa_pay_7 +
            $agu_mny_jasa_pay_8 +
            $agu_mny_jasa_pay_9 +
            $agu_mny_jasa_pay_10 +
            $agu_mny_jasa_pay_11 +
            $agu_mny_jasa_pay_12 +
            $agu_mny_jasa_pay_13 +
            $agu_mny_jasa_pay_14 +
            $agu_mny_jasa_pay_15 +
            $agu_mny_jasa_pay_16 +
            $agu_mny_jasa_pay_17 +
            $agu_mny_jasa_pay_18 +
            $agu_mny_jasa_pay_19 +
            $agu_mny_jasa_pay_20 +
            $agu_mny_jasa_pay_21 +
            $agu_mny_jasa_pay_22 +
            $agu_mny_jasa_pay_23 +
            $agu_mny_jasa_pay_24 +
            $agu_mny_jasa_pay_25 +
            $agu_mny_jasa_pay_26 +
            $agu_mny_jasa_pay_27 +
            $agu_mny_jasa_pay_28 +
            $agu_mny_jasa_pay_29 +
            $agu_mny_jasa_pay_30 +
            $agu_mny_jasa_pay_1 +
            $agu_mny_jasa_pay_2 +
            $agu_mny_jasa_pay_3 +
            $agu_mny_jasa_pay_4 +
            $agu_mny_jasa_pay_5 +
            $agu_mny_jasa_pay_6 +
            $agu_mny_jasa_pay_7 +
            $agu_mny_jasa_pay_8 +
            $agu_mny_jasa_pay_9 +
            $agu_mny_jasa_pay_10 +
            $agu_mny_mnftr_pay_1 +
            $agu_mny_mnftr_pay_2 +
            $agu_mny_mnftr_pay_3 +
            $agu_mny_mnftr_pay_4 +
            $agu_mny_mnftr_pay_5 +
            $agu_mny_mnftr_pay_6 +
            $agu_mny_mnftr_pay_7 +
            $agu_mny_mnftr_pay_8 +
            $agu_mny_mnftr_pay_9 +
            $agu_mny_mnftr_pay_10 +
            $agu_mny_da_pay_1 +
            $agu_mny_da_pay_2 +
            $agu_mny_da_pay_3 +
            $agu_mny_da_pay_4 +
            $agu_mny_da_pay_5;
        //september
        $sep_mny_pay =
            $sep_mny_parts_pay_1 +
            $sep_mny_parts_pay_2 +
            $sep_mny_parts_pay_3 +
            $sep_mny_parts_pay_4 +
            $sep_mny_parts_pay_5 +
            $sep_mny_parts_pay_6 +
            $sep_mny_parts_pay_7 +
            $sep_mny_parts_pay_8 +
            $sep_mny_parts_pay_9 +
            $sep_mny_parts_pay_10 +
            $sep_mny_parts_pay_11 +
            $sep_mny_parts_pay_12 +
            $sep_mny_parts_pay_13 +
            $sep_mny_parts_pay_14 +
            $sep_mny_parts_pay_15 +
            $sep_mny_parts_pay_16 +
            $sep_mny_parts_pay_17 +
            $sep_mny_parts_pay_18 +
            $sep_mny_parts_pay_19 +
            $sep_mny_parts_pay_20 +
            $sep_mny_parts_pay_21 +
            $sep_mny_parts_pay_22 +
            $sep_mny_parts_pay_23 +
            $sep_mny_parts_pay_24 +
            $sep_mny_parts_pay_25 +
            $sep_mny_parts_pay_26 +
            $sep_mny_parts_pay_27 +
            $sep_mny_parts_pay_28 +
            $sep_mny_parts_pay_29 +
            $sep_mny_parts_pay_30 +
            $sep_mny_parts_pay_31 +
            $sep_mny_parts_pay_32 +
            $sep_mny_parts_pay_33 +
            $sep_mny_parts_pay_34 +
            $sep_mny_parts_pay_35 +
            $sep_mny_parts_pay_36 +
            $sep_mny_parts_pay_37 +
            $sep_mny_parts_pay_38 +
            $sep_mny_parts_pay_39 +
            $sep_mny_parts_pay_40 +
            $sep_mny_parts_pay_41 +
            $sep_mny_parts_pay_42 +
            $sep_mny_parts_pay_43 +
            $sep_mny_parts_pay_44 +
            $sep_mny_parts_pay_45 +
            $sep_mny_parts_pay_46 +
            $sep_mny_parts_pay_47 +
            $sep_mny_parts_pay_48 +
            $sep_mny_parts_pay_49 +
            $sep_mny_parts_pay_50 +
            $sep_mny_jasa_pay_1 +
            $sep_mny_jasa_pay_2 +
            $sep_mny_jasa_pay_3 +
            $sep_mny_jasa_pay_4 +
            $sep_mny_jasa_pay_5 +
            $sep_mny_jasa_pay_6 +
            $sep_mny_jasa_pay_7 +
            $sep_mny_jasa_pay_8 +
            $sep_mny_jasa_pay_9 +
            $sep_mny_jasa_pay_10 +
            $sep_mny_jasa_pay_11 +
            $sep_mny_jasa_pay_12 +
            $sep_mny_jasa_pay_13 +
            $sep_mny_jasa_pay_14 +
            $sep_mny_jasa_pay_15 +
            $sep_mny_jasa_pay_16 +
            $sep_mny_jasa_pay_17 +
            $sep_mny_jasa_pay_18 +
            $sep_mny_jasa_pay_19 +
            $sep_mny_jasa_pay_20 +
            $sep_mny_jasa_pay_21 +
            $sep_mny_jasa_pay_22 +
            $sep_mny_jasa_pay_23 +
            $sep_mny_jasa_pay_24 +
            $sep_mny_jasa_pay_25 +
            $sep_mny_jasa_pay_26 +
            $sep_mny_jasa_pay_27 +
            $sep_mny_jasa_pay_28 +
            $sep_mny_jasa_pay_29 +
            $sep_mny_jasa_pay_30 +
            $sep_mny_jasa_pay_1 +
            $sep_mny_jasa_pay_2 +
            $sep_mny_jasa_pay_3 +
            $sep_mny_jasa_pay_4 +
            $sep_mny_jasa_pay_5 +
            $sep_mny_jasa_pay_6 +
            $sep_mny_jasa_pay_7 +
            $sep_mny_jasa_pay_8 +
            $sep_mny_jasa_pay_9 +
            $sep_mny_jasa_pay_10 +
            $sep_mny_mnftr_pay_1 +
            $sep_mny_mnftr_pay_2 +
            $sep_mny_mnftr_pay_3 +
            $sep_mny_mnftr_pay_4 +
            $sep_mny_mnftr_pay_5 +
            $sep_mny_mnftr_pay_6 +
            $sep_mny_mnftr_pay_7 +
            $sep_mny_mnftr_pay_8 +
            $sep_mny_mnftr_pay_9 +
            $sep_mny_mnftr_pay_10 +
            $sep_mny_da_pay_1 +
            $sep_mny_da_pay_2 +
            $sep_mny_da_pay_3 +
            $sep_mny_da_pay_4 +
            $sep_mny_da_pay_5;
        //oktober
        $okt_mny_pay =
            $okt_mny_parts_pay_1 +
            $okt_mny_parts_pay_2 +
            $okt_mny_parts_pay_3 +
            $okt_mny_parts_pay_4 +
            $okt_mny_parts_pay_5 +
            $okt_mny_parts_pay_6 +
            $okt_mny_parts_pay_7 +
            $okt_mny_parts_pay_8 +
            $okt_mny_parts_pay_9 +
            $okt_mny_parts_pay_10 +
            $okt_mny_parts_pay_11 +
            $okt_mny_parts_pay_12 +
            $okt_mny_parts_pay_13 +
            $okt_mny_parts_pay_14 +
            $okt_mny_parts_pay_15 +
            $okt_mny_parts_pay_16 +
            $okt_mny_parts_pay_17 +
            $okt_mny_parts_pay_18 +
            $okt_mny_parts_pay_19 +
            $okt_mny_parts_pay_20 +
            $okt_mny_parts_pay_21 +
            $okt_mny_parts_pay_22 +
            $okt_mny_parts_pay_23 +
            $okt_mny_parts_pay_24 +
            $okt_mny_parts_pay_25 +
            $okt_mny_parts_pay_26 +
            $okt_mny_parts_pay_27 +
            $okt_mny_parts_pay_28 +
            $okt_mny_parts_pay_29 +
            $okt_mny_parts_pay_30 +
            $okt_mny_parts_pay_31 +
            $okt_mny_parts_pay_32 +
            $okt_mny_parts_pay_33 +
            $okt_mny_parts_pay_34 +
            $okt_mny_parts_pay_35 +
            $okt_mny_parts_pay_36 +
            $okt_mny_parts_pay_37 +
            $okt_mny_parts_pay_38 +
            $okt_mny_parts_pay_39 +
            $okt_mny_parts_pay_40 +
            $okt_mny_parts_pay_41 +
            $okt_mny_parts_pay_42 +
            $okt_mny_parts_pay_43 +
            $okt_mny_parts_pay_44 +
            $okt_mny_parts_pay_45 +
            $okt_mny_parts_pay_46 +
            $okt_mny_parts_pay_47 +
            $okt_mny_parts_pay_48 +
            $okt_mny_parts_pay_49 +
            $okt_mny_parts_pay_50 +
            $okt_mny_jasa_pay_1 +
            $okt_mny_jasa_pay_2 +
            $okt_mny_jasa_pay_3 +
            $okt_mny_jasa_pay_4 +
            $okt_mny_jasa_pay_5 +
            $okt_mny_jasa_pay_6 +
            $okt_mny_jasa_pay_7 +
            $okt_mny_jasa_pay_8 +
            $okt_mny_jasa_pay_9 +
            $okt_mny_jasa_pay_10 +
            $okt_mny_jasa_pay_11 +
            $okt_mny_jasa_pay_12 +
            $okt_mny_jasa_pay_13 +
            $okt_mny_jasa_pay_14 +
            $okt_mny_jasa_pay_15 +
            $okt_mny_jasa_pay_16 +
            $okt_mny_jasa_pay_17 +
            $okt_mny_jasa_pay_18 +
            $okt_mny_jasa_pay_19 +
            $okt_mny_jasa_pay_20 +
            $okt_mny_jasa_pay_21 +
            $okt_mny_jasa_pay_22 +
            $okt_mny_jasa_pay_23 +
            $okt_mny_jasa_pay_24 +
            $okt_mny_jasa_pay_25 +
            $okt_mny_jasa_pay_26 +
            $okt_mny_jasa_pay_27 +
            $okt_mny_jasa_pay_28 +
            $okt_mny_jasa_pay_29 +
            $okt_mny_jasa_pay_30 +
            $okt_mny_jasa_pay_1 +
            $okt_mny_jasa_pay_2 +
            $okt_mny_jasa_pay_3 +
            $okt_mny_jasa_pay_4 +
            $okt_mny_jasa_pay_5 +
            $okt_mny_jasa_pay_6 +
            $okt_mny_jasa_pay_7 +
            $okt_mny_jasa_pay_8 +
            $okt_mny_jasa_pay_9 +
            $okt_mny_jasa_pay_10 +
            $okt_mny_mnftr_pay_1 +
            $okt_mny_mnftr_pay_2 +
            $okt_mny_mnftr_pay_3 +
            $okt_mny_mnftr_pay_4 +
            $okt_mny_mnftr_pay_5 +
            $okt_mny_mnftr_pay_6 +
            $okt_mny_mnftr_pay_7 +
            $okt_mny_mnftr_pay_8 +
            $okt_mny_mnftr_pay_9 +
            $okt_mny_mnftr_pay_10 +
            $okt_mny_da_pay_1 +
            $okt_mny_da_pay_2 +
            $okt_mny_da_pay_3 +
            $okt_mny_da_pay_4 +
            $okt_mny_da_pay_5;
        //november
        $nov_mny_pay =
            $nov_mny_parts_pay_1 +
            $nov_mny_parts_pay_2 +
            $nov_mny_parts_pay_3 +
            $nov_mny_parts_pay_4 +
            $nov_mny_parts_pay_5 +
            $nov_mny_parts_pay_6 +
            $nov_mny_parts_pay_7 +
            $nov_mny_parts_pay_8 +
            $nov_mny_parts_pay_9 +
            $nov_mny_parts_pay_10 +
            $nov_mny_parts_pay_11 +
            $nov_mny_parts_pay_12 +
            $nov_mny_parts_pay_13 +
            $nov_mny_parts_pay_14 +
            $nov_mny_parts_pay_15 +
            $nov_mny_parts_pay_16 +
            $nov_mny_parts_pay_17 +
            $nov_mny_parts_pay_18 +
            $nov_mny_parts_pay_19 +
            $nov_mny_parts_pay_20 +
            $nov_mny_parts_pay_21 +
            $nov_mny_parts_pay_22 +
            $nov_mny_parts_pay_23 +
            $nov_mny_parts_pay_24 +
            $nov_mny_parts_pay_25 +
            $nov_mny_parts_pay_26 +
            $nov_mny_parts_pay_27 +
            $nov_mny_parts_pay_28 +
            $nov_mny_parts_pay_29 +
            $nov_mny_parts_pay_30 +
            $nov_mny_parts_pay_31 +
            $nov_mny_parts_pay_32 +
            $nov_mny_parts_pay_33 +
            $nov_mny_parts_pay_34 +
            $nov_mny_parts_pay_35 +
            $nov_mny_parts_pay_36 +
            $nov_mny_parts_pay_37 +
            $nov_mny_parts_pay_38 +
            $nov_mny_parts_pay_39 +
            $nov_mny_parts_pay_40 +
            $nov_mny_parts_pay_41 +
            $nov_mny_parts_pay_42 +
            $nov_mny_parts_pay_43 +
            $nov_mny_parts_pay_44 +
            $nov_mny_parts_pay_45 +
            $nov_mny_parts_pay_46 +
            $nov_mny_parts_pay_47 +
            $nov_mny_parts_pay_48 +
            $nov_mny_parts_pay_49 +
            $nov_mny_parts_pay_50 +
            $nov_mny_jasa_pay_1 +
            $nov_mny_jasa_pay_2 +
            $nov_mny_jasa_pay_3 +
            $nov_mny_jasa_pay_4 +
            $nov_mny_jasa_pay_5 +
            $nov_mny_jasa_pay_6 +
            $nov_mny_jasa_pay_7 +
            $nov_mny_jasa_pay_8 +
            $nov_mny_jasa_pay_9 +
            $nov_mny_jasa_pay_10 +
            $nov_mny_jasa_pay_11 +
            $nov_mny_jasa_pay_12 +
            $nov_mny_jasa_pay_13 +
            $nov_mny_jasa_pay_14 +
            $nov_mny_jasa_pay_15 +
            $nov_mny_jasa_pay_16 +
            $nov_mny_jasa_pay_17 +
            $nov_mny_jasa_pay_18 +
            $nov_mny_jasa_pay_19 +
            $nov_mny_jasa_pay_20 +
            $nov_mny_jasa_pay_21 +
            $nov_mny_jasa_pay_22 +
            $nov_mny_jasa_pay_23 +
            $nov_mny_jasa_pay_24 +
            $nov_mny_jasa_pay_25 +
            $nov_mny_jasa_pay_26 +
            $nov_mny_jasa_pay_27 +
            $nov_mny_jasa_pay_28 +
            $nov_mny_jasa_pay_29 +
            $nov_mny_jasa_pay_30 +
            $nov_mny_jasa_pay_1 +
            $nov_mny_jasa_pay_2 +
            $nov_mny_jasa_pay_3 +
            $nov_mny_jasa_pay_4 +
            $nov_mny_jasa_pay_5 +
            $nov_mny_jasa_pay_6 +
            $nov_mny_jasa_pay_7 +
            $nov_mny_jasa_pay_8 +
            $nov_mny_jasa_pay_9 +
            $nov_mny_jasa_pay_10 +
            $nov_mny_mnftr_pay_1 +
            $nov_mny_mnftr_pay_2 +
            $nov_mny_mnftr_pay_3 +
            $nov_mny_mnftr_pay_4 +
            $nov_mny_mnftr_pay_5 +
            $nov_mny_mnftr_pay_6 +
            $nov_mny_mnftr_pay_7 +
            $nov_mny_mnftr_pay_8 +
            $nov_mny_mnftr_pay_9 +
            $nov_mny_mnftr_pay_10 +
            $nov_mny_da_pay_1 +
            $nov_mny_da_pay_2 +
            $nov_mny_da_pay_3 +
            $nov_mny_da_pay_4 +
            $nov_mny_da_pay_5;
        //desember
        $des_mny_pay =
            $des_mny_parts_pay_1 +
            $des_mny_parts_pay_2 +
            $des_mny_parts_pay_3 +
            $des_mny_parts_pay_4 +
            $des_mny_parts_pay_5 +
            $des_mny_parts_pay_6 +
            $des_mny_parts_pay_7 +
            $des_mny_parts_pay_8 +
            $des_mny_parts_pay_9 +
            $des_mny_parts_pay_10 +
            $des_mny_parts_pay_11 +
            $des_mny_parts_pay_12 +
            $des_mny_parts_pay_13 +
            $des_mny_parts_pay_14 +
            $des_mny_parts_pay_15 +
            $des_mny_parts_pay_16 +
            $des_mny_parts_pay_17 +
            $des_mny_parts_pay_18 +
            $des_mny_parts_pay_19 +
            $des_mny_parts_pay_20 +
            $des_mny_parts_pay_21 +
            $des_mny_parts_pay_22 +
            $des_mny_parts_pay_23 +
            $des_mny_parts_pay_24 +
            $des_mny_parts_pay_25 +
            $des_mny_parts_pay_26 +
            $des_mny_parts_pay_27 +
            $des_mny_parts_pay_28 +
            $des_mny_parts_pay_29 +
            $des_mny_parts_pay_30 +
            $des_mny_parts_pay_31 +
            $des_mny_parts_pay_32 +
            $des_mny_parts_pay_33 +
            $des_mny_parts_pay_34 +
            $des_mny_parts_pay_35 +
            $des_mny_parts_pay_36 +
            $des_mny_parts_pay_37 +
            $des_mny_parts_pay_38 +
            $des_mny_parts_pay_39 +
            $des_mny_parts_pay_40 +
            $des_mny_parts_pay_41 +
            $des_mny_parts_pay_42 +
            $des_mny_parts_pay_43 +
            $des_mny_parts_pay_44 +
            $des_mny_parts_pay_45 +
            $des_mny_parts_pay_46 +
            $des_mny_parts_pay_47 +
            $des_mny_parts_pay_48 +
            $des_mny_parts_pay_49 +
            $des_mny_parts_pay_50 +
            $des_mny_jasa_pay_1 +
            $des_mny_jasa_pay_2 +
            $des_mny_jasa_pay_3 +
            $des_mny_jasa_pay_4 +
            $des_mny_jasa_pay_5 +
            $des_mny_jasa_pay_6 +
            $des_mny_jasa_pay_7 +
            $des_mny_jasa_pay_8 +
            $des_mny_jasa_pay_9 +
            $des_mny_jasa_pay_10 +
            $des_mny_jasa_pay_11 +
            $des_mny_jasa_pay_12 +
            $des_mny_jasa_pay_13 +
            $des_mny_jasa_pay_14 +
            $des_mny_jasa_pay_15 +
            $des_mny_jasa_pay_16 +
            $des_mny_jasa_pay_17 +
            $des_mny_jasa_pay_18 +
            $des_mny_jasa_pay_19 +
            $des_mny_jasa_pay_20 +
            $des_mny_jasa_pay_21 +
            $des_mny_jasa_pay_22 +
            $des_mny_jasa_pay_23 +
            $des_mny_jasa_pay_24 +
            $des_mny_jasa_pay_25 +
            $des_mny_jasa_pay_26 +
            $des_mny_jasa_pay_27 +
            $des_mny_jasa_pay_28 +
            $des_mny_jasa_pay_29 +
            $des_mny_jasa_pay_30 +
            $des_mny_jasa_pay_1 +
            $des_mny_jasa_pay_2 +
            $des_mny_jasa_pay_3 +
            $des_mny_jasa_pay_4 +
            $des_mny_jasa_pay_5 +
            $des_mny_jasa_pay_6 +
            $des_mny_jasa_pay_7 +
            $des_mny_jasa_pay_8 +
            $des_mny_jasa_pay_9 +
            $des_mny_jasa_pay_10 +
            $des_mny_mnftr_pay_1 +
            $des_mny_mnftr_pay_2 +
            $des_mny_mnftr_pay_3 +
            $des_mny_mnftr_pay_4 +
            $des_mny_mnftr_pay_5 +
            $des_mny_mnftr_pay_6 +
            $des_mny_mnftr_pay_7 +
            $des_mny_mnftr_pay_8 +
            $des_mny_mnftr_pay_9 +
            $des_mny_mnftr_pay_10 +
            $des_mny_da_pay_1 +
            $des_mny_da_pay_2 +
            $des_mny_da_pay_3 +
            $des_mny_da_pay_4 +
            $des_mny_da_pay_5;

        $sum_ob = CONTROLPROJECT::select('budget_amount')->sum('budget_amount');
        $total_sisa_budget_ob = $sum_ob - $mny_pay;
        $sum_planned =
            $planned->planned_1 +
            $planned->planned_2 +
            $planned->planned_3 +
            $planned->planned_4 +
            $planned->planned_5 +
            $planned->planned_6 +
            $planned->planned_7 +
            $planned->planned_8 +
            $planned->planned_9 +
            $planned->planned_10 +
            $planned->planned_11 +
            $planned->planned_12;

        // kondisi untuk mencari

        if ($keyword != '') {
            $project = CONTROLPROJECT::with(
                'koneksikefr',
                'koneksikear',
                'koneksikepr01',
                'koneksikepa02',
                'koneksikepo03',
                'koneksikepay04',
                'koneksikemn',
                'koneksikein',
                'koneksikecl'
            )
                ->whereNull('archive_at')
                ->where('project_name', 'LIKE', '%' . $keyword . '%')
                ->OrWhere('io_number', 'LIKE', '%' . $keyword . '%')
                ->where('check', 'needcheck')
                ->orderBy('updated_at', 'asc')
                ->paginate(5);
        } elseif ($keyword == '') {
            $project = CONTROLPROJECT::with(
                'koneksikefr',
                'koneksikear',
                'koneksikepr01',
                'koneksikepa02',
                'koneksikepo03',
                'koneksikepay04',
                'koneksikemn',
                'koneksikein',
                'koneksikecl'
            )

                ->whereNull('archive_at')
                ->where('check', 'needcheck')
                ->orderBy('updated_at', 'asc')
                ->paginate(5);
        }

        $koneksifr = FRproject::select('id_fr_1')->get();
        $koneksiar = ARproject::select('id_ar_2')->get();
        $koneksipr = PRproject::select('id_pr_01_3')->get();
        $koneksipa = PAproject::select('id_pa_02_3')->get();
        $koneksipo = POproject::select('id_po_03_3')->get();
        $koneksipay = PAYproject::select('id_pay_04_3')->get();
        $koneksimn = MNproject::select('id_mn_4')->get();
        $koneksiin = INproject::select('id_in_5')->get();
        $koneksicl = CLproject::select('id_cl_6')->get();
        // dd(DB::getQueryLog());
        return view('supervisor.dashboard-supervisor', [
            'project' => $project,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'totalproject' => $totalproject,
            'totalprojectapproval' => $totalprojectapproval,
            'cancel' => $cancel,
            'not_started' => $not_started,
            'finished' => $finished,
            'in_progress' => $in_progress,
            'approved_fr' => $approved_fr,
            'on_progress_fr' => $on_progress_fr,
            'mny_pr' => $mny_pr,
            'mny_pa' => $mny_pa,
            'mny_po' => $mny_po,
            'mny_pay' => $mny_pay,
            'jan_mny_pay' => $jan_mny_pay,
            'feb_mny_pay' => $feb_mny_pay,
            'mar_mny_pay' => $mar_mny_pay,
            'apr_mny_pay' => $apr_mny_pay,
            'mei_mny_pay' => $mei_mny_pay,
            'jun_mny_pay' => $jun_mny_pay,
            'jul_mny_pay' => $jul_mny_pay,
            'agu_mny_pay' => $agu_mny_pay,
            'sep_mny_pay' => $sep_mny_pay,
            'okt_mny_pay' => $okt_mny_pay,
            'nov_mny_pay' => $nov_mny_pay,
            'des_mny_pay' => $des_mny_pay,
            'planned' => $planned,
            'sum_planned' => $sum_planned,
            'sum_ob' => $sum_ob,
            'total_sisa_budget_ob' => $total_sisa_budget_ob,
        ]);
    }

    public function ArsipLandingProjectSupervisor(Request $request)
    {
        $totalproject = CONTROLPROJECT::select('id')
            ->whereNotNull('archive_at')
            ->count('id');
            $project = CONTROLPROJECT::with(
                'koneksikefr',
                'koneksikear',
                'koneksikepr01',
                'koneksikepa02',
                'koneksikepo03',
                'koneksikepay04',
                'koneksikemn',
                'koneksikein',
                'koneksikecl')
            ->latest('updated_at')
            ->paginate(20);
        $koneksifr = FRproject::select('id_fr_1')->get();
        $koneksiar = ARproject::select('id_ar_2')->get();
        $koneksipr = PRproject::select('id_pr_01_3')->get();
        $koneksipa = PAproject::select('id_pa_02_3')->get();
        $koneksipo = POproject::select('id_po_03_3')->get();
        $koneksipay = PAYproject::select('id_pay_04_3')->get();
        $koneksimn = MNproject::select('id_mn_4')->get();
        $koneksiin = INproject::select('id_in_5')->get();
        $koneksicl = CLproject::select('id_cl_6')->get();
        return view('supervisor.project.00-arsip-tabelproject', [
            'project' => $project,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'totalproject' => $totalproject,
        ]);
    }



    public function ApprovalProgress(Request $request)
    {
        $keyword = $request->keyword;
        $totalprojectapproval = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('check', 'needcheck')
            ->count('id');
        if ($keyword != '') {
            $project = CONTROLPROJECT::with(
                'koneksikefr',
                'koneksikear',
                'koneksikepr01',
                'koneksikepa02',
                'koneksikepo03',
                'koneksikepay04',
                'koneksikemn',
                'koneksikein',
                'koneksikecl'
            )
                ->whereNull('archive_at')
                ->where('project_name', 'LIKE', '%' . $keyword . '%')
                ->OrWhere('io_number', 'LIKE', '%' . $keyword . '%')
                ->where('check', 'needcheck')
                ->orderBy('updated_at', 'asc')
                ->paginate(20);
        } elseif ($keyword == '') {
            $project = CONTROLPROJECT::with(
                'koneksikefr',
                'koneksikear',
                'koneksikepr01',
                'koneksikepa02',
                'koneksikepo03',
                'koneksikepay04',
                'koneksikemn',
                'koneksikein',
                'koneksikecl'
            )
                ->whereNull('archive_at')
                ->where('check', 'needcheck')
                ->orderBy('updated_at', 'asc')
                ->paginate(20);
        }
        $koneksifr = FRproject::select('id_fr_1')->get();
        $koneksiar = ARproject::select('id_ar_2')->get();
        $koneksipr = PRproject::select('id_pr_01_3')->get();
        $koneksipa = PAproject::select('id_pa_02_3')->get();
        $koneksipo = POproject::select('id_po_03_3')->get();
        $koneksipay = PAYproject::select('id_pay_04_3')->get();
        $koneksimn = MNproject::select('id_mn_4')->get();
        $koneksiin = INproject::select('id_in_5')->get();
        $koneksicl = CLproject::select('id_cl_6')->get();
        return view('supervisor.progress-approve', [
            'project' => $project,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'totalprojectapproval' => $totalprojectapproval,
        ]);
    }
}


