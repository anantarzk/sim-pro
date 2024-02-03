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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class SpvProjectController extends Controller
{
    //Proses yang ada pada fitur Project level supervisor

    // Buat testing view

    public function testing()
    {
        $project = CONTROLPROJECT::select('id', 'project_name')->get();

        return view('supervisor.project.testing', [
            'project' => $project,
        ]);
    }

    // view halaman tambah project
    public function TambahProject()
    {
        $users = User::select('section', 'first_name')->get();
        return view('supervisor.project.tambah_project', ['users' => $users]);
    }
    public function EditProject(Request $request, $id)
    {
        $project = CONTROLPROJECT::findOrfail($id);
        $users = User::select('section', 'first_name')->get();

        return view('supervisor.project.edit_project', [
            'users' => $users,
            'project' => $project,
        ]);
    }

    public function HapusProject($id)
    {
        $project = CONTROLPROJECT::findOrfail($id);

        return view('supervisor.project.hapus_project', [
            'project' => $project,
        ]);
    }

    public function ArsipProject(Request $request, $id)
    {
        $project = CONTROLPROJECT::findOrfail($id);

        return view('supervisor.project.arsip_project', [
            'project' => $project,
        ]);
    }
    public function RestoreArsipProject(Request $request, $id)
    {
        $project = CONTROLPROJECT::findOrfail($id);

        return view('supervisor.project.restore-arsip_project', [
            'project' => $project,
        ]);
    }

    public function ProcessEditProject(Request $request, $id)
    {
        $project = CONTROLPROJECT::findOrfail($id);
        $project->update($request->all());
        if ($project) {
            Session::flash('statusedited', 'sukses');
            Session::flash('message', 'Proyek berhasil diubah!');
        }
        return redirect()->action([
            SpvProjectController::class,
            'LandingProjectSupervisor',
        ]);
    }
    public function ProcessHapusProject(
        Request $request,
        $id
    ) {
        $project = CONTROLPROJECT::findOrfail($id);

        $project->delete();

        if ($project) {
            Session::flash('statushapus', 'sukses');
            Session::flash('messagedeleted', 'Proyek berhasil dihapus!');
        }
        return redirect()->action([
            SpvProjectController::class,
            'LandingProjectSupervisor',
        ]);
    }
    public function ProcessArsipProject(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $project = CONTROLPROJECT::findOrfail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::findOrFail($id_ar_2);
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::findOrFail($id_pa_02_3);
        $koneksipo = POproject::findOrFail($id_po_03_3);
        $koneksipay = PAYproject::findOrFail($id_pay_04_3);
        $koneksimn = MNproject::findOrFail($id_mn_4);
        $koneksiin = INproject::findOrFail($id_in_5);
        $koneksicl = CLproject::findOrFail($id_cl_6);

        $project->update($request->all());
        $koneksifr->update($request->all());
        $koneksiar->update($request->all());
        $koneksipr->update($request->all());
        $koneksipa->update($request->all());
        $koneksipo->update($request->all());
        $koneksipay->update($request->all());
        $koneksimn->update($request->all());
        $koneksiin->update($request->all());
        $koneksicl->update($request->all());


        if ($project) {
            Session::flash('statusedited', 'sukses');
            Session::flash('message', 'Proyek berhasil diarsipkan!');
        }
        return redirect()->action([
            SpvProjectController::class,
            'LandingProjectSupervisor',
        ]);
    }
    public function ProcessRestoreArsipProject(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $project = CONTROLPROJECT::findOrfail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::findOrFail($id_ar_2);
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::findOrFail($id_pa_02_3);
        $koneksipo = POproject::findOrFail($id_po_03_3);
        $koneksipay = PAYproject::findOrFail($id_pay_04_3);
        $koneksimn = MNproject::findOrFail($id_mn_4);
        $koneksiin = INproject::findOrFail($id_in_5);
        $koneksicl = CLproject::findOrFail($id_cl_6);

        $project->update($request->all());
        $koneksifr->update($request->all());
        $koneksiar->update($request->all());
        $koneksipr->update($request->all());
        $koneksipa->update($request->all());
        $koneksipo->update($request->all());
        $koneksipay->update($request->all());
        $koneksimn->update($request->all());
        $koneksiin->update($request->all());
        $koneksicl->update($request->all());

        if ($project) {
            Session::flash('statusedited', 'sukses');
            Session::flash('message', 'Proyek berhasil dipulihkan!');
        }
        return redirect()->action([
            SpvProjectController::class,
            'LandingProjectSupervisor',
        ]);
    }

    // proses dari halaman tambah project
    public function ProcessTambahNewProject(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'io_number' => 'required|numeric|digits:12',
        ], [
            'io_number.digits' => 'Kolom IO Number harus memiliki panjang tepat 12 digit.',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $budget_amount = null;
        if ($request->has('budget_amount')) {
            $budget_amount = intval(str_replace('.', '', $request->budget_amount));
        }
        // Menambahkan kolom 'budget_amount' ke array data
        $data = $request->all();
        $data['budget_amount'] = $budget_amount;
        // simpan inputan
        $project = CONTROLPROJECT::create($data);

        if ($project) {
            DB::table('1_fr_project')->insert([
                'id_fr_1' => $project->id,
            ]);
            DB::table('2_ar_project')->insert([
                'id_ar_2' => $project->id,
            ]);
            DB::table('3_01_pr_project')->insert([
                'id_pr_01_3' => $project->id,
            ]);
            DB::table('3_02_pa_project')->insert([
                'id_pa_02_3' => $project->id,
            ]);
            DB::table('3_03_po_project')->insert([
                'id_po_03_3' => $project->id,
            ]);
            DB::table('3_04_pay_project')->insert([
                'id_pay_04_3' => $project->id,
            ]);
            DB::table('4_mn_project')->insert([
                'id_mn_4' => $project->id,
            ]);
            DB::table('5_in_project')->insert([
                'id_in_5' => $project->id,
            ]);
            DB::table('6_cl_project')->insert([
                'id_cl_6' => $project->id,
            ]);
            Session::flash('status', 'sukses');
            Session::flash('message', 'Proyek berhasil ditambahkan!');
        }
        return redirect('tambah-project');
    }
    public function LandingProjectSupervisor(Request $request)
    {
        // if (isset($request->abc)) {
        //     dd($request->query);
        // }
        $users = User::select('section', 'first_name')->get();
        $keyword = $request->keyword;
        $totalproject = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->count('id');

        /* kode cari search switch case*/
        $filterMessage = '';
        /* all PIC */
        if ($request->kondisi == 'cari' && isset($request->pic_1_me) && isset($request->pic_2_el) && isset($request->pic_3_mit)) {
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
                ->Where('pic_1_me', 'LIKE', "%" . $request->pic_1_me . "%")
                ->Where('pic_2_el', 'LIKE', "%" . $request->pic_2_el . "%")
                ->Where('pic_3_mit', 'LIKE', "%" . $request->pic_3_mit . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk PIC: ' . $request->pic_1_me . ' & ' . $request->pic_2_el . ' & ' . $request->pic_3_mit;
        }
        /* me el */ elseif ($request->kondisi == 'cari' && isset($request->pic_1_me) && isset($request->pic_2_el)) {
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
                ->Where('pic_1_me', 'LIKE', "%" . $request->pic_1_me . "%")
                ->Where('pic_2_el', 'LIKE', "%" . $request->pic_2_el . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk PIC: ' . $request->pic_1_me . ' & ' . $request->pic_2_el;
        }
        /* me mit */ elseif ($request->kondisi == 'cari' && isset($request->pic_1_me) && isset($request->pic_3_mit)) {
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
                ->Where('pic_1_me', 'LIKE', "%" . $request->pic_1_me . "%")
                ->Where('pic_3_mit', 'LIKE', "%" . $request->pic_3_mit . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk PIC: ' . $request->pic_1_me . ' & ' . $request->pic_3_mit;
            /* dd($noResult); */
        }
        /* el mit */ elseif ($request->kondisi == 'cari' && isset($request->pic_2_el) && isset($request->pic_3_mit)) {
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
                ->Where('pic_2_el', 'LIKE', "%" . $request->pic_2_el . "%")
                ->Where('pic_3_mit', 'LIKE', "%" . $request->pic_3_mit . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk PIC: ' . $request->pic_2_el . ' & ' . $request->pic_3_mit;
        }
        /* pic me */ elseif ($request->kondisi == 'cari' && isset($request->pic_1_me)) {
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
                ->Where('pic_1_me', 'LIKE', "%" . $request->pic_1_me . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk PIC: ' . $request->pic_1_me;
        }
        /* pic el */ elseif ($request->kondisi == 'cari' && isset($request->pic_2_el)) {
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
                ->Where('pic_2_el', 'LIKE', "%" . $request->pic_2_el . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk PIC: ' . $request->pic_2_el;
        }
        /* pic mit */ elseif ($request->kondisi == 'cari' && isset($request->pic_3_mit)) {
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
                ->Where('pic_3_mit', 'LIKE', "%" . $request->pic_3_mit . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk PIC: ' . $request->pic_3_mit;
        }
        /* section */ elseif ($request->kondisi == 'cari' && isset($request->section)) {
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
                ->Where('section', 'LIKE', "%" . $request->section . "%")
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek untuk section: ' . $request->section;
        } /* search bar */ else if ($request->kondisi == 'cari' &&  isset($request->keyword)) {
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
                ->when($keyword, function ($query, $keyword) {
                    $query->where(function ($query) use ($keyword) {
                        $query->where('project_name', 'LIKE', "%{$keyword}%")
                            ->orWhere('io_number', 'LIKE', "%{$keyword}%");
                    });
                })
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan hasil pencarian untuk kata kunci: ' . $request->keyword;
        } /* radio 1 */ else if ($request->kondisi == 'cari' &&  isset($request->nilai_proyek_type)) {
            $nilai_proyek_type = $request->nilai_proyek_type;
            if ($nilai_proyek_type == 1) {
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
                    ->where('budget_amount', '<', 100000000)
                    ->latest('updated_at')
                    ->paginate(20);
                $filterMessage = 'Menampilkan proyek dengan nilai budget kurang dari Rp100 Juta.';
            } /* radio 2 */ else if ($nilai_proyek_type == 2) {
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
                    ->whereBetween('budget_amount', [100000000, 100000000000])
                    ->latest('updated_at')
                    ->paginate(20);
                $filterMessage = 'Menampilkan proyek dengan nilai budget Rp100 Juta hingga Rp1 Milyar.';
            } /* radio 3 */ else if ($nilai_proyek_type == 3) {
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
                    ->whereBetween('budget_amount', [100000000000, 1000000000000])
                    ->latest('updated_at')
                    ->paginate(20);
                $filterMessage = 'Menampilkan proyek dengan nilai budget Rp1 Milyar hingga Rp10 Milyar.';
            } /* radio 4 */ else {
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
                    ->where('budget_amount', '>', 1000000000000)
                    ->latest('updated_at')
                    ->paginate(20);
                $filterMessage = 'Menampilkan proyek dengan nilai budget lebih dari Rp10 Milyar.';
            }
        } /* form budget */ else if ($request->kondisi == 'cari' &&  isset($request->budget_amount_max) && isset($request->budget_amount_min)) {
            $budget_amount_max = intval(str_replace('.', '', $request->budget_amount_max));
            $budget_amount_min = intval(str_replace('.', '', $request->budget_amount_min));
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
                ->whereBetween('budget_amount', [$budget_amount_min,  $budget_amount_max])
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek dengan nilai budget Rp' . $request->budget_amount_min . ' hingga Rp' . $request->budget_amount_max . '.';
        } /* ob year */ else if ($request->kondisi == 'cari' &&  isset($request->ob_year)) {
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
                ->where('ob_year', '=', $request->ob_year)
                ->latest('updated_at')
                ->paginate(20);
            $filterMessage = 'Menampilkan proyek dengan Tahun proyek ' .  $request->ob_year . '.';
        } /* no filter */ else {
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
                ->latest('updated_at')
                ->paginate(20);
        }

        // Menggunakan total() untuk mendapatkan jumlah proyek
        $totalProjects = $project->total();

        // Mengatur $noResult berdasarkan jumlah proyek
        $noResult = ($totalProjects == 0) ? 1 : 0;

        //dd($project);
        /* selesai kode cari */

        $koneksifr = FRproject::select('id_fr_1')->get();
        // dd($koneksifr);
        $koneksiar = ARproject::select('id_ar_2')->get();
        $koneksipr = PRproject::select('id_pr_01_3')->get();
        $koneksipa = PAproject::select('id_pa_02_3')->get();
        $koneksipo = POproject::select('id_po_03_3')->get();
        $koneksipay = PAYproject::select('id_pay_04_3')->get();
        $koneksimn = MNproject::select('id_mn_4')->get();
        $koneksiin = INproject::select('id_in_5')->get();
        $koneksicl = CLproject::select('id_cl_6')->get();
        return view('supervisor.project.00-tabelproject', [
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
            'users' => $users,
            'filterMessage' => $filterMessage,
            'noResult' => $noResult
        ]);
    }
    public function ArsipLandingProjectSupervisor(Request $request)
    {
        /* $keyword = $request->keyword; */
        $users = User::select('section', 'first_name')->get();
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
            'koneksikecl'
        )
            ->whereNotNull('archive_at')
            ->latest('updated_at')
            ->paginate(20);


        // Menggunakan total() untuk mendapatkan jumlah proyek
        $totalProjects = $project->total();

        // Mengatur $noResult berdasarkan jumlah proyek
        $noResult = ($totalProjects == 0) ? 1 : 0;

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
            'users' => $users,
            'totalproject' => $totalproject,
            'noResult' => $noResult,
        ]);
    }

    /* redirect berdasarkan kondisi status tahapan */
    public function RedirectPage(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select('id_ar_2')->findOrFail($id_ar_2);
        $koneksipr = PRproject::select('id_pr_01_3')->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select('id_pa_02_3')->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        $koneksimn = MNproject::select('id_mn_4')->findOrFail($id_mn_4);
        $koneksiin = INproject::select('id_in_5')->findOrFail($id_in_5);
        $koneksicl = CLproject::select('id_cl_6')->findOrFail($id_cl_6);

        if (
            $viewdataproject->progress == 'Not Started' ||
            $viewdataproject->progress == 'Waiting Approval Fund Request'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'SatuFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Fund Request' ||
            $viewdataproject->progress == 'Waiting Approval Arrangement'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'DuaFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Arrangement' ||
            $viewdataproject->progress == 'Waiting Approval Purchasing - PR'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'TigaTitikSatuFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Purchasing - PR' ||
            $viewdataproject->progress == 'Waiting Approval Purchasing - PA'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'TigaTitikDuaFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Purchasing - PA' ||
            $viewdataproject->progress == 'Waiting Approval Purchasing - PO'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'TigaTitikTigaFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Purchasing - PO' ||
            $viewdataproject->progress == 'Waiting Approval Purchasing - PAY'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'TigaTitikEmpatFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Purchasing - PAY' ||
            $viewdataproject->progress == 'Waiting Approval Manufacturing'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'EmpatFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Manufacturing' ||
            $viewdataproject->progress == 'Waiting Approval Installation'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'LimaFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif (
            $viewdataproject->progress == 'Installation' ||
            $viewdataproject->progress == 'Waiting Approval Closed'
        ) {
            return redirect()->action(
                [SpvProjectController::class, 'EnamFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } elseif ($viewdataproject->progress == 'Closed') {
            return redirect()->action(
                [SpvProjectController::class, 'EnamFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        } else {
            return redirect()->action(
                [SpvProjectController::class, 'SatuFormProgress'],
                [
                    'id' => $viewdataproject->id,
                    'id_fr_1' => $koneksifr->id_fr_1,
                    'id_ar_2' => $koneksiar->id_ar_2,
                    'id_pr_01_3' => $koneksipr->id_pr_01_3,
                    'id_pa_02_3' => $koneksipa->id_pa_02_3,
                    'id_po_03_3' => $koneksipo->id_po_03_3,
                    'id_pay_04_3' => $koneksipay->id_pay_04_3,
                    'id_mn_4' => $koneksimn->id_mn_4,
                    'id_in_5' => $koneksiin->id_in_5,
                    'id_cl_6' => $koneksicl->id_cl_6,
                ]
            );
        }
    }
    /* selesai redirect berdasarkan kondisi status tahapan proyek */

    // 01== Tahap satu FUND REQUEST
    public function SatuFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);

        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',
            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        $standar_project = StandarProject::select(
            'file_fr_sheet_form',
            'up_fr_sheet_form',
            'date_fr_sheet_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.01-detail-fundrequest', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }

    public function ProcessSatuFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::findOrFail($id_ar_2);
        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date'
        )->findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select('id_pa_02_3')->findOrFail($id_pa_02_3);
        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnameatribut1 = $koneksifr->atribut_1;
        $oldnameatribut2 = $koneksifr->atribut_2;
        $oldnameatribut3 = $koneksifr->atribut_3;
        $oldnameatribut4 = $koneksifr->atribut_4;
        $oldnameatribut5 = $koneksifr->atribut_5;

        // Nama file baru
        $newnameatribut1 = $koneksifr->atribut_1;
        $newnameatribut2 = $koneksifr->atribut_2;
        $newnameatribut3 = $koneksifr->atribut_3;
        $newnameatribut4 = $koneksifr->atribut_4;
        $newnameatribut5 = $koneksifr->atribut_5;

        //Merubah nama file

        // ATRIBUT 1
        if ($request->file('as_atribut_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_atribut_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_atribut_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameatribut1 =
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
                ->file('as_atribut_1')
                ->storeAs('supervisor/project/01_FR', $newnameatribut1);
        }
        // ATRIBUT 2
        if ($request->file('as_atribut_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_atribut_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_atribut_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameatribut2 =
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
                ->file('as_atribut_2')
                ->storeAs('supervisor/project/01_FR', $newnameatribut2);
        }
        // ATRIBUT 3
        elseif ($request->file('as_atribut_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_atribut_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_atribut_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameatribut3 =
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
                ->file('as_atribut_3')
                ->storeAs('supervisor/project/01_FR', $newnameatribut3);
        }
        // ATRIBUT 4
        if ($request->file('as_atribut_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_atribut_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_atribut_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameatribut4 =
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
                ->file('as_atribut_4')
                ->storeAs('supervisor/project/01_FR', $newnameatribut4);
        }
        // ATRIBUT 5
        if ($request->file('as_atribut_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_atribut_5')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_atribut_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameatribut5 =
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
                ->file('as_atribut_5')
                ->storeAs('supervisor/project/01_FR', $newnameatribut5);
        }

        //menyimpan data inputan ke tabel
        if ($oldnameatribut1 != $newnameatribut1) {
            $request['atribut_1'] = $newnameatribut1;
            $request['up_by_1'] = $request['as_up_by_1'];
            $request['date_atribut_1'] = $request['as_date_atribut_1'];
        }
        if ($oldnameatribut2 != $newnameatribut2) {
            $request['atribut_2'] = $newnameatribut2;
            $request['up_by_2'] = $request['as_up_by_2'];
            $request['date_atribut_2'] = $request['as_date_atribut_2'];
        }
        if ($oldnameatribut3 != $newnameatribut3) {
            $request['atribut_3'] = $newnameatribut3;
            $request['up_by_3'] = $request['as_up_by_3'];
            $request['date_atribut_3'] = $request['as_date_atribut_3'];
        }
        if ($oldnameatribut4 != $newnameatribut4) {
            $request['atribut_4'] = $newnameatribut4;
            $request['up_by_4'] = $request['as_up_by_4'];
            $request['date_atribut_4'] = $request['as_date_atribut_4'];
        }
        if ($oldnameatribut5 != $newnameatribut5) {
            $request['atribut_5'] = $newnameatribut5;
            $request['up_by_5'] = $request['as_up_by_5'];
            $request['date_atribut_5'] = $request['as_date_atribut_5'];
        }

        // menyimpan seluruh ke table FR
        $viewdataproject->update($request->all());
        $koneksifr->update($request->all());

        return redirect()->action(
            [SpvProjectController::class, 'SatuFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }



    public function DuaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::findOrFail($id_ar_2);

        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',

            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);

        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        $standar_project = StandarProject::select(
            'file_dr_m_sheet_form',
            'file_dr_e_sheet_form',
            'file_lay_aprvl_sheet_form',
            'file_dr_aprvl_sheet_form',
            'file_design_sheet_form',
            'file_dr_meeting_form',
            'file_est_budget_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        // control budget
        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.02-detail-arrangement', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }

    public function ProcessDuaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::findOrFail($id_ar_2);
        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date'
        )->findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select('id_pa_02_3')->findOrFail($id_pa_02_3);
        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamedrawme1 = $koneksiar->draw_me_1;
        $oldnamedrawme2 = $koneksiar->draw_me_2;
        $oldnamedrawel1 = $koneksiar->draw_el_1;
        $oldnamedrawel2 = $koneksiar->draw_el_2;

        $oldnameapprovallay1 = $koneksiar->approval_lay_1;
        $oldnameapprovallay2 = $koneksiar->approval_lay_2;

        $oldnameapprovaldraw1 = $koneksiar->approval_draw_2;
        $oldnameapprovaldraw2 = $koneksiar->approval_draw_2;

        $oldnamedsgnsheet1 = $koneksiar->dsgn_sheet_1;
        $oldnamedsgnsheet2 = $koneksiar->dsgn_sheet_2;

        $oldnamedrmeet1 = $koneksiar->dr_meet_1;
        $oldnamedrmeet2 = $koneksiar->dr_meet_2;
        $oldnamedrmeet3 = $koneksiar->dr_meet_3;
        $oldnamedrmeet4 = $koneksiar->dr_meet_4;
        $oldnamedrmeet5 = $koneksiar->dr_meet_5;

        $oldnameestbudget1 = $koneksiar->est_budget_1;
        $oldnameestbudget2 = $koneksiar->est_budget_2;

        // Nama file baru
        $newnamedrawme1 = $koneksiar->draw_me_1;
        $newnamedrawme2 = $koneksiar->draw_me_2;
        $newnamedrawel1 = $koneksiar->draw_el_1;
        $newnamedrawel2 = $koneksiar->draw_el_2;

        $newnameapprovallay1 = $koneksiar->approval_lay_1;
        $newnameapprovallay2 = $koneksiar->approval_lay_2;

        $newnameapprovaldraw1 = $koneksiar->approval_draw_2;
        $newnameapprovaldraw2 = $koneksiar->approval_draw_2;

        $newnamedsgnsheet1 = $koneksiar->dsgn_sheet_1;
        $newnamedsgnsheet2 = $koneksiar->dsgn_sheet_2;

        $newnamedrmeet1 = $koneksiar->dr_meet_1;
        $newnamedrmeet2 = $koneksiar->dr_meet_2;
        $newnamedrmeet3 = $koneksiar->dr_meet_3;
        $newnamedrmeet4 = $koneksiar->dr_meet_4;
        $newnamedrmeet5 = $koneksiar->dr_meet_5;

        $newnameestbudget1 = $koneksiar->est_budget_1;
        $newnameestbudget2 = $koneksiar->est_budget_2;

        //Merubah nama file

        // newnamedrawme1
        if ($request->file('as_draw_me_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_draw_me_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_draw_me_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrawme1 =
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
                ->file('as_draw_me_1')
                ->storeAs('supervisor/project/02_AR', $newnamedrawme1);
        }

        // newnamedrawme2

        if ($request->file('as_draw_me_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_draw_me_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_draw_me_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrawme2 =
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
                ->file('as_draw_me_2')
                ->storeAs('supervisor/project/02_AR', $newnamedrawme2);
        }
        // newnamedrawel1

        if ($request->file('as_draw_el_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_draw_el_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_draw_el_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrawel1 =
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
                ->file('as_draw_el_1')
                ->storeAs('supervisor/project/02_AR', $newnamedrawel1);
        }

        // newnamedrawel2

        if ($request->file('as_draw_el_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_draw_el_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_draw_el_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrawel2 =
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
                ->file('as_draw_el_2')
                ->storeAs('supervisor/project/02_AR', $newnamedrawel2);
        }

        // newnameapprovallay1

        if ($request->file('as_approval_lay_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_approval_lay_1')
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
                ->file('as_approval_lay_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameapprovallay1 =
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
                ->file('as_approval_lay_1')
                ->storeAs('supervisor/project/02_AR', $newnameapprovallay1);
        }

        // newnameapprovallay2

        if ($request->file('as_approval_lay_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_approval_lay_2')
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
                ->file('as_approval_lay_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameapprovallay2 =
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
                ->file('as_approval_lay_2')
                ->storeAs('supervisor/project/02_AR', $newnameapprovallay2);
        }
        // newnameapprovaldraw1

        if ($request->file('as_approval_draw_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_approval_draw_1')
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
                ->file('as_approval_draw_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameapprovaldraw1 =
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
                ->file('as_approval_draw_1')
                ->storeAs('supervisor/project/02_AR', $newnameapprovaldraw1);
        }
        // newnameapprovaldraw2

        if ($request->file('as_approval_draw_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_approval_draw_2')
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
                ->file('as_approval_draw_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameapprovaldraw2 =
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
                ->file('as_approval_draw_2')
                ->storeAs('supervisor/project/02_AR', $newnameapprovaldraw2);
        }
        // newnamedsgnsheet1

        if ($request->file('as_dsgn_sheet_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_dsgn_sheet_1')
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
                ->file('as_dsgn_sheet_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedsgnsheet1 =
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
                ->file('as_dsgn_sheet_1')
                ->storeAs('supervisor/project/02_AR', $newnamedsgnsheet1);
        }
        // newnamedsgnsheet2

        if ($request->file('as_dsgn_sheet_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_dsgn_sheet_2')
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
                ->file('as_dsgn_sheet_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedsgnsheet2 =
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
                ->file('as_dsgn_sheet_2')
                ->storeAs('supervisor/project/02_AR', $newnamedsgnsheet2);
        }
        // newnamedrmeet1

        if ($request->file('as_dr_meet_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_dr_meet_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_dr_meet_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrmeet1 =
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
                ->file('as_dr_meet_1')
                ->storeAs('supervisor/project/02_AR', $newnamedrmeet1);
        }
        // newnamedrmeet2

        if ($request->file('as_dr_meet_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_dr_meet_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_dr_meet_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrmeet2 =
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
                ->file('as_dr_meet_2')
                ->storeAs('supervisor/project/02_AR', $newnamedrmeet2);
        }

        // newnamedrmeet3

        if ($request->file('as_dr_meet_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_dr_meet_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_dr_meet_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrmeet3 =
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
                ->file('as_dr_meet_3')
                ->storeAs('supervisor/project/02_AR', $newnamedrmeet3);
        }
        // newnamedrmeet4

        if ($request->file('as_dr_meet_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_dr_meet_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_dr_meet_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrmeet4 =
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
                ->file('as_dr_meet_4')
                ->storeAs('supervisor/project/02_AR', $newnamedrmeet4);
        }
        // newnamedrmeet5

        if ($request->file('as_dr_meet_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_dr_meet_5')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_dr_meet_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamedrmeet5 =
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
                ->file('as_dr_meet_5')
                ->storeAs('supervisor/project/02_AR', $newnamedrmeet5);
        }

        // newnameestbudget1

        if ($request->file('as_est_budget_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_est_budget_1')
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
                ->file('as_est_budget_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameestbudget1 =
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
                ->file('as_est_budget_1')
                ->storeAs('supervisor/project/02_AR', $newnameestbudget1);
        }
        // newnameestbudget2

        if ($request->file('as_est_budget_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_est_budget_2')
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
                ->file('as_est_budget_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnameestbudget2 =
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
                ->file('as_est_budget_2')
                ->storeAs('supervisor/project/02_AR', $newnameestbudget2);
        }

        // ====================

        //menyimpan data inputan ke tabel
        if ($oldnamedrawme1 != $newnamedrawme1) {
            $request['draw_me_1'] = $newnamedrawme1;
            $request['up_draw_me_by_1'] = $request['as_up_draw_me_by_1'];
            $request['date_draw_me_1'] = $request['as_date_draw_me_1'];
        }
        if ($oldnamedrawme2 != $newnamedrawme2) {
            $request['draw_me_2'] = $newnamedrawme2;
            $request['up_draw_me_by_2'] = $request['as_up_draw_me_by_2'];
            $request['date_draw_me_2'] = $request['as_date_draw_me_2'];
        }
        if ($oldnamedrawel1 != $newnamedrawel1) {
            $request['draw_el_1'] = $newnamedrawel1;
            $request['up_draw_el_by_1'] = $request['as_up_draw_el_by_1'];
            $request['date_draw_el_1'] = $request['as_date_draw_el_1'];
        }
        if ($oldnamedrawel2 != $newnamedrawel2) {
            $request['draw_el_2'] = $newnamedrawel2;
            $request['up_draw_el_by_2'] = $request['as_up_draw_el_by_2'];
            $request['date_draw_el_2'] = $request['as_date_draw_el_2'];
        }
        if ($oldnameapprovallay1 != $newnameapprovallay1) {
            $request['approval_lay_1'] = $newnameapprovallay1;
            $request['up_approval_lay_by_1'] =
                $request['as_up_approval_lay_by_1'];
            $request['date_approval_lay_1'] =
                $request['as_date_approval_lay_1'];
        }
        if ($oldnameapprovallay2 != $newnameapprovallay2) {
            $request['approval_lay_2'] = $newnameapprovallay2;
            $request['up_approval_lay_by_2'] =
                $request['as_up_approval_lay_by_2'];
            $request['date_approval_lay_2'] =
                $request['as_date_approval_lay_2'];
        }
        if ($oldnameapprovaldraw1 != $newnameapprovaldraw1) {
            $request['approval_draw_1'] = $newnameapprovaldraw1;
            $request['up_approval_draw_by_1'] =
                $request['as_up_approval_draw_by_1'];
            $request['date_approval_draw_1'] =
                $request['as_date_approval_draw_1'];
        }
        if ($oldnameapprovaldraw2 != $newnameapprovaldraw2) {
            $request['approval_draw_2'] = $newnameapprovaldraw2;
            $request['up_approval_draw_by_2'] =
                $request['as_up_approval_draw_by_2'];
            $request['date_approval_draw_2'] =
                $request['as_date_approval_draw_2'];
        }
        if ($oldnamedsgnsheet1 != $newnamedsgnsheet1) {
            $request['dsgn_sheet_1'] = $newnamedsgnsheet1;
            $request['up_dsgn_sheet_by_1'] = $request['as_up_dsgn_sheet_by_1'];
            $request['date_dsgn_sheet_1'] = $request['as_date_dsgn_sheet_1'];
        }
        if ($oldnamedsgnsheet2 != $newnamedsgnsheet2) {
            $request['dsgn_sheet_2'] = $newnamedsgnsheet2;
            $request['up_dsgn_sheet_by_2'] = $request['as_up_dsgn_sheet_by_2'];
            $request['date_dsgn_sheet_2'] = $request['as_date_dsgn_sheet_2'];
        }
        if ($oldnamedrmeet1 != $newnamedrmeet1) {
            $request['dr_meet_1'] = $newnamedrmeet1;
            $request['up_dr_meet_by_1'] = $request['as_up_dr_meet_by_1'];
            $request['date_dr_meet_1'] = $request['as_date_dr_meet_1'];
        }
        if ($oldnamedrmeet2 != $newnamedrmeet2) {
            $request['dr_meet_2'] = $newnamedrmeet2;
            $request['up_dr_meet_by_2'] = $request['as_up_dr_meet_by_2'];
            $request['date_dr_meet_2'] = $request['as_date_dr_meet_2'];
        }
        if ($oldnamedrmeet3 != $newnamedrmeet3) {
            $request['dr_meet_3'] = $newnamedrmeet3;
            $request['up_dr_meet_by_3'] = $request['as_up_dr_meet_by_3'];
            $request['date_dr_meet_3'] = $request['as_date_dr_meet_3'];
        }
        if ($oldnamedrmeet4 != $newnamedrmeet4) {
            $request['dr_meet_4'] = $newnamedrmeet4;
            $request['up_dr_meet_by_4'] = $request['as_up_dr_meet_by_4'];
            $request['date_dr_meet_4'] = $request['as_date_dr_meet_4'];
        }
        if ($oldnamedrmeet5 != $newnamedrmeet5) {
            $request['dr_meet_5'] = $newnamedrmeet5;
            $request['up_dr_meet_by_5'] = $request['as_up_dr_meet_by_5'];
            $request['date_dr_meet_5'] = $request['as_date_dr_meet_5'];
        }
        if ($oldnameestbudget1 != $newnameestbudget1) {
            $request['est_budget_1'] = $newnameestbudget1;
            $request['up_est_budget_by_1'] = $request['as_up_est_budget_by_1'];
            $request['date_est_budget_1'] = $request['as_date_est_budget_1'];
        }
        if ($oldnameestbudget2 != $newnameestbudget2) {
            $request['est_budget_2'] = $newnameestbudget2;
            $request['up_est_budget_by_2'] = $request['as_up_est_budget_by_2'];
            $request['date_est_budget_2'] = $request['as_date_est_budget_2'];
        }

        // menyimpan seluruh ke table AR
        $viewdataproject->update($request->all());
        $koneksiar->update($request->all());

        if ($koneksiar) {
            Session::flash('status', 'sukses');
            Session::flash('message', 'Edit Data berhasil!');
        }

        return redirect()->action(
            [SpvProjectController::class, 'DuaFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }

    // tahap 3 PR
    public function TigaTitikSatuFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
        $koneksipr = PRproject::findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',
            'status_pa_02_date',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',
            'status_po_03_date',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',
            'status_pay_04_date',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);

        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        $standar_project = StandarProject::select(
            'file_pr_parts_material_form',
            'file_pr_pekerjaan_jasa_form',
            'file_pr_manufaktur_form',
            'file_pr_rfq_form',
            'file_pr_per_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.03-01-detail-purchasing', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }

    public function ProcessTigaTitikSatuFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);
        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
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
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamepr_parts1 = $koneksipr->pr_parts_1;
        $oldnamepr_parts2 = $koneksipr->pr_parts_2;
        $oldnamepr_parts3 = $koneksipr->pr_parts_3;
        $oldnamepr_parts4 = $koneksipr->pr_parts_4;
        $oldnamepr_parts5 = $koneksipr->pr_parts_5;
        $oldnamepr_parts6 = $koneksipr->pr_parts_6;
        $oldnamepr_parts7 = $koneksipr->pr_parts_7;
        $oldnamepr_parts8 = $koneksipr->pr_parts_8;
        $oldnamepr_parts9 = $koneksipr->pr_parts_9;
        $oldnamepr_parts10 = $koneksipr->pr_parts_10;
        $oldnamepr_parts11 = $koneksipr->pr_parts_11;
        $oldnamepr_parts12 = $koneksipr->pr_parts_12;
        $oldnamepr_parts13 = $koneksipr->pr_parts_13;
        $oldnamepr_parts14 = $koneksipr->pr_parts_14;
        $oldnamepr_parts15 = $koneksipr->pr_parts_15;
        $oldnamepr_parts16 = $koneksipr->pr_parts_16;
        $oldnamepr_parts17 = $koneksipr->pr_parts_17;
        $oldnamepr_parts18 = $koneksipr->pr_parts_18;
        $oldnamepr_parts19 = $koneksipr->pr_parts_19;
        $oldnamepr_parts20 = $koneksipr->pr_parts_20;
        $oldnamepr_parts21 = $koneksipr->pr_parts_21;
        $oldnamepr_parts22 = $koneksipr->pr_parts_22;
        $oldnamepr_parts23 = $koneksipr->pr_parts_23;
        $oldnamepr_parts24 = $koneksipr->pr_parts_24;
        $oldnamepr_parts25 = $koneksipr->pr_parts_25;
        $oldnamepr_parts26 = $koneksipr->pr_parts_26;
        $oldnamepr_parts27 = $koneksipr->pr_parts_27;
        $oldnamepr_parts28 = $koneksipr->pr_parts_28;
        $oldnamepr_parts29 = $koneksipr->pr_parts_29;
        $oldnamepr_parts30 = $koneksipr->pr_parts_30;
        $oldnamepr_parts31 = $koneksipr->pr_parts_31;
        $oldnamepr_parts32 = $koneksipr->pr_parts_32;
        $oldnamepr_parts33 = $koneksipr->pr_parts_33;
        $oldnamepr_parts34 = $koneksipr->pr_parts_34;
        $oldnamepr_parts35 = $koneksipr->pr_parts_35;
        $oldnamepr_parts36 = $koneksipr->pr_parts_36;
        $oldnamepr_parts37 = $koneksipr->pr_parts_37;
        $oldnamepr_parts38 = $koneksipr->pr_parts_38;
        $oldnamepr_parts39 = $koneksipr->pr_parts_39;
        $oldnamepr_parts40 = $koneksipr->pr_parts_40;
        $oldnamepr_parts41 = $koneksipr->pr_parts_41;
        $oldnamepr_parts42 = $koneksipr->pr_parts_42;
        $oldnamepr_parts43 = $koneksipr->pr_parts_43;
        $oldnamepr_parts44 = $koneksipr->pr_parts_44;
        $oldnamepr_parts45 = $koneksipr->pr_parts_45;

        $oldnamepr_jasa1 = $koneksipr->pr_jasa_1;
        $oldnamepr_jasa2 = $koneksipr->pr_jasa_2;
        $oldnamepr_jasa3 = $koneksipr->pr_jasa_3;
        $oldnamepr_jasa4 = $koneksipr->pr_jasa_4;
        $oldnamepr_jasa5 = $koneksipr->pr_jasa_5;
        $oldnamepr_jasa6 = $koneksipr->pr_jasa_6;
        $oldnamepr_jasa7 = $koneksipr->pr_jasa_7;
        $oldnamepr_jasa8 = $koneksipr->pr_jasa_8;
        $oldnamepr_jasa9 = $koneksipr->pr_jasa_9;
        $oldnamepr_jasa10 = $koneksipr->pr_jasa_10;
        $oldnamepr_jasa11 = $koneksipr->pr_jasa_11;
        $oldnamepr_jasa12 = $koneksipr->pr_jasa_12;
        $oldnamepr_jasa13 = $koneksipr->pr_jasa_13;
        $oldnamepr_jasa14 = $koneksipr->pr_jasa_14;
        $oldnamepr_jasa15 = $koneksipr->pr_jasa_15;
        $oldnamepr_jasa16 = $koneksipr->pr_jasa_16;
        $oldnamepr_jasa17 = $koneksipr->pr_jasa_17;
        $oldnamepr_jasa18 = $koneksipr->pr_jasa_18;
        $oldnamepr_jasa19 = $koneksipr->pr_jasa_19;
        $oldnamepr_jasa20 = $koneksipr->pr_jasa_20;
        $oldnamepr_jasa21 = $koneksipr->pr_jasa_21;
        $oldnamepr_jasa22 = $koneksipr->pr_jasa_22;
        $oldnamepr_jasa23 = $koneksipr->pr_jasa_23;
        $oldnamepr_jasa24 = $koneksipr->pr_jasa_24;
        $oldnamepr_jasa25 = $koneksipr->pr_jasa_25;
        $oldnamepr_jasa26 = $koneksipr->pr_jasa_26;
        $oldnamepr_jasa27 = $koneksipr->pr_jasa_27;
        $oldnamepr_jasa28 = $koneksipr->pr_jasa_28;
        $oldnamepr_jasa29 = $koneksipr->pr_jasa_29;
        $oldnamepr_jasa30 = $koneksipr->pr_jasa_30;

        $oldnamepr_mnftr1 = $koneksipr->pr_mnftr_1;
        $oldnamepr_mnftr2 = $koneksipr->pr_mnftr_2;
        $oldnamepr_mnftr3 = $koneksipr->pr_mnftr_3;
        $oldnamepr_mnftr4 = $koneksipr->pr_mnftr_4;
        $oldnamepr_mnftr5 = $koneksipr->pr_mnftr_5;
        $oldnamepr_mnftr6 = $koneksipr->pr_mnftr_6;
        $oldnamepr_mnftr7 = $koneksipr->pr_mnftr_7;
        $oldnamepr_mnftr8 = $koneksipr->pr_mnftr_8;
        $oldnamepr_mnftr9 = $koneksipr->pr_mnftr_9;
        $oldnamepr_mnftr10 = $koneksipr->pr_mnftr_10;

        $oldnamepr_rfq1 = $koneksipr->pr_rfq_1;
        $oldnamepr_rfq2 = $koneksipr->pr_rfq_2;
        $oldnamepr_rfq3 = $koneksipr->pr_rfq_3;
        $oldnamepr_rfq4 = $koneksipr->pr_rfq_4;
        $oldnamepr_rfq5 = $koneksipr->pr_rfq_5;

        //nama file baru
        $newnamepr_parts1 = $koneksipr->pr_parts_1;
        $newnamepr_parts2 = $koneksipr->pr_parts_2;
        $newnamepr_parts3 = $koneksipr->pr_parts_3;
        $newnamepr_parts4 = $koneksipr->pr_parts_4;
        $newnamepr_parts5 = $koneksipr->pr_parts_5;
        $newnamepr_parts6 = $koneksipr->pr_parts_6;
        $newnamepr_parts7 = $koneksipr->pr_parts_7;
        $newnamepr_parts8 = $koneksipr->pr_parts_8;
        $newnamepr_parts9 = $koneksipr->pr_parts_9;
        $newnamepr_parts10 = $koneksipr->pr_parts_10;
        $newnamepr_parts11 = $koneksipr->pr_parts_11;
        $newnamepr_parts12 = $koneksipr->pr_parts_12;
        $newnamepr_parts13 = $koneksipr->pr_parts_13;
        $newnamepr_parts14 = $koneksipr->pr_parts_14;
        $newnamepr_parts15 = $koneksipr->pr_parts_15;
        $newnamepr_parts16 = $koneksipr->pr_parts_16;
        $newnamepr_parts17 = $koneksipr->pr_parts_17;
        $newnamepr_parts18 = $koneksipr->pr_parts_18;
        $newnamepr_parts19 = $koneksipr->pr_parts_19;
        $newnamepr_parts20 = $koneksipr->pr_parts_20;
        $newnamepr_parts21 = $koneksipr->pr_parts_21;
        $newnamepr_parts22 = $koneksipr->pr_parts_22;
        $newnamepr_parts23 = $koneksipr->pr_parts_23;
        $newnamepr_parts24 = $koneksipr->pr_parts_24;
        $newnamepr_parts25 = $koneksipr->pr_parts_25;
        $newnamepr_parts26 = $koneksipr->pr_parts_26;
        $newnamepr_parts27 = $koneksipr->pr_parts_27;
        $newnamepr_parts28 = $koneksipr->pr_parts_28;
        $newnamepr_parts29 = $koneksipr->pr_parts_29;
        $newnamepr_parts30 = $koneksipr->pr_parts_30;
        $newnamepr_parts31 = $koneksipr->pr_parts_31;
        $newnamepr_parts32 = $koneksipr->pr_parts_32;
        $newnamepr_parts33 = $koneksipr->pr_parts_33;
        $newnamepr_parts34 = $koneksipr->pr_parts_34;
        $newnamepr_parts35 = $koneksipr->pr_parts_35;
        $newnamepr_parts36 = $koneksipr->pr_parts_36;
        $newnamepr_parts37 = $koneksipr->pr_parts_37;
        $newnamepr_parts38 = $koneksipr->pr_parts_38;
        $newnamepr_parts39 = $koneksipr->pr_parts_39;
        $newnamepr_parts40 = $koneksipr->pr_parts_40;
        $newnamepr_parts41 = $koneksipr->pr_parts_41;
        $newnamepr_parts42 = $koneksipr->pr_parts_42;
        $newnamepr_parts43 = $koneksipr->pr_parts_43;
        $newnamepr_parts44 = $koneksipr->pr_parts_44;
        $newnamepr_parts45 = $koneksipr->pr_parts_45;

        $newnamepr_jasa1 = $koneksipr->pr_jasa_1;
        $newnamepr_jasa2 = $koneksipr->pr_jasa_2;
        $newnamepr_jasa3 = $koneksipr->pr_jasa_3;
        $newnamepr_jasa4 = $koneksipr->pr_jasa_4;
        $newnamepr_jasa5 = $koneksipr->pr_jasa_5;
        $newnamepr_jasa6 = $koneksipr->pr_jasa_6;
        $newnamepr_jasa7 = $koneksipr->pr_jasa_7;
        $newnamepr_jasa8 = $koneksipr->pr_jasa_8;
        $newnamepr_jasa9 = $koneksipr->pr_jasa_9;
        $newnamepr_jasa10 = $koneksipr->pr_jasa_10;
        $newnamepr_jasa11 = $koneksipr->pr_jasa_11;
        $newnamepr_jasa12 = $koneksipr->pr_jasa_12;
        $newnamepr_jasa13 = $koneksipr->pr_jasa_13;
        $newnamepr_jasa14 = $koneksipr->pr_jasa_14;
        $newnamepr_jasa15 = $koneksipr->pr_jasa_15;
        $newnamepr_jasa16 = $koneksipr->pr_jasa_16;
        $newnamepr_jasa17 = $koneksipr->pr_jasa_17;
        $newnamepr_jasa18 = $koneksipr->pr_jasa_18;
        $newnamepr_jasa19 = $koneksipr->pr_jasa_19;
        $newnamepr_jasa20 = $koneksipr->pr_jasa_20;
        $newnamepr_jasa21 = $koneksipr->pr_jasa_21;
        $newnamepr_jasa22 = $koneksipr->pr_jasa_22;
        $newnamepr_jasa23 = $koneksipr->pr_jasa_23;
        $newnamepr_jasa24 = $koneksipr->pr_jasa_24;
        $newnamepr_jasa25 = $koneksipr->pr_jasa_25;
        $newnamepr_jasa26 = $koneksipr->pr_jasa_26;
        $newnamepr_jasa27 = $koneksipr->pr_jasa_27;
        $newnamepr_jasa28 = $koneksipr->pr_jasa_28;
        $newnamepr_jasa29 = $koneksipr->pr_jasa_29;
        $newnamepr_jasa30 = $koneksipr->pr_jasa_30;

        $newnamepr_mnftr1 = $koneksipr->pr_mnftr_1;
        $newnamepr_mnftr2 = $koneksipr->pr_mnftr_2;
        $newnamepr_mnftr3 = $koneksipr->pr_mnftr_3;
        $newnamepr_mnftr4 = $koneksipr->pr_mnftr_4;
        $newnamepr_mnftr5 = $koneksipr->pr_mnftr_5;
        $newnamepr_mnftr6 = $koneksipr->pr_mnftr_6;
        $newnamepr_mnftr7 = $koneksipr->pr_mnftr_7;
        $newnamepr_mnftr8 = $koneksipr->pr_mnftr_8;
        $newnamepr_mnftr9 = $koneksipr->pr_mnftr_9;
        $newnamepr_mnftr10 = $koneksipr->pr_mnftr_10;

        $newnamepr_rfq1 = $koneksipr->pr_rfq_1;
        $newnamepr_rfq2 = $koneksipr->pr_rfq_2;
        $newnamepr_rfq3 = $koneksipr->pr_rfq_3;
        $newnamepr_rfq4 = $koneksipr->pr_rfq_4;
        $newnamepr_rfq5 = $koneksipr->pr_rfq_5;

        // inputan disimpan
        // inputan 1
        /* dd($request->all()); */
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
        // inputan 2
        if ($request->file('as_pr_parts_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_2')
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
                ->file('as_pr_parts_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts2 =
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
                ->file('as_pr_parts_2')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts2);
        }
        // inputan 3
        if ($request->file('as_pr_parts_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_3')
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
                ->file('as_pr_parts_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts3 =
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
                ->file('as_pr_parts_3')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts3);
        }
        // inputan 4
        if ($request->file('as_pr_parts_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_4')
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
                ->file('as_pr_parts_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts4 =
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
                ->file('as_pr_parts_4')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts4);
        }
        // inputan 5
        if ($request->file('as_pr_parts_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_5')
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
                ->file('as_pr_parts_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts5 =
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
                ->file('as_pr_parts_5')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts5);
        }
        // inputan 6
        if ($request->file('as_pr_parts_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_6')
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
                ->file('as_pr_parts_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts6 =
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
                ->file('as_pr_parts_6')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts6);
        }
        // inputan 7
        if ($request->file('as_pr_parts_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_7')
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
                ->file('as_pr_parts_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts7 =
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
                ->file('as_pr_parts_7')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts7);
        }
        // inputan 4
        if ($request->file('as_pr_parts_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_8')
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
                ->file('as_pr_parts_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts8 =
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
                ->file('as_pr_parts_8')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts8);
        }
        // inputan 9
        if ($request->file('as_pr_parts_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_9')
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
                ->file('as_pr_parts_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts9 =
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
                ->file('as_pr_parts_9')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts9);
        }
        // inputan 10
        if ($request->file('as_pr_parts_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_10')
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
                ->file('as_pr_parts_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts10 =
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
                ->file('as_pr_parts_10')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts10);
        }
        // batas 10 inputan
        // inputan 11
        if ($request->file('as_pr_parts_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_11')
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
                ->file('as_pr_parts_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts11 =
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
                ->file('as_pr_parts_11')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts11);
        }
        // inputan 12
        if ($request->file('as_pr_parts_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_12')
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
                ->file('as_pr_parts_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts12 =
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
                ->file('as_pr_parts_12')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts12);
        }
        // inputan 13
        if ($request->file('as_pr_parts_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_13')
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
                ->file('as_pr_parts_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts13 =
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
                ->file('as_pr_parts_13')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts13);
        }
        // inputan 14
        if ($request->file('as_pr_parts_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_14')
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
                ->file('as_pr_parts_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts14 =
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
                ->file('as_pr_parts_14')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts14);
        }
        // inputan 15
        if ($request->file('as_pr_parts_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_15')
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
                ->file('as_pr_parts_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts15 =
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
                ->file('as_pr_parts_15')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts15);
        }
        // inputan 16
        if ($request->file('as_pr_parts_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_16')
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
                ->file('as_pr_parts_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts16 =
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
                ->file('as_pr_parts_16')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts16);
        }
        // inputan 17
        if ($request->file('as_pr_parts_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_17')
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
                ->file('as_pr_parts_17')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts17 =
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
                ->file('as_pr_parts_17')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts17);
        }
        // inputan 18
        if ($request->file('as_pr_parts_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_18')
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
                ->file('as_pr_parts_18')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts18 =
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
                ->file('as_pr_parts_18')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts18);
        }

        // inputan 19
        if ($request->file('as_pr_parts_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_19')
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
                ->file('as_pr_parts_19')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts19 =
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
                ->file('as_pr_parts_19')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts19);
        }
        // inputan 20
        if ($request->file('as_pr_parts_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_20')
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
                ->file('as_pr_parts_20')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts20 =
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
                ->file('as_pr_parts_20')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts20);
        }
        // inputan 21
        if ($request->file('as_pr_parts_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_21')
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
                ->file('as_pr_parts_21')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts21 =
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
                ->file('as_pr_parts_21')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts21);
        }
        // inputan 22
        if ($request->file('as_pr_parts_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_22')
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
                ->file('as_pr_parts_22')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts22 =
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
                ->file('as_pr_parts_22')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts22);
        }
        // inputan 23
        if ($request->file('as_pr_parts_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_23')
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
                ->file('as_pr_parts_23')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts23 =
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
                ->file('as_pr_parts_23')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts23);
        }
        // inputan 24
        if ($request->file('as_pr_parts_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_24')
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
                ->file('as_pr_parts_24')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts24 =
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
                ->file('as_pr_parts_24')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts24);
        }
        // inputan 25
        if ($request->file('as_pr_parts_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_25')
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
                ->file('as_pr_parts_25')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts25 =
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
                ->file('as_pr_parts_25')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts25);
        }
        // inputan 26
        if ($request->file('as_pr_parts_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_26')
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
                ->file('as_pr_parts_26')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts26 =
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
                ->file('as_pr_parts_26')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts26);
        }
        // inputan 27
        if ($request->file('as_pr_parts_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_27')
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
                ->file('as_pr_parts_27')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts27 =
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
                ->file('as_pr_parts_27')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts27);
        }
        // inputan 28
        if ($request->file('as_pr_parts_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_28')
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
                ->file('as_pr_parts_28')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts28 =
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
                ->file('as_pr_parts_28')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts28);
        }
        // inputan 29
        if ($request->file('as_pr_parts_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_29')
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
                ->file('as_pr_parts_29')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts29 =
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
                ->file('as_pr_parts_29')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts29);
        }
        // inputan 30
        if ($request->file('as_pr_parts_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_30')
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
                ->file('as_pr_parts_30')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts30 =
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
                ->file('as_pr_parts_30')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts30);
        }
        // inputan 31
        if ($request->file('as_pr_parts_31')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_31')
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
                ->file('as_pr_parts_31')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts31 =
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
                ->file('as_pr_parts_31')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts31);
        }
        // inputan 32
        if ($request->file('as_pr_parts_32')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_32')
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
                ->file('as_pr_parts_32')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts32 =
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
                ->file('as_pr_parts_32')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts32);
        }
        // inputan 33
        if ($request->file('as_pr_parts_33')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_33')
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
                ->file('as_pr_parts_33')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts33 =
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
                ->file('as_pr_parts_33')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts33);
        }
        // inputan 34
        if ($request->file('as_pr_parts_34')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_34')
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
                ->file('as_pr_parts_34')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts34 =
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
                ->file('as_pr_parts_34')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts34);
        }
        // inputan 35
        if ($request->file('as_pr_parts_35')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_35')
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
                ->file('as_pr_parts_35')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts35 =
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
                ->file('as_pr_parts_35')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts35);
        }
        // inputan 36
        if ($request->file('as_pr_parts_36')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_36')
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
                ->file('as_pr_parts_36')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_parts36 =
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
                ->file('as_pr_parts_36')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts36);
        }
        if ($request->file('as_pr_parts_37')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_37')
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
                ->file('as_pr_parts_37')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts37 =
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
                ->file('as_pr_parts_37')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts37);
        }
        if ($request->file('as_pr_parts_38')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_38')
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
                ->file('as_pr_parts_38')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts38 =
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
                ->file('as_pr_parts_38')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts38);
        }
        if ($request->file('as_pr_parts_39')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_39')
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
                ->file('as_pr_parts_39')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts39 =
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
                ->file('as_pr_parts_39')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts39);
        }
        if ($request->file('as_pr_parts_40')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_40')
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
                ->file('as_pr_parts_40')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts40 =
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
                ->file('as_pr_parts_40')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts40);
        }
        if ($request->file('as_pr_parts_41')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_41')
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
                ->file('as_pr_parts_41')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts41 =
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
                ->file('as_pr_parts_41')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts41);
        }
        if ($request->file('as_pr_parts_42')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_42')
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
                ->file('as_pr_parts_42')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts42 =
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
                ->file('as_pr_parts_42')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts42);
        }
        if ($request->file('as_pr_parts_43')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_43')
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
                ->file('as_pr_parts_43')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts43 =
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
                ->file('as_pr_parts_43')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts43);
        }
        if ($request->file('as_pr_parts_44')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_44')
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
                ->file('as_pr_parts_44')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts44 =
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
                ->file('as_pr_parts_44')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts44);
        }
        if ($request->file('as_pr_parts_45')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_parts_45')
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
                ->file('as_pr_parts_45')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_parts45 =
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
                ->file('as_pr_parts_45')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_parts45);
        }

        // inputan jasa
        // inputan 1
        if ($request->file('as_pr_jasa_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa1 =
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
                ->file('as_pr_jasa_1')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa1);
        }
        // inputan 2
        if ($request->file('as_pr_jasa_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa2 =
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
                ->file('as_pr_jasa_2')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa2);
        }
        // inputan 3
        if ($request->file('as_pr_jasa_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa3 =
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
                ->file('as_pr_jasa_3')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa3);
        }
        // inputan 4
        if ($request->file('as_pr_jasa_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa4 =
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
                ->file('as_pr_jasa_4')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa4);
        }

        // jasa 5
        if ($request->file('as_pr_jasa_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_5')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa5 =
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
                ->file('as_pr_jasa_5')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa5);
        }
        // jasa 6
        if ($request->file('as_pr_jasa_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_6')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa6 =
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
                ->file('as_pr_jasa_6')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa6);
        }
        // jasa 7
        if ($request->file('as_pr_jasa_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_7')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa7 =
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
                ->file('as_pr_jasa_7')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa7);
        }
        // jasa 8
        if ($request->file('as_pr_jasa_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_8')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa8 =
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
                ->file('as_pr_jasa_8')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa8);
        }
        // jasa 9
        if ($request->file('as_pr_jasa_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_jasa_9')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_jasa_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa9 =
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
                ->file('as_pr_jasa_9')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa9);
        }
        // jasa 10
        if ($request->file('as_pr_jasa_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_10')
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
                ->file('as_pr_jasa_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa10 =
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
                ->file('as_pr_jasa_10')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa10);
        }
        // jasa 11
        if ($request->file('as_pr_jasa_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_11')
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
                ->file('as_pr_jasa_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa11 =
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
                ->file('as_pr_jasa_11')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa11);
        }
        // jasa 12
        if ($request->file('as_pr_jasa_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_12')
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
                ->file('as_pr_jasa_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa12 =
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
                ->file('as_pr_jasa_12')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa12);
        }
        // jasa 13
        if ($request->file('as_pr_jasa_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_13')
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
                ->file('as_pr_jasa_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa13 =
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
                ->file('as_pr_jasa_13')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa13);
        }
        // jasa 15
        if ($request->file('as_pr_jasa_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_14')
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
                ->file('as_pr_jasa_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa14 =
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
                ->file('as_pr_jasa_14')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa14);
        }
        // jasa 15
        if ($request->file('as_pr_jasa_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_15')
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
                ->file('as_pr_jasa_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa15 =
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
                ->file('as_pr_jasa_15')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa15);
        }
        // jasa 16
        if ($request->file('as_pr_jasa_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_16')
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
                ->file('as_pr_jasa_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_jasa16 =
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
                ->file('as_pr_jasa_16')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa16);
        }

        if ($request->file('as_pr_jasa_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_17')
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
                ->file('as_pr_jasa_17')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa17 =
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
                ->file('as_pr_jasa_17')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa17);
        }
        if ($request->file('as_pr_jasa_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_18')
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
                ->file('as_pr_jasa_18')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa18 =
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
                ->file('as_pr_jasa_18')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa18);
        }
        if ($request->file('as_pr_jasa_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_19')
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
                ->file('as_pr_jasa_19')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa19 =
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
                ->file('as_pr_jasa_19')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa19);
        }
        if ($request->file('as_pr_jasa_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_20')
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
                ->file('as_pr_jasa_20')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa20 =
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
                ->file('as_pr_jasa_20')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa20);
        }
        if ($request->file('as_pr_jasa_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_21')
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
                ->file('as_pr_jasa_21')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa21 =
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
                ->file('as_pr_jasa_21')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa21);
        }
        if ($request->file('as_pr_jasa_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_22')
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
                ->file('as_pr_jasa_22')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa22 =
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
                ->file('as_pr_jasa_22')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa22);
        }
        if ($request->file('as_pr_jasa_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_23')
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
                ->file('as_pr_jasa_23')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa23 =
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
                ->file('as_pr_jasa_23')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa23);
        }
        if ($request->file('as_pr_jasa_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_24')
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
                ->file('as_pr_jasa_24')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa24 =
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
                ->file('as_pr_jasa_24')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa24);
        }
        if ($request->file('as_pr_jasa_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_25')
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
                ->file('as_pr_jasa_25')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa25 =
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
                ->file('as_pr_jasa_25')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa25);
        }
        if ($request->file('as_pr_jasa_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_26')
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
                ->file('as_pr_jasa_26')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa26 =
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
                ->file('as_pr_jasa_26')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa26);
        }
        if ($request->file('as_pr_jasa_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_27')
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
                ->file('as_pr_jasa_27')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa27 =
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
                ->file('as_pr_jasa_27')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa27);
        }
        if ($request->file('as_pr_jasa_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_28')
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
                ->file('as_pr_jasa_28')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa28 =
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
                ->file('as_pr_jasa_28')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa28);
        }
        if ($request->file('as_pr_jasa_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_29')
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
                ->file('as_pr_jasa_29')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa29 =
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
                ->file('as_pr_jasa_29')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa29);
        }
        if ($request->file('as_pr_jasa_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_jasa_30')
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
                ->file('as_pr_jasa_30')
                ->getClientOriginalExtension();
            // Membuat format penamaan file
            $newnamepr_jasa30 =
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
                ->file('as_pr_jasa_30')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_jasa30);
        }

        // inputan manufaktur
        // inputan 1
        if ($request->file('as_pr_mnftr_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_1')
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
                ->file('as_pr_mnftr_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr1 =
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
                ->file('as_pr_mnftr_1')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr1);
        }
        // inputan 2
        if ($request->file('as_pr_mnftr_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_2')
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
                ->file('as_pr_mnftr_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr2 =
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
                ->file('as_pr_mnftr_2')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr2);
        }
        // inputan 3
        if ($request->file('as_pr_mnftr_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_3')
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
                ->file('as_pr_mnftr_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr3 =
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
                ->file('as_pr_mnftr_3')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr3);
        }
        // inputan 4
        if ($request->file('as_pr_mnftr_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_4')
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
                ->file('as_pr_mnftr_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr4 =
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
                ->file('as_pr_mnftr_4')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr4);
        }

        // manufaktur pr 5
        if ($request->file('as_pr_mnftr_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_5')
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
                ->file('as_pr_mnftr_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr5 =
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
                ->file('as_pr_mnftr_5')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr5);
        }
        // manufaktur pr 6
        if ($request->file('as_pr_mnftr_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_6')
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
                ->file('as_pr_mnftr_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr6 =
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
                ->file('as_pr_mnftr_6')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr6);
        }
        // manufaktur pr 7
        if ($request->file('as_pr_mnftr_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_7')
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
                ->file('as_pr_mnftr_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr7 =
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
                ->file('as_pr_mnftr_7')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr7);
        }
        // manufaktur pr 8
        if ($request->file('as_pr_mnftr_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_8')
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
                ->file('as_pr_mnftr_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr8 =
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
                ->file('as_pr_mnftr_8')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr8);
        }
        // manufaktur pr 9
        if ($request->file('as_pr_mnftr_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_9')
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
                ->file('as_pr_mnftr_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr9 =
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
                ->file('as_pr_mnftr_9')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr9);
        }
        // manufaktur pr 10
        if ($request->file('as_pr_mnftr_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pr_mnftr_10')
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
                ->file('as_pr_mnftr_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_mnftr10 =
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
                ->file('as_pr_mnftr_10')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_mnftr10);
        }

        // inputan rfq

        // inputan 1
        if ($request->file('as_pr_rfq_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_rfq_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_rfq_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_rfq1 =
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
                ->file('as_pr_rfq_1')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_rfq1);
        }
        // inputan 2
        if ($request->file('as_pr_rfq_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_rfq_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_rfq_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_rfq2 =
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
                ->file('as_pr_rfq_2')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_rfq2);
        }
        // inputan 3
        if ($request->file('as_pr_rfq_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_rfq_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_rfq_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_rfq3 =
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
                ->file('as_pr_rfq_3')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_rfq3);
        }
        // inputan 4
        if ($request->file('as_pr_rfq_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pr_rfq_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pr_rfq_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepr_rfq4 =
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
                ->file('as_pr_rfq_4')
                ->storeAs('supervisor/project/03_01_PR', $newnamepr_rfq4);
        }
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
        for ($i = 1; $i <= 45; $i++) {
            $mnyPartsPR = "as_mny_parts_pr_$i";

            if ($request->has($mnyPartsPR)) {
                $request["nparts_pr_$i"] = intval(str_replace('.', '', $request->$mnyPartsPR));
            }
        }

        for ($i = 1; $i <= 45; $i++) {
            $oldName = "oldnamepr_parts{$i}";
            $newName = "newnamepr_parts{$i}";
            $npartsName = "nparts_pr_{$i}";

            $requestKeyPR = "pr_parts_{$i}";
            $requestKeyUpBy = "up_by_parts_pr_{$i}";
            $requestKeyMny = "mny_parts_pr_{$i}";
            $requestKeyDate = "date_pr_parts_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPR] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_parts_pr_$i"];
                $request[$requestKeyMny] = $request[$npartsName];
                $request[$requestKeyDate] = $request["as_date_pr_parts_$i"];
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $mnyJasapr = "as_mny_jasa_pr_$i";

            if ($request->has($mnyJasapr)) {
                $request["njasa_pr_$i"] = intval(str_replace('.', '', $request->$mnyJasapr));
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $oldName = "oldnamepr_jasa{$i}";
            $newName = "newnamepr_jasa{$i}";
            $njasaName = "njasa_pr_{$i}";

            $requestKeyPR = "pr_jasa_{$i}";
            $requestKeyUpBy = "up_by_jasa_pr_{$i}";
            $requestKeyMny = "mny_jasa_pr_{$i}";
            $requestKeyDate = "date_pr_jasa_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPR] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_jasa_pr_$i"];
                $request[$requestKeyMny] = $request[$njasaName];
                $request[$requestKeyDate] = $request["as_date_pr_jasa_$i"];
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $mnyMnftr = "as_mny_mnftr_pr_$i";

            if ($request->has($mnyMnftr)) {
                $request["nmnftr_pr_$i"] = intval(str_replace('.', '', $request->$mnyMnftr));
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $oldName = "oldnamepr_mnftr{$i}";
            $newName = "newnamepr_mnftr{$i}";
            $nmnftrName = "nmnftr_pr_$i";

            $requestKeyPR = "pr_mnftr_{$i}";
            $requestKeyUpBy = "up_by_mnftr_pr_{$i}";
            $requestKeyMny = "mny_mnftr_pr_{$i}";
            $requestKeyDate = "date_pr_mnftr_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPR] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_mnftr_pr_$i"];
                $request[$requestKeyMny] = $request[$nmnftrName];
                $request[$requestKeyDate] = $request["as_date_pr_mnftr_$i"];
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $mnyRfqpr = "as_mny_rfq_pr_$i";

            if ($request->has($mnyRfqpr)) {
                $request["nrfq_pr_$i"] = intval(str_replace('.', '', $request->$mnyRfqpr));
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $oldName = "oldnamepr_rfq{$i}";
            $newName = "newnamepr_rfq{$i}";
            $nrfqName = "nrfq_pr_{$i}";

            $requestKeyPR = "pr_rfq_{$i}";
            $requestKeyUpBy = "up_by_rfq_pr_{$i}";
            $requestKeyMny = "mny_rfq_pr_{$i}";
            $requestKeyDate = "date_pr_rfq_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPR] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_rfq_pr_$i"];
                $request[$requestKeyMny] = $request[$nrfqName];
                $request[$requestKeyDate] = $request["as_date_pr_rfq_$i"];
            }
        }

        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksipr->update($request->all());


        return redirect()->action(
            [SpvProjectController::class, 'TigaTitikSatuFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }
    /* Purchase approval */
    public function TigaTitikDuaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',
            'status_pr_01_date',
            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',
            'status_po_03_date',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',
            'status_pay_04_date',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);

        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        $standar_project = StandarProject::select(
            'file_pr_parts_material_form',
            'file_pr_pekerjaan_jasa_form',
            'file_pr_manufaktur_form',
            'file_pr_rfq_form',
            'file_pr_per_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.03-02-detail-purchaseapproval', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }
    public function ProcessTigaTitikDuaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::findOrFail($id_pa_02_3);
        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamepa_parts1 = $koneksipa->pa_parts_1;
        $oldnamepa_parts2 = $koneksipa->pa_parts_2;
        $oldnamepa_parts3 = $koneksipa->pa_parts_3;
        $oldnamepa_parts4 = $koneksipa->pa_parts_4;
        $oldnamepa_parts5 = $koneksipa->pa_parts_5;
        $oldnamepa_parts6 = $koneksipa->pa_parts_6;
        $oldnamepa_parts7 = $koneksipa->pa_parts_7;
        $oldnamepa_parts8 = $koneksipa->pa_parts_8;
        $oldnamepa_parts9 = $koneksipa->pa_parts_9;
        $oldnamepa_parts10 = $koneksipa->pa_parts_10;
        $oldnamepa_parts11 = $koneksipa->pa_parts_11;
        $oldnamepa_parts12 = $koneksipa->pa_parts_12;
        $oldnamepa_parts13 = $koneksipa->pa_parts_13;
        $oldnamepa_parts14 = $koneksipa->pa_parts_14;
        $oldnamepa_parts15 = $koneksipa->pa_parts_15;
        $oldnamepa_parts16 = $koneksipa->pa_parts_16;
        $oldnamepa_parts17 = $koneksipa->pa_parts_17;
        $oldnamepa_parts18 = $koneksipa->pa_parts_18;
        $oldnamepa_parts19 = $koneksipa->pa_parts_19;
        $oldnamepa_parts20 = $koneksipa->pa_parts_20;
        $oldnamepa_parts21 = $koneksipa->pa_parts_21;
        $oldnamepa_parts22 = $koneksipa->pa_parts_22;
        $oldnamepa_parts23 = $koneksipa->pa_parts_23;
        $oldnamepa_parts24 = $koneksipa->pa_parts_24;
        $oldnamepa_parts25 = $koneksipa->pa_parts_25;
        $oldnamepa_parts26 = $koneksipa->pa_parts_26;
        $oldnamepa_parts27 = $koneksipa->pa_parts_27;
        $oldnamepa_parts28 = $koneksipa->pa_parts_28;
        $oldnamepa_parts29 = $koneksipa->pa_parts_29;
        $oldnamepa_parts30 = $koneksipa->pa_parts_30;
        $oldnamepa_parts31 = $koneksipa->pa_parts_31;
        $oldnamepa_parts32 = $koneksipa->pa_parts_32;
        $oldnamepa_parts33 = $koneksipa->pa_parts_33;
        $oldnamepa_parts34 = $koneksipa->pa_parts_34;
        $oldnamepa_parts35 = $koneksipa->pa_parts_35;
        $oldnamepa_parts36 = $koneksipa->pa_parts_36;
        $oldnamepa_parts37 = $koneksipa->pa_parts_37;
        $oldnamepa_parts38 = $koneksipa->pa_parts_38;
        $oldnamepa_parts39 = $koneksipa->pa_parts_39;
        $oldnamepa_parts40 = $koneksipa->pa_parts_40;
        $oldnamepa_parts41 = $koneksipa->pa_parts_41;
        $oldnamepa_parts42 = $koneksipa->pa_parts_42;
        $oldnamepa_parts43 = $koneksipa->pa_parts_43;
        $oldnamepa_parts44 = $koneksipa->pa_parts_44;
        $oldnamepa_parts45 = $koneksipa->pa_parts_45;

        $oldnamepa_jasa1 = $koneksipa->pa_jasa_1;
        $oldnamepa_jasa2 = $koneksipa->pa_jasa_2;
        $oldnamepa_jasa3 = $koneksipa->pa_jasa_3;
        $oldnamepa_jasa4 = $koneksipa->pa_jasa_4;
        $oldnamepa_jasa5 = $koneksipa->pa_jasa_5;
        $oldnamepa_jasa6 = $koneksipa->pa_jasa_6;
        $oldnamepa_jasa7 = $koneksipa->pa_jasa_7;
        $oldnamepa_jasa8 = $koneksipa->pa_jasa_8;
        $oldnamepa_jasa9 = $koneksipa->pa_jasa_9;
        $oldnamepa_jasa10 = $koneksipa->pa_jasa_10;
        $oldnamepa_jasa11 = $koneksipa->pa_jasa_11;
        $oldnamepa_jasa12 = $koneksipa->pa_jasa_12;
        $oldnamepa_jasa13 = $koneksipa->pa_jasa_13;
        $oldnamepa_jasa14 = $koneksipa->pa_jasa_14;
        $oldnamepa_jasa15 = $koneksipa->pa_jasa_15;
        $oldnamepa_jasa16 = $koneksipa->pa_jasa_16;
        $oldnamepa_jasa17 = $koneksipa->pa_jasa_17;
        $oldnamepa_jasa18 = $koneksipa->pa_jasa_18;
        $oldnamepa_jasa19 = $koneksipa->pa_jasa_19;
        $oldnamepa_jasa20 = $koneksipa->pa_jasa_20;
        $oldnamepa_jasa21 = $koneksipa->pa_jasa_21;
        $oldnamepa_jasa22 = $koneksipa->pa_jasa_22;
        $oldnamepa_jasa23 = $koneksipa->pa_jasa_23;
        $oldnamepa_jasa24 = $koneksipa->pa_jasa_24;
        $oldnamepa_jasa25 = $koneksipa->pa_jasa_25;
        $oldnamepa_jasa26 = $koneksipa->pa_jasa_26;
        $oldnamepa_jasa27 = $koneksipa->pa_jasa_27;
        $oldnamepa_jasa28 = $koneksipa->pa_jasa_28;
        $oldnamepa_jasa29 = $koneksipa->pa_jasa_29;
        $oldnamepa_jasa30 = $koneksipa->pa_jasa_30;

        $oldnamepa_mnftr1 = $koneksipa->pa_mnftr_1;
        $oldnamepa_mnftr2 = $koneksipa->pa_mnftr_2;
        $oldnamepa_mnftr3 = $koneksipa->pa_mnftr_3;
        $oldnamepa_mnftr4 = $koneksipa->pa_mnftr_4;
        $oldnamepa_mnftr5 = $koneksipa->pa_mnftr_5;
        $oldnamepa_mnftr6 = $koneksipa->pa_mnftr_6;
        $oldnamepa_mnftr7 = $koneksipa->pa_mnftr_7;
        $oldnamepa_mnftr8 = $koneksipa->pa_mnftr_8;
        $oldnamepa_mnftr9 = $koneksipa->pa_mnftr_9;
        $oldnamepa_mnftr10 = $koneksipa->pa_mnftr_10;

        $oldnamepa_epq1 = $koneksipa->pa_epq_1;
        $oldnamepa_epq2 = $koneksipa->pa_epq_2;
        $oldnamepa_epq3 = $koneksipa->pa_epq_3;
        $oldnamepa_epq4 = $koneksipa->pa_epq_4;
        $oldnamepa_epq5 = $koneksipa->pa_epq_5;

        //nama file baru
        $newnamepa_parts1 = $koneksipa->pa_parts_1;
        $newnamepa_parts2 = $koneksipa->pa_parts_2;
        $newnamepa_parts3 = $koneksipa->pa_parts_3;
        $newnamepa_parts4 = $koneksipa->pa_parts_4;
        $newnamepa_parts5 = $koneksipa->pa_parts_5;
        $newnamepa_parts6 = $koneksipa->pa_parts_6;
        $newnamepa_parts7 = $koneksipa->pa_parts_7;
        $newnamepa_parts8 = $koneksipa->pa_parts_8;
        $newnamepa_parts9 = $koneksipa->pa_parts_9;
        $newnamepa_parts10 = $koneksipa->pa_parts_10;
        $newnamepa_parts11 = $koneksipa->pa_parts_11;
        $newnamepa_parts12 = $koneksipa->pa_parts_12;
        $newnamepa_parts13 = $koneksipa->pa_parts_13;
        $newnamepa_parts14 = $koneksipa->pa_parts_14;
        $newnamepa_parts15 = $koneksipa->pa_parts_15;
        $newnamepa_parts16 = $koneksipa->pa_parts_16;
        $newnamepa_parts17 = $koneksipa->pa_parts_17;
        $newnamepa_parts18 = $koneksipa->pa_parts_18;
        $newnamepa_parts19 = $koneksipa->pa_parts_19;
        $newnamepa_parts20 = $koneksipa->pa_parts_20;
        $newnamepa_parts21 = $koneksipa->pa_parts_21;
        $newnamepa_parts22 = $koneksipa->pa_parts_22;
        $newnamepa_parts23 = $koneksipa->pa_parts_23;
        $newnamepa_parts24 = $koneksipa->pa_parts_24;
        $newnamepa_parts25 = $koneksipa->pa_parts_25;
        $newnamepa_parts26 = $koneksipa->pa_parts_26;
        $newnamepa_parts27 = $koneksipa->pa_parts_27;
        $newnamepa_parts28 = $koneksipa->pa_parts_28;
        $newnamepa_parts29 = $koneksipa->pa_parts_29;
        $newnamepa_parts30 = $koneksipa->pa_parts_30;
        $newnamepa_parts31 = $koneksipa->pa_parts_31;
        $newnamepa_parts32 = $koneksipa->pa_parts_32;
        $newnamepa_parts33 = $koneksipa->pa_parts_33;
        $newnamepa_parts34 = $koneksipa->pa_parts_34;
        $newnamepa_parts35 = $koneksipa->pa_parts_35;
        $newnamepa_parts36 = $koneksipa->pa_parts_36;
        $newnamepa_parts37 = $koneksipa->pa_parts_37;
        $newnamepa_parts38 = $koneksipa->pa_parts_38;
        $newnamepa_parts39 = $koneksipa->pa_parts_39;
        $newnamepa_parts40 = $koneksipa->pa_parts_40;
        $newnamepa_parts41 = $koneksipa->pa_parts_41;
        $newnamepa_parts42 = $koneksipa->pa_parts_42;
        $newnamepa_parts43 = $koneksipa->pa_parts_43;
        $newnamepa_parts44 = $koneksipa->pa_parts_44;
        $newnamepa_parts45 = $koneksipa->pa_parts_45;

        $newnamepa_jasa1 = $koneksipa->pa_jasa_1;
        $newnamepa_jasa2 = $koneksipa->pa_jasa_2;
        $newnamepa_jasa3 = $koneksipa->pa_jasa_3;
        $newnamepa_jasa4 = $koneksipa->pa_jasa_4;
        $newnamepa_jasa5 = $koneksipa->pa_jasa_5;
        $newnamepa_jasa6 = $koneksipa->pa_jasa_6;
        $newnamepa_jasa7 = $koneksipa->pa_jasa_7;
        $newnamepa_jasa8 = $koneksipa->pa_jasa_8;
        $newnamepa_jasa9 = $koneksipa->pa_jasa_9;
        $newnamepa_jasa10 = $koneksipa->pa_jasa_10;
        $newnamepa_jasa11 = $koneksipa->pa_jasa_11;
        $newnamepa_jasa12 = $koneksipa->pa_jasa_12;
        $newnamepa_jasa13 = $koneksipa->pa_jasa_13;
        $newnamepa_jasa14 = $koneksipa->pa_jasa_14;
        $newnamepa_jasa15 = $koneksipa->pa_jasa_15;
        $newnamepa_jasa16 = $koneksipa->pa_jasa_16;
        $newnamepa_jasa17 = $koneksipa->pa_jasa_17;
        $newnamepa_jasa18 = $koneksipa->pa_jasa_18;
        $newnamepa_jasa19 = $koneksipa->pa_jasa_19;
        $newnamepa_jasa20 = $koneksipa->pa_jasa_20;
        $newnamepa_jasa21 = $koneksipa->pa_jasa_21;
        $newnamepa_jasa22 = $koneksipa->pa_jasa_22;
        $newnamepa_jasa23 = $koneksipa->pa_jasa_23;
        $newnamepa_jasa24 = $koneksipa->pa_jasa_24;
        $newnamepa_jasa25 = $koneksipa->pa_jasa_25;
        $newnamepa_jasa26 = $koneksipa->pa_jasa_26;
        $newnamepa_jasa27 = $koneksipa->pa_jasa_27;
        $newnamepa_jasa28 = $koneksipa->pa_jasa_28;
        $newnamepa_jasa29 = $koneksipa->pa_jasa_29;
        $newnamepa_jasa30 = $koneksipa->pa_jasa_30;

        $newnamepa_mnftr1 = $koneksipa->pa_mnftr_1;
        $newnamepa_mnftr2 = $koneksipa->pa_mnftr_2;
        $newnamepa_mnftr3 = $koneksipa->pa_mnftr_3;
        $newnamepa_mnftr4 = $koneksipa->pa_mnftr_4;
        $newnamepa_mnftr5 = $koneksipa->pa_mnftr_5;
        $newnamepa_mnftr6 = $koneksipa->pa_mnftr_6;
        $newnamepa_mnftr7 = $koneksipa->pa_mnftr_7;
        $newnamepa_mnftr8 = $koneksipa->pa_mnftr_8;
        $newnamepa_mnftr9 = $koneksipa->pa_mnftr_9;
        $newnamepa_mnftr10 = $koneksipa->pa_mnftr_10;

        $newnamepa_epq1 = $koneksipa->pa_epq_1;
        $newnamepa_epq2 = $koneksipa->pa_epq_2;
        $newnamepa_epq3 = $koneksipa->pa_epq_3;
        $newnamepa_epq4 = $koneksipa->pa_epq_4;
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
        // inputan 2
        if ($request->file('as_pa_parts_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_2')
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
                ->file('as_pa_parts_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts2 =
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
                ->file('as_pa_parts_2')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts2);
        }
        // inputan 3
        if ($request->file('as_pa_parts_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_3')
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
                ->file('as_pa_parts_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts3 =
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
                ->file('as_pa_parts_3')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts3);
        }
        // inputan 4
        if ($request->file('as_pa_parts_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_4')
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
                ->file('as_pa_parts_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts4 =
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
                ->file('as_pa_parts_4')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts4);
        }
        // inputan 5
        if ($request->file('as_pa_parts_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_5')
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
                ->file('as_pa_parts_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts5 =
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
                ->file('as_pa_parts_5')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts5);
        }
        // inputan 6
        if ($request->file('as_pa_parts_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_6')
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
                ->file('as_pa_parts_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts6 =
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
                ->file('as_pa_parts_6')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts6);
        }
        // inputan 7
        if ($request->file('as_pa_parts_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_7')
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
                ->file('as_pa_parts_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts7 =
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
                ->file('as_pa_parts_7')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts7);
        }
        // inputan 4
        if ($request->file('as_pa_parts_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_8')
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
                ->file('as_pa_parts_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts8 =
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
                ->file('as_pa_parts_8')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts8);
        }
        // inputan 9
        if ($request->file('as_pa_parts_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_9')
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
                ->file('as_pa_parts_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts9 =
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
                ->file('as_pa_parts_9')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts9);
        }
        // inputan 10
        if ($request->file('as_pa_parts_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_10')
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
                ->file('as_pa_parts_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts10 =
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
                ->file('as_pa_parts_10')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts10);
        }
        // batas 10 inputan
        // inputan 11
        if ($request->file('as_pa_parts_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_11')
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
                ->file('as_pa_parts_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts11 =
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
                ->file('as_pa_parts_11')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts11);
        }
        // inputan 12
        if ($request->file('as_pa_parts_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_12')
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
                ->file('as_pa_parts_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts12 =
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
                ->file('as_pa_parts_12')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts12);
        }
        // inputan 13
        if ($request->file('as_pa_parts_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_13')
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
                ->file('as_pa_parts_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts13 =
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
                ->file('as_pa_parts_13')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts13);
        }
        // inputan 14
        if ($request->file('as_pa_parts_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_14')
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
                ->file('as_pa_parts_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts14 =
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
                ->file('as_pa_parts_14')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts14);
        }
        // inputan 15
        if ($request->file('as_pa_parts_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_15')
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
                ->file('as_pa_parts_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts15 =
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
                ->file('as_pa_parts_15')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts15);
        }
        // inputan 16
        if ($request->file('as_pa_parts_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_16')
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
                ->file('as_pa_parts_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts16 =
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
                ->file('as_pa_parts_16')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts16);
        }
        // inputan 17
        if ($request->file('as_pa_parts_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_17')
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
                ->file('as_pa_parts_17')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts17 =
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
                ->file('as_pa_parts_17')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts17);
        }
        // inputan 18
        if ($request->file('as_pa_parts_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_18')
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
                ->file('as_pa_parts_18')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts18 =
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
                ->file('as_pa_parts_18')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts18);
        }

        // inputan 19
        if ($request->file('as_pa_parts_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_19')
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
                ->file('as_pa_parts_19')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts19 =
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
                ->file('as_pa_parts_19')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts19);
        }
        // inputan 20
        if ($request->file('as_pa_parts_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_20')
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
                ->file('as_pa_parts_20')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts20 =
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
                ->file('as_pa_parts_20')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts20);
        }
        // inputan 21
        if ($request->file('as_pa_parts_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_21')
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
                ->file('as_pa_parts_21')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts21 =
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
                ->file('as_pa_parts_21')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts21);
        }
        // inputan 22
        if ($request->file('as_pa_parts_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_22')
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
                ->file('as_pa_parts_22')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts22 =
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
                ->file('as_pa_parts_22')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts22);
        }
        // inputan 23
        if ($request->file('as_pa_parts_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_23')
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
                ->file('as_pa_parts_23')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts23 =
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
                ->file('as_pa_parts_23')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts23);
        }
        // inputan 24
        if ($request->file('as_pa_parts_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_24')
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
                ->file('as_pa_parts_24')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts24 =
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
                ->file('as_pa_parts_24')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts24);
        }
        // inputan 25
        if ($request->file('as_pa_parts_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_25')
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
                ->file('as_pa_parts_25')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts25 =
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
                ->file('as_pa_parts_25')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts25);
        }
        // inputan 26
        if ($request->file('as_pa_parts_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_26')
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
                ->file('as_pa_parts_26')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts26 =
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
                ->file('as_pa_parts_26')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts26);
        }
        // inputan 27
        if ($request->file('as_pa_parts_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_27')
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
                ->file('as_pa_parts_27')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts27 =
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
                ->file('as_pa_parts_27')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts27);
        }
        // inputan 28
        if ($request->file('as_pa_parts_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_28')
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
                ->file('as_pa_parts_28')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts28 =
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
                ->file('as_pa_parts_28')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts28);
        }
        // inputan 29
        if ($request->file('as_pa_parts_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_29')
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
                ->file('as_pa_parts_29')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts29 =
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
                ->file('as_pa_parts_29')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts29);
        }
        // inputan 30
        if ($request->file('as_pa_parts_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_30')
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
                ->file('as_pa_parts_30')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts30 =
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
                ->file('as_pa_parts_30')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts30);
        }
        // inputan 31
        if ($request->file('as_pa_parts_31')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_31')
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
                ->file('as_pa_parts_31')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts31 =
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
                ->file('as_pa_parts_31')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts31);
        }
        // inputan 32
        if ($request->file('as_pa_parts_32')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_32')
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
                ->file('as_pa_parts_32')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts32 =
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
                ->file('as_pa_parts_32')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts32);
        }
        // inputan 33
        if ($request->file('as_pa_parts_33')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_33')
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
                ->file('as_pa_parts_33')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts33 =
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
                ->file('as_pa_parts_33')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts33);
        }
        // inputan 34
        if ($request->file('as_pa_parts_34')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_34')
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
                ->file('as_pa_parts_34')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts34 =
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
                ->file('as_pa_parts_34')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts34);
        }
        // inputan 35
        if ($request->file('as_pa_parts_35')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_35')
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
                ->file('as_pa_parts_35')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts35 =
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
                ->file('as_pa_parts_35')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts35);
        }
        // inputan 36
        if ($request->file('as_pa_parts_36')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_36')
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
                ->file('as_pa_parts_36')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts36 =
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
                ->file('as_pa_parts_36')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts36);
        }
        if ($request->file('as_pa_parts_37')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_37')
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
                ->file('as_pa_parts_37')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts37 =
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
                ->file('as_pa_parts_37')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts37);
        }
        if ($request->file('as_pa_parts_38')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_38')
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
                ->file('as_pa_parts_38')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts38 =
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
                ->file('as_pa_parts_38')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts38);
        }
        if ($request->file('as_pa_parts_39')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_39')
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
                ->file('as_pa_parts_39')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts39 =
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
                ->file('as_pa_parts_39')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts39);
        }
        if ($request->file('as_pa_parts_40')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_40')
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
                ->file('as_pa_parts_40')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts40 =
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
                ->file('as_pa_parts_40')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts40);
        }
        if ($request->file('as_pa_parts_41')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_41')
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
                ->file('as_pa_parts_41')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts41 =
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
                ->file('as_pa_parts_41')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts41);
        }
        if ($request->file('as_pa_parts_42')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_42')
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
                ->file('as_pa_parts_42')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts42 =
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
                ->file('as_pa_parts_42')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts42);
        }
        if ($request->file('as_pa_parts_43')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_43')
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
                ->file('as_pa_parts_43')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts43 =
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
                ->file('as_pa_parts_43')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts43);
        }
        if ($request->file('as_pa_parts_44')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_44')
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
                ->file('as_pa_parts_44')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts44 =
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
                ->file('as_pa_parts_44')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts44);
        }
        if ($request->file('as_pa_parts_45')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_parts_45')
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
                ->file('as_pa_parts_45')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_parts45 =
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
                ->file('as_pa_parts_45')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_parts45);
        }

        // inputan jasa
        // inputan 1
        if ($request->file('as_pa_jasa_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa1 =
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
                ->file('as_pa_jasa_1')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa1);
        }
        // inputan 2
        if ($request->file('as_pa_jasa_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa2 =
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
                ->file('as_pa_jasa_2')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa2);
        }
        // inputan 3
        if ($request->file('as_pa_jasa_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa3 =
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
                ->file('as_pa_jasa_3')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa3);
        }
        // inputan 4
        if ($request->file('as_pa_jasa_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa4 =
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
                ->file('as_pa_jasa_4')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa4);
        }

        // jasa 5
        if ($request->file('as_pa_jasa_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_5')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa5 =
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
                ->file('as_pa_jasa_5')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa5);
        }
        // jasa 6
        if ($request->file('as_pa_jasa_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_6')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa6 =
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
                ->file('as_pa_jasa_6')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa6);
        }
        // jasa 7
        if ($request->file('as_pa_jasa_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_7')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa7 =
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
                ->file('as_pa_jasa_7')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa7);
        }
        // jasa 8
        if ($request->file('as_pa_jasa_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_8')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa8 =
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
                ->file('as_pa_jasa_8')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa8);
        }
        // jasa 9
        if ($request->file('as_pa_jasa_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_jasa_9')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_jasa_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa9 =
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
                ->file('as_pa_jasa_9')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa9);
        }
        // jasa 10
        if ($request->file('as_pa_jasa_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_10')
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
                ->file('as_pa_jasa_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa10 =
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
                ->file('as_pa_jasa_10')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa10);
        }
        // jasa 11
        if ($request->file('as_pa_jasa_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_11')
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
                ->file('as_pa_jasa_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa11 =
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
                ->file('as_pa_jasa_11')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa11);
        }
        // jasa 12
        if ($request->file('as_pa_jasa_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_12')
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
                ->file('as_pa_jasa_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa12 =
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
                ->file('as_pa_jasa_12')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa12);
        }
        // jasa 13
        if ($request->file('as_pa_jasa_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_13')
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
                ->file('as_pa_jasa_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa13 =
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
                ->file('as_pa_jasa_13')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa13);
        }
        // jasa 15
        if ($request->file('as_pa_jasa_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_14')
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
                ->file('as_pa_jasa_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa14 =
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
                ->file('as_pa_jasa_14')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa14);
        }
        // jasa 15
        if ($request->file('as_pa_jasa_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_15')
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
                ->file('as_pa_jasa_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa15 =
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
                ->file('as_pa_jasa_15')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa15);
        }
        // jasa 16
        if ($request->file('as_pa_jasa_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_16')
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
                ->file('as_pa_jasa_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa16 =
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
                ->file('as_pa_jasa_16')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa16);
        }

        if ($request->file('as_pa_jasa_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_17')
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
                ->file('as_pa_jasa_17')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa17 =
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
                ->file('as_pa_jasa_17')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa17);
        }
        if ($request->file('as_pa_jasa_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_18')
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
                ->file('as_pa_jasa_18')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa18 =
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
                ->file('as_pa_jasa_18')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa18);
        }
        if ($request->file('as_pa_jasa_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_19')
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
                ->file('as_pa_jasa_19')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa19 =
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
                ->file('as_pa_jasa_19')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa19);
        }
        if ($request->file('as_pa_jasa_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_20')
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
                ->file('as_pa_jasa_20')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa20 =
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
                ->file('as_pa_jasa_20')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa20);
        }
        if ($request->file('as_pa_jasa_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_21')
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
                ->file('as_pa_jasa_21')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa21 =
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
                ->file('as_pa_jasa_21')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa21);
        }
        if ($request->file('as_pa_jasa_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_22')
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
                ->file('as_pa_jasa_22')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa22 =
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
                ->file('as_pa_jasa_22')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa22);
        }
        if ($request->file('as_pa_jasa_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_23')
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
                ->file('as_pa_jasa_23')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa23 =
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
                ->file('as_pa_jasa_23')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa23);
        }
        if ($request->file('as_pa_jasa_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_24')
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
                ->file('as_pa_jasa_24')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa24 =
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
                ->file('as_pa_jasa_24')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa24);
        }
        if ($request->file('as_pa_jasa_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_25')
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
                ->file('as_pa_jasa_25')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa25 =
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
                ->file('as_pa_jasa_25')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa25);
        }
        if ($request->file('as_pa_jasa_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_26')
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
                ->file('as_pa_jasa_26')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa26 =
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
                ->file('as_pa_jasa_26')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa26);
        }
        if ($request->file('as_pa_jasa_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_27')
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
                ->file('as_pa_jasa_27')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa27 =
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
                ->file('as_pa_jasa_27')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa27);
        }
        if ($request->file('as_pa_jasa_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_28')
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
                ->file('as_pa_jasa_28')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa28 =
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
                ->file('as_pa_jasa_28')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa28);
        }
        if ($request->file('as_pa_jasa_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_29')
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
                ->file('as_pa_jasa_29')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa29 =
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
                ->file('as_pa_jasa_29')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa29);
        }
        if ($request->file('as_pa_jasa_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_jasa_30')
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
                ->file('as_pa_jasa_30')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_jasa30 =
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
                ->file('as_pa_jasa_30')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_jasa30);
        }

        // inputan manufaktur
        // inputan 1
        if ($request->file('as_pa_mnftr_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_1')
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
                ->file('as_pa_mnftr_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr1 =
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
                ->file('as_pa_mnftr_1')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr1);
        }
        // inputan 2
        if ($request->file('as_pa_mnftr_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_2')
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
                ->file('as_pa_mnftr_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr2 =
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
                ->file('as_pa_mnftr_2')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr2);
        }
        // inputan 3
        if ($request->file('as_pa_mnftr_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_3')
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
                ->file('as_pa_mnftr_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr3 =
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
                ->file('as_pa_mnftr_3')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr3);
        }
        // inputan 4
        if ($request->file('as_pa_mnftr_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_4')
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
                ->file('as_pa_mnftr_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr4 =
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
                ->file('as_pa_mnftr_4')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr4);
        }

        // manufaktur pr 5
        if ($request->file('as_pa_mnftr_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_5')
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
                ->file('as_pa_mnftr_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr5 =
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
                ->file('as_pa_mnftr_5')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr5);
        }
        // manufaktur pr 6
        if ($request->file('as_pa_mnftr_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_6')
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
                ->file('as_pa_mnftr_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr6 =
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
                ->file('as_pa_mnftr_6')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr6);
        }
        // manufaktur pr 7
        if ($request->file('as_pa_mnftr_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_7')
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
                ->file('as_pa_mnftr_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr7 =
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
                ->file('as_pa_mnftr_7')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr7);
        }
        // manufaktur pr 8
        if ($request->file('as_pa_mnftr_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_8')
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
                ->file('as_pa_mnftr_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr8 =
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
                ->file('as_pa_mnftr_8')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr8);
        }
        // manufaktur pr 9
        if ($request->file('as_pa_mnftr_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_9')
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
                ->file('as_pa_mnftr_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr9 =
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
                ->file('as_pa_mnftr_9')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr9);
        }
        // manufaktur pr 10
        if ($request->file('as_pa_mnftr_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pa_mnftr_10')
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
                ->file('as_pa_mnftr_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_mnftr10 =
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
                ->file('as_pa_mnftr_10')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_mnftr10);
        }

        // inputan rfq

        // inputan 1
        if ($request->file('as_pa_epq_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_epq_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_epq_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_epq1 =
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
                ->file('as_pa_epq_1')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_epq1);
        }
        // inputan 2
        if ($request->file('as_pa_epq_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_epq_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_epq_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_epq2 =
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
                ->file('as_pa_epq_2')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_epq2);
        }
        // inputan 3
        if ($request->file('as_pa_epq_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_epq_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_epq_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_epq3 =
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
                ->file('as_pa_epq_3')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_epq3);
        }
        // inputan 4
        if ($request->file('as_pa_epq_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pa_epq_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pa_epq_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepa_epq4 =
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
                ->file('as_pa_epq_4')
                ->storeAs('supervisor/project/03_02_PR', $newnamepa_epq4);
        }
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

        for ($i = 1; $i <= 45; $i++) {
            $mnyPartsPA = "as_mny_parts_pa_$i";

            if ($request->has($mnyPartsPA)) {
                $request["nparts_pa_$i"] = intval(str_replace('.', '', $request->$mnyPartsPA));
            }
        }

        for ($i = 1; $i <= 45; $i++) {
            $oldName = "oldnamepa_parts{$i}";
            $newName = "newnamepa_parts{$i}";
            $npartsName = "nparts_pa_{$i}";

            $requestKeyPA = "pa_parts_{$i}";
            $requestKeyUpBy = "up_by_parts_pa_{$i}";
            $requestKeyMny = "mny_parts_pa_{$i}";
            $requestKeyDate = "date_pa_parts_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPA] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_parts_pa_$i"];
                $request[$requestKeyMny] = $request[$npartsName];
                $request[$requestKeyDate] = $request["as_date_pa_parts_$i"];
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $mnyJasapa = "as_mny_jasa_pa_$i";

            if ($request->has($mnyJasapa)) {
                $request["njasa_pa_$i"] = intval(str_replace('.', '', $request->$mnyJasapa));
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $oldName = "oldnamepa_jasa{$i}";
            $newName = "newnamepa_jasa{$i}";
            $njasaName = "njasa_pa_{$i}";

            $requestKeyPA = "pa_jasa_{$i}";
            $requestKeyUpBy = "up_by_jasa_pa_{$i}";
            $requestKeyMny = "mny_jasa_pa_{$i}";
            $requestKeyDate = "date_pa_jasa_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPA] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_jasa_pa_$i"];
                $request[$requestKeyMny] = $request[$njasaName];
                $request[$requestKeyDate] = $request["as_date_pa_jasa_$i"];
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $mnyMnftr = "as_mny_mnftr_pa_$i";

            if ($request->has($mnyMnftr)) {
                $request["nmnftr_pa_$i"] = intval(str_replace('.', '', $request->$mnyMnftr));
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $oldName = "oldnamepa_mnftr{$i}";
            $newName = "newnamepa_mnftr{$i}";
            $nmnftrName = "nmnftr_pa_$i";

            $requestKeyPA = "pa_mnftr_{$i}";
            $requestKeyUpBy = "up_by_mnftr_pa_{$i}";
            $requestKeyMny = "mny_mnftr_pa_{$i}";
            $requestKeyDate = "date_pa_mnftr_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPA] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_mnftr_pa_$i"];
                $request[$requestKeyMny] = $request[$nmnftrName];
                $request[$requestKeyDate] = $request["as_date_pa_mnftr_$i"];
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $mnyEpqPA = "as_mny_epq_pa_$i";

            if ($request->has($mnyEpqPA)) {
                $request["nepq_pa_$i"] = intval(str_replace('.', '', $request->$mnyEpqPA));
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $oldName = "oldnamepa_epq{$i}";
            $newName = "newnamepa_epq{$i}";
            $nepqName = "nepq_pa_{$i}";

            $requestKeyPA = "pa_epq_{$i}";
            $requestKeyUpBy = "up_by_epq_pa_{$i}";
            $requestKeyMny = "mny_epq_pa_{$i}";
            $requestKeyDate = "date_pa_epq_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPA] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_epq_pa_$i"];
                $request[$requestKeyMny] = $request[$nepqName];
                $request[$requestKeyDate] = $request["as_date_pa_epq_$i"];
            }
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
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }

    /* purchase order */
    public function TigaTitikTigaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);

        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',
            'status_pr_01_date',
            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',
            'status_pa_02_date',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',
            'status_pay_04_date',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);

        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        $standar_project = StandarProject::select(
            'file_pr_parts_material_form',
            'file_pr_pekerjaan_jasa_form',
            'file_pr_manufaktur_form',
            'file_pr_rfq_form',
            'file_pr_per_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.03-03-detail-purchaseorder', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }
    public function ProcessTigaTitikTigaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',
            'status_pa_02_date'
        )->findOrFail($id_pa_02_3);
        $koneksipo = POproject::findOrFail($id_po_03_3);
        $koneksipay = PAYproject::findOrFail($id_pay_04_3);
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamepo_parts1 = $koneksipo->po_parts_1;
        $oldnamepo_parts2 = $koneksipo->po_parts_2;
        $oldnamepo_parts3 = $koneksipo->po_parts_3;
        $oldnamepo_parts4 = $koneksipo->po_parts_4;
        $oldnamepo_parts5 = $koneksipo->po_parts_5;
        $oldnamepo_parts6 = $koneksipo->po_parts_6;
        $oldnamepo_parts7 = $koneksipo->po_parts_7;
        $oldnamepo_parts8 = $koneksipo->po_parts_8;
        $oldnamepo_parts9 = $koneksipo->po_parts_9;
        $oldnamepo_parts10 = $koneksipo->po_parts_10;
        $oldnamepo_parts11 = $koneksipo->po_parts_11;
        $oldnamepo_parts12 = $koneksipo->po_parts_12;
        $oldnamepo_parts13 = $koneksipo->po_parts_13;
        $oldnamepo_parts14 = $koneksipo->po_parts_14;
        $oldnamepo_parts15 = $koneksipo->po_parts_15;
        $oldnamepo_parts16 = $koneksipo->po_parts_16;
        $oldnamepo_parts17 = $koneksipo->po_parts_17;
        $oldnamepo_parts18 = $koneksipo->po_parts_18;
        $oldnamepo_parts19 = $koneksipo->po_parts_19;
        $oldnamepo_parts20 = $koneksipo->po_parts_20;
        $oldnamepo_parts21 = $koneksipo->po_parts_21;
        $oldnamepo_parts22 = $koneksipo->po_parts_22;
        $oldnamepo_parts23 = $koneksipo->po_parts_23;
        $oldnamepo_parts24 = $koneksipo->po_parts_24;
        $oldnamepo_parts25 = $koneksipo->po_parts_25;
        $oldnamepo_parts26 = $koneksipo->po_parts_26;
        $oldnamepo_parts27 = $koneksipo->po_parts_27;
        $oldnamepo_parts28 = $koneksipo->po_parts_28;
        $oldnamepo_parts29 = $koneksipo->po_parts_29;
        $oldnamepo_parts30 = $koneksipo->po_parts_30;
        $oldnamepo_parts31 = $koneksipo->po_parts_31;
        $oldnamepo_parts32 = $koneksipo->po_parts_32;
        $oldnamepo_parts33 = $koneksipo->po_parts_33;
        $oldnamepo_parts34 = $koneksipo->po_parts_34;
        $oldnamepo_parts35 = $koneksipo->po_parts_35;
        $oldnamepo_parts36 = $koneksipo->po_parts_36;
        $oldnamepo_parts37 = $koneksipo->po_parts_37;
        $oldnamepo_parts38 = $koneksipo->po_parts_38;
        $oldnamepo_parts39 = $koneksipo->po_parts_39;
        $oldnamepo_parts40 = $koneksipo->po_parts_40;
        $oldnamepo_parts41 = $koneksipo->po_parts_41;
        $oldnamepo_parts42 = $koneksipo->po_parts_42;
        $oldnamepo_parts43 = $koneksipo->po_parts_43;
        $oldnamepo_parts44 = $koneksipo->po_parts_44;
        $oldnamepo_parts45 = $koneksipo->po_parts_45;

        $oldnamepo_jasa1 = $koneksipo->po_jasa_1;
        $oldnamepo_jasa2 = $koneksipo->po_jasa_2;
        $oldnamepo_jasa3 = $koneksipo->po_jasa_3;
        $oldnamepo_jasa4 = $koneksipo->po_jasa_4;
        $oldnamepo_jasa5 = $koneksipo->po_jasa_5;
        $oldnamepo_jasa6 = $koneksipo->po_jasa_6;
        $oldnamepo_jasa7 = $koneksipo->po_jasa_7;
        $oldnamepo_jasa8 = $koneksipo->po_jasa_8;
        $oldnamepo_jasa9 = $koneksipo->po_jasa_9;
        $oldnamepo_jasa10 = $koneksipo->po_jasa_10;
        $oldnamepo_jasa11 = $koneksipo->po_jasa_11;
        $oldnamepo_jasa12 = $koneksipo->po_jasa_12;
        $oldnamepo_jasa13 = $koneksipo->po_jasa_13;
        $oldnamepo_jasa14 = $koneksipo->po_jasa_14;
        $oldnamepo_jasa15 = $koneksipo->po_jasa_15;
        $oldnamepo_jasa16 = $koneksipo->po_jasa_16;
        $oldnamepo_jasa17 = $koneksipo->po_jasa_17;
        $oldnamepo_jasa18 = $koneksipo->po_jasa_18;
        $oldnamepo_jasa19 = $koneksipo->po_jasa_19;
        $oldnamepo_jasa20 = $koneksipo->po_jasa_20;
        $oldnamepo_jasa21 = $koneksipo->po_jasa_21;
        $oldnamepo_jasa22 = $koneksipo->po_jasa_22;
        $oldnamepo_jasa23 = $koneksipo->po_jasa_23;
        $oldnamepo_jasa24 = $koneksipo->po_jasa_24;
        $oldnamepo_jasa25 = $koneksipo->po_jasa_25;
        $oldnamepo_jasa26 = $koneksipo->po_jasa_26;
        $oldnamepo_jasa27 = $koneksipo->po_jasa_27;
        $oldnamepo_jasa28 = $koneksipo->po_jasa_28;
        $oldnamepo_jasa29 = $koneksipo->po_jasa_29;
        $oldnamepo_jasa30 = $koneksipo->po_jasa_30;

        $oldnamepo_mnftr1 = $koneksipo->po_mnftr_1;
        $oldnamepo_mnftr2 = $koneksipo->po_mnftr_2;
        $oldnamepo_mnftr3 = $koneksipo->po_mnftr_3;
        $oldnamepo_mnftr4 = $koneksipo->po_mnftr_4;
        $oldnamepo_mnftr5 = $koneksipo->po_mnftr_5;
        $oldnamepo_mnftr6 = $koneksipo->po_mnftr_6;
        $oldnamepo_mnftr7 = $koneksipo->po_mnftr_7;
        $oldnamepo_mnftr8 = $koneksipo->po_mnftr_8;
        $oldnamepo_mnftr9 = $koneksipo->po_mnftr_9;
        $oldnamepo_mnftr10 = $koneksipo->po_mnftr_10;

        $oldnamepo_capo1 = $koneksipo->po_capo_1;
        $oldnamepo_capo2 = $koneksipo->po_capo_2;
        $oldnamepo_capo3 = $koneksipo->po_capo_3;
        $oldnamepo_capo4 = $koneksipo->po_capo_4;
        $oldnamepo_capo5 = $koneksipo->po_capo_5;

        //nama file baru
        $newnamepo_parts1 = $koneksipo->po_parts_1;
        $newnamepo_parts2 = $koneksipo->po_parts_2;
        $newnamepo_parts3 = $koneksipo->po_parts_3;
        $newnamepo_parts4 = $koneksipo->po_parts_4;
        $newnamepo_parts5 = $koneksipo->po_parts_5;
        $newnamepo_parts6 = $koneksipo->po_parts_6;
        $newnamepo_parts7 = $koneksipo->po_parts_7;
        $newnamepo_parts8 = $koneksipo->po_parts_8;
        $newnamepo_parts9 = $koneksipo->po_parts_9;
        $newnamepo_parts10 = $koneksipo->po_parts_10;
        $newnamepo_parts11 = $koneksipo->po_parts_11;
        $newnamepo_parts12 = $koneksipo->po_parts_12;
        $newnamepo_parts13 = $koneksipo->po_parts_13;
        $newnamepo_parts14 = $koneksipo->po_parts_14;
        $newnamepo_parts15 = $koneksipo->po_parts_15;
        $newnamepo_parts16 = $koneksipo->po_parts_16;
        $newnamepo_parts17 = $koneksipo->po_parts_17;
        $newnamepo_parts18 = $koneksipo->po_parts_18;
        $newnamepo_parts19 = $koneksipo->po_parts_19;
        $newnamepo_parts20 = $koneksipo->po_parts_20;
        $newnamepo_parts21 = $koneksipo->po_parts_21;
        $newnamepo_parts22 = $koneksipo->po_parts_22;
        $newnamepo_parts23 = $koneksipo->po_parts_23;
        $newnamepo_parts24 = $koneksipo->po_parts_24;
        $newnamepo_parts25 = $koneksipo->po_parts_25;
        $newnamepo_parts26 = $koneksipo->po_parts_26;
        $newnamepo_parts27 = $koneksipo->po_parts_27;
        $newnamepo_parts28 = $koneksipo->po_parts_28;
        $newnamepo_parts29 = $koneksipo->po_parts_29;
        $newnamepo_parts30 = $koneksipo->po_parts_30;
        $newnamepo_parts31 = $koneksipo->po_parts_31;
        $newnamepo_parts32 = $koneksipo->po_parts_32;
        $newnamepo_parts33 = $koneksipo->po_parts_33;
        $newnamepo_parts34 = $koneksipo->po_parts_34;
        $newnamepo_parts35 = $koneksipo->po_parts_35;
        $newnamepo_parts36 = $koneksipo->po_parts_36;
        $newnamepo_parts37 = $koneksipo->po_parts_37;
        $newnamepo_parts38 = $koneksipo->po_parts_38;
        $newnamepo_parts39 = $koneksipo->po_parts_39;
        $newnamepo_parts40 = $koneksipo->po_parts_40;
        $newnamepo_parts41 = $koneksipo->po_parts_41;
        $newnamepo_parts42 = $koneksipo->po_parts_42;
        $newnamepo_parts43 = $koneksipo->po_parts_43;
        $newnamepo_parts44 = $koneksipo->po_parts_44;
        $newnamepo_parts45 = $koneksipo->po_parts_45;

        $newnamepo_jasa1 = $koneksipo->po_jasa_1;
        $newnamepo_jasa2 = $koneksipo->po_jasa_2;
        $newnamepo_jasa3 = $koneksipo->po_jasa_3;
        $newnamepo_jasa4 = $koneksipo->po_jasa_4;
        $newnamepo_jasa5 = $koneksipo->po_jasa_5;
        $newnamepo_jasa6 = $koneksipo->po_jasa_6;
        $newnamepo_jasa7 = $koneksipo->po_jasa_7;
        $newnamepo_jasa8 = $koneksipo->po_jasa_8;
        $newnamepo_jasa9 = $koneksipo->po_jasa_9;
        $newnamepo_jasa10 = $koneksipo->po_jasa_10;
        $newnamepo_jasa11 = $koneksipo->po_jasa_11;
        $newnamepo_jasa12 = $koneksipo->po_jasa_12;
        $newnamepo_jasa13 = $koneksipo->po_jasa_13;
        $newnamepo_jasa14 = $koneksipo->po_jasa_14;
        $newnamepo_jasa15 = $koneksipo->po_jasa_15;
        $newnamepo_jasa16 = $koneksipo->po_jasa_16;
        $newnamepo_jasa17 = $koneksipo->po_jasa_17;
        $newnamepo_jasa18 = $koneksipo->po_jasa_18;
        $newnamepo_jasa19 = $koneksipo->po_jasa_19;
        $newnamepo_jasa20 = $koneksipo->po_jasa_20;
        $newnamepo_jasa21 = $koneksipo->po_jasa_21;
        $newnamepo_jasa22 = $koneksipo->po_jasa_22;
        $newnamepo_jasa23 = $koneksipo->po_jasa_23;
        $newnamepo_jasa24 = $koneksipo->po_jasa_24;
        $newnamepo_jasa25 = $koneksipo->po_jasa_25;
        $newnamepo_jasa26 = $koneksipo->po_jasa_26;
        $newnamepo_jasa27 = $koneksipo->po_jasa_27;
        $newnamepo_jasa28 = $koneksipo->po_jasa_28;
        $newnamepo_jasa29 = $koneksipo->po_jasa_29;
        $newnamepo_jasa30 = $koneksipo->po_jasa_30;

        $newnamepo_mnftr1 = $koneksipo->po_mnftr_1;
        $newnamepo_mnftr2 = $koneksipo->po_mnftr_2;
        $newnamepo_mnftr3 = $koneksipo->po_mnftr_3;
        $newnamepo_mnftr4 = $koneksipo->po_mnftr_4;
        $newnamepo_mnftr5 = $koneksipo->po_mnftr_5;
        $newnamepo_mnftr6 = $koneksipo->po_mnftr_6;
        $newnamepo_mnftr7 = $koneksipo->po_mnftr_7;
        $newnamepo_mnftr8 = $koneksipo->po_mnftr_8;
        $newnamepo_mnftr9 = $koneksipo->po_mnftr_9;
        $newnamepo_mnftr10 = $koneksipo->po_mnftr_10;

        $newnamepo_capo1 = $koneksipo->po_capo_1;
        $newnamepo_capo2 = $koneksipo->po_capo_2;
        $newnamepo_capo3 = $koneksipo->po_capo_3;
        $newnamepo_capo4 = $koneksipo->po_capo_4;
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
        // inputan 2
        if ($request->file('as_po_parts_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_2')
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
                ->file('as_po_parts_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts2 =
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
                ->file('as_po_parts_2')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts2);
        }
        // inputan 3
        if ($request->file('as_po_parts_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_3')
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
                ->file('as_po_parts_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts3 =
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
                ->file('as_po_parts_3')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts3);
        }
        // inputan 4
        if ($request->file('as_po_parts_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_4')
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
                ->file('as_po_parts_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts4 =
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
                ->file('as_po_parts_4')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts4);
        }
        // inputan 5
        if ($request->file('as_po_parts_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_5')
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
                ->file('as_po_parts_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts5 =
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
                ->file('as_po_parts_5')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts5);
        }
        // inputan 6
        if ($request->file('as_po_parts_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_6')
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
                ->file('as_po_parts_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts6 =
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
                ->file('as_po_parts_6')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts6);
        }
        // inputan 7
        if ($request->file('as_po_parts_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_7')
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
                ->file('as_po_parts_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts7 =
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
                ->file('as_po_parts_7')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts7);
        }
        // inputan 4
        if ($request->file('as_po_parts_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_8')
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
                ->file('as_po_parts_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts8 =
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
                ->file('as_po_parts_8')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts8);
        }
        // inputan 9
        if ($request->file('as_po_parts_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_9')
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
                ->file('as_po_parts_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts9 =
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
                ->file('as_po_parts_9')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts9);
        }
        // inputan 10
        if ($request->file('as_po_parts_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_10')
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
                ->file('as_po_parts_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts10 =
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
                ->file('as_po_parts_10')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts10);
        }
        // batas 10 inputan
        // inputan 11
        if ($request->file('as_po_parts_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_11')
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
                ->file('as_po_parts_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts11 =
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
                ->file('as_po_parts_11')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts11);
        }
        // inputan 12
        if ($request->file('as_po_parts_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_12')
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
                ->file('as_po_parts_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts12 =
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
                ->file('as_po_parts_12')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts12);
        }
        // inputan 13
        if ($request->file('as_po_parts_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_13')
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
                ->file('as_po_parts_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts13 =
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
                ->file('as_po_parts_13')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts13);
        }
        // inputan 14
        if ($request->file('as_po_parts_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_14')
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
                ->file('as_po_parts_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts14 =
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
                ->file('as_po_parts_14')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts14);
        }
        // inputan 15
        if ($request->file('as_po_parts_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_15')
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
                ->file('as_po_parts_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts15 =
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
                ->file('as_po_parts_15')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts15);
        }
        // inputan 16
        if ($request->file('as_po_parts_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_16')
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
                ->file('as_po_parts_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts16 =
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
                ->file('as_po_parts_16')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts16);
        }
        // inputan 17
        if ($request->file('as_po_parts_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_17')
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
                ->file('as_po_parts_17')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts17 =
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
                ->file('as_po_parts_17')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts17);
        }
        // inputan 18
        if ($request->file('as_po_parts_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_18')
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
                ->file('as_po_parts_18')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts18 =
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
                ->file('as_po_parts_18')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts18);
        }

        // inputan 19
        if ($request->file('as_po_parts_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_19')
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
                ->file('as_po_parts_19')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts19 =
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
                ->file('as_po_parts_19')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts19);
        }
        // inputan 20
        if ($request->file('as_po_parts_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_20')
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
                ->file('as_po_parts_20')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts20 =
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
                ->file('as_po_parts_20')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts20);
        }
        // inputan 21
        if ($request->file('as_po_parts_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_21')
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
                ->file('as_po_parts_21')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts21 =
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
                ->file('as_po_parts_21')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts21);
        }
        // inputan 22
        if ($request->file('as_po_parts_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_22')
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
                ->file('as_po_parts_22')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts22 =
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
                ->file('as_po_parts_22')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts22);
        }
        // inputan 23
        if ($request->file('as_po_parts_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_23')
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
                ->file('as_po_parts_23')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts23 =
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
                ->file('as_po_parts_23')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts23);
        }
        // inputan 24
        if ($request->file('as_po_parts_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_24')
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
                ->file('as_po_parts_24')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts24 =
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
                ->file('as_po_parts_24')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts24);
        }
        // inputan 25
        if ($request->file('as_po_parts_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_25')
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
                ->file('as_po_parts_25')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts25 =
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
                ->file('as_po_parts_25')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts25);
        }
        // inputan 26
        if ($request->file('as_po_parts_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_26')
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
                ->file('as_po_parts_26')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts26 =
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
                ->file('as_po_parts_26')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts26);
        }
        // inputan 27
        if ($request->file('as_po_parts_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_27')
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
                ->file('as_po_parts_27')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts27 =
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
                ->file('as_po_parts_27')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts27);
        }
        // inputan 28
        if ($request->file('as_po_parts_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_28')
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
                ->file('as_po_parts_28')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts28 =
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
                ->file('as_po_parts_28')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts28);
        }
        // inputan 29
        if ($request->file('as_po_parts_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_29')
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
                ->file('as_po_parts_29')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts29 =
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
                ->file('as_po_parts_29')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts29);
        }
        // inputan 30
        if ($request->file('as_po_parts_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_30')
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
                ->file('as_po_parts_30')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts30 =
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
                ->file('as_po_parts_30')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts30);
        }
        // inputan 31
        if ($request->file('as_po_parts_31')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_31')
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
                ->file('as_po_parts_31')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts31 =
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
                ->file('as_po_parts_31')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts31);
        }
        // inputan 32
        if ($request->file('as_po_parts_32')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_32')
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
                ->file('as_po_parts_32')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts32 =
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
                ->file('as_po_parts_32')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts32);
        }
        // inputan 33
        if ($request->file('as_po_parts_33')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_33')
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
                ->file('as_po_parts_33')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts33 =
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
                ->file('as_po_parts_33')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts33);
        }
        // inputan 34
        if ($request->file('as_po_parts_34')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_34')
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
                ->file('as_po_parts_34')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts34 =
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
                ->file('as_po_parts_34')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts34);
        }
        // inputan 35
        if ($request->file('as_po_parts_35')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_35')
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
                ->file('as_po_parts_35')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts35 =
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
                ->file('as_po_parts_35')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts35);
        }
        // inputan 36
        if ($request->file('as_po_parts_36')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_36')
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
                ->file('as_po_parts_36')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts36 =
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
                ->file('as_po_parts_36')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts36);
        }
        if ($request->file('as_po_parts_37')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_37')
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
                ->file('as_po_parts_37')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts37 =
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
                ->file('as_po_parts_37')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts37);
        }
        if ($request->file('as_po_parts_38')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_38')
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
                ->file('as_po_parts_38')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts38 =
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
                ->file('as_po_parts_38')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts38);
        }
        if ($request->file('as_po_parts_39')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_39')
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
                ->file('as_po_parts_39')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts39 =
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
                ->file('as_po_parts_39')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts39);
        }
        if ($request->file('as_po_parts_40')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_40')
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
                ->file('as_po_parts_40')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts40 =
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
                ->file('as_po_parts_40')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts40);
        }
        if ($request->file('as_po_parts_41')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_41')
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
                ->file('as_po_parts_41')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts41 =
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
                ->file('as_po_parts_41')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts41);
        }
        if ($request->file('as_po_parts_42')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_42')
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
                ->file('as_po_parts_42')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts42 =
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
                ->file('as_po_parts_42')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts42);
        }
        if ($request->file('as_po_parts_43')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_43')
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
                ->file('as_po_parts_43')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts43 =
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
                ->file('as_po_parts_43')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts43);
        }
        if ($request->file('as_po_parts_44')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_44')
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
                ->file('as_po_parts_44')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts44 =
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
                ->file('as_po_parts_44')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts44);
        }
        if ($request->file('as_po_parts_45')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_parts_45')
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
                ->file('as_po_parts_45')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_parts45 =
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
                ->file('as_po_parts_45')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_parts45);
        }

        // inputan jasa
        // inputan 1
        if ($request->file('as_po_jasa_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa1 =
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
                ->file('as_po_jasa_1')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa1);
        }
        // inputan 2
        if ($request->file('as_po_jasa_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa2 =
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
                ->file('as_po_jasa_2')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa2);
        }
        // inputan 3
        if ($request->file('as_po_jasa_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa3 =
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
                ->file('as_po_jasa_3')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa3);
        }

        // inputan 4
        if ($request->file('as_po_jasa_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa4 =
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
                ->file('as_po_jasa_4')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa4);
        }

        // jasa 5
        if ($request->file('as_po_jasa_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_5')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa5 =
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
                ->file('as_po_jasa_5')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa5);
        }
        // jasa 6
        if ($request->file('as_po_jasa_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_6')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa6 =
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
                ->file('as_po_jasa_6')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa6);
        }
        // jasa 7
        if ($request->file('as_po_jasa_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_7')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa7 =
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
                ->file('as_po_jasa_7')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa7);
        }
        // jasa 8
        if ($request->file('as_po_jasa_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_8')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa8 =
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
                ->file('as_po_jasa_8')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa8);
        }
        // jasa 9
        if ($request->file('as_po_jasa_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_jasa_9')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_jasa_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa9 =
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
                ->file('as_po_jasa_9')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa9);
        }
        // jasa 10
        if ($request->file('as_po_jasa_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_10')
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
                ->file('as_po_jasa_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa10 =
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
                ->file('as_po_jasa_10')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa10);
        }
        // jasa 11
        if ($request->file('as_po_jasa_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_11')
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
                ->file('as_po_jasa_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa11 =
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
                ->file('as_po_jasa_11')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa11);
        }
        // jasa 12
        if ($request->file('as_po_jasa_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_12')
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
                ->file('as_po_jasa_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa12 =
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
                ->file('as_po_jasa_12')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa12);
        }
        // jasa 13
        if ($request->file('as_po_jasa_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_13')
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
                ->file('as_po_jasa_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa13 =
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
                ->file('as_po_jasa_13')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa13);
        }
        // jasa 15
        if ($request->file('as_po_jasa_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_14')
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
                ->file('as_po_jasa_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa14 =
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
                ->file('as_po_jasa_14')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa14);
        }
        // jasa 15
        if ($request->file('as_po_jasa_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_15')
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
                ->file('as_po_jasa_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa15 =
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
                ->file('as_po_jasa_15')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa15);
        }
        // jasa 16
        if ($request->file('as_po_jasa_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_16')
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
                ->file('as_po_jasa_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa16 =
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
                ->file('as_po_jasa_16')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa16);
        }

        if ($request->file('as_po_jasa_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_17')
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
                ->file('as_po_jasa_17')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa17 =
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
                ->file('as_po_jasa_17')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa17);
        }
        if ($request->file('as_po_jasa_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_18')
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
                ->file('as_po_jasa_18')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa18 =
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
                ->file('as_po_jasa_18')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa18);
        }
        if ($request->file('as_po_jasa_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_19')
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
                ->file('as_po_jasa_19')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa19 =
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
                ->file('as_po_jasa_19')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa19);
        }
        if ($request->file('as_po_jasa_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_20')
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
                ->file('as_po_jasa_20')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa20 =
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
                ->file('as_po_jasa_20')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa20);
        }
        if ($request->file('as_po_jasa_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_21')
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
                ->file('as_po_jasa_21')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa21 =
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
                ->file('as_po_jasa_21')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa21);
        }
        if ($request->file('as_po_jasa_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_22')
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
                ->file('as_po_jasa_22')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa22 =
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
                ->file('as_po_jasa_22')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa22);
        }
        if ($request->file('as_po_jasa_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_23')
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
                ->file('as_po_jasa_23')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa23 =
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
                ->file('as_po_jasa_23')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa23);
        }
        if ($request->file('as_po_jasa_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_24')
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
                ->file('as_po_jasa_24')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa24 =
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
                ->file('as_po_jasa_24')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa24);
        }
        if ($request->file('as_po_jasa_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_25')
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
                ->file('as_po_jasa_25')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa25 =
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
                ->file('as_po_jasa_25')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa25);
        }
        if ($request->file('as_po_jasa_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_26')
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
                ->file('as_po_jasa_26')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa26 =
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
                ->file('as_po_jasa_26')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa26);
        }
        if ($request->file('as_po_jasa_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_27')
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
                ->file('as_po_jasa_27')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa27 =
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
                ->file('as_po_jasa_27')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa27);
        }
        if ($request->file('as_po_jasa_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_28')
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
                ->file('as_po_jasa_28')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa28 =
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
                ->file('as_po_jasa_28')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa28);
        }
        if ($request->file('as_po_jasa_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_29')
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
                ->file('as_po_jasa_29')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa29 =
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
                ->file('as_po_jasa_29')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa29);
        }
        if ($request->file('as_po_jasa_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_jasa_30')
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
                ->file('as_po_jasa_30')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_jasa30 =
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
                ->file('as_po_jasa_30')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_jasa30);
        }

        // inputan manufaktur
        // inputan 1
        if ($request->file('as_po_mnftr_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_1')
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
                ->file('as_po_mnftr_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr1 =
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
                ->file('as_po_mnftr_1')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr1);
        }
        // inputan 2
        if ($request->file('as_po_mnftr_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_2')
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
                ->file('as_po_mnftr_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr2 =
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
                ->file('as_po_mnftr_2')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr2);
        }
        // inputan 3
        if ($request->file('as_po_mnftr_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_3')
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
                ->file('as_po_mnftr_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr3 =
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
                ->file('as_po_mnftr_3')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr3);
        }
        // inputan 4
        if ($request->file('as_po_mnftr_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_4')
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
                ->file('as_po_mnftr_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr4 =
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
                ->file('as_po_mnftr_4')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr4);
        }

        // manufaktur pr 5
        if ($request->file('as_po_mnftr_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_5')
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
                ->file('as_po_mnftr_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr5 =
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
                ->file('as_po_mnftr_5')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr5);
        }
        // manufaktur pr 6
        if ($request->file('as_po_mnftr_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_6')
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
                ->file('as_po_mnftr_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr6 =
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
                ->file('as_po_mnftr_6')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr6);
        }
        // manufaktur pr 7
        if ($request->file('as_po_mnftr_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_7')
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
                ->file('as_po_mnftr_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr7 =
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
                ->file('as_po_mnftr_7')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr7);
        }
        // manufaktur pr 8
        if ($request->file('as_po_mnftr_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_8')
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
                ->file('as_po_mnftr_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr8 =
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
                ->file('as_po_mnftr_8')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr8);
        }
        // manufaktur pr 9
        if ($request->file('as_po_mnftr_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_9')
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
                ->file('as_po_mnftr_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr9 =
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
                ->file('as_po_mnftr_9')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr9);
        }
        // manufaktur pr 10
        if ($request->file('as_po_mnftr_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_po_mnftr_10')
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
                ->file('as_po_mnftr_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_mnftr10 =
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
                ->file('as_po_mnftr_10')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_mnftr10);
        }

        // inputan rfq

        // inputan 1
        if ($request->file('as_po_capo_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_capo_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_capo_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_capo1 =
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
                ->file('as_po_capo_1')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_capo1);
        }
        // inputan 2
        if ($request->file('as_po_capo_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_capo_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_capo_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_capo2 =
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
                ->file('as_po_capo_2')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_capo2);
        }
        // inputan 3
        if ($request->file('as_po_capo_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_capo_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_capo_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_capo3 =
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
                ->file('as_po_capo_3')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_capo3);
        }
        // inputan 4
        if ($request->file('as_po_capo_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_po_capo_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_po_capo_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepo_capo4 =
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
                ->file('as_po_capo_4')
                ->storeAs('supervisor/project/03_03_PR', $newnamepo_capo4);
        }
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

        for ($i = 1; $i <= 45; $i++) {
            $mnyPartsPO = "as_mny_parts_po_$i";

            if ($request->has($mnyPartsPO)) {
                $request["nparts_po_$i"] = intval(str_replace('.', '', $request->$mnyPartsPO));
            }
        }

        for ($i = 1; $i <= 45; $i++) {
            $oldName = "oldnamepo_parts{$i}";
            $newName = "newnamepo_parts{$i}";
            $npartsName = "nparts_po_{$i}";

            $requestKeyPO = "po_parts_{$i}";
            $requestKeyUpBy = "up_by_parts_po_{$i}";
            $requestKeyMny = "mny_parts_po_{$i}";
            $requestKeyDate = "date_po_parts_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPO] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_parts_po_$i"];
                $request[$requestKeyMny] = $request[$npartsName];
                $request[$requestKeyDate] = $request["as_date_po_parts_$i"];
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $mnyJasaPO = "as_mny_jasa_po_$i";

            if ($request->has($mnyJasaPO)) {
                $request["njasa_po_$i"] = intval(str_replace('.', '', $request->$mnyJasaPO));
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $oldName = "oldnamepo_jasa{$i}";
            $newName = "newnamepo_jasa{$i}";
            $njasaName = "njasa_po_{$i}";

            $requestKeyPO = "po_jasa_{$i}";
            $requestKeyUpBy = "up_by_jasa_po_{$i}";
            $requestKeyMny = "mny_jasa_po_{$i}";
            $requestKeyDate = "date_po_jasa_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPO] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_jasa_po_$i"];
                $request[$requestKeyMny] = $request[$njasaName];
                $request[$requestKeyDate] = $request["as_date_po_jasa_$i"];
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $mnyMnftr = "as_mny_mnftr_po_$i";

            if ($request->has($mnyMnftr)) {
                $request["nmnftr_po_$i"] = intval(str_replace('.', '', $request->$mnyMnftr));
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $oldName = "oldnamepo_mnftr{$i}";
            $newName = "newnamepo_mnftr{$i}";
            $nmnftrName = "nmnftr_po_$i";

            $requestKeyPO = "po_mnftr_{$i}";
            $requestKeyUpBy = "up_by_mnftr_po_{$i}";
            $requestKeyMny = "mny_mnftr_po_{$i}";
            $requestKeyDate = "date_po_mnftr_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPO] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_mnftr_po_$i"];
                $request[$requestKeyMny] = $request[$nmnftrName];
                $request[$requestKeyDate] = $request["as_date_po_mnftr_$i"];
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $mnyCapoPO = "as_mny_capo_po_$i";

            if ($request->has($mnyCapoPO)) {
                $request["ncapo_po_$i"] = intval(str_replace('.', '', $request->$mnyCapoPO));
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $oldName = "oldnamepo_capo{$i}";
            $newName = "newnamepo_capo{$i}";
            $ncapoName = "ncapo_po_{$i}";

            $requestKeyPO = "po_capo_{$i}";
            $requestKeyUpBy = "up_by_capo_po_{$i}";
            $requestKeyMny = "mny_capo_po_{$i}";
            $requestKeyDate = "date_po_capo_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPO] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_capo_po_$i"];
                $request[$requestKeyMny] = $request[$ncapoName];
                $request[$requestKeyDate] = $request["as_date_po_capo_$i"];
            }
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
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }

    /* actual payment */
    public function TigaTitikEmpatFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);

        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',
            'status_pr_01_date',
            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',
            'status_pa_02_date',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',
            'status_po_03_date',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::findOrFail($id_pay_04_3);
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        $standar_project = StandarProject::select(
            'file_pr_parts_material_form',
            'file_pr_pekerjaan_jasa_form',
            'file_pr_manufaktur_form',
            'file_pr_rfq_form',
            'file_pr_per_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.03-04-detail-payment', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }
    public function ProcessTigaTitikEmpatFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
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
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamepay_parts1 = $koneksipay->pay_parts_1;
        $oldnamepay_parts2 = $koneksipay->pay_parts_2;
        $oldnamepay_parts3 = $koneksipay->pay_parts_3;
        $oldnamepay_parts4 = $koneksipay->pay_parts_4;
        $oldnamepay_parts5 = $koneksipay->pay_parts_5;
        $oldnamepay_parts6 = $koneksipay->pay_parts_6;
        $oldnamepay_parts7 = $koneksipay->pay_parts_7;
        $oldnamepay_parts8 = $koneksipay->pay_parts_8;
        $oldnamepay_parts9 = $koneksipay->pay_parts_9;
        $oldnamepay_parts10 = $koneksipay->pay_parts_10;
        $oldnamepay_parts11 = $koneksipay->pay_parts_11;
        $oldnamepay_parts12 = $koneksipay->pay_parts_12;
        $oldnamepay_parts13 = $koneksipay->pay_parts_13;
        $oldnamepay_parts14 = $koneksipay->pay_parts_14;
        $oldnamepay_parts15 = $koneksipay->pay_parts_15;
        $oldnamepay_parts16 = $koneksipay->pay_parts_16;
        $oldnamepay_parts17 = $koneksipay->pay_parts_17;
        $oldnamepay_parts18 = $koneksipay->pay_parts_18;
        $oldnamepay_parts19 = $koneksipay->pay_parts_19;
        $oldnamepay_parts20 = $koneksipay->pay_parts_20;
        $oldnamepay_parts21 = $koneksipay->pay_parts_21;
        $oldnamepay_parts22 = $koneksipay->pay_parts_22;
        $oldnamepay_parts23 = $koneksipay->pay_parts_23;
        $oldnamepay_parts24 = $koneksipay->pay_parts_24;
        $oldnamepay_parts25 = $koneksipay->pay_parts_25;
        $oldnamepay_parts26 = $koneksipay->pay_parts_26;
        $oldnamepay_parts27 = $koneksipay->pay_parts_27;
        $oldnamepay_parts28 = $koneksipay->pay_parts_28;
        $oldnamepay_parts29 = $koneksipay->pay_parts_29;
        $oldnamepay_parts30 = $koneksipay->pay_parts_30;
        $oldnamepay_parts31 = $koneksipay->pay_parts_31;
        $oldnamepay_parts32 = $koneksipay->pay_parts_32;
        $oldnamepay_parts33 = $koneksipay->pay_parts_33;
        $oldnamepay_parts34 = $koneksipay->pay_parts_34;
        $oldnamepay_parts35 = $koneksipay->pay_parts_35;
        $oldnamepay_parts36 = $koneksipay->pay_parts_36;
        $oldnamepay_parts37 = $koneksipay->pay_parts_37;
        $oldnamepay_parts38 = $koneksipay->pay_parts_38;
        $oldnamepay_parts39 = $koneksipay->pay_parts_39;
        $oldnamepay_parts40 = $koneksipay->pay_parts_40;
        $oldnamepay_parts41 = $koneksipay->pay_parts_41;
        $oldnamepay_parts42 = $koneksipay->pay_parts_42;
        $oldnamepay_parts43 = $koneksipay->pay_parts_43;
        $oldnamepay_parts44 = $koneksipay->pay_parts_44;
        $oldnamepay_parts45 = $koneksipay->pay_parts_45;

        $oldnamepay_jasa1 = $koneksipay->pay_jasa_1;
        $oldnamepay_jasa2 = $koneksipay->pay_jasa_2;
        $oldnamepay_jasa3 = $koneksipay->pay_jasa_3;
        $oldnamepay_jasa4 = $koneksipay->pay_jasa_4;
        $oldnamepay_jasa5 = $koneksipay->pay_jasa_5;
        $oldnamepay_jasa6 = $koneksipay->pay_jasa_6;
        $oldnamepay_jasa7 = $koneksipay->pay_jasa_7;
        $oldnamepay_jasa8 = $koneksipay->pay_jasa_8;
        $oldnamepay_jasa9 = $koneksipay->pay_jasa_9;
        $oldnamepay_jasa10 = $koneksipay->pay_jasa_10;
        $oldnamepay_jasa11 = $koneksipay->pay_jasa_11;
        $oldnamepay_jasa12 = $koneksipay->pay_jasa_12;
        $oldnamepay_jasa13 = $koneksipay->pay_jasa_13;
        $oldnamepay_jasa14 = $koneksipay->pay_jasa_14;
        $oldnamepay_jasa15 = $koneksipay->pay_jasa_15;
        $oldnamepay_jasa16 = $koneksipay->pay_jasa_16;
        $oldnamepay_jasa17 = $koneksipay->pay_jasa_17;
        $oldnamepay_jasa18 = $koneksipay->pay_jasa_18;
        $oldnamepay_jasa19 = $koneksipay->pay_jasa_19;
        $oldnamepay_jasa20 = $koneksipay->pay_jasa_20;
        $oldnamepay_jasa21 = $koneksipay->pay_jasa_21;
        $oldnamepay_jasa22 = $koneksipay->pay_jasa_22;
        $oldnamepay_jasa23 = $koneksipay->pay_jasa_23;
        $oldnamepay_jasa24 = $koneksipay->pay_jasa_24;
        $oldnamepay_jasa25 = $koneksipay->pay_jasa_25;
        $oldnamepay_jasa26 = $koneksipay->pay_jasa_26;
        $oldnamepay_jasa27 = $koneksipay->pay_jasa_27;
        $oldnamepay_jasa28 = $koneksipay->pay_jasa_28;
        $oldnamepay_jasa29 = $koneksipay->pay_jasa_29;
        $oldnamepay_jasa30 = $koneksipay->pay_jasa_30;

        $oldnamepay_mnftr1 = $koneksipay->pay_mnftr_1;
        $oldnamepay_mnftr2 = $koneksipay->pay_mnftr_2;
        $oldnamepay_mnftr3 = $koneksipay->pay_mnftr_3;
        $oldnamepay_mnftr4 = $koneksipay->pay_mnftr_4;
        $oldnamepay_mnftr5 = $koneksipay->pay_mnftr_5;
        $oldnamepay_mnftr6 = $koneksipay->pay_mnftr_6;
        $oldnamepay_mnftr7 = $koneksipay->pay_mnftr_7;
        $oldnamepay_mnftr8 = $koneksipay->pay_mnftr_8;
        $oldnamepay_mnftr9 = $koneksipay->pay_mnftr_9;
        $oldnamepay_mnftr10 = $koneksipay->pay_mnftr_10;

        $oldnamepay_da1 = $koneksipay->pay_da_1;
        $oldnamepay_da2 = $koneksipay->pay_da_2;
        $oldnamepay_da3 = $koneksipay->pay_da_3;
        $oldnamepay_da4 = $koneksipay->pay_da_4;
        $oldnamepay_da5 = $koneksipay->pay_da_5;

        //nama file baru
        $newnamepay_parts1 = $koneksipay->pay_parts_1;
        $newnamepay_parts2 = $koneksipay->pay_parts_2;
        $newnamepay_parts3 = $koneksipay->pay_parts_3;
        $newnamepay_parts4 = $koneksipay->pay_parts_4;
        $newnamepay_parts5 = $koneksipay->pay_parts_5;
        $newnamepay_parts6 = $koneksipay->pay_parts_6;
        $newnamepay_parts7 = $koneksipay->pay_parts_7;
        $newnamepay_parts8 = $koneksipay->pay_parts_8;
        $newnamepay_parts9 = $koneksipay->pay_parts_9;
        $newnamepay_parts10 = $koneksipay->pay_parts_10;
        $newnamepay_parts11 = $koneksipay->pay_parts_11;
        $newnamepay_parts12 = $koneksipay->pay_parts_12;
        $newnamepay_parts13 = $koneksipay->pay_parts_13;
        $newnamepay_parts14 = $koneksipay->pay_parts_14;
        $newnamepay_parts15 = $koneksipay->pay_parts_15;
        $newnamepay_parts16 = $koneksipay->pay_parts_16;
        $newnamepay_parts17 = $koneksipay->pay_parts_17;
        $newnamepay_parts18 = $koneksipay->pay_parts_18;
        $newnamepay_parts19 = $koneksipay->pay_parts_19;
        $newnamepay_parts20 = $koneksipay->pay_parts_20;
        $newnamepay_parts21 = $koneksipay->pay_parts_21;
        $newnamepay_parts22 = $koneksipay->pay_parts_22;
        $newnamepay_parts23 = $koneksipay->pay_parts_23;
        $newnamepay_parts24 = $koneksipay->pay_parts_24;
        $newnamepay_parts25 = $koneksipay->pay_parts_25;
        $newnamepay_parts26 = $koneksipay->pay_parts_26;
        $newnamepay_parts27 = $koneksipay->pay_parts_27;
        $newnamepay_parts28 = $koneksipay->pay_parts_28;
        $newnamepay_parts29 = $koneksipay->pay_parts_29;
        $newnamepay_parts30 = $koneksipay->pay_parts_30;
        $newnamepay_parts31 = $koneksipay->pay_parts_31;
        $newnamepay_parts32 = $koneksipay->pay_parts_32;
        $newnamepay_parts33 = $koneksipay->pay_parts_33;
        $newnamepay_parts34 = $koneksipay->pay_parts_34;
        $newnamepay_parts35 = $koneksipay->pay_parts_35;
        $newnamepay_parts36 = $koneksipay->pay_parts_36;
        $newnamepay_parts37 = $koneksipay->pay_parts_37;
        $newnamepay_parts38 = $koneksipay->pay_parts_38;
        $newnamepay_parts39 = $koneksipay->pay_parts_39;
        $newnamepay_parts40 = $koneksipay->pay_parts_40;
        $newnamepay_parts41 = $koneksipay->pay_parts_41;
        $newnamepay_parts42 = $koneksipay->pay_parts_42;
        $newnamepay_parts43 = $koneksipay->pay_parts_43;
        $newnamepay_parts44 = $koneksipay->pay_parts_44;
        $newnamepay_parts45 = $koneksipay->pay_parts_45;

        $newnamepay_jasa1 = $koneksipay->pay_jasa_1;
        $newnamepay_jasa2 = $koneksipay->pay_jasa_2;
        $newnamepay_jasa3 = $koneksipay->pay_jasa_3;
        $newnamepay_jasa4 = $koneksipay->pay_jasa_4;
        $newnamepay_jasa5 = $koneksipay->pay_jasa_5;
        $newnamepay_jasa6 = $koneksipay->pay_jasa_6;
        $newnamepay_jasa7 = $koneksipay->pay_jasa_7;
        $newnamepay_jasa8 = $koneksipay->pay_jasa_8;
        $newnamepay_jasa9 = $koneksipay->pay_jasa_9;
        $newnamepay_jasa10 = $koneksipay->pay_jasa_10;
        $newnamepay_jasa11 = $koneksipay->pay_jasa_11;
        $newnamepay_jasa12 = $koneksipay->pay_jasa_12;
        $newnamepay_jasa13 = $koneksipay->pay_jasa_13;
        $newnamepay_jasa14 = $koneksipay->pay_jasa_14;
        $newnamepay_jasa15 = $koneksipay->pay_jasa_15;
        $newnamepay_jasa16 = $koneksipay->pay_jasa_16;
        $newnamepay_jasa17 = $koneksipay->pay_jasa_17;
        $newnamepay_jasa18 = $koneksipay->pay_jasa_18;
        $newnamepay_jasa19 = $koneksipay->pay_jasa_19;
        $newnamepay_jasa20 = $koneksipay->pay_jasa_20;
        $newnamepay_jasa21 = $koneksipay->pay_jasa_21;
        $newnamepay_jasa22 = $koneksipay->pay_jasa_22;
        $newnamepay_jasa23 = $koneksipay->pay_jasa_23;
        $newnamepay_jasa24 = $koneksipay->pay_jasa_24;
        $newnamepay_jasa25 = $koneksipay->pay_jasa_25;
        $newnamepay_jasa26 = $koneksipay->pay_jasa_26;
        $newnamepay_jasa27 = $koneksipay->pay_jasa_27;
        $newnamepay_jasa28 = $koneksipay->pay_jasa_28;
        $newnamepay_jasa29 = $koneksipay->pay_jasa_29;
        $newnamepay_jasa30 = $koneksipay->pay_jasa_30;

        $newnamepay_mnftr1 = $koneksipay->pay_mnftr_1;
        $newnamepay_mnftr2 = $koneksipay->pay_mnftr_2;
        $newnamepay_mnftr3 = $koneksipay->pay_mnftr_3;
        $newnamepay_mnftr4 = $koneksipay->pay_mnftr_4;
        $newnamepay_mnftr5 = $koneksipay->pay_mnftr_5;
        $newnamepay_mnftr6 = $koneksipay->pay_mnftr_6;
        $newnamepay_mnftr7 = $koneksipay->pay_mnftr_7;
        $newnamepay_mnftr8 = $koneksipay->pay_mnftr_8;
        $newnamepay_mnftr9 = $koneksipay->pay_mnftr_9;
        $newnamepay_mnftr10 = $koneksipay->pay_mnftr_10;

        $newnamepay_da1 = $koneksipay->pay_da_1;
        $newnamepay_da2 = $koneksipay->pay_da_2;
        $newnamepay_da3 = $koneksipay->pay_da_3;
        $newnamepay_da4 = $koneksipay->pay_da_4;
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
        // inputan 2
        if ($request->file('as_pay_parts_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_2')
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
                ->file('as_pay_parts_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts2 =
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
                ->file('as_pay_parts_2')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts2);
        }
        // inputan 3
        if ($request->file('as_pay_parts_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_3')
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
                ->file('as_pay_parts_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts3 =
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
                ->file('as_pay_parts_3')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts3);
        }
        // inputan 4
        if ($request->file('as_pay_parts_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_4')
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
                ->file('as_pay_parts_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts4 =
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
                ->file('as_pay_parts_4')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts4);
        }
        // inputan 5
        if ($request->file('as_pay_parts_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_5')
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
                ->file('as_pay_parts_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts5 =
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
                ->file('as_pay_parts_5')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts5);
        }
        // inputan 6
        if ($request->file('as_pay_parts_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_6')
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
                ->file('as_pay_parts_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts6 =
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
                ->file('as_pay_parts_6')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts6);
        }
        // inputan 7
        if ($request->file('as_pay_parts_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_7')
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
                ->file('as_pay_parts_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts7 =
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
                ->file('as_pay_parts_7')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts7);
        }
        // inputan 4
        if ($request->file('as_pay_parts_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_8')
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
                ->file('as_pay_parts_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts8 =
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
                ->file('as_pay_parts_8')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts8);
        }
        // inputan 9
        if ($request->file('as_pay_parts_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_9')
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
                ->file('as_pay_parts_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts9 =
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
                ->file('as_pay_parts_9')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts9);
        }
        // inputan 10
        if ($request->file('as_pay_parts_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_10')
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
                ->file('as_pay_parts_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts10 =
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
                ->file('as_pay_parts_10')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts10);
        }
        // batas 10 inputan
        // inputan 11
        if ($request->file('as_pay_parts_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_11')
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
                ->file('as_pay_parts_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts11 =
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
                ->file('as_pay_parts_11')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts11);
        }
        // inputan 12
        if ($request->file('as_pay_parts_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_12')
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
                ->file('as_pay_parts_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts12 =
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
                ->file('as_pay_parts_12')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts12);
        }
        // inputan 13
        if ($request->file('as_pay_parts_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_13')
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
                ->file('as_pay_parts_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts13 =
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
                ->file('as_pay_parts_13')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts13);
        }
        // inputan 14
        if ($request->file('as_pay_parts_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_14')
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
                ->file('as_pay_parts_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts14 =
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
                ->file('as_pay_parts_14')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts14);
        }
        // inputan 15
        if ($request->file('as_pay_parts_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_15')
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
                ->file('as_pay_parts_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts15 =
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
                ->file('as_pay_parts_15')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts15);
        }
        // inputan 16
        if ($request->file('as_pay_parts_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_16')
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
                ->file('as_pay_parts_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts16 =
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
                ->file('as_pay_parts_16')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts16);
        }
        // inputan 17
        if ($request->file('as_pay_parts_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_17')
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
                ->file('as_pay_parts_17')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts17 =
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
                ->file('as_pay_parts_17')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts17);
        }
        // inputan 18
        if ($request->file('as_pay_parts_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_18')
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
                ->file('as_pay_parts_18')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts18 =
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
                ->file('as_pay_parts_18')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts18);
        }

        // inputan 19
        if ($request->file('as_pay_parts_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_19')
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
                ->file('as_pay_parts_19')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts19 =
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
                ->file('as_pay_parts_19')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts19);
        }
        // inputan 20
        if ($request->file('as_pay_parts_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_20')
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
                ->file('as_pay_parts_20')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts20 =
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
                ->file('as_pay_parts_20')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts20);
        }
        // inputan 21
        if ($request->file('as_pay_parts_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_21')
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
                ->file('as_pay_parts_21')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts21 =
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
                ->file('as_pay_parts_21')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts21);
        }
        // inputan 22
        if ($request->file('as_pay_parts_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_22')
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
                ->file('as_pay_parts_22')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts22 =
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
                ->file('as_pay_parts_22')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts22);
        }
        // inputan 23
        if ($request->file('as_pay_parts_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_23')
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
                ->file('as_pay_parts_23')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts23 =
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
                ->file('as_pay_parts_23')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts23);
        }
        // inputan 24
        if ($request->file('as_pay_parts_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_24')
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
                ->file('as_pay_parts_24')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts24 =
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
                ->file('as_pay_parts_24')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts24);
        }
        // inputan 25
        if ($request->file('as_pay_parts_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_25')
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
                ->file('as_pay_parts_25')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts25 =
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
                ->file('as_pay_parts_25')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts25);
        }
        // inputan 26
        if ($request->file('as_pay_parts_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_26')
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
                ->file('as_pay_parts_26')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts26 =
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
                ->file('as_pay_parts_26')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts26);
        }
        // inputan 27
        if ($request->file('as_pay_parts_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_27')
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
                ->file('as_pay_parts_27')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts27 =
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
                ->file('as_pay_parts_27')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts27);
        }
        // inputan 28
        if ($request->file('as_pay_parts_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_28')
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
                ->file('as_pay_parts_28')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts28 =
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
                ->file('as_pay_parts_28')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts28);
        }
        // inputan 29
        if ($request->file('as_pay_parts_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_29')
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
                ->file('as_pay_parts_29')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts29 =
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
                ->file('as_pay_parts_29')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts29);
        }
        // inputan 30
        if ($request->file('as_pay_parts_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_30')
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
                ->file('as_pay_parts_30')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts30 =
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
                ->file('as_pay_parts_30')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts30);
        }
        // inputan 31
        if ($request->file('as_pay_parts_31')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_31')
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
                ->file('as_pay_parts_31')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts31 =
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
                ->file('as_pay_parts_31')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts31);
        }
        // inputan 32
        if ($request->file('as_pay_parts_32')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_32')
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
                ->file('as_pay_parts_32')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts32 =
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
                ->file('as_pay_parts_32')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts32);
        }
        // inputan 33
        if ($request->file('as_pay_parts_33')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_33')
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
                ->file('as_pay_parts_33')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts33 =
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
                ->file('as_pay_parts_33')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts33);
        }
        // inputan 34
        if ($request->file('as_pay_parts_34')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_34')
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
                ->file('as_pay_parts_34')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts34 =
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
                ->file('as_pay_parts_34')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts34);
        }
        // inputan 35
        if ($request->file('as_pay_parts_35')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_35')
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
                ->file('as_pay_parts_35')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts35 =
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
                ->file('as_pay_parts_35')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts35);
        }
        // inputan 36
        if ($request->file('as_pay_parts_36')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_36')
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
                ->file('as_pay_parts_36')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts36 =
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
                ->file('as_pay_parts_36')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts36);
        }
        if ($request->file('as_pay_parts_37')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_37')
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
                ->file('as_pay_parts_37')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts37 =
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
                ->file('as_pay_parts_37')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts37);
        }
        if ($request->file('as_pay_parts_38')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_38')
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
                ->file('as_pay_parts_38')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts38 =
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
                ->file('as_pay_parts_38')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts38);
        }
        if ($request->file('as_pay_parts_39')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_39')
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
                ->file('as_pay_parts_39')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts39 =
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
                ->file('as_pay_parts_39')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts39);
        }
        if ($request->file('as_pay_parts_40')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_40')
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
                ->file('as_pay_parts_40')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts40 =
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
                ->file('as_pay_parts_40')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts40);
        }
        if ($request->file('as_pay_parts_41')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_41')
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
                ->file('as_pay_parts_41')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts41 =
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
                ->file('as_pay_parts_41')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts41);
        }
        if ($request->file('as_pay_parts_42')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_42')
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
                ->file('as_pay_parts_42')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts42 =
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
                ->file('as_pay_parts_42')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts42);
        }
        if ($request->file('as_pay_parts_43')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_43')
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
                ->file('as_pay_parts_43')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts43 =
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
                ->file('as_pay_parts_43')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts43);
        }
        if ($request->file('as_pay_parts_44')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_44')
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
                ->file('as_pay_parts_44')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts44 =
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
                ->file('as_pay_parts_44')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts44);
        }
        if ($request->file('as_pay_parts_45')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_parts_45')
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
                ->file('as_pay_parts_45')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_parts45 =
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
                ->file('as_pay_parts_45')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_parts45);
        }

        // inputan jasa
        // inputan 1
        if ($request->file('as_pay_jasa_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_1')
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
                ->file('as_pay_jasa_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa1 =
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
                ->file('as_pay_jasa_1')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa1);
        }
        // inputan 2
        if ($request->file('as_pay_jasa_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_2')
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
                ->file('as_pay_jasa_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa2 =
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
                ->file('as_pay_jasa_2')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa2);
        }
        // inputan 3
        if ($request->file('as_pay_jasa_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_3')
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
                ->file('as_pay_jasa_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa3 =
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
                ->file('as_pay_jasa_3')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa3);
        }
        // inputan 4
        if ($request->file('as_pay_jasa_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_4')
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
                ->file('as_pay_jasa_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa4 =
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
                ->file('as_pay_jasa_4')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa4);
        }

        // jasa 5
        if ($request->file('as_pay_jasa_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_5')
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
                ->file('as_pay_jasa_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa5 =
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
                ->file('as_pay_jasa_5')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa5);
        }
        // jasa 6
        if ($request->file('as_pay_jasa_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_6')
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
                ->file('as_pay_jasa_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa6 =
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
                ->file('as_pay_jasa_6')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa6);
        }
        // jasa 7
        if ($request->file('as_pay_jasa_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_7')
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
                ->file('as_pay_jasa_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa7 =
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
                ->file('as_pay_jasa_7')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa7);
        }
        // jasa 8
        if ($request->file('as_pay_jasa_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_8')
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
                ->file('as_pay_jasa_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa8 =
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
                ->file('as_pay_jasa_8')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa8);
        }
        // jasa 9
        if ($request->file('as_pay_jasa_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_9')
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
                ->file('as_pay_jasa_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa9 =
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
                ->file('as_pay_jasa_9')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa9);
        }
        // jasa 10
        if ($request->file('as_pay_jasa_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_10')
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
                ->file('as_pay_jasa_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa10 =
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
                ->file('as_pay_jasa_10')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa10);
        }
        // jasa 11
        if ($request->file('as_pay_jasa_11')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_11')
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
                ->file('as_pay_jasa_11')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa11 =
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
                ->file('as_pay_jasa_11')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa11);
        }
        // jasa 12
        if ($request->file('as_pay_jasa_12')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_12')
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
                ->file('as_pay_jasa_12')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa12 =
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
                ->file('as_pay_jasa_12')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa12);
        }
        // jasa 13
        if ($request->file('as_pay_jasa_13')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_13')
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
                ->file('as_pay_jasa_13')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa13 =
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
                ->file('as_pay_jasa_13')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa13);
        }
        // jasa 15
        if ($request->file('as_pay_jasa_14')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_14')
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
                ->file('as_pay_jasa_14')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa14 =
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
                ->file('as_pay_jasa_14')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa14);
        }
        // jasa 15
        if ($request->file('as_pay_jasa_15')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_15')
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
                ->file('as_pay_jasa_15')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa15 =
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
                ->file('as_pay_jasa_15')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa15);
        }
        // jasa 16
        if ($request->file('as_pay_jasa_16')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_16')
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
                ->file('as_pay_jasa_16')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa16 =
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
                ->file('as_pay_jasa_16')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa16);
        }

        if ($request->file('as_pay_jasa_17')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_17')
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
                ->file('as_pay_jasa_17')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa17 =
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
                ->file('as_pay_jasa_17')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa17);
        }
        if ($request->file('as_pay_jasa_18')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_18')
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
                ->file('as_pay_jasa_18')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa18 =
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
                ->file('as_pay_jasa_18')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa18);
        }
        if ($request->file('as_pay_jasa_19')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_19')
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
                ->file('as_pay_jasa_19')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa19 =
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
                ->file('as_pay_jasa_19')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa19);
        }
        if ($request->file('as_pay_jasa_20')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_20')
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
                ->file('as_pay_jasa_20')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa20 =
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
                ->file('as_pay_jasa_20')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa20);
        }
        if ($request->file('as_pay_jasa_21')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_21')
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
                ->file('as_pay_jasa_21')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa21 =
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
                ->file('as_pay_jasa_21')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa21);
        }
        if ($request->file('as_pay_jasa_22')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_22')
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
                ->file('as_pay_jasa_22')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa22 =
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
                ->file('as_pay_jasa_22')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa22);
        }
        if ($request->file('as_pay_jasa_23')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_23')
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
                ->file('as_pay_jasa_23')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa23 =
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
                ->file('as_pay_jasa_23')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa23);
        }
        if ($request->file('as_pay_jasa_24')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_24')
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
                ->file('as_pay_jasa_24')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa24 =
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
                ->file('as_pay_jasa_24')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa24);
        }
        if ($request->file('as_pay_jasa_25')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_25')
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
                ->file('as_pay_jasa_25')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa25 =
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
                ->file('as_pay_jasa_25')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa25);
        }
        if ($request->file('as_pay_jasa_26')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_26')
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
                ->file('as_pay_jasa_26')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa26 =
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
                ->file('as_pay_jasa_26')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa26);
        }
        if ($request->file('as_pay_jasa_27')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_27')
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
                ->file('as_pay_jasa_27')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa27 =
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
                ->file('as_pay_jasa_27')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa27);
        }
        if ($request->file('as_pay_jasa_28')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_28')
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
                ->file('as_pay_jasa_28')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa28 =
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
                ->file('as_pay_jasa_28')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa28);
        }
        if ($request->file('as_pay_jasa_29')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_29')
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
                ->file('as_pay_jasa_29')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa29 =
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
                ->file('as_pay_jasa_29')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa29);
        }
        if ($request->file('as_pay_jasa_30')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_jasa_30')
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
                ->file('as_pay_jasa_30')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_jasa30 =
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
                ->file('as_pay_jasa_30')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_jasa30);
        }

        // inputan manufaktur
        // inputan 1
        if ($request->file('as_pay_mnftr_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_1')
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
                ->file('as_pay_mnftr_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr1 =
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
                ->file('as_pay_mnftr_1')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr1);
        }
        // inputan 2
        if ($request->file('as_pay_mnftr_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_2')
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
                ->file('as_pay_mnftr_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr2 =
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
                ->file('as_pay_mnftr_2')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr2);
        }
        // inputan 3
        if ($request->file('as_pay_mnftr_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_3')
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
                ->file('as_pay_mnftr_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr3 =
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
                ->file('as_pay_mnftr_3')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr3);
        }
        // inputan 4
        if ($request->file('as_pay_mnftr_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_4')
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
                ->file('as_pay_mnftr_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr4 =
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
                ->file('as_pay_mnftr_4')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr4);
        }

        // manufaktur pr 5
        if ($request->file('as_pay_mnftr_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_5')
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
                ->file('as_pay_mnftr_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr5 =
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
                ->file('as_pay_mnftr_5')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr5);
        }
        // manufaktur pr 6
        if ($request->file('as_pay_mnftr_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_6')
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
                ->file('as_pay_mnftr_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr6 =
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
                ->file('as_pay_mnftr_6')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr6);
        }
        // manufaktur pr 7
        if ($request->file('as_pay_mnftr_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_7')
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
                ->file('as_pay_mnftr_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr7 =
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
                ->file('as_pay_mnftr_7')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr7);
        }
        // manufaktur pr 8
        if ($request->file('as_pay_mnftr_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_8')
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
                ->file('as_pay_mnftr_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr8 =
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
                ->file('as_pay_mnftr_8')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr8);
        }
        // manufaktur pr 9
        if ($request->file('as_pay_mnftr_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_9')
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
                ->file('as_pay_mnftr_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr9 =
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
                ->file('as_pay_mnftr_9')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr9);
        }
        // manufaktur pr 10
        if ($request->file('as_pay_mnftr_10')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_pay_mnftr_10')
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
                ->file('as_pay_mnftr_10')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_mnftr10 =
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
                ->file('as_pay_mnftr_10')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_mnftr10);
        }

        // inputan rfq

        // inputan 1
        if ($request->file('as_pay_da_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pay_da_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pay_da_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_da1 =
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
                ->file('as_pay_da_1')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_da1);
        }
        // inputan 2
        if ($request->file('as_pay_da_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pay_da_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pay_da_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_da2 =
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
                ->file('as_pay_da_2')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_da2);
        }
        // inputan 3
        if ($request->file('as_pay_da_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pay_da_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pay_da_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_da3 =
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
                ->file('as_pay_da_3')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_da3);
        }
        // inputan 4
        if ($request->file('as_pay_da_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_pay_da_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_pay_da_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamepay_da4 =
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
                ->file('as_pay_da_4')
                ->storeAs('supervisor/project/03_04_PR', $newnamepay_da4);
        }
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

        /* if ($request->has('as_mny_parts_pay_1')) {
            $numpay_parts_1 = intval(str_replace('.', '', $request->mny_parts_pay_1));
        } */
        /* dd($request->input('as_mny_parts_pay_1')); */
        // menyimpan jika kosong atau menimpa
        for ($i = 1; $i <= 45; $i++) {
            $mnyPartsPay = "as_mny_parts_pay_$i";

            if ($request->has($mnyPartsPay)) {
                $request["nparts_pay_$i"] = intval(str_replace('.', '', $request->$mnyPartsPay));
            }
        }

        for ($i = 1; $i <= 45; $i++) {
            $oldName = "oldnamepay_parts{$i}";
            $newName = "newnamepay_parts{$i}";
            $npartsName = "nparts_pay_{$i}";

            $requestKeyPay = "pay_parts_{$i}";
            $requestKeyUpBy = "up_by_parts_pay_{$i}";
            $requestKeyMny = "mny_parts_pay_{$i}";
            $requestKeyDate = "date_pay_parts_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPay] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_parts_pay_$i"];
                $request[$requestKeyMny] = $request[$npartsName];
                $request[$requestKeyDate] = $request["as_date_pay_parts_$i"];
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $mnyJasaPay = "as_mny_jasa_pay_$i";

            if ($request->has($mnyJasaPay)) {
                $request["njasa_pay_$i"] = intval(str_replace('.', '', $request->$mnyJasaPay));
            }
        }

        for ($i = 1; $i <= 30; $i++) {
            $oldName = "oldnamepay_jasa{$i}";
            $newName = "newnamepay_jasa{$i}";
            $njasaName = "njasa_pay_{$i}";

            $requestKeyPay = "pay_jasa_{$i}";
            $requestKeyUpBy = "up_by_jasa_pay_{$i}";
            $requestKeyMny = "mny_jasa_pay_{$i}";
            $requestKeyDate = "date_pay_jasa_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPay] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_jasa_pay_$i"];
                $request[$requestKeyMny] = $request[$njasaName];
                $request[$requestKeyDate] = $request["as_date_pay_jasa_$i"];
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $mnyMnftr = "as_mny_mnftr_pay_$i";

            if ($request->has($mnyMnftr)) {
                $request["nmnftr_pay_$i"] = intval(str_replace('.', '', $request->$mnyMnftr));
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            $oldName = "oldnamepay_mnftr{$i}";
            $newName = "newnamepay_mnftr{$i}";
            $nmnftrName = "nmnftr_pay_$i";

            $requestKeyPay = "pay_mnftr_{$i}";
            $requestKeyUpBy = "up_by_mnftr_pay_{$i}";
            $requestKeyMny = "mny_mnftr_pay_{$i}";
            $requestKeyDate = "date_pay_mnftr_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPay] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_mnftr_pay_$i"];
                $request[$requestKeyMny] = $request[$nmnftrName];
                $request[$requestKeyDate] = $request["as_date_pay_mnftr_$i"];
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $mnyDaPay = "as_mny_da_pay_$i";

            if ($request->has($mnyDaPay)) {
                $request["nda_pay_$i"] = intval(str_replace('.', '', $request->$mnyDaPay));
            }
        }

        for ($i = 1; $i <= 5; $i++) {
            $oldName = "oldnamepay_da{$i}";
            $newName = "newnamepay_da{$i}";
            $ndaName = "nda_pay_{$i}";

            $requestKeyPay = "pay_da_{$i}";
            $requestKeyUpBy = "up_by_da_pay_{$i}";
            $requestKeyMny = "mny_da_pay_{$i}";
            $requestKeyDate = "date_pay_da_{$i}";

            if ($$oldName != $$newName) {
                $request[$requestKeyPay] = $$newName;
                $request[$requestKeyUpBy] = $request["as_up_by_da_pay_$i"];
                $request[$requestKeyMny] = $request[$ndaName];
                $request[$requestKeyDate] = $request["as_date_pay_da_$i"];
            }
        }

        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksipay->update($request->all());
        $koneksipr->update($request->all());

        return redirect()->action(
            [SpvProjectController::class, 'TigaTitikEmpatFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }

    /* manufacturing */
    public function EmpatFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);

        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',

            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);

        $koneksimn = MNproject::findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);
        $standar_project = StandarProject::select('file_mn_ir_form')
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.04-detail-manufacturing', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }

    public function ProcessEmpatFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
        $koneksipr = PRproject::findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select('id_pa_02_3')->findOrFail($id_pa_02_3);
        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        $koneksimn = MNproject::findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // namafilelama
        $oldnamemn_atribut1 = $koneksipay->mn_atribut_1;
        $oldnamemn_atribut2 = $koneksipay->mn_atribut_2;
        $oldnamemn_atribut3 = $koneksipay->mn_atribut_3;
        $oldnamemn_atribut4 = $koneksipay->mn_atribut_4;
        $oldnamemn_atribut5 = $koneksipay->mn_atribut_5;
        $oldnamemn_atribut6 = $koneksipay->mn_atribut_6;
        $oldnamemn_atribut7 = $koneksipay->mn_atribut_7;
        $oldnamemn_atribut8 = $koneksipay->mn_atribut_8;
        $oldnamemn_atribut9 = $koneksipay->mn_atribut_9;
        $oldnamemn_atribut10 = $koneksipay->mn_atribut_10;

        //nama file baru
        $newnamemn_atribut1 = $koneksipay->mn_atribut_1;
        $newnamemn_atribut2 = $koneksipay->mn_atribut_2;
        $newnamemn_atribut3 = $koneksipay->mn_atribut_3;
        $newnamemn_atribut4 = $koneksipay->mn_atribut_4;
        $newnamemn_atribut5 = $koneksipay->mn_atribut_5;
        $newnamemn_atribut6 = $koneksipay->mn_atribut_6;
        $newnamemn_atribut7 = $koneksipay->mn_atribut_7;
        $newnamemn_atribut8 = $koneksipay->mn_atribut_8;
        $newnamemn_atribut9 = $koneksipay->mn_atribut_9;
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
        // inputan 2
        if ($request->file('as_mn_atribut_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_2')
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
                ->file('as_mn_atribut_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut2 =
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
                ->file('as_mn_atribut_2')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut2);
        }
        // inputan 3
        if ($request->file('as_mn_atribut_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_3')
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
                ->file('as_mn_atribut_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut3 =
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
                ->file('as_mn_atribut_3')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut3);
        }
        // inputan 4
        if ($request->file('as_mn_atribut_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_4')
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
                ->file('as_mn_atribut_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut4 =
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
                ->file('as_mn_atribut_4')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut4);
        }
        // inputan 5
        if ($request->file('as_mn_atribut_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_5')
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
                ->file('as_mn_atribut_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut5 =
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
                ->file('as_mn_atribut_5')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut5);
        }
        // inputan 6
        if ($request->file('as_mn_atribut_6')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_6')
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
                ->file('as_mn_atribut_6')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut6 =
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
                ->file('as_mn_atribut_6')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut6);
        }
        // inputan 7
        if ($request->file('as_mn_atribut_7')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_7')
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
                ->file('as_mn_atribut_7')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut7 =
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
                ->file('as_mn_atribut_7')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut7);
        }
        // inputan 4
        if ($request->file('as_mn_atribut_8')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_8')
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
                ->file('as_mn_atribut_8')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut8 =
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
                ->file('as_mn_atribut_8')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut8);
        }
        // inputan 9
        if ($request->file('as_mn_atribut_9')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_mn_atribut_9')
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
                ->file('as_mn_atribut_9')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamemn_atribut9 =
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
                ->file('as_mn_atribut_9')
                ->storeAs('supervisor/project/04_MN', $newnamemn_atribut9);
        }
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
        if ($oldnamemn_atribut2 != $newnamemn_atribut2) {
            $request['mn_atribut_2'] = $newnamemn_atribut2;
            $request['up_by_atribut_mn_2'] = $request['as_up_by_atribut_mn_2'];
            $request['date_mn_atribut_2'] = $request['as_date_mn_atribut_2'];
        }
        if ($oldnamemn_atribut3 != $newnamemn_atribut3) {
            $request['mn_atribut_3'] = $newnamemn_atribut3;
            $request['up_by_atribut_mn_3'] = $request['as_up_by_atribut_mn_3'];
            $request['date_mn_atribut_3'] = $request['as_date_mn_atribut_3'];
        }
        if ($oldnamemn_atribut4 != $newnamemn_atribut4) {
            $request['mn_atribut_4'] = $newnamemn_atribut4;
            $request['up_by_atribut_mn_4'] = $request['as_up_by_atribut_mn_4'];
            $request['date_mn_atribut_4'] = $request['as_date_mn_atribut_4'];
        }
        if ($oldnamemn_atribut5 != $newnamemn_atribut5) {
            $request['mn_atribut_5'] = $newnamemn_atribut5;
            $request['up_by_atribut_mn_5'] = $request['as_up_by_atribut_mn_5'];
            $request['date_mn_atribut_5'] = $request['as_date_mn_atribut_5'];
        }
        if ($oldnamemn_atribut6 != $newnamemn_atribut6) {
            $request['mn_atribut_6'] = $newnamemn_atribut6;
            $request['up_by_atribut_mn_6'] = $request['as_up_by_atribut_mn_6'];
            $request['date_mn_atribut_6'] = $request['as_date_mn_atribut_6'];
        }
        if ($oldnamemn_atribut7 != $newnamemn_atribut7) {
            $request['mn_atribut_7'] = $newnamemn_atribut7;
            $request['up_by_atribut_mn_7'] = $request['as_up_by_atribut_mn_7'];
            $request['date_mn_atribut_7'] = $request['as_date_mn_atribut_7'];
        }
        if ($oldnamemn_atribut8 != $newnamemn_atribut8) {
            $request['mn_atribut_8'] = $newnamemn_atribut8;
            $request['up_by_atribut_mn_8'] = $request['as_up_by_atribut_mn_8'];
            $request['date_mn_atribut_8'] = $request['as_date_mn_atribut_8'];
        }
        if ($oldnamemn_atribut9 != $newnamemn_atribut9) {
            $request['mn_atribut_9'] = $newnamemn_atribut9;
            $request['up_by_atribut_mn_9'] = $request['as_up_by_atribut_mn_9'];
            $request['date_mn_atribut_9'] = $request['as_date_mn_atribut_9'];
        }
        if ($oldnamemn_atribut10 != $newnamemn_atribut10) {
            $request['mn_atribut_10'] = $newnamemn_atribut10;
            $request['up_by_atribut_mn_10'] =
                $request['as_up_by_atribut_mn_10'];
            $request['date_mn_atribut_10'] = $request['as_date_mn_atribut_10'];
        }

        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksimn->update($request->all());
        /* $koneksipr->update($request->all()); */

        return redirect()->action(
            [SpvProjectController::class, 'EmpatFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }

    /* installation */
    public function LimaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);

        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',

            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);

        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        $standar_project = StandarProject::select(
            'file_ipo_form',
            'file_ecr_form',
            'file_sc_form',
            'file_sccs_form',
            'file_in_ir_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.05-detail-installation', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }


    public function ProcessLimaFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',
            'status_pr_01_date'
        )->findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select('id_pa_02_3')->findOrFail($id_pa_02_3);
        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::findOrFail($id_in_5);
        $koneksicl = CLproject::select(
            'id_cl_6',
            'status_cl',
            'status_cl_date'
        )->findOrFail($id_cl_6);

        // namafilelama
        $oldnamein_ipo1 = $koneksiin->in_ipo_1;
        $oldnamein_ipo2 = $koneksiin->in_ipo_2;
        $oldnamein_ipo3 = $koneksiin->in_ipo_3;

        $oldnamein_ecr1 = $koneksiin->in_ecr_1;
        $oldnamein_ecr2 = $koneksiin->in_ecr_2;
        $oldnamein_ecr3 = $koneksiin->in_ecr_3;
        $oldnamein_ecr4 = $koneksiin->in_ecr_4;

        $oldnamein_sc1 = $koneksiin->in_sc_1;
        $oldnamein_sc2 = $koneksiin->in_sc_2;

        $oldnamein_sccs1 = $koneksiin->in_sccs_1;
        $oldnamein_sccs2 = $koneksiin->in_sccs_2;
        $oldnamein_sccs3 = $koneksiin->in_sccs_3;

        $oldnamein_ir1 = $koneksiin->in_ir_1;
        $oldnamein_ir2 = $koneksiin->in_ir_2;

        // namafilearu
        $newnamein_ipo1 = $koneksiin->in_ipo_1;
        $newnamein_ipo2 = $koneksiin->in_ipo_2;
        $newnamein_ipo3 = $koneksiin->in_ipo_3;

        $newnamein_ecr1 = $koneksiin->in_ecr_1;
        $newnamein_ecr2 = $koneksiin->in_ecr_2;
        $newnamein_ecr3 = $koneksiin->in_ecr_3;
        $newnamein_ecr4 = $koneksiin->in_ecr_4;

        $newnamein_sc1 = $koneksiin->in_sc_1;
        $newnamein_sc2 = $koneksiin->in_sc_2;

        $newnamein_sccs1 = $koneksiin->in_sccs_1;
        $newnamein_sccs2 = $koneksiin->in_sccs_2;
        $newnamein_sccs3 = $koneksiin->in_sccs_3;

        $newnamein_ir1 = $koneksiin->in_ir_1;
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
        // inputan 2
        if ($request->file('as_in_ipo_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ipo_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ipo_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_ipo2 =
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
                ->file('as_in_ipo_2')
                ->storeAs('supervisor/project/05_IN', $newnamein_ipo2);
        }
        // inputan 3
        if ($request->file('as_in_ipo_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ipo_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ipo_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_ipo3 =
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
                ->file('as_in_ipo_3')
                ->storeAs('supervisor/project/05_IN', $newnamein_ipo3);
        }

        //ECR
        // inputan 1
        if ($request->file('as_in_ecr_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ecr_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ecr_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_ecr1 =
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
                ->file('as_in_ecr_1')
                ->storeAs('supervisor/project/05_IN', $newnamein_ecr1);
        }
        // inputan 2
        if ($request->file('as_in_ecr_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ecr_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ecr_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_ecr2 =
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
                ->file('as_in_ecr_2')
                ->storeAs('supervisor/project/05_IN', $newnamein_ecr2);
        }
        // inputan 3
        if ($request->file('as_in_ecr_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ecr_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ecr_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_ecr3 =
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
                ->file('as_in_ecr_3')
                ->storeAs('supervisor/project/05_IN', $newnamein_ecr3);
        }
        // inputan 4
        if ($request->file('as_in_ecr_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ecr_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ecr_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_ecr4 =
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
                ->file('as_in_ecr_4')
                ->storeAs('supervisor/project/05_IN', $newnamein_ecr4);
        }
        //SC
        // inputan 1
        if ($request->file('as_in_sc_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_sc_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_sc_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_sc1 =
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
                ->file('as_in_sc_1')
                ->storeAs('supervisor/project/05_IN', $newnamein_sc1);
        }
        // inputan 2
        if ($request->file('as_in_sc_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_sc_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_sc_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_sc2 =
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
                ->file('as_in_sc_2')
                ->storeAs('supervisor/project/05_IN', $newnamein_sc2);
        }
        //sccs
        // inputan 1
        if ($request->file('as_in_sccs_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_sccs_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_sccs_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_sccs1 =
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
                ->file('as_in_sccs_1')
                ->storeAs('supervisor/project/05_IN', $newnamein_sccs1);
        }
        // inputan 2
        if ($request->file('as_in_sccs_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_sccs_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_sccs_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_sccs2 =
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
                ->file('as_in_sccs_2')
                ->storeAs('supervisor/project/05_IN', $newnamein_sccs2);
        }
        // inputan 3
        if ($request->file('as_in_sccs_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_sccs_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_sccs_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_sccs3 =
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
                ->file('as_in_sccs_3')
                ->storeAs('supervisor/project/05_IN', $newnamein_sccs3);
        }
        //ir
        // inputan 1
        if ($request->file('as_in_ir_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_in_ir_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_in_ir_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamein_ir1 =
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
                ->file('as_in_ir_1')
                ->storeAs('supervisor/project/05_IN', $newnamein_ir1);
        }
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
        if ($oldnamein_ipo2 != $newnamein_ipo2) {
            $request['in_ipo_2'] = $newnamein_ipo2;
            $request['up_by_ipo_in_2'] = $request['as_up_by_ipo_in_2'];
            $request['date_in_ipo_2'] = $request['as_date_in_ipo_2'];
        }
        if ($oldnamein_ipo3 != $newnamein_ipo3) {
            $request['in_ipo_3'] = $newnamein_ipo3;
            $request['up_by_ipo_in_3'] = $request['as_up_by_ipo_in_3'];
            $request['date_in_ipo_3'] = $request['as_date_in_ipo_3'];
        }
        //ecr
        // menyimpan jika kosong atau menimpa
        if ($oldnamein_ecr1 != $newnamein_ecr1) {
            $request['in_ecr_1'] = $newnamein_ecr1;
            $request['up_by_ecr_in_1'] = $request['as_up_by_ecr_in_1'];
            $request['date_in_ecr_1'] = $request['as_date_in_ecr_1'];
        }
        if ($oldnamein_ecr2 != $newnamein_ecr2) {
            $request['in_ecr_2'] = $newnamein_ecr2;
            $request['up_by_ecr_in_2'] = $request['as_up_by_ecr_in_2'];
            $request['date_in_ecr_2'] = $request['as_date_in_ecr_2'];
        }
        if ($oldnamein_ecr3 != $newnamein_ecr3) {
            $request['in_ecr_3'] = $newnamein_ecr3;
            $request['up_by_ecr_in_3'] = $request['as_up_by_ecr_in_3'];
            $request['date_in_ecr_3'] = $request['as_date_in_ecr_3'];
        }
        if ($oldnamein_ecr4 != $newnamein_ecr4) {
            $request['in_ecr_4'] = $newnamein_ecr4;
            $request['up_by_ecr_in_4'] = $request['as_up_by_ecr_in_4'];
            $request['date_in_ecr_4'] = $request['as_date_in_ecr_4'];
        }
        //sc
        if ($oldnamein_sc1 != $newnamein_sc1) {
            $request['in_sc_1'] = $newnamein_sc1;
            $request['up_by_sc_in_1'] = $request['as_up_by_sc_in_1'];
            $request['date_in_sc_1'] = $request['as_date_in_sc_1'];
        }
        if ($oldnamein_sc2 != $newnamein_sc2) {
            $request['in_sc_2'] = $newnamein_sc2;
            $request['up_by_sc_in_2'] = $request['as_up_by_sc_in_2'];
            $request['date_in_sc_2'] = $request['as_date_in_sc_2'];
        }
        //sccs
        if ($oldnamein_sccs1 != $newnamein_sccs1) {
            $request['in_sccs_1'] = $newnamein_sccs1;
            $request['up_by_sccs_in_1'] = $request['as_up_by_sccs_in_1'];
            $request['date_in_sccs_1'] = $request['as_date_in_sccs_1'];
        }
        if ($oldnamein_sccs2 != $newnamein_sccs2) {
            $request['in_sccs_2'] = $newnamein_sccs2;
            $request['up_by_sccs_in_2'] = $request['as_up_by_sccs_in_2'];
            $request['date_in_sccs_2'] = $request['as_date_in_sccs_2'];
        }
        if ($oldnamein_sccs3 != $newnamein_sccs3) {
            $request['in_sccs_3'] = $newnamein_sccs3;
            $request['up_by_sccs_in_3'] = $request['as_up_by_sccs_in_3'];
            $request['date_in_sccs_3'] = $request['as_date_in_sccs_3'];
        }

        //ir
        if ($oldnamein_ir1 != $newnamein_ir1) {
            $request['in_ir_1'] = $newnamein_ir1;
            $request['up_by_ir_in_1'] = $request['as_up_by_ir_in_1'];
            $request['date_in_ir_1'] = $request['as_date_in_ir_1'];
        }
        if ($oldnamein_ir2 != $newnamein_ir2) {
            $request['in_ir_2'] = $newnamein_ir2;
            $request['up_by_ir_in_2'] = $request['as_up_by_ir_in_2'];
            $request['date_in_ir_2'] = $request['as_date_in_ir_2'];
        }

        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksiin->update($request->all());

        return redirect()->action(
            [SpvProjectController::class, 'LimaFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
    }

    /* Handover/closed */
    public function EnamFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);

        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date',
            'status_pr_01',

            'mny_parts_pr_1',
            'mny_parts_pr_2',
            'mny_parts_pr_3',
            'mny_parts_pr_4',
            'mny_parts_pr_5',
            'mny_parts_pr_6',
            'mny_parts_pr_7',
            'mny_parts_pr_8',
            'mny_parts_pr_9',
            'mny_parts_pr_10',
            'mny_parts_pr_11',
            'mny_parts_pr_12',
            'mny_parts_pr_13',
            'mny_parts_pr_14',
            'mny_parts_pr_15',
            'mny_parts_pr_16',
            'mny_parts_pr_17',
            'mny_parts_pr_18',
            'mny_parts_pr_19',
            'mny_parts_pr_20',
            'mny_parts_pr_21',
            'mny_parts_pr_22',
            'mny_parts_pr_23',
            'mny_parts_pr_24',
            'mny_parts_pr_25',
            'mny_parts_pr_26',
            'mny_parts_pr_27',
            'mny_parts_pr_28',
            'mny_parts_pr_29',
            'mny_parts_pr_30',
            'mny_parts_pr_31',
            'mny_parts_pr_32',
            'mny_parts_pr_33',
            'mny_parts_pr_34',
            'mny_parts_pr_35',
            'mny_parts_pr_36',
            'mny_parts_pr_37',
            'mny_parts_pr_38',
            'mny_parts_pr_39',
            'mny_parts_pr_40',
            'mny_parts_pr_41',
            'mny_parts_pr_42',
            'mny_parts_pr_43',
            'mny_parts_pr_44',
            'mny_parts_pr_45',

            'mny_jasa_pr_1',
            'mny_jasa_pr_2',
            'mny_jasa_pr_3',
            'mny_jasa_pr_4',
            'mny_jasa_pr_5',
            'mny_jasa_pr_6',
            'mny_jasa_pr_7',
            'mny_jasa_pr_8',
            'mny_jasa_pr_9',
            'mny_jasa_pr_10',
            'mny_jasa_pr_11',
            'mny_jasa_pr_12',
            'mny_jasa_pr_13',
            'mny_jasa_pr_14',
            'mny_jasa_pr_15',
            'mny_jasa_pr_16',
            'mny_jasa_pr_17',
            'mny_jasa_pr_18',
            'mny_jasa_pr_19',
            'mny_jasa_pr_20',
            'mny_jasa_pr_21',
            'mny_jasa_pr_22',
            'mny_jasa_pr_23',
            'mny_jasa_pr_24',
            'mny_jasa_pr_25',
            'mny_jasa_pr_26',
            'mny_jasa_pr_27',
            'mny_jasa_pr_28',
            'mny_jasa_pr_29',
            'mny_jasa_pr_30',
            'mny_mnftr_pr_1',
            'mny_mnftr_pr_2',
            'mny_mnftr_pr_3',
            'mny_mnftr_pr_4',
            'mny_mnftr_pr_5',
            'mny_mnftr_pr_6',
            'mny_mnftr_pr_7',
            'mny_mnftr_pr_8',
            'mny_mnftr_pr_9',
            'mny_mnftr_pr_10'
        )->findOrFail($id_pr_01_3);

        $koneksipa = PAproject::select(
            'id_pa_02_3',
            'status_pa_02',

            'mny_parts_pa_1',
            'mny_parts_pa_2',
            'mny_parts_pa_3',
            'mny_parts_pa_4',
            'mny_parts_pa_5',
            'mny_parts_pa_6',
            'mny_parts_pa_7',
            'mny_parts_pa_8',
            'mny_parts_pa_9',
            'mny_parts_pa_10',
            'mny_parts_pa_11',
            'mny_parts_pa_12',
            'mny_parts_pa_13',
            'mny_parts_pa_14',
            'mny_parts_pa_15',
            'mny_parts_pa_16',
            'mny_parts_pa_17',
            'mny_parts_pa_18',
            'mny_parts_pa_19',
            'mny_parts_pa_20',
            'mny_parts_pa_21',
            'mny_parts_pa_22',
            'mny_parts_pa_23',
            'mny_parts_pa_24',
            'mny_parts_pa_25',
            'mny_parts_pa_26',
            'mny_parts_pa_27',
            'mny_parts_pa_28',
            'mny_parts_pa_29',
            'mny_parts_pa_30',
            'mny_parts_pa_31',
            'mny_parts_pa_32',
            'mny_parts_pa_33',
            'mny_parts_pa_34',
            'mny_parts_pa_35',
            'mny_parts_pa_36',
            'mny_parts_pa_37',
            'mny_parts_pa_38',
            'mny_parts_pa_39',
            'mny_parts_pa_40',
            'mny_parts_pa_41',
            'mny_parts_pa_42',
            'mny_parts_pa_43',
            'mny_parts_pa_44',
            'mny_parts_pa_45',

            'mny_jasa_pa_1',
            'mny_jasa_pa_2',
            'mny_jasa_pa_3',
            'mny_jasa_pa_4',
            'mny_jasa_pa_5',
            'mny_jasa_pa_6',
            'mny_jasa_pa_7',
            'mny_jasa_pa_8',
            'mny_jasa_pa_9',
            'mny_jasa_pa_10',
            'mny_jasa_pa_11',
            'mny_jasa_pa_12',
            'mny_jasa_pa_13',
            'mny_jasa_pa_14',
            'mny_jasa_pa_15',
            'mny_jasa_pa_16',
            'mny_jasa_pa_17',
            'mny_jasa_pa_18',
            'mny_jasa_pa_19',
            'mny_jasa_pa_20',
            'mny_jasa_pa_21',
            'mny_jasa_pa_22',
            'mny_jasa_pa_23',
            'mny_jasa_pa_24',
            'mny_jasa_pa_25',
            'mny_jasa_pa_26',
            'mny_jasa_pa_27',
            'mny_jasa_pa_28',
            'mny_jasa_pa_29',
            'mny_jasa_pa_30',

            'mny_mnftr_pa_1',
            'mny_mnftr_pa_2',
            'mny_mnftr_pa_3',
            'mny_mnftr_pa_4',
            'mny_mnftr_pa_5',
            'mny_mnftr_pa_6',
            'mny_mnftr_pa_7',
            'mny_mnftr_pa_8',
            'mny_mnftr_pa_9',
            'mny_mnftr_pa_10',
            'mny_epq_pa_1',
            'mny_epq_pa_2',
            'mny_epq_pa_3',
            'mny_epq_pa_4',
            'mny_epq_pa_5'
        )->findOrFail($id_pa_02_3);

        $koneksipo = POproject::select(
            'id_po_03_3',
            'status_po_03',

            'mny_parts_po_1',
            'mny_parts_po_2',
            'mny_parts_po_3',
            'mny_parts_po_4',
            'mny_parts_po_5',
            'mny_parts_po_6',
            'mny_parts_po_7',
            'mny_parts_po_8',
            'mny_parts_po_9',
            'mny_parts_po_10',
            'mny_parts_po_11',
            'mny_parts_po_12',
            'mny_parts_po_13',
            'mny_parts_po_14',
            'mny_parts_po_15',
            'mny_parts_po_16',
            'mny_parts_po_17',
            'mny_parts_po_18',
            'mny_parts_po_19',
            'mny_parts_po_20',
            'mny_parts_po_21',
            'mny_parts_po_22',
            'mny_parts_po_23',
            'mny_parts_po_24',
            'mny_parts_po_25',
            'mny_parts_po_26',
            'mny_parts_po_27',
            'mny_parts_po_28',
            'mny_parts_po_29',
            'mny_parts_po_30',
            'mny_parts_po_31',
            'mny_parts_po_32',
            'mny_parts_po_33',
            'mny_parts_po_34',
            'mny_parts_po_35',
            'mny_parts_po_36',
            'mny_parts_po_37',
            'mny_parts_po_38',
            'mny_parts_po_39',
            'mny_parts_po_40',
            'mny_parts_po_41',
            'mny_parts_po_42',
            'mny_parts_po_43',
            'mny_parts_po_44',
            'mny_parts_po_45',

            'mny_jasa_po_1',
            'mny_jasa_po_2',
            'mny_jasa_po_3',
            'mny_jasa_po_4',
            'mny_jasa_po_5',
            'mny_jasa_po_6',
            'mny_jasa_po_7',
            'mny_jasa_po_8',
            'mny_jasa_po_9',
            'mny_jasa_po_10',
            'mny_jasa_po_11',
            'mny_jasa_po_12',
            'mny_jasa_po_13',
            'mny_jasa_po_14',
            'mny_jasa_po_15',
            'mny_jasa_po_16',
            'mny_jasa_po_17',
            'mny_jasa_po_18',
            'mny_jasa_po_19',
            'mny_jasa_po_20',
            'mny_jasa_po_21',
            'mny_jasa_po_22',
            'mny_jasa_po_23',
            'mny_jasa_po_24',
            'mny_jasa_po_25',
            'mny_jasa_po_26',
            'mny_jasa_po_27',
            'mny_jasa_po_28',
            'mny_jasa_po_29',
            'mny_jasa_po_30',

            'mny_mnftr_po_1',
            'mny_mnftr_po_2',
            'mny_mnftr_po_3',
            'mny_mnftr_po_4',
            'mny_mnftr_po_5',
            'mny_mnftr_po_6',
            'mny_mnftr_po_7',
            'mny_mnftr_po_8',
            'mny_mnftr_po_9',
            'mny_mnftr_po_10',
            'mny_capo_po_1',
            'mny_capo_po_2',
            'mny_capo_po_3',
            'mny_capo_po_4',
            'mny_capo_po_5'
        )->findOrFail($id_po_03_3);

        $koneksipay = PAYproject::select(
            'id_pay_04_3',
            'status_pay_04',

            'mny_parts_pay_1',
            'mny_parts_pay_2',
            'mny_parts_pay_3',
            'mny_parts_pay_4',
            'mny_parts_pay_5',
            'mny_parts_pay_6',
            'mny_parts_pay_7',
            'mny_parts_pay_8',
            'mny_parts_pay_9',
            'mny_parts_pay_10',
            'mny_parts_pay_11',
            'mny_parts_pay_12',
            'mny_parts_pay_13',
            'mny_parts_pay_14',
            'mny_parts_pay_15',
            'mny_parts_pay_16',
            'mny_parts_pay_17',
            'mny_parts_pay_18',
            'mny_parts_pay_19',
            'mny_parts_pay_20',
            'mny_parts_pay_21',
            'mny_parts_pay_22',
            'mny_parts_pay_23',
            'mny_parts_pay_24',
            'mny_parts_pay_25',
            'mny_parts_pay_26',
            'mny_parts_pay_27',
            'mny_parts_pay_28',
            'mny_parts_pay_29',
            'mny_parts_pay_30',
            'mny_parts_pay_31',
            'mny_parts_pay_32',
            'mny_parts_pay_33',
            'mny_parts_pay_34',
            'mny_parts_pay_35',
            'mny_parts_pay_36',
            'mny_parts_pay_37',
            'mny_parts_pay_38',
            'mny_parts_pay_39',
            'mny_parts_pay_40',
            'mny_parts_pay_41',
            'mny_parts_pay_42',
            'mny_parts_pay_43',
            'mny_parts_pay_44',
            'mny_parts_pay_45',

            'mny_jasa_pay_1',
            'mny_jasa_pay_2',
            'mny_jasa_pay_3',
            'mny_jasa_pay_4',
            'mny_jasa_pay_5',
            'mny_jasa_pay_6',
            'mny_jasa_pay_7',
            'mny_jasa_pay_8',
            'mny_jasa_pay_9',
            'mny_jasa_pay_10',
            'mny_jasa_pay_11',
            'mny_jasa_pay_12',
            'mny_jasa_pay_13',
            'mny_jasa_pay_14',
            'mny_jasa_pay_15',
            'mny_jasa_pay_16',
            'mny_jasa_pay_17',
            'mny_jasa_pay_18',
            'mny_jasa_pay_19',
            'mny_jasa_pay_20',
            'mny_jasa_pay_21',
            'mny_jasa_pay_22',
            'mny_jasa_pay_23',
            'mny_jasa_pay_24',
            'mny_jasa_pay_25',
            'mny_jasa_pay_26',
            'mny_jasa_pay_27',
            'mny_jasa_pay_28',
            'mny_jasa_pay_29',
            'mny_jasa_pay_30',

            'mny_mnftr_pay_1',
            'mny_mnftr_pay_2',
            'mny_mnftr_pay_3',
            'mny_mnftr_pay_4',
            'mny_mnftr_pay_5',
            'mny_mnftr_pay_6',
            'mny_mnftr_pay_7',
            'mny_mnftr_pay_8',
            'mny_mnftr_pay_9',
            'mny_mnftr_pay_10',
            'mny_da_pay_1',
            'mny_da_pay_2',
            'mny_da_pay_3',
            'mny_da_pay_4',
            'mny_da_pay_5'
        )->findOrFail($id_pay_04_3);

        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::findOrFail($id_cl_6);

        $standar_project = StandarProject::select(
            'file_iperiksam_form',
            'file_qas_form',
            'file_ipakaim_form',
            'file_training_form',
            'file_lup_form',
            'file_camb_form',
            'file_cl_im_form',
            'file_chor_form'
        )
            ->where('marking', 'Standar-1')
            ->get();

        $sum_pr =
            $koneksipr->mny_parts_pr_1 +
            $koneksipr->mny_parts_pr_2 +
            $koneksipr->mny_parts_pr_3 +
            $koneksipr->mny_parts_pr_4 +
            $koneksipr->mny_parts_pr_5 +
            $koneksipr->mny_parts_pr_6 +
            $koneksipr->mny_parts_pr_7 +
            $koneksipr->mny_parts_pr_8 +
            $koneksipr->mny_parts_pr_9 +
            $koneksipr->mny_parts_pr_10 +
            $koneksipr->mny_parts_pr_11 +
            $koneksipr->mny_parts_pr_12 +
            $koneksipr->mny_parts_pr_13 +
            $koneksipr->mny_parts_pr_14 +
            $koneksipr->mny_parts_pr_15 +
            $koneksipr->mny_parts_pr_16 +
            $koneksipr->mny_parts_pr_17 +
            $koneksipr->mny_parts_pr_18 +
            $koneksipr->mny_parts_pr_19 +
            $koneksipr->mny_parts_pr_20 +
            $koneksipr->mny_parts_pr_21 +
            $koneksipr->mny_parts_pr_22 +
            $koneksipr->mny_parts_pr_23 +
            $koneksipr->mny_parts_pr_24 +
            $koneksipr->mny_parts_pr_25 +
            $koneksipr->mny_parts_pr_26 +
            $koneksipr->mny_parts_pr_27 +
            $koneksipr->mny_parts_pr_28 +
            $koneksipr->mny_parts_pr_29 +
            $koneksipr->mny_parts_pr_30 +
            $koneksipr->mny_parts_pr_31 +
            $koneksipr->mny_parts_pr_32 +
            $koneksipr->mny_parts_pr_33 +
            $koneksipr->mny_parts_pr_34 +
            $koneksipr->mny_parts_pr_35 +
            $koneksipr->mny_parts_pr_36 +
            $koneksipr->mny_parts_pr_37 +
            $koneksipr->mny_parts_pr_38 +
            $koneksipr->mny_parts_pr_39 +
            $koneksipr->mny_parts_pr_40 +
            $koneksipr->mny_parts_pr_41 +
            $koneksipr->mny_parts_pr_42 +
            $koneksipr->mny_parts_pr_43 +
            $koneksipr->mny_parts_pr_44 +
            $koneksipr->mny_parts_pr_45 +
            $koneksipr->mny_rfq_pr_1 +
            $koneksipr->mny_rfq_pr_2 +
            $koneksipr->mny_rfq_pr_3 +
            $koneksipr->mny_rfq_pr_4 +
            $koneksipr->mny_rfq_pr_5;

        $koneksipr->mny_jasa_pr_1 +
            $koneksipr->mny_jasa_pr_2 +
            $koneksipr->mny_jasa_pr_3 +
            $koneksipr->mny_jasa_pr_4 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_5 +
            $koneksipr->mny_jasa_pr_6 +
            $koneksipr->mny_jasa_pr_7 +
            $koneksipr->mny_jasa_pr_8 +
            $koneksipr->mny_jasa_pr_9 +
            $koneksipr->mny_jasa_pr_10 +
            $koneksipr->mny_jasa_pr_11 +
            $koneksipr->mny_jasa_pr_12 +
            $koneksipr->mny_jasa_pr_13 +
            $koneksipr->mny_jasa_pr_14 +
            $koneksipr->mny_jasa_pr_15 +
            $koneksipr->mny_jasa_pr_16 +
            $koneksipr->mny_jasa_pr_17 +
            $koneksipr->mny_jasa_pr_18 +
            $koneksipr->mny_jasa_pr_19 +
            $koneksipr->mny_jasa_pr_20 +
            $koneksipr->mny_jasa_pr_21 +
            $koneksipr->mny_jasa_pr_22 +
            $koneksipr->mny_jasa_pr_23 +
            $koneksipr->mny_jasa_pr_24 +
            $koneksipr->mny_jasa_pr_25 +
            $koneksipr->mny_jasa_pr_26 +
            $koneksipr->mny_jasa_pr_27 +
            $koneksipr->mny_jasa_pr_28 +
            $koneksipr->mny_jasa_pr_29 +
            $koneksipr->mny_jasa_pr_30 +
            $koneksipr->mny_mnftr_pr_1 +
            $koneksipr->mny_mnftr_pr_2 +
            $koneksipr->mny_mnftr_pr_3 +
            $koneksipr->mny_mnftr_pr_4 +
            $koneksipr->mny_mnftr_pr_5 +
            $koneksipr->mny_mnftr_pr_6 +
            $koneksipr->mny_mnftr_pr_7 +
            $koneksipr->mny_mnftr_pr_8 +
            $koneksipr->mny_mnftr_pr_9 +
            $koneksipr->mny_mnftr_pr_10;

        $sum_pa =
            $koneksipa->mny_parts_pa_1 +
            $koneksipa->mny_parts_pa_2 +
            $koneksipa->mny_parts_pa_3 +
            $koneksipa->mny_parts_pa_4 +
            $koneksipa->mny_parts_pa_5 +
            $koneksipa->mny_parts_pa_6 +
            $koneksipa->mny_parts_pa_7 +
            $koneksipa->mny_parts_pa_8 +
            $koneksipa->mny_parts_pa_9 +
            $koneksipa->mny_parts_pa_10 +
            $koneksipa->mny_parts_pa_11 +
            $koneksipa->mny_parts_pa_12 +
            $koneksipa->mny_parts_pa_13 +
            $koneksipa->mny_parts_pa_14 +
            $koneksipa->mny_parts_pa_15 +
            $koneksipa->mny_parts_pa_16 +
            $koneksipa->mny_parts_pa_17 +
            $koneksipa->mny_parts_pa_18 +
            $koneksipa->mny_parts_pa_19 +
            $koneksipa->mny_parts_pa_20 +
            $koneksipa->mny_parts_pa_21 +
            $koneksipa->mny_parts_pa_22 +
            $koneksipa->mny_parts_pa_23 +
            $koneksipa->mny_parts_pa_24 +
            $koneksipa->mny_parts_pa_25 +
            $koneksipa->mny_parts_pa_26 +
            $koneksipa->mny_parts_pa_27 +
            $koneksipa->mny_parts_pa_28 +
            $koneksipa->mny_parts_pa_29 +
            $koneksipa->mny_parts_pa_30 +
            $koneksipa->mny_parts_pa_31 +
            $koneksipa->mny_parts_pa_32 +
            $koneksipa->mny_parts_pa_33 +
            $koneksipa->mny_parts_pa_34 +
            $koneksipa->mny_parts_pa_35 +
            $koneksipa->mny_parts_pa_36 +
            $koneksipa->mny_parts_pa_37 +
            $koneksipa->mny_parts_pa_38 +
            $koneksipa->mny_parts_pa_39 +
            $koneksipa->mny_parts_pa_40 +
            $koneksipa->mny_parts_pa_41 +
            $koneksipa->mny_parts_pa_42 +
            $koneksipa->mny_parts_pa_43 +
            $koneksipa->mny_parts_pa_44 +
            $koneksipa->mny_parts_pa_45 +

            $koneksipa->mny_jasa_pa_1 +
            $koneksipa->mny_jasa_pa_2 +
            $koneksipa->mny_jasa_pa_3 +
            $koneksipa->mny_jasa_pa_4 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_5 +
            $koneksipa->mny_jasa_pa_6 +
            $koneksipa->mny_jasa_pa_7 +
            $koneksipa->mny_jasa_pa_8 +
            $koneksipa->mny_jasa_pa_9 +
            $koneksipa->mny_jasa_pa_10 +
            $koneksipa->mny_jasa_pa_11 +
            $koneksipa->mny_jasa_pa_12 +
            $koneksipa->mny_jasa_pa_13 +
            $koneksipa->mny_jasa_pa_14 +
            $koneksipa->mny_jasa_pa_15 +
            $koneksipa->mny_jasa_pa_16 +
            $koneksipa->mny_jasa_pa_17 +
            $koneksipa->mny_jasa_pa_18 +
            $koneksipa->mny_jasa_pa_19 +
            $koneksipa->mny_jasa_pa_20 +
            $koneksipa->mny_jasa_pa_21 +
            $koneksipa->mny_jasa_pa_22 +
            $koneksipa->mny_jasa_pa_23 +
            $koneksipa->mny_jasa_pa_24 +
            $koneksipa->mny_jasa_pa_25 +
            $koneksipa->mny_jasa_pa_26 +
            $koneksipa->mny_jasa_pa_27 +
            $koneksipa->mny_jasa_pa_28 +
            $koneksipa->mny_jasa_pa_29 +
            $koneksipa->mny_jasa_pa_30 +
            $koneksipa->mny_mnftr_pa_1 +
            $koneksipa->mny_mnftr_pa_2 +
            $koneksipa->mny_mnftr_pa_3 +
            $koneksipa->mny_mnftr_pa_4 +
            $koneksipa->mny_mnftr_pa_5 +
            $koneksipa->mny_mnftr_pa_6 +
            $koneksipa->mny_mnftr_pa_7 +
            $koneksipa->mny_mnftr_pa_8 +
            $koneksipa->mny_mnftr_pa_9 +
            $koneksipa->mny_mnftr_pa_10 +
            $koneksipa->mny_epq_pa_1 +
            $koneksipa->mny_epq_pa_2 +
            $koneksipa->mny_epq_pa_3 +
            $koneksipa->mny_epq_pa_4 +
            $koneksipa->mny_epq_pa_5;

        $sum_po =
            $koneksipo->mny_parts_po_1 +
            $koneksipo->mny_parts_po_2 +
            $koneksipo->mny_parts_po_3 +
            $koneksipo->mny_parts_po_4 +
            $koneksipo->mny_parts_po_5 +
            $koneksipo->mny_parts_po_6 +
            $koneksipo->mny_parts_po_7 +
            $koneksipo->mny_parts_po_8 +
            $koneksipo->mny_parts_po_9 +
            $koneksipo->mny_parts_po_10 +
            $koneksipo->mny_parts_po_11 +
            $koneksipo->mny_parts_po_12 +
            $koneksipo->mny_parts_po_13 +
            $koneksipo->mny_parts_po_14 +
            $koneksipo->mny_parts_po_15 +
            $koneksipo->mny_parts_po_16 +
            $koneksipo->mny_parts_po_17 +
            $koneksipo->mny_parts_po_18 +
            $koneksipo->mny_parts_po_19 +
            $koneksipo->mny_parts_po_20 +
            $koneksipo->mny_parts_po_21 +
            $koneksipo->mny_parts_po_22 +
            $koneksipo->mny_parts_po_23 +
            $koneksipo->mny_parts_po_24 +
            $koneksipo->mny_parts_po_25 +
            $koneksipo->mny_parts_po_26 +
            $koneksipo->mny_parts_po_27 +
            $koneksipo->mny_parts_po_28 +
            $koneksipo->mny_parts_po_29 +
            $koneksipo->mny_parts_po_30 +
            $koneksipo->mny_parts_po_31 +
            $koneksipo->mny_parts_po_32 +
            $koneksipo->mny_parts_po_33 +
            $koneksipo->mny_parts_po_34 +
            $koneksipo->mny_parts_po_35 +
            $koneksipo->mny_parts_po_36 +
            $koneksipo->mny_parts_po_37 +
            $koneksipo->mny_parts_po_38 +
            $koneksipo->mny_parts_po_39 +
            $koneksipo->mny_parts_po_40 +
            $koneksipo->mny_parts_po_41 +
            $koneksipo->mny_parts_po_42 +
            $koneksipo->mny_parts_po_43 +
            $koneksipo->mny_parts_po_44 +
            $koneksipo->mny_parts_po_45 +

            $koneksipo->mny_jasa_po_1 +
            $koneksipo->mny_jasa_po_2 +
            $koneksipo->mny_jasa_po_3 +
            $koneksipo->mny_jasa_po_4 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_5 +
            $koneksipo->mny_jasa_po_6 +
            $koneksipo->mny_jasa_po_7 +
            $koneksipo->mny_jasa_po_8 +
            $koneksipo->mny_jasa_po_9 +
            $koneksipo->mny_jasa_po_10 +
            $koneksipo->mny_jasa_po_11 +
            $koneksipo->mny_jasa_po_12 +
            $koneksipo->mny_jasa_po_13 +
            $koneksipo->mny_jasa_po_14 +
            $koneksipo->mny_jasa_po_15 +
            $koneksipo->mny_jasa_po_16 +
            $koneksipo->mny_jasa_po_17 +
            $koneksipo->mny_jasa_po_18 +
            $koneksipo->mny_jasa_po_19 +
            $koneksipo->mny_jasa_po_20 +
            $koneksipo->mny_jasa_po_21 +
            $koneksipo->mny_jasa_po_22 +
            $koneksipo->mny_jasa_po_23 +
            $koneksipo->mny_jasa_po_24 +
            $koneksipo->mny_jasa_po_25 +
            $koneksipo->mny_jasa_po_26 +
            $koneksipo->mny_jasa_po_27 +
            $koneksipo->mny_jasa_po_28 +
            $koneksipo->mny_jasa_po_29 +
            $koneksipo->mny_jasa_po_30 +
            $koneksipo->mny_mnftr_po_1 +
            $koneksipo->mny_mnftr_po_2 +
            $koneksipo->mny_mnftr_po_3 +
            $koneksipo->mny_mnftr_po_4 +
            $koneksipo->mny_mnftr_po_5 +
            $koneksipo->mny_mnftr_po_6 +
            $koneksipo->mny_mnftr_po_7 +
            $koneksipo->mny_mnftr_po_8 +
            $koneksipo->mny_mnftr_po_9 +
            $koneksipo->mny_mnftr_po_10 +
            $koneksipo->mny_capo_po_1 +
            $koneksipo->mny_capo_po_2 +
            $koneksipo->mny_capo_po_3 +
            $koneksipo->mny_capo_po_4 +
            $koneksipo->mny_capo_po_5;

        $sum_pay =
            $koneksipay->mny_parts_pay_1 +
            $koneksipay->mny_parts_pay_2 +
            $koneksipay->mny_parts_pay_3 +
            $koneksipay->mny_parts_pay_4 +
            $koneksipay->mny_parts_pay_5 +
            $koneksipay->mny_parts_pay_6 +
            $koneksipay->mny_parts_pay_7 +
            $koneksipay->mny_parts_pay_8 +
            $koneksipay->mny_parts_pay_9 +
            $koneksipay->mny_parts_pay_10 +
            $koneksipay->mny_parts_pay_11 +
            $koneksipay->mny_parts_pay_12 +
            $koneksipay->mny_parts_pay_13 +
            $koneksipay->mny_parts_pay_14 +
            $koneksipay->mny_parts_pay_15 +
            $koneksipay->mny_parts_pay_16 +
            $koneksipay->mny_parts_pay_17 +
            $koneksipay->mny_parts_pay_18 +
            $koneksipay->mny_parts_pay_19 +
            $koneksipay->mny_parts_pay_20 +
            $koneksipay->mny_parts_pay_21 +
            $koneksipay->mny_parts_pay_22 +
            $koneksipay->mny_parts_pay_23 +
            $koneksipay->mny_parts_pay_24 +
            $koneksipay->mny_parts_pay_25 +
            $koneksipay->mny_parts_pay_26 +
            $koneksipay->mny_parts_pay_27 +
            $koneksipay->mny_parts_pay_28 +
            $koneksipay->mny_parts_pay_29 +
            $koneksipay->mny_parts_pay_30 +
            $koneksipay->mny_parts_pay_31 +
            $koneksipay->mny_parts_pay_32 +
            $koneksipay->mny_parts_pay_33 +
            $koneksipay->mny_parts_pay_34 +
            $koneksipay->mny_parts_pay_35 +
            $koneksipay->mny_parts_pay_36 +
            $koneksipay->mny_parts_pay_37 +
            $koneksipay->mny_parts_pay_38 +
            $koneksipay->mny_parts_pay_39 +
            $koneksipay->mny_parts_pay_40 +
            $koneksipay->mny_parts_pay_41 +
            $koneksipay->mny_parts_pay_42 +
            $koneksipay->mny_parts_pay_43 +
            $koneksipay->mny_parts_pay_44 +
            $koneksipay->mny_parts_pay_45 +

            $koneksipay->mny_jasa_pay_1 +
            $koneksipay->mny_jasa_pay_2 +
            $koneksipay->mny_jasa_pay_3 +
            $koneksipay->mny_jasa_pay_4 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_5 +
            $koneksipay->mny_jasa_pay_6 +
            $koneksipay->mny_jasa_pay_7 +
            $koneksipay->mny_jasa_pay_8 +
            $koneksipay->mny_jasa_pay_9 +
            $koneksipay->mny_jasa_pay_10 +
            $koneksipay->mny_jasa_pay_11 +
            $koneksipay->mny_jasa_pay_12 +
            $koneksipay->mny_jasa_pay_13 +
            $koneksipay->mny_jasa_pay_14 +
            $koneksipay->mny_jasa_pay_15 +
            $koneksipay->mny_jasa_pay_16 +
            $koneksipay->mny_jasa_pay_17 +
            $koneksipay->mny_jasa_pay_18 +
            $koneksipay->mny_jasa_pay_19 +
            $koneksipay->mny_jasa_pay_20 +
            $koneksipay->mny_jasa_pay_21 +
            $koneksipay->mny_jasa_pay_22 +
            $koneksipay->mny_jasa_pay_23 +
            $koneksipay->mny_jasa_pay_24 +
            $koneksipay->mny_jasa_pay_25 +
            $koneksipay->mny_jasa_pay_26 +
            $koneksipay->mny_jasa_pay_27 +
            $koneksipay->mny_jasa_pay_28 +
            $koneksipay->mny_jasa_pay_29 +
            $koneksipay->mny_jasa_pay_30 +
            $koneksipay->mny_mnftr_pay_1 +
            $koneksipay->mny_mnftr_pay_2 +
            $koneksipay->mny_mnftr_pay_3 +
            $koneksipay->mny_mnftr_pay_4 +
            $koneksipay->mny_mnftr_pay_5 +
            $koneksipay->mny_mnftr_pay_6 +
            $koneksipay->mny_mnftr_pay_7 +
            $koneksipay->mny_mnftr_pay_8 +
            $koneksipay->mny_mnftr_pay_9 +
            $koneksipay->mny_mnftr_pay_10 +
            $koneksipay->mny_da_pay_1 +
            $koneksipay->mny_da_pay_2 +
            $koneksipay->mny_da_pay_3 +
            $koneksipay->mny_da_pay_4 +
            $koneksipay->mny_da_pay_5;

        $balance = $viewdataproject->budget_amount - $sum_pay;
        $serverTime = now(); // Mengambil waktu saat ini di sisi server

        // Hitung selisih waktu dan tambahkan ke data yang dikirim ke view
        $deadline = Carbon::parse($viewdataproject->date_end);
        $timeDiff = $deadline->diffInMilliseconds($serverTime);

        // Melanjutkan ke view
        return view('supervisor.project.06-detail-closed', [
            'viewdataproject' => $viewdataproject,
            'koneksifr' => $koneksifr,
            'koneksiar' => $koneksiar,
            'koneksipr' => $koneksipr,
            'koneksipa' => $koneksipa,
            'koneksipo' => $koneksipo,
            'koneksipay' => $koneksipay,
            'koneksimn' => $koneksimn,
            'koneksiin' => $koneksiin,
            'koneksicl' => $koneksicl,
            'sum_pr' => $sum_pr,
            'sum_pa' => $sum_pa,
            'sum_po' => $sum_po,
            'sum_pay' => $sum_pay,
            'balance' => $balance,
            'standar_project' => $standar_project,
            'serverTime' => $serverTime->toIso8601String(),
            'timeDiff' => $timeDiff,
        ]);
    }
    public function ProcessEnamFormProgress(
        Request $request,
        $id,
        $id_fr_1,
        $id_ar_2,
        $id_pr_01_3,
        $id_pa_02_3,
        $id_po_03_3,
        $id_pay_04_3,
        $id_mn_4,
        $id_in_5,
        $id_cl_6
    ) {
        $viewdataproject = CONTROLPROJECT::findOrFail($id);

        // Seluruh tabel dan tahap control project
        $koneksifr = FRproject::select(
            'id_fr_1',
            'status_fr',
            'status_fr_date'
        )->findOrFail($id_fr_1);
        // Mengambil id dan status tiap tahap
        $koneksiar = ARproject::select(
            'id_ar_2',
            'status_ar',
            'status_ar_date'
        )->findOrFail($id_ar_2);
        $koneksipr = PRproject::select(
            'id_pr_01_3',
            'status_purchasing',
            'status_purchasing_date'
        )->findOrFail($id_pr_01_3);
        $koneksipa = PAproject::select('id_pa_02_3')->findOrFail($id_pa_02_3);
        $koneksipo = POproject::select('id_po_03_3')->findOrFail($id_po_03_3);
        $koneksipay = PAYproject::select('id_pay_04_3')->findOrFail(
            $id_pay_04_3
        );
        $koneksimn = MNproject::select(
            'id_mn_4',
            'status_mn',
            'status_mn_date'
        )->findOrFail($id_mn_4);
        $koneksiin = INproject::select(
            'id_in_5',
            'status_in',
            'status_in_date'
        )->findOrFail($id_in_5);
        $koneksicl = CLproject::findOrFail($id_cl_6);

        // Inisialisasi name file
        // namafilelama
        $oldnamecl_i_periksa_m1 = $koneksicl->cl_i_periksa_m_1;
        $oldnamecl_i_periksa_m2 = $koneksicl->cl_i_periksa_m_2;
        $oldnamecl_i_periksa_m3 = $koneksicl->cl_i_periksa_m_3;

        $oldnamecl_qas1 = $koneksicl->cl_qas_1;
        $oldnamecl_qas2 = $koneksicl->cl_qas_2;

        $oldnamecl_i_pakai_m1 = $koneksicl->cl_i_pakai_m_1;
        $oldnamecl_i_pakai_m2 = $koneksicl->cl_i_pakai_m_2;

        $oldnamecl_training1 = $koneksicl->cl_training_1;
        $oldnamecl_training2 = $koneksicl->cl_training_2;
        $oldnamecl_training3 = $koneksicl->cl_training_3;
        $oldnamecl_training4 = $koneksicl->cl_training_4;
        $oldnamecl_training5 = $koneksicl->cl_training_5;

        $oldnamecl_l_trouble1 = $koneksicl->cl_l_trouble_1;
        $oldnamecl_l_trouble2 = $koneksicl->cl_l_trouble_2;

        $oldnamecl_camb1 = $koneksicl->cl_camb_1;
        $oldnamecl_camb2 = $koneksicl->cl_camb_2;

        $oldnamecl_im1 = $koneksicl->cl_im_1;
        $oldnamecl_im2 = $koneksicl->cl_im_2;
        $oldnamecl_im3 = $koneksicl->cl_im_3;
        $oldnamecl_im4 = $koneksicl->cl_im_4;
        $oldnamecl_im5 = $koneksicl->cl_im_5;

        $oldnamecl_chor1 = $koneksicl->cl_chor_1;
        $oldnamecl_chor2 = $koneksicl->cl_chor_2;

        // namafilebaru
        $newnamecl_i_periksa_m1 = $koneksicl->cl_i_periksa_m_1;
        $newnamecl_i_periksa_m2 = $koneksicl->cl_i_periksa_m_2;
        $newnamecl_i_periksa_m3 = $koneksicl->cl_i_periksa_m_3;

        $newnamecl_qas1 = $koneksicl->cl_qas_1;
        $newnamecl_qas2 = $koneksicl->cl_qas_2;

        $newnamecl_i_pakai_m1 = $koneksicl->cl_i_pakai_m_1;
        $newnamecl_i_pakai_m2 = $koneksicl->cl_i_pakai_m_2;

        $newnamecl_training1 = $koneksicl->cl_training_1;
        $newnamecl_training2 = $koneksicl->cl_training_2;
        $newnamecl_training3 = $koneksicl->cl_training_3;
        $newnamecl_training4 = $koneksicl->cl_training_4;
        $newnamecl_training5 = $koneksicl->cl_training_5;

        $newnamecl_l_trouble1 = $koneksicl->cl_l_trouble_1;
        $newnamecl_l_trouble2 = $koneksicl->cl_l_trouble_2;

        $newnamecl_camb1 = $koneksicl->cl_camb_1;
        $newnamecl_camb2 = $koneksicl->cl_camb_2;

        $newnamecl_im1 = $koneksicl->cl_im_1;
        $newnamecl_im2 = $koneksicl->cl_im_2;
        $newnamecl_im3 = $koneksicl->cl_im_3;
        $newnamecl_im4 = $koneksicl->cl_im_4;
        $newnamecl_im5 = $koneksicl->cl_im_5;

        $newnamecl_chor1 = $koneksicl->cl_chor_1;
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
        // inputan 2
        if ($request->file('as_cl_i_periksa_m_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_i_periksa_m_2')
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
                ->file('as_cl_i_periksa_m_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_i_periksa_m2 =
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
                ->file('as_cl_i_periksa_m_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_i_periksa_m2);
        }
        if ($request->file('as_cl_i_periksa_m_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_i_periksa_m_3')
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
                ->file('as_cl_i_periksa_m_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_i_periksa_m3 =
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
                ->file('as_cl_i_periksa_m_3')
                ->storeAs('supervisor/project/06_CL', $newnamecl_i_periksa_m3);
        }
        //qas
        // inputan 1
        if ($request->file('as_cl_qas_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_qas_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_qas_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_qas1 =
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
                ->file('as_cl_qas_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_qas1);
        }
        // inputan 2
        if ($request->file('as_cl_qas_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_qas_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_qas_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_qas2 =
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
                ->file('as_cl_qas_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_qas2);
        }
        //pakai
        // inputan 1
        if ($request->file('as_cl_i_pakai_m_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_i_pakai_m_1')
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
                ->file('as_cl_i_pakai_m_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_i_pakai_m1 =
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
                ->file('as_cl_i_pakai_m_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_i_pakai_m1);
        }
        // inputan 2
        if ($request->file('as_cl_i_pakai_m_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_i_pakai_m_2')
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
                ->file('as_cl_i_pakai_m_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_i_pakai_m2 =
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
                ->file('as_cl_i_pakai_m_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_i_pakai_m2);
        }
        //training
        // inputan 1
        if ($request->file('as_cl_training_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_training_1')
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
                ->file('as_cl_training_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_training1 =
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
                ->file('as_cl_training_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_training1);
        }
        // inputan 2
        if ($request->file('as_cl_training_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_training_2')
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
                ->file('as_cl_training_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_training2 =
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
                ->file('as_cl_training_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_training2);
        }
        // inputan 3
        if ($request->file('as_cl_training_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_training_3')
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
                ->file('as_cl_training_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_training3 =
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
                ->file('as_cl_training_3')
                ->storeAs('supervisor/project/06_CL', $newnamecl_training3);
        }
        // inputan 4
        if ($request->file('as_cl_training_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_training_4')
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
                ->file('as_cl_training_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_training4 =
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
                ->file('as_cl_training_4')
                ->storeAs('supervisor/project/06_CL', $newnamecl_training4);
        }
        // inputan 5
        if ($request->file('as_cl_training_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_training_5')
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
                ->file('as_cl_training_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_training5 =
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
                ->file('as_cl_training_5')
                ->storeAs('supervisor/project/06_CL', $newnamecl_training5);
        }

        //trouble
        // inputan 1
        if ($request->file('as_cl_l_trouble_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_l_trouble_1')
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
                ->file('as_cl_l_trouble_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_l_trouble1 =
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
                ->file('as_cl_l_trouble_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_l_trouble1);
        }
        // inputan 2
        if ($request->file('as_cl_l_trouble_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request
                ->file('as_cl_l_trouble_2')
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
                ->file('as_cl_l_trouble_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_l_trouble2 =
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
                ->file('as_cl_l_trouble_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_l_trouble2);
        }
        //camb
        // inputan 1
        if ($request->file('as_cl_camb_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_camb_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_camb_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_camb1 =
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
                ->file('as_cl_camb_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_camb1);
        }
        // inputan 2
        if ($request->file('as_cl_camb_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_camb_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_camb_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_camb2 =
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
                ->file('as_cl_camb_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_camb2);
        }
        //clim

        // inputan 1
        if ($request->file('as_cl_im_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_im_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_im_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_im1 =
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
                ->file('as_cl_im_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_im1);
        }
        // inputan 2
        if ($request->file('as_cl_im_2')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_im_2')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_im_2')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_im2 =
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
                ->file('as_cl_im_2')
                ->storeAs('supervisor/project/06_CL', $newnamecl_im2);
        }
        // inputan 3
        if ($request->file('as_cl_im_3')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_im_3')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_im_3')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_im3 =
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
                ->file('as_cl_im_3')
                ->storeAs('supervisor/project/06_CL', $newnamecl_im3);
        }
        // inputan 4
        if ($request->file('as_cl_im_4')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_im_4')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_im_4')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_im4 =
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
                ->file('as_cl_im_4')
                ->storeAs('supervisor/project/06_CL', $newnamecl_im4);
        }
        // inputan 5
        if ($request->file('as_cl_im_5')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_im_5')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_im_5')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_im5 =
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
                ->file('as_cl_im_5')
                ->storeAs('supervisor/project/06_CL', $newnamecl_im5);
        }

        //chor
        // inputan 1
        if ($request->file('as_cl_chor_1')) {
            // Menyimpan nama asli dan ekstensi
            $ori_name = $request->file('as_cl_chor_1')->getClientOriginalName();

            // Mengambil waktu sekarang
            $waktu = now()->timestamp;

            $tgl = date('d-M-Y');

            // membuat kode unik berdasarkan data waktu
            $kodeunik = substr(str_shuffle("$waktu"), 0, 3);

            // Mengambil nama saja tidak berikut ektensi
            $filename = pathinfo($ori_name, PATHINFO_FILENAME);

            // Mengambil extensi file
            $extension = $request
                ->file('as_cl_chor_1')
                ->getClientOriginalExtension();

            // Membuat format penamaan file
            $newnamecl_chor1 =
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
                ->file('as_cl_chor_1')
                ->storeAs('supervisor/project/06_CL', $newnamecl_chor1);
        }
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
        if ($oldnamecl_i_periksa_m2 != $newnamecl_i_periksa_m2) {
            $request['cl_i_periksa_m_2'] = $newnamecl_i_periksa_m2;
            $request['up_by_i_periksa_m_cl_2'] =
                $request['as_up_by_i_periksa_m_cl_2'];
            $request['date_cl_i_periksa_m_2'] =
                $request['as_date_cl_i_periksa_m_2'];
        }
        if ($oldnamecl_i_periksa_m3 != $newnamecl_i_periksa_m3) {
            $request['cl_i_periksa_m_3'] = $newnamecl_i_periksa_m3;
            $request['up_by_i_periksa_m_cl_3'] =
                $request['as_up_by_i_periksa_m_cl_3'];
            $request['date_cl_i_periksa_m_3'] =
                $request['as_date_cl_i_periksa_m_3'];
        }
        if ($oldnamecl_qas1 != $newnamecl_qas1) {
            $request['cl_qas_1'] = $newnamecl_qas1;
            $request['up_by_qas_cl_1'] = $request['as_up_by_qas_cl_1'];
            $request['date_cl_qas_1'] = $request['as_date_cl_qas_1'];
        }
        if ($oldnamecl_qas2 != $newnamecl_qas2) {
            $request['cl_qas_2'] = $newnamecl_qas2;
            $request['up_by_qas_cl_2'] = $request['as_up_by_qas_cl_2'];
            $request['date_cl_qas_2'] = $request['as_date_cl_qas_2'];
        }
        if ($oldnamecl_i_pakai_m1 != $newnamecl_i_pakai_m1) {
            $request['cl_i_pakai_m_1'] = $newnamecl_i_pakai_m1;
            $request['up_by_i_pakai_m_cl_1'] =
                $request['as_up_by_i_pakai_m_cl_1'];
            $request['date_cl_i_pakai_m_1'] =
                $request['as_date_cl_i_pakai_m_1'];
        }
        if ($oldnamecl_i_pakai_m2 != $newnamecl_i_pakai_m2) {
            $request['cl_i_pakai_m_2'] = $newnamecl_i_pakai_m2;
            $request['up_by_i_pakai_m_cl_2'] =
                $request['as_up_by_i_pakai_m_cl_2'];
            $request['date_cl_i_pakai_m_2'] =
                $request['as_date_cl_i_pakai_m_2'];
        }
        if ($oldnamecl_training1 != $newnamecl_training1) {
            $request['cl_training_1'] = $newnamecl_training1;
            $request['up_by_training_cl_1'] =
                $request['as_up_by_training_cl_1'];
            $request['date_cl_training_1'] = $request['as_date_cl_training_1'];
        }
        if ($oldnamecl_training2 != $newnamecl_training2) {
            $request['cl_training_2'] = $newnamecl_training2;
            $request['up_by_training_cl_2'] =
                $request['as_up_by_training_cl_2'];
            $request['date_cl_training_2'] = $request['as_date_cl_training_2'];
        }
        if ($oldnamecl_training3 != $newnamecl_training3) {
            $request['cl_training_3'] = $newnamecl_training3;
            $request['up_by_training_cl_3'] =
                $request['as_up_by_training_cl_3'];
            $request['date_cl_training_3'] = $request['as_date_cl_training_3'];
        }
        if ($oldnamecl_training4 != $newnamecl_training4) {
            $request['cl_training_4'] = $newnamecl_training4;
            $request['up_by_training_cl_4'] =
                $request['as_up_by_training_cl_4'];
            $request['date_cl_training_4'] = $request['as_date_cl_training_4'];
        }
        if ($oldnamecl_training5 != $newnamecl_training5) {
            $request['cl_training_5'] = $newnamecl_training5;
            $request['up_by_training_cl_5'] =
                $request['as_up_by_training_cl_5'];
            $request['date_cl_training_5'] = $request['as_date_cl_training_5'];
        }
        if ($oldnamecl_l_trouble1 != $newnamecl_l_trouble1) {
            $request['cl_l_trouble_1'] = $newnamecl_l_trouble1;
            $request['up_by_l_trouble_cl_1'] =
                $request['as_up_by_l_trouble_cl_1'];
            $request['date_cl_l_trouble_1'] =
                $request['as_date_cl_l_trouble_1'];
        }
        if ($oldnamecl_l_trouble2 != $newnamecl_l_trouble2) {
            $request['cl_l_trouble_2'] = $newnamecl_l_trouble2;
            $request['up_by_l_trouble_cl_2'] =
                $request['as_up_by_l_trouble_cl_2'];
            $request['date_cl_l_trouble_2'] =
                $request['as_date_cl_l_trouble_2'];
        }
        if ($oldnamecl_camb1 != $newnamecl_camb1) {
            $request['cl_camb_1'] = $newnamecl_camb1;
            $request['up_by_camb_cl_1'] = $request['as_up_by_camb_cl_1'];
            $request['date_cl_camb_1'] = $request['as_date_cl_camb_1'];
        }
        if ($oldnamecl_camb2 != $newnamecl_camb2) {
            $request['cl_camb_2'] = $newnamecl_camb2;
            $request['up_by_camb_cl_2'] = $request['as_up_by_camb_cl_2'];
            $request['date_cl_camb_2'] = $request['as_date_cl_camb_2'];
        }
        if ($oldnamecl_im1 != $newnamecl_im1) {
            $request['cl_im_1'] = $newnamecl_im1;
            $request['up_by_im_cl_1'] = $request['as_up_by_im_cl_1'];
            $request['date_cl_im_1'] = $request['as_date_cl_im_1'];
        }
        if ($oldnamecl_im2 != $newnamecl_im2) {
            $request['cl_im_2'] = $newnamecl_im2;
            $request['up_by_im_cl_2'] = $request['as_up_by_im_cl_2'];
            $request['date_cl_im_2'] = $request['as_date_cl_im_2'];
        }
        if ($oldnamecl_im3 != $newnamecl_im3) {
            $request['cl_im_3'] = $newnamecl_im3;
            $request['up_by_im_cl_3'] = $request['as_up_by_im_cl_3'];
            $request['date_cl_im_3'] = $request['as_date_cl_im_3'];
        }
        if ($oldnamecl_im4 != $newnamecl_im4) {
            $request['cl_im_4'] = $newnamecl_im4;
            $request['up_by_im_cl_4'] = $request['as_up_by_im_cl_4'];
            $request['date_cl_im_4'] = $request['as_date_cl_im_4'];
        }
        if ($oldnamecl_im5 != $newnamecl_im5) {
            $request['cl_im_5'] = $newnamecl_im5;
            $request['up_by_im_cl_5'] = $request['as_up_by_im_cl_5'];
            $request['date_cl_im_5'] = $request['as_date_cl_im_5'];
        }
        if ($oldnamecl_chor1 != $newnamecl_chor1) {
            $request['cl_chor_1'] = $newnamecl_chor1;
            $request['up_by_chor_cl_1'] = $request['as_up_by_chor_cl_1'];
            $request['date_cl_chor_1'] = $request['as_date_cl_chor_1'];
        }
        if ($oldnamecl_chor2 != $newnamecl_chor2) {
            $request['cl_chor_2'] = $newnamecl_chor2;
            $request['up_by_chor_cl_2'] = $request['as_up_by_chor_cl_2'];
            $request['date_cl_chor_2'] = $request['as_date_cl_chor_2'];
        }
        //dikit lagi
        // menyimpan seluruh ke table purchasing 01
        $viewdataproject->update($request->all());
        $koneksicl->update($request->all());

        return redirect()->action(
            [SpvProjectController::class, 'EnamFormProgress'],
            [
                'id' => $viewdataproject->id,
                'id_fr_1' => $koneksifr->id_fr_1,
                'id_ar_2' => $koneksiar->id_ar_2,
                'id_pr_01_3' => $koneksipr->id_pr_01_3,
                'id_pa_02_3' => $koneksipa->id_pa_02_3,
                'id_po_03_3' => $koneksipo->id_po_03_3,
                'id_pay_04_3' => $koneksipay->id_pay_04_3,
                'id_mn_4' => $koneksimn->id_mn_4,
                'id_in_5' => $koneksiin->id_in_5,
                'id_cl_6' => $koneksicl->id_cl_6,
            ]
        );
        /* return redirect('seluruh-proyek'); */
    }
}
