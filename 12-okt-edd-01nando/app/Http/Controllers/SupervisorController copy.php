<?php

namespace App\Http\Controllers;

use App\Models\Forms;
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
use App\Models\PlannedPayment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SupervisorController extends Controller
{
    // Berisi Route untuk ke seluruh page dan visual
    // Tidak berisi proses
    public function IndexSupervisor(Request $request)
    {
        DB::enableQueryLog();
        $keyword = $request->keyword;
        // for dashboar
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

        $totalprojectaprroval = CONTROLPROJECT::select('id')
            ->whereNull('archive_at')
            ->where('check', 'needcheck')
            ->count('id');

        // queri januari

        $jan_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_1');

        $jan_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_2');

        $jan_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_3');

        $jan_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_4');

        $jan_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_5');

        $jan_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_6');

        $jan_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_7');

        $jan_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_8');

        $jan_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_9');

        $jan_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_10');

        $jan_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_11');

        $jan_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_12');

        $jan_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_13');

        $jan_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_14');

        $jan_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_15');

        $jan_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_16');

        $jan_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_17');

        $jan_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-01-30'))
            ->sum('mny_parts_pay_18');

        $jan_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-01-30'))
            ->sum('mny_jasa_pay_1');

        $jan_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-01-30'))
            ->sum('mny_jasa_pay_2');

        $jan_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-01-30'))
            ->sum('mny_jasa_pay_3');
        $jan_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-01-30'))
            ->sum('mny_jasa_pay_4');

        $jan_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-01-30'))
            ->sum('mny_mnftr_pay_1');

        $jan_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-01-30'))
            ->sum('mny_mnftr_pay_2');

        $jan_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-01-30'))
            ->sum('mny_mnftr_pay_3');

        $jan_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-01-30'))
            ->sum('mny_mnftr_pay_4');

        $jan_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-01-30'))
            ->sum('mny_da_pay_1');

        $jan_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-01-30'))
            ->sum('mny_da_pay_2');

        $jan_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-01-30'))
            ->sum('mny_da_pay_3');

        $jan_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-01-30'))
            ->sum('mny_da_pay_4');

        // februari
        $feb_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_1');

        $feb_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_2');

        $feb_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_3');

        $feb_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_4');

        $feb_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_5');

        $feb_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_6');

        $feb_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_7');

        $feb_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_8');

        $feb_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_9');

        $feb_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_10');

        $feb_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_11');

        $feb_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_12');

        $feb_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_13');

        $feb_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_14');

        $feb_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_15');

        $feb_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_16');

        $feb_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_17');

        $feb_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-02-28'))
            ->sum('mny_parts_pay_18');

        $feb_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-02-28'))
            ->sum('mny_jasa_pay_1');

        $feb_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-02-28'))
            ->sum('mny_jasa_pay_2');

        $feb_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-02-28'))
            ->sum('mny_jasa_pay_3');
        $feb_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-02-28'))
            ->sum('mny_jasa_pay_4');

        $feb_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-02-28'))
            ->sum('mny_mnftr_pay_1');

        $feb_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-02-28'))
            ->sum('mny_mnftr_pay_2');

        $feb_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-02-28'))
            ->sum('mny_mnftr_pay_3');

        $feb_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-02-28'))
            ->sum('mny_mnftr_pay_4');

        $feb_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-02-28'))
            ->sum('mny_da_pay_1');

        $feb_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-02-28'))
            ->sum('mny_da_pay_2');

        $feb_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-02-28'))
            ->sum('mny_da_pay_3');

        $feb_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-02-28'))
            ->sum('mny_da_pay_4');

        //maret
        $mar_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_1');

        $mar_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_2');

        $mar_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_3');

        $mar_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_4');

        $mar_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_5');

        $mar_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_6');

        $mar_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_7');

        $mar_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_8');

        $mar_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_9');

        $mar_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_10');

        $mar_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_11');

        $mar_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_12');

        $mar_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_13');

        $mar_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_14');

        $mar_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_15');

        $mar_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_16');

        $mar_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_17');

        $mar_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-03-30'))
            ->sum('mny_parts_pay_18');

        $mar_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-03-30'))
            ->sum('mny_jasa_pay_1');

        $mar_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-03-30'))
            ->sum('mny_jasa_pay_2');

        $mar_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-03-30'))
            ->sum('mny_jasa_pay_3');
        $mar_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-03-30'))
            ->sum('mny_jasa_pay_4');

        $mar_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-03-30'))
            ->sum('mny_mnftr_pay_1');

        $mar_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-03-30'))
            ->sum('mny_mnftr_pay_2');

        $mar_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-03-30'))
            ->sum('mny_mnftr_pay_3');

        $mar_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-03-30'))
            ->sum('mny_mnftr_pay_4');

        $mar_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-03-30'))
            ->sum('mny_da_pay_1');

        $mar_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-03-30'))
            ->sum('mny_da_pay_2');

        $mar_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-03-30'))
            ->sum('mny_da_pay_3');

        $mar_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-03-30'))
            ->sum('mny_da_pay_4');
        //april
        $apr_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_1');

        $apr_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_2');

        $apr_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_3');

        $apr_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_4');

        $apr_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_5');

        $apr_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_6');

        $apr_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_7');

        $apr_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_8');

        $apr_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_9');

        $apr_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_10');

        $apr_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_11');

        $apr_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_12');

        $apr_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_13');

        $apr_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_14');

        $apr_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_15');

        $apr_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_16');

        $apr_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_17');

        $apr_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-04-30'))
            ->sum('mny_parts_pay_18');

        $apr_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-04-30'))
            ->sum('mny_jasa_pay_1');

        $apr_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-04-30'))
            ->sum('mny_jasa_pay_2');

        $apr_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-04-30'))
            ->sum('mny_jasa_pay_3');
        $apr_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-04-30'))
            ->sum('mny_jasa_pay_4');

        $apr_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-04-30'))
            ->sum('mny_mnftr_pay_1');

        $apr_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-04-30'))
            ->sum('mny_mnftr_pay_2');

        $apr_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-04-30'))
            ->sum('mny_mnftr_pay_3');

        $apr_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-04-30'))
            ->sum('mny_mnftr_pay_4');

        $apr_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-04-30'))
            ->sum('mny_da_pay_1');

        $apr_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-04-30'))
            ->sum('mny_da_pay_2');

        $apr_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-04-30'))
            ->sum('mny_da_pay_3');

        $apr_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-04-30'))
            ->sum('mny_da_pay_4');

        //mei
        $mei_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_1');

        $mei_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_2');

        $mei_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_3');

        $mei_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_4');

        $mei_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_5');

        $mei_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_6');

        $mei_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_7');

        $mei_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_8');

        $mei_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_9');

        $mei_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_10');

        $mei_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_11');

        $mei_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_12');

        $mei_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_13');

        $mei_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_14');

        $mei_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_15');

        $mei_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_16');

        $mei_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_17');

        $mei_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-05-30'))
            ->sum('mny_parts_pay_18');

        $mei_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-05-30'))
            ->sum('mny_jasa_pay_1');

        $mei_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-05-30'))
            ->sum('mny_jasa_pay_2');

        $mei_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-05-30'))
            ->sum('mny_jasa_pay_3');
        $mei_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-05-30'))
            ->sum('mny_jasa_pay_4');

        $mei_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-05-30'))
            ->sum('mny_mnftr_pay_1');

        $mei_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-05-30'))
            ->sum('mny_mnftr_pay_2');

        $mei_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-05-30'))
            ->sum('mny_mnftr_pay_3');

        $mei_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-05-30'))
            ->sum('mny_mnftr_pay_4');

        $mei_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-05-30'))
            ->sum('mny_da_pay_1');

        $mei_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-05-30'))
            ->sum('mny_da_pay_2');

        $mei_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-05-30'))
            ->sum('mny_da_pay_3');

        $mei_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-05-30'))
            ->sum('mny_da_pay_4');

        //juni
        $jun_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_1');

        $jun_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_2');

        $jun_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_3');

        $jun_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_4');

        $jun_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_5');

        $jun_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_6');

        $jun_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_7');

        $jun_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_8');

        $jun_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_9');

        $jun_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_10');

        $jun_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_11');

        $jun_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_12');

        $jun_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_13');

        $jun_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_14');

        $jun_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_15');

        $jun_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_16');

        $jun_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_17');

        $jun_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-06-30'))
            ->sum('mny_parts_pay_18');

        $jun_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-06-30'))
            ->sum('mny_jasa_pay_1');

        $jun_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-06-30'))
            ->sum('mny_jasa_pay_2');

        $jun_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-06-30'))
            ->sum('mny_jasa_pay_3');
        $jun_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-06-30'))
            ->sum('mny_jasa_pay_4');

        $jun_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-06-30'))
            ->sum('mny_mnftr_pay_1');

        $jun_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-06-30'))
            ->sum('mny_mnftr_pay_2');

        $jun_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-06-30'))
            ->sum('mny_mnftr_pay_3');

        $jun_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-06-30'))
            ->sum('mny_mnftr_pay_4');

        $jun_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-06-30'))
            ->sum('mny_da_pay_1');

        $jun_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-06-30'))
            ->sum('mny_da_pay_2');

        $jun_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-06-30'))
            ->sum('mny_da_pay_3');

        $jun_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-06-30'))
            ->sum('mny_da_pay_4');

        //juli
        $jul_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_1');

        $jul_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_2');

        $jul_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_3');

        $jul_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_4');

        $jul_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_5');

        $jul_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_6');

        $jul_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_7');

        $jul_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_8');

        $jul_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_9');

        $jul_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_10');

        $jul_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_11');

        $jul_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_12');

        $jul_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_13');

        $jul_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_14');

        $jul_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_15');

        $jul_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_16');

        $jul_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_17');

        $jul_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-07-30'))
            ->sum('mny_parts_pay_18');

        $jul_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-07-30'))
            ->sum('mny_jasa_pay_1');

        $jul_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-07-30'))
            ->sum('mny_jasa_pay_2');

        $jul_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-07-30'))
            ->sum('mny_jasa_pay_3');
        $jul_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-07-30'))
            ->sum('mny_jasa_pay_4');

        $jul_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-07-30'))
            ->sum('mny_mnftr_pay_1');

        $jul_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-07-30'))
            ->sum('mny_mnftr_pay_2');

        $jul_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-07-30'))
            ->sum('mny_mnftr_pay_3');

        $jul_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-07-30'))
            ->sum('mny_mnftr_pay_4');

        $jul_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-07-30'))
            ->sum('mny_da_pay_1');

        $jul_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-07-30'))
            ->sum('mny_da_pay_2');

        $jul_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-07-30'))
            ->sum('mny_da_pay_3');

        $jul_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-07-30'))
            ->sum('mny_da_pay_4');

        //agustus
        $agu_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_1');

        $agu_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_2');

        $agu_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_3');

        $agu_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_4');

        $agu_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_5');

        $agu_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_6');

        $agu_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_7');

        $agu_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_8');

        $agu_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_9');

        $agu_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_10');

        $agu_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_11');

        $agu_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_12');

        $agu_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_13');

        $agu_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_14');

        $agu_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_15');

        $agu_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_16');

        $agu_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_17');

        $agu_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-08-30'))
            ->sum('mny_parts_pay_18');

        $agu_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-08-30'))
            ->sum('mny_jasa_pay_1');

        $agu_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-08-30'))
            ->sum('mny_jasa_pay_2');

        $agu_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-08-30'))
            ->sum('mny_jasa_pay_3');
        $agu_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-08-30'))
            ->sum('mny_jasa_pay_4');

        $agu_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-08-30'))
            ->sum('mny_mnftr_pay_1');

        $agu_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-08-30'))
            ->sum('mny_mnftr_pay_2');

        $agu_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-08-30'))
            ->sum('mny_mnftr_pay_3');

        $agu_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-08-30'))
            ->sum('mny_mnftr_pay_4');

        $agu_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-08-30'))
            ->sum('mny_da_pay_1');

        $agu_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-08-30'))
            ->sum('mny_da_pay_2');

        $agu_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-08-30'))
            ->sum('mny_da_pay_3');

        $agu_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-08-30'))
            ->sum('mny_da_pay_4');

        //september
        $sep_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_1');

        $sep_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_2');

        $sep_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_3');

        $sep_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_4');

        $sep_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_5');

        $sep_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_6');

        $sep_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_7');

        $sep_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_8');

        $sep_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_9');

        $sep_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_10');

        $sep_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_11');

        $sep_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_12');

        $sep_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_13');

        $sep_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_14');

        $sep_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_15');

        $sep_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_16');

        $sep_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_17');

        $sep_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-09-30'))
            ->sum('mny_parts_pay_18');

        $sep_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-09-30'))
            ->sum('mny_jasa_pay_1');

        $sep_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-09-30'))
            ->sum('mny_jasa_pay_2');

        $sep_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-09-30'))
            ->sum('mny_jasa_pay_3');
        $sep_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-09-30'))
            ->sum('mny_jasa_pay_4');

        $sep_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-09-30'))
            ->sum('mny_mnftr_pay_1');

        $sep_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-09-30'))
            ->sum('mny_mnftr_pay_2');

        $sep_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-09-30'))
            ->sum('mny_mnftr_pay_3');

        $sep_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-09-30'))
            ->sum('mny_mnftr_pay_4');

        $sep_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-09-30'))
            ->sum('mny_da_pay_1');

        $sep_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-09-30'))
            ->sum('mny_da_pay_2');

        $sep_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-09-30'))
            ->sum('mny_da_pay_3');

        $sep_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-09-30'))
            ->sum('mny_da_pay_4');

        //oktober
        $okt_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_1');

        $okt_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_2');

        $okt_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_3');

        $okt_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_4');

        $okt_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_5');

        $okt_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_6');

        $okt_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_7');

        $okt_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_8');

        $okt_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_9');

        $okt_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_10');

        $okt_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_11');

        $okt_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_12');

        $okt_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_13');

        $okt_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_14');

        $okt_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_15');

        $okt_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_16');

        $okt_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_17');

        $okt_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-10-30'))
            ->sum('mny_parts_pay_18');

        $okt_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-10-30'))
            ->sum('mny_jasa_pay_1');

        $okt_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-10-30'))
            ->sum('mny_jasa_pay_2');

        $okt_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-10-30'))
            ->sum('mny_jasa_pay_3');
        $okt_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-10-30'))
            ->sum('mny_jasa_pay_4');

        $okt_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-10-30'))
            ->sum('mny_mnftr_pay_1');

        $okt_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-10-30'))
            ->sum('mny_mnftr_pay_2');

        $okt_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-10-30'))
            ->sum('mny_mnftr_pay_3');

        $okt_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-10-30'))
            ->sum('mny_mnftr_pay_4');

        $okt_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-10-30'))
            ->sum('mny_da_pay_1');

        $okt_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-10-30'))
            ->sum('mny_da_pay_2');

        $okt_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-10-30'))
            ->sum('mny_da_pay_3');

        $okt_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-10-30'))
            ->sum('mny_da_pay_4');

        //november
        $nov_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_1');

        $nov_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_2');

        $nov_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_3');

        $nov_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_4');

        $nov_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_5');

        $nov_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_6');

        $nov_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_7');

        $nov_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_8');

        $nov_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_9');

        $nov_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_10');

        $nov_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_11');

        $nov_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_12');

        $nov_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_13');

        $nov_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_14');

        $nov_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_15');

        $nov_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_16');

        $nov_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_17');

        $nov_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2023-11-30'))
            ->sum('mny_parts_pay_18');

        $nov_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2023-11-30'))
            ->sum('mny_jasa_pay_1');

        $nov_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2023-11-30'))
            ->sum('mny_jasa_pay_2');

        $nov_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2023-11-30'))
            ->sum('mny_jasa_pay_3');
        $nov_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2023-11-30'))
            ->sum('mny_jasa_pay_4');

        $nov_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2023-11-30'))
            ->sum('mny_mnftr_pay_1');

        $nov_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2023-11-30'))
            ->sum('mny_mnftr_pay_2');

        $nov_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2023-11-30'))
            ->sum('mny_mnftr_pay_3');

        $nov_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2023-11-30'))
            ->sum('mny_mnftr_pay_4');

        $nov_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2023-11-30'))
            ->sum('mny_da_pay_1');

        $nov_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2023-11-30'))
            ->sum('mny_da_pay_2');

        $nov_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2023-11-30'))
            ->sum('mny_da_pay_3');

        $nov_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2023-11-30'))
            ->sum('mny_da_pay_4');

        //desember
        $des_mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')
            ->where('date_pay_parts_1', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_1');

        $des_mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')
            ->where('date_pay_parts_2', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_2');

        $des_mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')
            ->where('date_pay_parts_3', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_3');

        $des_mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')
            ->where('date_pay_parts_4', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_4');

        $des_mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')
            ->where('date_pay_parts_5', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_5');

        $des_mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')
            ->where('date_pay_parts_6', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_6');

        $des_mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')
            ->where('date_pay_parts_7', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_7');

        $des_mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')
            ->where('date_pay_parts_8', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_8');

        $des_mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')
            ->where('date_pay_parts_9', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_9');

        $des_mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')
            ->where('date_pay_parts_10', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_10');

        $des_mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')
            ->where('date_pay_parts_11', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_11');

        $des_mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')
            ->where('date_pay_parts_12', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_12');

        $des_mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')
            ->where('date_pay_parts_13', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_13');

        $des_mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')
            ->where('date_pay_parts_14', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_14');

        $des_mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')
            ->where('date_pay_parts_15', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_15');

        $des_mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')
            ->where('date_pay_parts_16', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_16');

        $des_mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')
            ->where('date_pay_parts_17', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_17');

        $des_mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')
            ->where('date_pay_parts_18', '<=', date('2024-01-01'))
            ->sum('mny_parts_pay_18');

        $des_mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')
            ->where('date_pay_jasa_1', '<=', date('2024-01-01'))
            ->sum('mny_jasa_pay_1');

        $des_mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')
            ->where('date_pay_jasa_2', '<=', date('2024-01-01'))
            ->sum('mny_jasa_pay_2');

        $des_mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')
            ->where('date_pay_jasa_3', '<=', date('2024-01-01'))
            ->sum('mny_jasa_pay_3');
        $des_mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')
            ->where('date_pay_jasa_4', '<=', date('2024-01-01'))
            ->sum('mny_jasa_pay_4');

        $des_mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')
            ->where('date_pay_mnftr_1', '<=', date('2024-01-01'))
            ->sum('mny_mnftr_pay_1');

        $des_mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')
            ->where('date_pay_mnftr_2', '<=', date('2024-01-01'))
            ->sum('mny_mnftr_pay_2');

        $des_mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')
            ->where('date_pay_mnftr_3', '<=', date('2024-01-01'))
            ->sum('mny_mnftr_pay_3');

        $des_mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')
            ->where('date_pay_mnftr_4', '<=', date('2024-01-01'))
            ->sum('mny_mnftr_pay_4');

        $des_mny_da_pay_1 = PAYproject::select('mny_da_pay_1')
            ->where('date_pay_da_1', '<=', date('2024-01-01'))
            ->sum('mny_da_pay_1');

        $des_mny_da_pay_2 = PAYproject::select('mny_da_pay_2')
            ->where('date_pay_da_2', '<=', date('2024-01-01'))
            ->sum('mny_da_pay_2');

        $des_mny_da_pay_3 = PAYproject::select('mny_da_pay_3')
            ->where('date_pay_da_3', '<=', date('2024-01-01'))
            ->sum('mny_da_pay_3');

        $des_mny_da_pay_4 = PAYproject::select('mny_da_pay_4')
            ->where('date_pay_da_4', '<=', date('2024-01-01'))
            ->sum('mny_da_pay_4');

        // akhir batas payment
        //PR
        $mny_parts_pr_1 = PRproject::select('mny_parts_pr_1')->sum(
            'mny_parts_pr_1'
        );
        $mny_parts_pr_2 = PRproject::select('mny_parts_pr_2')->sum(
            'mny_parts_pr_2'
        );
        $mny_parts_pr_3 = PRproject::select('mny_parts_pr_3')->sum(
            'mny_parts_pr_3'
        );
        $mny_parts_pr_4 = PRproject::select('mny_parts_pr_4')->sum(
            'mny_parts_pr_4'
        );
        $mny_parts_pr_5 = PRproject::select('mny_parts_pr_5')->sum(
            'mny_parts_pr_5'
        );
        $mny_parts_pr_6 = PRproject::select('mny_parts_pr_6')->sum(
            'mny_parts_pr_6'
        );
        $mny_parts_pr_7 = PRproject::select('mny_parts_pr_7')->sum(
            'mny_parts_pr_7'
        );
        $mny_parts_pr_8 = PRproject::select('mny_parts_pr_8')->sum(
            'mny_parts_pr_8'
        );
        $mny_parts_pr_9 = PRproject::select('mny_parts_pr_9')->sum(
            'mny_parts_pr_9'
        );
        $mny_parts_pr_10 = PRproject::select('mny_parts_pr_10')->sum(
            'mny_parts_pr_10'
        );
        $mny_parts_pr_11 = PRproject::select('mny_parts_pr_11')->sum(
            'mny_parts_pr_11'
        );
        $mny_parts_pr_12 = PRproject::select('mny_parts_pr_12')->sum(
            'mny_parts_pr_12'
        );
        $mny_parts_pr_13 = PRproject::select('mny_parts_pr_13')->sum(
            'mny_parts_pr_13'
        );
        $mny_parts_pr_14 = PRproject::select('mny_parts_pr_14')->sum(
            'mny_parts_pr_14'
        );
        $mny_parts_pr_15 = PRproject::select('mny_parts_pr_15')->sum(
            'mny_parts_pr_15'
        );
        $mny_parts_pr_16 = PRproject::select('mny_parts_pr_16')->sum(
            'mny_parts_pr_16'
        );
        $mny_parts_pr_17 = PRproject::select('mny_parts_pr_17')->sum(
            'mny_parts_pr_17'
        );
        $mny_parts_pr_18 = PRproject::select('mny_parts_pr_18')->sum(
            'mny_parts_pr_18'
        );
        $mny_jasa_pr_1 = PRproject::select('mny_jasa_pr_1')->sum(
            'mny_jasa_pr_1'
        );
        $mny_jasa_pr_2 = PRproject::select('mny_jasa_pr_2')->sum(
            'mny_jasa_pr_2'
        );
        $mny_jasa_pr_3 = PRproject::select('mny_jasa_pr_3')->sum(
            'mny_jasa_pr_3'
        );
        $mny_jasa_pr_4 = PRproject::select('mny_jasa_pr_4')->sum(
            'mny_jasa_pr_4'
        );
        $mny_mnftr_pr_1 = PRproject::select('mny_mnftr_pr_1')->sum(
            'mny_mnftr_pr_1'
        );
        $mny_mnftr_pr_2 = PRproject::select('mny_mnftr_pr_2')->sum(
            'mny_mnftr_pr_2'
        );
        $mny_mnftr_pr_3 = PRproject::select('mny_mnftr_pr_3')->sum(
            'mny_mnftr_pr_3'
        );
        $mny_mnftr_pr_4 = PRproject::select('mny_mnftr_pr_4')->sum(
            'mny_mnftr_pr_4'
        );

        // PA

        $mny_parts_pa_1 = PAproject::select('mny_parts_pa_1')->sum(
            'mny_parts_pa_1'
        );
        $mny_parts_pa_2 = PAproject::select('mny_parts_pa_2')->sum(
            'mny_parts_pa_2'
        );
        $mny_parts_pa_3 = PAproject::select('mny_parts_pa_3')->sum(
            'mny_parts_pa_3'
        );
        $mny_parts_pa_4 = PAproject::select('mny_parts_pa_4')->sum(
            'mny_parts_pa_4'
        );
        $mny_parts_pa_5 = PAproject::select('mny_parts_pa_5')->sum(
            'mny_parts_pa_5'
        );
        $mny_parts_pa_6 = PAproject::select('mny_parts_pa_6')->sum(
            'mny_parts_pa_6'
        );
        $mny_parts_pa_7 = PAproject::select('mny_parts_pa_7')->sum(
            'mny_parts_pa_7'
        );
        $mny_parts_pa_8 = PAproject::select('mny_parts_pa_8')->sum(
            'mny_parts_pa_8'
        );
        $mny_parts_pa_9 = PAproject::select('mny_parts_pa_9')->sum(
            'mny_parts_pa_9'
        );
        $mny_parts_pa_10 = PAproject::select('mny_parts_pa_10')->sum(
            'mny_parts_pa_10'
        );
        $mny_parts_pa_11 = PAproject::select('mny_parts_pa_11')->sum(
            'mny_parts_pa_11'
        );
        $mny_parts_pa_12 = PAproject::select('mny_parts_pa_12')->sum(
            'mny_parts_pa_12'
        );
        $mny_parts_pa_13 = PAproject::select('mny_parts_pa_13')->sum(
            'mny_parts_pa_13'
        );
        $mny_parts_pa_14 = PAproject::select('mny_parts_pa_14')->sum(
            'mny_parts_pa_14'
        );
        $mny_parts_pa_15 = PAproject::select('mny_parts_pa_15')->sum(
            'mny_parts_pa_15'
        );
        $mny_parts_pa_16 = PAproject::select('mny_parts_pa_16')->sum(
            'mny_parts_pa_16'
        );
        $mny_parts_pa_17 = PAproject::select('mny_parts_pa_17')->sum(
            'mny_parts_pa_17'
        );
        $mny_parts_pa_18 = PAproject::select('mny_parts_pa_18')->sum(
            'mny_parts_pa_18'
        );
        $mny_jasa_pa_1 = PAproject::select('mny_jasa_pa_1')->sum(
            'mny_jasa_pa_1'
        );
        $mny_jasa_pa_2 = PAproject::select('mny_jasa_pa_2')->sum(
            'mny_jasa_pa_2'
        );
        $mny_jasa_pa_3 = PAproject::select('mny_jasa_pa_3')->sum(
            'mny_jasa_pa_3'
        );
        $mny_jasa_pa_4 = PAproject::select('mny_jasa_pa_4')->sum(
            'mny_jasa_pa_4'
        );
        $mny_mnftr_pa_1 = PAproject::select('mny_mnftr_pa_1')->sum(
            'mny_mnftr_pa_1'
        );
        $mny_mnftr_pa_2 = PAproject::select('mny_mnftr_pa_2')->sum(
            'mny_mnftr_pa_2'
        );
        $mny_mnftr_pa_3 = PAproject::select('mny_mnftr_pa_3')->sum(
            'mny_mnftr_pa_3'
        );
        $mny_mnftr_pa_4 = PAproject::select('mny_mnftr_pa_4')->sum(
            'mny_mnftr_pa_4'
        );
        $mny_epq_pa_1 = PAproject::select('mny_epq_pa_1')->sum('mny_epq_pa_1');
        $mny_epq_pa_2 = PAproject::select('mny_epq_pa_2')->sum('mny_epq_pa_2');
        $mny_epq_pa_3 = PAproject::select('mny_epq_pa_3')->sum('mny_epq_pa_3');
        $mny_epq_pa_4 = PAproject::select('mny_epq_pa_4')->sum('mny_epq_pa_4');

        //PO
        $mny_parts_po_1 = POproject::select('mny_parts_po_1')->sum(
            'mny_parts_po_1'
        );
        $mny_parts_po_2 = POproject::select('mny_parts_po_2')->sum(
            'mny_parts_po_2'
        );
        $mny_parts_po_3 = POproject::select('mny_parts_po_3')->sum(
            'mny_parts_po_3'
        );
        $mny_parts_po_4 = POproject::select('mny_parts_po_4')->sum(
            'mny_parts_po_4'
        );
        $mny_parts_po_5 = POproject::select('mny_parts_po_5')->sum(
            'mny_parts_po_5'
        );
        $mny_parts_po_6 = POproject::select('mny_parts_po_6')->sum(
            'mny_parts_po_6'
        );
        $mny_parts_po_7 = POproject::select('mny_parts_po_7')->sum(
            'mny_parts_po_7'
        );
        $mny_parts_po_8 = POproject::select('mny_parts_po_8')->sum(
            'mny_parts_po_8'
        );
        $mny_parts_po_9 = POproject::select('mny_parts_po_9')->sum(
            'mny_parts_po_9'
        );
        $mny_parts_po_10 = POproject::select('mny_parts_po_10')->sum(
            'mny_parts_po_10'
        );
        $mny_parts_po_11 = POproject::select('mny_parts_po_11')->sum(
            'mny_parts_po_11'
        );
        $mny_parts_po_12 = POproject::select('mny_parts_po_12')->sum(
            'mny_parts_po_12'
        );
        $mny_parts_po_13 = POproject::select('mny_parts_po_13')->sum(
            'mny_parts_po_13'
        );
        $mny_parts_po_14 = POproject::select('mny_parts_po_14')->sum(
            'mny_parts_po_14'
        );
        $mny_parts_po_15 = POproject::select('mny_parts_po_15')->sum(
            'mny_parts_po_15'
        );
        $mny_parts_po_16 = POproject::select('mny_parts_po_16')->sum(
            'mny_parts_po_16'
        );
        $mny_parts_po_17 = POproject::select('mny_parts_po_17')->sum(
            'mny_parts_po_17'
        );
        $mny_parts_po_18 = POproject::select('mny_parts_po_18')->sum(
            'mny_parts_po_18'
        );
        $mny_jasa_po_1 = POproject::select('mny_jasa_po_1')->sum(
            'mny_jasa_po_1'
        );
        $mny_jasa_po_2 = POproject::select('mny_jasa_po_2')->sum(
            'mny_jasa_po_2'
        );
        $mny_jasa_po_3 = POproject::select('mny_jasa_po_3')->sum(
            'mny_jasa_po_3'
        );
        $mny_jasa_po_4 = POproject::select('mny_jasa_po_4')->sum(
            'mny_jasa_po_4'
        );
        $mny_mnftr_po_1 = POproject::select('mny_mnftr_po_1')->sum(
            'mny_mnftr_po_1'
        );
        $mny_mnftr_po_2 = POproject::select('mny_mnftr_po_2')->sum(
            'mny_mnftr_po_2'
        );
        $mny_mnftr_po_3 = POproject::select('mny_mnftr_po_3')->sum(
            'mny_mnftr_po_3'
        );
        $mny_mnftr_po_4 = POproject::select('mny_mnftr_po_4')->sum(
            'mny_mnftr_po_4'
        );
        $mny_capo_po_1 = POproject::select('mny_capo_po_1')->sum(
            'mny_capo_po_1'
        );
        $mny_capo_po_2 = POproject::select('mny_capo_po_2')->sum(
            'mny_capo_po_2'
        );
        $mny_capo_po_3 = POproject::select('mny_capo_po_3')->sum(
            'mny_capo_po_3'
        );
        $mny_capo_po_4 = POproject::select('mny_capo_po_4')->sum(
            'mny_capo_po_4'
        );

        //PAY

        $mny_parts_pay_1 = PAYproject::select('mny_parts_pay_1')->sum(
            'mny_parts_pay_1'
        );
        $mny_parts_pay_2 = PAYproject::select('mny_parts_pay_2')->sum(
            'mny_parts_pay_2'
        );
        $mny_parts_pay_3 = PAYproject::select('mny_parts_pay_3')->sum(
            'mny_parts_pay_3'
        );
        $mny_parts_pay_4 = PAYproject::select('mny_parts_pay_4')->sum(
            'mny_parts_pay_4'
        );
        $mny_parts_pay_5 = PAYproject::select('mny_parts_pay_5')->sum(
            'mny_parts_pay_5'
        );
        $mny_parts_pay_6 = PAYproject::select('mny_parts_pay_6')->sum(
            'mny_parts_pay_6'
        );
        $mny_parts_pay_7 = PAYproject::select('mny_parts_pay_7')->sum(
            'mny_parts_pay_7'
        );
        $mny_parts_pay_8 = PAYproject::select('mny_parts_pay_8')->sum(
            'mny_parts_pay_8'
        );
        $mny_parts_pay_9 = PAYproject::select('mny_parts_pay_9')->sum(
            'mny_parts_pay_9'
        );
        $mny_parts_pay_10 = PAYproject::select('mny_parts_pay_10')->sum(
            'mny_parts_pay_10'
        );
        $mny_parts_pay_11 = PAYproject::select('mny_parts_pay_11')->sum(
            'mny_parts_pay_11'
        );
        $mny_parts_pay_12 = PAYproject::select('mny_parts_pay_12')->sum(
            'mny_parts_pay_12'
        );
        $mny_parts_pay_13 = PAYproject::select('mny_parts_pay_13')->sum(
            'mny_parts_pay_13'
        );
        $mny_parts_pay_14 = PAYproject::select('mny_parts_pay_14')->sum(
            'mny_parts_pay_14'
        );
        $mny_parts_pay_15 = PAYproject::select('mny_parts_pay_15')->sum(
            'mny_parts_pay_15'
        );
        $mny_parts_pay_16 = PAYproject::select('mny_parts_pay_16')->sum(
            'mny_parts_pay_16'
        );
        $mny_parts_pay_17 = PAYproject::select('mny_parts_pay_17')->sum(
            'mny_parts_pay_17'
        );
        $mny_parts_pay_18 = PAYproject::select('mny_parts_pay_18')->sum(
            'mny_parts_pay_18'
        );
        $mny_jasa_pay_1 = PAYproject::select('mny_jasa_pay_1')->sum(
            'mny_jasa_pay_1'
        );
        $mny_jasa_pay_2 = PAYproject::select('mny_jasa_pay_2')->sum(
            'mny_jasa_pay_2'
        );
        $mny_jasa_pay_3 = PAYproject::select('mny_jasa_pay_3')->sum(
            'mny_jasa_pay_3'
        );
        $mny_jasa_pay_4 = PAYproject::select('mny_jasa_pay_4')->sum(
            'mny_jasa_pay_4'
        );
        $mny_mnftr_pay_1 = PAYproject::select('mny_mnftr_pay_1')->sum(
            'mny_mnftr_pay_1'
        );
        $mny_mnftr_pay_2 = PAYproject::select('mny_mnftr_pay_2')->sum(
            'mny_mnftr_pay_2'
        );
        $mny_mnftr_pay_3 = PAYproject::select('mny_mnftr_pay_3')->sum(
            'mny_mnftr_pay_3'
        );
        $mny_mnftr_pay_4 = PAYproject::select('mny_mnftr_pay_4')->sum(
            'mny_mnftr_pay_4'
        );
        $mny_da_pay_1 = PAYproject::select('mny_da_pay_1')->sum('mny_da_pay_1');
        $mny_da_pay_2 = PAYproject::select('mny_da_pay_2')->sum('mny_da_pay_2');
        $mny_da_pay_3 = PAYproject::select('mny_da_pay_3')->sum('mny_da_pay_3');
        $mny_da_pay_4 = PAYproject::select('mny_da_pay_4')->sum('mny_da_pay_4');

        // PR
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
            $mny_jasa_pr_1 +
            $mny_jasa_pr_2 +
            $mny_jasa_pr_3 +
            $mny_jasa_pr_4 +
            $mny_mnftr_pr_1 +
            $mny_mnftr_pr_2 +
            $mny_mnftr_pr_3 +
            $mny_mnftr_pr_4;

        //PA
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
            $mny_jasa_pa_1 +
            $mny_jasa_pa_2 +
            $mny_jasa_pa_3 +
            $mny_jasa_pa_4 +
            $mny_mnftr_pa_1 +
            $mny_mnftr_pa_2 +
            $mny_mnftr_pa_3 +
            $mny_mnftr_pa_4 +
            $mny_epq_pa_1 +
            $mny_epq_pa_2 +
            $mny_epq_pa_3 +
            $mny_epq_pa_4;

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
            $mny_jasa_po_1 +
            $mny_jasa_po_2 +
            $mny_jasa_po_3 +
            $mny_jasa_po_4 +
            $mny_mnftr_po_1 +
            $mny_mnftr_po_2 +
            $mny_mnftr_po_3 +
            $mny_mnftr_po_4 +
            $mny_capo_po_1 +
            $mny_capo_po_2 +
            $mny_capo_po_3 +
            $mny_capo_po_4;
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
            $mny_jasa_pay_1 +
            $mny_jasa_pay_2 +
            $mny_jasa_pay_3 +
            $mny_jasa_pay_4 +
            $mny_mnftr_pay_1 +
            $mny_mnftr_pay_2 +
            $mny_mnftr_pay_3 +
            $mny_mnftr_pay_4 +
            $mny_da_pay_1 +
            $mny_da_pay_2 +
            $mny_da_pay_3 +
            $mny_da_pay_4;

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
            $jan_mny_jasa_pay_1 +
            $jan_mny_jasa_pay_2 +
            $jan_mny_jasa_pay_3 +
            $jan_mny_jasa_pay_4 +
            $jan_mny_mnftr_pay_1 +
            $jan_mny_mnftr_pay_2 +
            $jan_mny_mnftr_pay_3 +
            $jan_mny_mnftr_pay_4 +
            $jan_mny_da_pay_1 +
            $jan_mny_da_pay_2 +
            $jan_mny_da_pay_3 +
            $jan_mny_da_pay_4;

        // bulan februari
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
            $feb_mny_jasa_pay_1 +
            $feb_mny_jasa_pay_2 +
            $feb_mny_jasa_pay_3 +
            $feb_mny_jasa_pay_4 +
            $feb_mny_mnftr_pay_1 +
            $feb_mny_mnftr_pay_2 +
            $feb_mny_mnftr_pay_3 +
            $feb_mny_mnftr_pay_4 +
            $feb_mny_da_pay_1 +
            $feb_mny_da_pay_2 +
            $feb_mny_da_pay_3 +
            $feb_mny_da_pay_4;

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
            $mar_mny_jasa_pay_1 +
            $mar_mny_jasa_pay_2 +
            $mar_mny_jasa_pay_3 +
            $mar_mny_jasa_pay_4 +
            $mar_mny_mnftr_pay_1 +
            $mar_mny_mnftr_pay_2 +
            $mar_mny_mnftr_pay_3 +
            $mar_mny_mnftr_pay_4 +
            $mar_mny_da_pay_1 +
            $mar_mny_da_pay_2 +
            $mar_mny_da_pay_3 +
            $mar_mny_da_pay_4;

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
            $apr_mny_jasa_pay_1 +
            $apr_mny_jasa_pay_2 +
            $apr_mny_jasa_pay_3 +
            $apr_mny_jasa_pay_4 +
            $apr_mny_mnftr_pay_1 +
            $apr_mny_mnftr_pay_2 +
            $apr_mny_mnftr_pay_3 +
            $apr_mny_mnftr_pay_4 +
            $apr_mny_da_pay_1 +
            $apr_mny_da_pay_2 +
            $apr_mny_da_pay_3 +
            $apr_mny_da_pay_4;

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
            $mei_mny_jasa_pay_1 +
            $mei_mny_jasa_pay_2 +
            $mei_mny_jasa_pay_3 +
            $mei_mny_jasa_pay_4 +
            $mei_mny_mnftr_pay_1 +
            $mei_mny_mnftr_pay_2 +
            $mei_mny_mnftr_pay_3 +
            $mei_mny_mnftr_pay_4 +
            $mei_mny_da_pay_1 +
            $mei_mny_da_pay_2 +
            $mei_mny_da_pay_3 +
            $mei_mny_da_pay_4;

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
            $jun_mny_jasa_pay_1 +
            $jun_mny_jasa_pay_2 +
            $jun_mny_jasa_pay_3 +
            $jun_mny_jasa_pay_4 +
            $jun_mny_mnftr_pay_1 +
            $jun_mny_mnftr_pay_2 +
            $jun_mny_mnftr_pay_3 +
            $jun_mny_mnftr_pay_4 +
            $jun_mny_da_pay_1 +
            $jun_mny_da_pay_2 +
            $jun_mny_da_pay_3 +
            $jun_mny_da_pay_4;

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
            $jul_mny_jasa_pay_1 +
            $jul_mny_jasa_pay_2 +
            $jul_mny_jasa_pay_3 +
            $jul_mny_jasa_pay_4 +
            $jul_mny_mnftr_pay_1 +
            $jul_mny_mnftr_pay_2 +
            $jul_mny_mnftr_pay_3 +
            $jul_mny_mnftr_pay_4 +
            $jul_mny_da_pay_1 +
            $jul_mny_da_pay_2 +
            $jul_mny_da_pay_3 +
            $jul_mny_da_pay_4;

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
            $agu_mny_jasa_pay_1 +
            $agu_mny_jasa_pay_2 +
            $agu_mny_jasa_pay_3 +
            $agu_mny_jasa_pay_4 +
            $agu_mny_mnftr_pay_1 +
            $agu_mny_mnftr_pay_2 +
            $agu_mny_mnftr_pay_3 +
            $agu_mny_mnftr_pay_4 +
            $agu_mny_da_pay_1 +
            $agu_mny_da_pay_2 +
            $agu_mny_da_pay_3 +
            $agu_mny_da_pay_4;

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
            $sep_mny_jasa_pay_1 +
            $sep_mny_jasa_pay_2 +
            $sep_mny_jasa_pay_3 +
            $sep_mny_jasa_pay_4 +
            $sep_mny_mnftr_pay_1 +
            $sep_mny_mnftr_pay_2 +
            $sep_mny_mnftr_pay_3 +
            $sep_mny_mnftr_pay_4 +
            $sep_mny_da_pay_1 +
            $sep_mny_da_pay_2 +
            $sep_mny_da_pay_3 +
            $sep_mny_da_pay_4;

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
            $okt_mny_jasa_pay_1 +
            $okt_mny_jasa_pay_2 +
            $okt_mny_jasa_pay_3 +
            $okt_mny_jasa_pay_4 +
            $okt_mny_mnftr_pay_1 +
            $okt_mny_mnftr_pay_2 +
            $okt_mny_mnftr_pay_3 +
            $okt_mny_mnftr_pay_4 +
            $okt_mny_da_pay_1 +
            $okt_mny_da_pay_2 +
            $okt_mny_da_pay_3 +
            $okt_mny_da_pay_4;

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
            $nov_mny_jasa_pay_1 +
            $nov_mny_jasa_pay_2 +
            $nov_mny_jasa_pay_3 +
            $nov_mny_jasa_pay_4 +
            $nov_mny_mnftr_pay_1 +
            $nov_mny_mnftr_pay_2 +
            $nov_mny_mnftr_pay_3 +
            $nov_mny_mnftr_pay_4 +
            $nov_mny_da_pay_1 +
            $nov_mny_da_pay_2 +
            $nov_mny_da_pay_3 +
            $nov_mny_da_pay_4;

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
            $des_mny_jasa_pay_1 +
            $des_mny_jasa_pay_2 +
            $des_mny_jasa_pay_3 +
            $des_mny_jasa_pay_4 +
            $des_mny_mnftr_pay_1 +
            $des_mny_mnftr_pay_2 +
            $des_mny_mnftr_pay_3 +
            $des_mny_mnftr_pay_4 +
            $des_mny_da_pay_1 +
            $des_mny_da_pay_2 +
            $des_mny_da_pay_3 +
            $des_mny_da_pay_4;

        // planned
        $planned = PlannedPayment::all()
            ->where('marking', 'Planned-1')
            ->first();
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
                ->paginate(2);
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
                ->paginate(2);
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
            'totalprojectaprroval' => $totalprojectaprroval,
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

    // =======================proyek==============
    public function TambahProject()
    {
        return view('supervisor.project.tambah_project');
    }
    public function ApprovalProgress(Request $request)
    {
        $keyword = $request->keyword;
        $totalprojectaprroval = CONTROLPROJECT::select('id')
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
                ->paginate(2);
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
                ->paginate(2);
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
            'totalprojectaprroval' => $totalprojectaprroval,
        ]);
    }

    public function BudgetControlOb()
    {
        $planned = PlannedPayment::all()->where('marking', 'Planned-1');
        $pyCount = PlannedPayment::all()->count('id');

        $planned_1 = PlannedPayment::select('planned_1')->sum('planned_1');
        $planned_2 = PlannedPayment::select('planned_2')->sum('planned_2');
        $planned_3 = PlannedPayment::select('planned_3')->sum('planned_3');
        $planned_4 = PlannedPayment::select('planned_4')->sum('planned_4');
        $planned_5 = PlannedPayment::select('planned_5')->sum('planned_5');
        $planned_6 = PlannedPayment::select('planned_6')->sum('planned_6');
        $planned_7 = PlannedPayment::select('planned_7')->sum('planned_7');
        $planned_8 = PlannedPayment::select('planned_8')->sum('planned_8');
        $planned_9 = PlannedPayment::select('planned_9')->sum('planned_9');
        $planned_10 = PlannedPayment::select('planned_10')->sum('planned_10');
        $planned_11 = PlannedPayment::select('planned_11')->sum('planned_11');
        $planned_12 = PlannedPayment::select('planned_12')->sum('planned_12');

        $sum_planned =
            $planned_1 +
            $planned_2 +
            $planned_3 +
            $planned_4 +
            $planned_5 +
            $planned_6 +
            $planned_7 +
            $planned_8 +
            $planned_9 +
            $planned_10 +
            $planned_11 +
            $planned_12;

        return view('supervisor.planned-payment', [
            'planned' => $planned,
            'pyCount' => $pyCount,
            'sum_planned' => $sum_planned,
        ]);
    }

    public function ProcessBudgetControlOb(Request $request)
    {
        PlannedPayment::create($request->all());
        DB::table('log_activity')->insert([
            'aktivitas' => $request->aktivitas,
            'waktu' => $request->waktu,
        ]);

        return redirect()->action([
            SupervisorController::class,
            'BudgetControlOb',
        ]);
    }

    public function ProcessEditBudgetControlOb(Request $request)
    {
        $planned = PlannedPayment::all()
            ->where('marking', 'Planned-1')
            ->first();

        DB::table('log_activity')->insert([
            'aktivitas' => $request->aktivitas,
            'waktu' => $request->waktu,
        ]);

        if ($request['as_planned_1'] != '') {
            $request['planned_1'] = $request['as_planned_1'];
        }
        if ($request['as_planned_2'] != '') {
            $request['planned_2'] = $request['as_planned_2'];
        }
        if ($request['as_planned_3'] != '') {
            $request['planned_3'] = $request['as_planned_3'];
        }
        if ($request['as_planned_4'] != '') {
            $request['planned_4'] = $request['as_planned_4'];
        }
        if ($request['as_planned_5'] != '') {
            $request['planned_5'] = $request['as_planned_5'];
        }
        if ($request['as_planned_6'] != '') {
            $request['planned_6'] = $request['as_planned_6'];
        }
        if ($request['as_planned_7'] != '') {
            $request['planned_7'] = $request['as_planned_7'];
        }
        if ($request['as_planned_8'] != '') {
            $request['planned_8'] = $request['as_planned_8'];
        }
        if ($request['as_planned_9'] != '') {
            $request['planned_9'] = $request['as_planned_9'];
        }
        if ($request['as_planned_10'] != '') {
            $request['planned_10'] = $request['as_planned_10'];
        }
        if ($request['as_planned_11'] != '') {
            $request['planned_11'] = $request['as_planned_11'];
        }
        if ($request['as_planned_12'] != '') {
            $request['planned_12'] = $request['as_planned_12'];
        }

        $planned->update($request->all());

        return redirect()->action([
            SupervisorController::class,
            'BudgetControlOb',
        ]);
    }
}
