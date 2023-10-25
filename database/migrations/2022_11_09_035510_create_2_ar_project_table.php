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
        Schema::create('2_ar_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_ar_2')
                ->unique()
                ->nullable();
            $table
                ->string('status_ar', 100)
                ->default('-')
                ->nullable();
            $table->date('status_ar_date')->nullable();
            $table
                ->string('approval_by', 50)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();
            // file yang akan disimpan

            // drawing mekanik
            $table->string('draw_me_1')->nullable();
            $table->string('up_draw_me_by_1', 50)->nullable();
            $table->date('date_draw_me_1')->nullable();
            $table->string('draw_me_2')->nullable();
            $table->string('up_draw_me_by_2', 50)->nullable();
            $table->date('date_draw_me_2')->nullable();

            // Drawing electric
            $table->string('draw_el_1')->nullable();
            $table->string('up_draw_el_by_1', 50)->nullable();
            $table->date('date_draw_el_1')->nullable();
            $table->string('draw_el_2')->nullable();
            $table->string('up_draw_el_by_2', 50)->nullable();
            $table->date('date_draw_el_2')->nullable();

            // approval layout
            $table->string('approval_lay_1')->nullable();
            $table->string('up_approval_lay_by_1', 50)->nullable();
            $table->date('date_approval_lay_1')->nullable();
            $table->string('approval_lay_2')->nullable();
            $table->string('up_approval_lay_by_2', 50)->nullable();
            $table->date('date_approval_lay_2')->nullable();

            // apptoval drawing
            $table->string('approval_draw_1')->nullable();
            $table->string('up_approval_draw_by_1', 50)->nullable();
            $table->date('date_approval_draw_1')->nullable();
            $table->string('approval_draw_2')->nullable();
            $table->string('up_approval_draw_by_2', 50)->nullable();
            $table->date('date_approval_draw_2')->nullable();

            $table->string('dsgn_sheet_1')->nullable();
            $table->string('up_dsgn_sheet_by_1', 50)->nullable();
            $table->date('date_dsgn_sheet_1')->nullable();
            $table->string('dsgn_sheet_2')->nullable();
            $table->string('up_dsgn_sheet_by_2', 50)->nullable();
            $table->date('date_dsgn_sheet_2')->nullable();

            $table->string('dr_meet_1')->nullable();
            $table->string('up_dr_meet_by_1', 50)->nullable();
            $table->date('date_dr_meet_1')->nullable();
            $table->string('dr_meet_2')->nullable();
            $table->string('up_dr_meet_by_2', 50)->nullable();
            $table->date('date_dr_meet_2')->nullable();
            $table->string('dr_meet_3')->nullable();
            $table->string('up_dr_meet_by_3', 50)->nullable();
            $table->date('date_dr_meet_3')->nullable();
            $table->string('dr_meet_4')->nullable();
            $table->string('up_dr_meet_by_4', 50)->nullable();
            $table->date('date_dr_meet_4')->nullable();
            $table->string('dr_meet_5')->nullable();
            $table->string('up_dr_meet_by_5', 50)->nullable();
            $table->date('date_dr_meet_5')->nullable();

            $table->string('est_budget_1')->nullable();
            $table->string('up_est_budget_by_1', 50)->nullable();
            $table->date('date_est_budget_1')->nullable();
            $table->string('est_budget_2')->nullable();
            $table->string('up_est_budget_by_2', 50)->nullable();
            $table->date('date_est_budget_2')->nullable();

             $table->timestamp('archive_at', $precision = 0)->nullable();
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
        Schema::dropIfExists('2_ar_project');
    }
};
