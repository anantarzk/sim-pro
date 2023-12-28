<?php

namespace App\Models;

use App\Models\CONTROLPROJECT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ARproject extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = '2_ar_project';
    protected $fillable = [
        'id',
        'id_ar_2',
        'status_ar',
        'status_ar_date',
        'approval_by',
        'approval_date',

        // buat simpan file
        'draw_me_1',
        'up_draw_me_by_1',
        'date_draw_me_1',

        'draw_me_2',
        'up_draw_me_by_2',
        'date_draw_me_2',

        'draw_el_1',
        'up_draw_el_by_1',
        'date_draw_el_1',

        'draw_el_2',
        'up_draw_el_by_2',
        'date_draw_el_2',

        'approval_lay_1',
        'up_approval_lay_by_1',
        'date_approval_lay_1',

        'approval_lay_2',
        'up_approval_lay_by_2',
        'date_approval_lay_2',

        'approval_draw_1',
        'up_approval_draw_by_1',
        'date_approval_draw_1',

        'approval_draw_2',
        'up_approval_draw_by_2',
        'date_approval_draw_2',

        'dsgn_sheet_1',
        'up_dsgn_sheet_by_1',
        'date_dsgn_sheet_1',

        'dsgn_sheet_2',
        'up_dsgn_sheet_by_2',
        'date_dsgn_sheet_2',

        'dr_meet_1',
        'up_dr_meet_by_1',
        'date_dr_meet_1',

        'dr_meet_2',
        'up_dr_meet_by_2',
        'date_dr_meet_2',

        'dr_meet_3',
        'up_dr_meet_by_3',
        'date_dr_meet_3',

        'dr_meet_4',
        'up_dr_meet_by_4',
        'date_dr_meet_4',

        'dr_meet_5',
        'up_dr_meet_by_5',
        'date_dr_meet_5',

        'est_budget_1',
        'up_est_budget_by_1',
        'date_est_budget_1',

        'est_budget_2',
        'up_est_budget_by_2',
        'date_est_budget_2',

        // buat riwayat tanggal simpan
         'archive_at',
        'created_at',
        'updated_at',
    ];
    public function arkeproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
