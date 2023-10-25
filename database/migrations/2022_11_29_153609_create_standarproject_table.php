<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standarproject', function (Blueprint $table) {
            $table->id();
            $table
                ->string('marking', 15)
                ->default('Standar-1')
                ->nullable();

            //fr
            $table->string('file_fr_sheet_form')->nullable();
            $table->string('up_fr_sheet_form', 20)->nullable();
            $table->string('date_fr_sheet_form', 20)->nullable();

            //AR
            $table->string('file_dr_m_sheet_form')->nullable();
            $table->string('up_dr_m_sheet_form', 20)->nullable();
            $table->string('date_dr_m_sheet_form', 20)->nullable();

            $table->string('file_dr_e_sheet_form')->nullable();
            $table->string('up_dr_e_sheet_form', 20)->nullable();
            $table->string('date_dr_e_sheet_form', 20)->nullable();

            $table->string('file_lay_aprvl_sheet_form')->nullable();
            $table->string('up_lay_aprvl_sheet_form', 20)->nullable();
            $table->string('date_lay_aprvl_sheet_form', 20)->nullable();

            $table->string('file_dr_aprvl_sheet_form')->nullable();
            $table->string('up_dr_aprvl_sheet_form', 20)->nullable();
            $table->string('date_dr_aprvl_sheet_form', 20)->nullable();

            $table->string('file_design_sheet_form')->nullable();
            $table->string('up_design_sheet_form', 20)->nullable();
            $table->string('date_design_sheet_form', 20)->nullable();

            $table->string('file_dr_meeting_form')->nullable();
            $table->string('up_dr_meeting_form', 20)->nullable();
            $table->string('date_dr_meeting_form', 20)->nullable();

            $table->string('file_est_budget_form')->nullable();
            $table->string('up_est_budget_form', 20)->nullable();
            $table->string('date_est_budget_form', 20)->nullable();

            //pr

            $table->string('file_pr_parts_material_form')->nullable();
            $table->string('up_pr_parts_material_form', 20)->nullable();
            $table->string('date_pr_parts_material_form', 20)->nullable();

            $table->string('file_pr_pekerjaan_jasa_form')->nullable();
            $table->string('up_pr_pekerjaan_jasa_form', 20)->nullable();
            $table->string('date_pr_pekerjaan_jasa_form', 20)->nullable();

            $table->string('file_pr_manufaktur_form')->nullable();
            $table->string('up_pr_manufaktur_form', 20)->nullable();
            $table->string('date_pr_manufaktur_form', 20)->nullable();

            $table->string('file_pr_rfq_form')->nullable();
            $table->string('up_pr_rfq_form', 20)->nullable();
            $table->string('date_pr_rfq_form', 20)->nullable();

            $table->string('file_pr_per_form')->nullable();
            $table->string('up_pr_per_form', 20)->nullable();
            $table->string('date_pr_per_form', 20)->nullable();

            //manufacturing

            $table->string('file_mn_ir_form')->nullable();
            $table->string('up_mn_ir_form', 20)->nullable();
            $table->string('date_mn_ir_form', 20)->nullable();

            //install

            $table->string('file_ipo_form')->nullable();
            $table->string('up_ipo_form', 20)->nullable();
            $table->string('date_ipo_form', 20)->nullable();

            $table->string('file_ecr_form')->nullable();
            $table->string('up_ecr_form', 20)->nullable();
            $table->string('date_ecr_form', 20)->nullable();

            $table->string('file_sc_form')->nullable();
            $table->string('up_sc_form', 20)->nullable();
            $table->string('date_sc_form', 20)->nullable();

            $table->string('file_sccs_form')->nullable();
            $table->string('up_sccs_form', 20)->nullable();
            $table->string('date_sccs_form', 20)->nullable();

            $table->string('file_in_ir_form')->nullable();
            $table->string('up_in_ir_form', 20)->nullable();
            $table->string('date_in_ir_form', 20)->nullable();

            //closed
            $table->string('file_iperiksam_form')->nullable();
            $table->string('up_iperiksam_form', 20)->nullable();
            $table->string('date_iperiksam_form', 20)->nullable();

            $table->string('file_qas_form')->nullable();
            $table->string('up_qas_form', 20)->nullable();
            $table->string('date_qas_form', 20)->nullable();

            $table->string('file_ipakaim_form')->nullable();
            $table->string('up_ipakaim_form', 20)->nullable();
            $table->string('date_ipakaim_form', 20)->nullable();

            $table->string('file_training_form')->nullable();
            $table->string('up_training_form', 20)->nullable();
            $table->string('date_training_form', 20)->nullable();

            $table->string('file_lup_form')->nullable();
            $table->string('up_lup_form', 20)->nullable();
            $table->string('date_lup_form', 20)->nullable();

            $table->string('file_camb_form')->nullable();
            $table->string('up_camb_form', 20)->nullable();
            $table->string('date_camb_form', 20)->nullable();

            $table->string('file_cl_im_form')->nullable();
            $table->string('up_cl_im_form', 20)->nullable();
            $table->string('date_cl_im_form', 20)->nullable();

            $table->string('file_chor_form')->nullable();
            $table->string('up_chor_form', 20)->nullable();
            $table->string('date_chor_form', 20)->nullable();
            // mencatat riwayat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standarproject');
    }
};
