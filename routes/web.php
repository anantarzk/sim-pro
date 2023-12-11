<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SpvFormController;
use App\Http\Controllers\StaffFormController;
use App\Http\Controllers\SpvProjectController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\SpvProjectController0;
use App\Http\Controllers\StaffProjectController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\SpvStandarProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// dasar route
// Route::get('/', function () {
//     return view('login');
// });

// Dasar
Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/testing-page', function () {
    return view('testing-page');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/dtl', function () {
    return view('00-dari_ananta.proyek.detail-fr');
});

// Auto Redirect dashbooard menurut level

// Administrator
Route::get('/dashboard-administrator', [
    AdministratorController::class,
    'IndexAdministrator',
])->middleware(['auth', 'only-administrator']);

Route::get('/registrasi-account', [
    AdministratorController::class,
    'register',
])->middleware(['auth', 'only-administrator']);

Route::post('/registrasi-account', [
    AdministratorController::class,
    'registerprocess',
])->middleware(['auth', 'only-administrator']);

Route::get('/log-activity', [
    AdministratorController::class,
    'ActivityLog',
])->middleware(['auth', 'only-administrator']);

Route::get('/kelola-akun', [
    AdministratorController::class,
    'KelolaAkun',
])->middleware(['auth', 'only-administrator']);

Route::get('/edit-akun/{id}', [
    AdministratorController::class,
    'EditAkun',
])->middleware(['auth', 'only-administrator']);

Route::put('/edit-akun/{id}', [
    AdministratorController::class,
    'ProcessEditAkun',
])->middleware(['auth', 'only-administrator']);

Route::get('/hapus-akun/{id}', [
    AdministratorController::class,
    'HapusAkun',
])->middleware(['auth', 'only-administrator']);


Route::delete('/hapus-akun/{id}', [
    AdministratorController::class,
    'ProcessHapusAkun',
])->middleware(['auth', 'only-administrator']);


// ==============================
// Manager
Route::get('/dashboard-manager', [
    ManagerController::class,
    'IndexManager',
])->middleware(['auth', 'only-manager']);

// ======================
// Supervisor
Route::get('/dashboard-supervisor', [
    SupervisorController::class,
    'IndexSupervisor',
])->middleware(['auth', 'only-supervisor']);

Route::get('/progress-approval-supervisor', [
    SupervisorController::class,
    'ApprovalProgress',
])->middleware(['auth', 'only-supervisor']);

Route::get('/budget-control-ob-supervisor', [
    SupervisorController::class,
    'BudgetControlOb',
])->middleware(['auth', 'only-supervisor']);

Route::post('/budget-control-ob-supervisor', [
    SupervisorController::class,
    'ProcessBudgetControlOb',
])->middleware(['auth', 'only-supervisor']);

Route::put('/budget-control-ob-supervisor', [
    SupervisorController::class,
    'ProcessEditBudgetControlOb',
])->middleware(['auth', 'only-supervisor']);

//standar form
Route::get('/supervisor-standar-form', [
    SpvFormController::class,
    'StandarForm',
])->middleware(['auth', 'only-supervisor']);

Route::get('/supervisor-tambah-data-form', [
    SpvFormController::class,
    'TambahDataForm',
])->middleware(['auth', 'only-supervisor']);

Route::post('/supervisor-tambah-data-form', [
    SpvFormController::class,
    'ProcessTambahDataForm',
])->middleware(['auth', 'only-supervisor']);

Route::get('/supervisor-edit-data-form/{id}', [
    SpvFormController::class,
    'EditDataForm',
])->middleware(['auth', 'only-supervisor']);

Route::put('/supervisor-standar-form/{id}', [
    SpvFormController::class,
    'UpdateDataForm',
])->middleware(['auth', 'only-supervisor']);

Route::get('/supervisor-delete-data-form/{id}', [
    SpvFormController::class,
    'DeleteDataForm',
])->middleware(['auth', 'only-supervisor']);

Route::delete('/supervisor-delete-detail-data-form/{id}', [
    SpvFormController::class,
    'DeleteDetailDataForm',
])->middleware(['auth', 'only-supervisor']);

Route::get('/supervisor-standar-form-dead-active', [
    SpvFormController::class,
    'StandarFormDeadActive',
])->middleware(['auth', 'only-supervisor']);

Route::get('/supervisor-standar-form-dead-active/{id}/restore', [
    SpvFormController::class,
    'StandarFormRestore',
])->middleware(['auth', 'only-supervisor']);

// Proyek
Route::get('/test', [SpvProjectController::class, 'testing'])->middleware([
    'auth',
    'only-supervisor',
]);

Route::get('/tambah-project', [
    SpvProjectController::class,
    'TambahProject',
])->middleware(['auth', 'only-supervisor']);

Route::get('/tambah-project', [
    SpvProjectController::class,
    'TambahProject',
])->middleware(['auth', 'only-supervisor']);

Route::post('/tambah-project', [
    SpvProjectController::class,
    'ProcessTambahNewProject',
])->middleware(['auth', 'only-supervisor']);

Route::get('/edit-project/{id}', [
    SpvProjectController::class,
    'EditProject',
])->middleware(['auth', 'only-supervisor']);

Route::put('/edit-project/{id}', [
    SpvProjectController::class,
    'ProcessEditProject',
])->middleware(['auth', 'only-supervisor']);

Route::get('/hapus-project/{id}', [
    SpvProjectController::class,
    'HapusProject',
])->middleware(['auth', 'only-supervisor']);

Route::delete('/hapus-project/{id}', [
    SpvProjectController::class,
    'ProcessHapusProject',
])->middleware(['auth', 'only-supervisor']);

