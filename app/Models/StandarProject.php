<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandarProject extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = 'standarproject';
    protected $fillable = [
        'id',
        'marking',

        //fr
        'file_fr_sheet_form',
        'up_fr_sheet_form',
        'date_fr_sheet_form',

        //ar
        'file_dr_m_sheet_form',
        'up_dr_m_sheet_form',
        'date_dr_m_sheet_form',

        'file_dr_e_sheet_form',
        'up_dr_e_sheet_form',
        'date_dr_e_sheet_form',

        'file_lay_aprvl_sheet_form',
        'up_lay_aprvl_sheet_form',
        'date_lay_aprvl_sheet_form',

        'file_dr_aprvl_sheet_form',
        'up_dr_aprvl_sheet_form',
        'date_dr_aprvl_sheet_form',

        'file_design_sheet_form',
        'up_design_sheet_form',
        'date_design_sheet_form',

        'file_dr_meeting_form',
        'up_dr_meeting_form',
        'date_dr_meeting_form',

        'file_est_budget_form',
        'up_est_budget_form',
        'date_est_budget_form',

        //pr
        'file_pr_parts_material_form',
        'up_pr_parts_material_form',
        'date_pr_parts_material_form',

        'file_pr_pekerjaan_jasa_form',
        'up_pr_pekerjaan_jasa_form',
        'date_pr_pekerjaan_jasa_form',

        'file_pr_manufaktur_form',
        'up_pr_manufaktur_form',
        'date_pr_manufaktur_form',

        'file_pr_rfq_form',
        'up_pr_rfq_form',
        'date_pr_rfq_form',

        'file_pr_per_form',
        'up_pr_per_form',
        'date_pr_per_form',

        //manufacturing
        'file_mn_ir_form',
        'up_mn_ir_form',
        'date_mn_ir_form',

        //installation
        'file_ipo_form',
        'up_ipo_form',
        'date_ipo_form',

        'file_ecr_form',
        'up_ecr_form',
        'date_ecr_form',

        'file_sc_form',
        'up_sc_form',
        'date_sc_form',

        'file_sccs_form',
        'up_sccs_form',
        'date_sccs_form',

        'file_in_ir_form',
        'up_in_ir_form',
        'date_in_ir_form',

        //closed
        'file_iperiksam_form',
        'up_iperiksam_form',
        'date_iperiksam_form',

        'file_qas_form',
        'up_qas_form',
        'date_qas_form',

        'file_ipakaim_form',
        'up_ipakaim_form',
        'date_ipakaim_form',

        'file_training_form',
        'up_training_form',
        'date_training_form',

        'file_lup_form',
        'up_lup_form',
        'date_lup_form',

        'file_camb_form',
        'up_camb_form',
        'date_camb_form',

        'file_cl_im_form',
        'up_cl_im_form',
        'date_cl_im_form',

        'file_chor_form',
        'up_chor_form',
        'date_chor_form',

        // simpan riwayat file
        'created_at',
        'updated_at',
    ];
}