Route::get(
    '/arsip-project/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ArsipProject']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/arsip-project/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessArsipProject']
)->middleware(['auth', 'only-supervisor']);

Route::get('/restore-arsip-project/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}', [
    SpvProjectController::class,
    'RestoreArsipProject',
])->middleware(['auth', 'only-supervisor']);

Route::put('/restore-arsip-project/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}', [
    SpvProjectController::class,
    'ProcessRestoreArsipProject',
])->middleware(['auth', 'only-supervisor']);

Route::get('/seluruh-proyek-supervisor-manager', [
    SpvProjectController::class,
    'LandingProjectSupervisor',
])->middleware(['auth', 'only-supervisor']);

Route::get('/arsip-seluruh-proyek-supervisor-manager', [
    SpvProjectController::class,
    'ArsipLandingProjectSupervisor',
])->middleware(['auth', 'only-supervisor']);

Route::get('/seluruh-proyek', [
    SpvProjectController::class,
    'LandingSeluruhProject',
])->middleware(['auth', 'only-supervisor']);

Route::get(
    '/redirect-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'RedirectPage']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/01-fundrequest-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'SatuFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/01-fundrequest-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessSatuFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::post('/hapus-satu-form/{id}', [SpvProjectController::class, 'HapusSatuForm'])->middleware(['auth', 'only-supervisor']);

Route::get(
    '/02-arrangement-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'DuaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/02-arrangement-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessDuaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/03-01-PR-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'TigaTitikSatuFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/03-01-PR-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessTigaTitikSatuFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/03-02-PA-purchase-approval-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'TigaTitikDuaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/03-02-PA-purchase-approval-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessTigaTitikDuaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/03-03-PO-purchase-order-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'TigaTitikTigaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/03-03-PO-purchase-order-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessTigaTitikTigaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/03-04-PAY-payment-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'TigaTitikEmpatFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/03-04-PAY-payment-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessTigaTitikEmpatFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/04-manufacturing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'EmpatFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/04-manufacturing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessEmpatFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/05-installation-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'LimaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/05-installation-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessLimaFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::get(
    '/06-closed-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'EnamFormProgress']
)->middleware(['auth', 'only-supervisor']);

Route::put(
    '/06-closed-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [SpvProjectController::class, 'ProcessEnamFormProgress']
)->middleware(['auth', 'only-supervisor']);

//standar project
Route::get('/tambah-standar-project', [
    SpvStandarProjectController::class,
    'StandarProject',
])->middleware(['auth', 'only-supervisor']);

Route::post('/tambah-standar-project', [
    SpvStandarProjectController::class,
    'ProcessStandarProject',
])->middleware(['auth', 'only-supervisor']);
Route::put('/tambah-standar-project', [
    SpvStandarProjectController::class,
    'ProcessEditStandarProject',
])->middleware(['auth', 'only-supervisor']);

// ===========================
// Staff
Route::get('/dashboard-staff', [
    StaffProjectController::class,
    'LandingSeluruhProject',
])->middleware(['auth', 'only-staff']);

// standar form

Route::get('/staff-standar-form', [
    StaffFormController::class,
    'StaffStandarForm',
])->middleware(['auth', 'only-staff']);

// project staff

Route::get('/staff-seluruh-proyek', [
    StaffProjectController::class,
    'LandingSeluruhProject',
])->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-redirect-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'RedirectPage']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-01-fundrequest-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'SatuFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-01-fundrequest-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessSatuFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-02-arrangement-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'DuaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-02-arrangement-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessDuaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-03-01-PR-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'TigaTitikSatuFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-03-01-PR-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessTigaTitikSatuFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-03-02-PA-purchase-approval-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'TigaTitikDuaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-03-02-PA-purchase-approval-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessTigaTitikDuaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-03-03-PO-purchase-order-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'TigaTitikTigaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-03-03-PO-purchase-order-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessTigaTitikTigaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-03-04-PAY-payment-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'TigaTitikEmpatFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-03-04-PAY-payment-purchasing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessTigaTitikEmpatFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-04-manufacturing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'EmpatFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-04-manufacturing-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessEmpatFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-05-installation-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'LimaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-05-installation-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessLimaFormProgress']
)->middleware(['auth', 'only-staff']);

Route::get(
    '/staff-06-closed-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'EnamFormProgress']
)->middleware(['auth', 'only-staff']);

Route::put(
    '/staff-06-closed-proyek/{id}/{id_fr_1}/{id_ar_2}/{id_pr_01_3}/{id_pa_02_3}/{id_po_03_3}/{id_pay_04_3}/{id_mn_4}/{id_in_5}/{id_cl_6}',
    [StaffProjectController::class, 'ProcessEnamFormProgress']
)->middleware(['auth', 'only-staff']);

// =======================
//Route Login
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'authenticating']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);

// Route Logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Login agar tidak bisa tekan url login
// Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/view_profile_manager', [
    AuthController::class,
    'ViewProfilemanager',
])->middleware('auth');
Route::get('/view_profile_supervisor', [
    AuthController::class,
    'ViewProfilesupervisor',
])->middleware('auth');
Route::get('/view_profile_staff', [
    AuthController::class,
    'ViewProfilestaff',
])->middleware('auth');
Route::get('/view_profile_administrator', [
    AuthController::class,
    'ViewProfileadministrator',
])->middleware('auth');

Route::get('/view_team_manager', [
    AuthController::class,
    'ViewTeammanager',
])->middleware('auth');
Route::get('/view_team_supervisor', [
    AuthController::class,
    'ViewTeamsupervisor',
])->middleware('auth');
Route::get('/view_team_staff', [
    AuthController::class,
    'ViewTeamstaff',
])->middleware('auth');
Route::get('/view_team_administrator', [
    AuthController::class,
    'ViewTeamadministrator',
])->middleware('auth');
