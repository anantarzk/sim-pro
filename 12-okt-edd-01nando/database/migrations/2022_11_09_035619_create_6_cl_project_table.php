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
        Schema::create('6_cl_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_cl_6')
                ->unique()
                ->nullable();

            $table
                ->string('status_cl', 100)
                ->default('-')
                ->nullable();
            $table->date('status_cl_date')->nullable();
            $table
                ->string('approval_by')
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();
            // file yang akan disimpan
            $table->string('cl_i_periksa_m_1')->nullable();
            $table->string('up_by_i_periksa_m_cl_1', 50)->nullable();
            $table->date('date_cl_i_periksa_m_1')->nullable();

            $table->string('cl_i_periksa_m_2')->nullable();
            $table->string('up_by_i_periksa_m_cl_2', 50)->nullable();
            $table->date('date_cl_i_periksa_m_2')->nullable();

            $table->string('cl_i_periksa_m_3')->nullable();
            $table->string('up_by_i_periksa_m_cl_3', 50)->nullable();
            $table->date('date_cl_i_periksa_m_3')->nullable();

            $table->string('cl_qas_1')->nullable();
            $table->string('up_by_qas_cl_1', 50)->nullable();
            $table->date('date_cl_qas_1')->nullable();

            $table->string('cl_qas_2')->nullable();
            $table->string('up_by_qas_cl_2', 50)->nullable();
            $table->date('date_cl_qas_2')->nullable();

            $table->string('cl_i_pakai_m_1')->nullable();
            $table->string('up_by_i_pakai_m_cl_1', 50)->nullable();
            $table->date('date_cl_i_pakai_m_1')->nullable();

            $table->string('cl_i_pakai_m_2')->nullable();
            $table->string('up_by_i_pakai_m_cl_2', 50)->nullable();
            $table->date('date_cl_i_pakai_m_2')->nullable();

            $table->string('cl_training_1')->nullable();
            $table->string('up_by_training_cl_1', 50)->nullable();
            $table->date('date_cl_training_1')->nullable();

            $table->string('cl_training_2')->nullable();
            $table->string('up_by_training_cl_2', 50)->nullable();
            $table->date('date_cl_training_2')->nullable();

            $table->string('cl_training_3')->nullable();
            $table->string('up_by_training_cl_3', 50)->nullable();
            $table->date('date_cl_training_3')->nullable();

            $table->string('cl_training_4')->nullable();
            $table->string('up_by_training_cl_4', 50)->nullable();
            $table->date('date_cl_training_4')->nullable();

            $table->string('cl_training_5')->nullable();
            $table->string('up_by_training_cl_5', 50)->nullable();
            $table->date('date_cl_training_5')->nullable();

            $table->string('cl_l_trouble_1')->nullable();
            $table->string('up_by_l_trouble_cl_1', 50)->nullable();
            $table->date('date_cl_l_trouble_1')->nullable();

            $table->string('cl_l_trouble_2')->nullable();
            $table->string('up_by_l_trouble_cl_2', 50)->nullable();
            $table->date('date_cl_l_trouble_2')->nullable();

            $table->string('cl_camb_1')->nullable();
            $table->string('up_by_camb_cl_1', 50)->nullable();
            $table->date('date_cl_camb_1')->nullable();

            $table->string('cl_camb_2')->nullable();
            $table->string('up_by_camb_cl_2', 50)->nullable();
            $table->date('date_cl_camb_2')->nullable();

            $table->string('cl_im_1')->nullable();
            $table->string('up_by_im_cl_1', 50)->nullable();
            $table->date('date_cl_im_1')->nullable();

            $table->string('cl_im_2')->nullable();
            $table->string('up_by_im_cl_2', 50)->nullable();
            $table->date('date_cl_im_2')->nullable();

            $table->string('cl_im_3')->nullable();
            $table->string('up_by_im_cl_3', 50)->nullable();
            $table->date('date_cl_im_3')->nullable();

            $table->string('cl_im_4')->nullable();
            $table->string('up_by_im_cl_4', 50)->nullable();
            $table->date('date_cl_im_4')->nullable();

            $table->string('cl_im_5')->nullable();
            $table->string('up_by_im_cl_5', 50)->nullable();
            $table->date('date_cl_im_5')->nullable();

            $table->string('cl_chor_1')->nullable();
            $table->string('up_by_chor_cl_1', 50)->nullable();
            $table->date('date_cl_chor_1')->nullable();

            $table->string('cl_chor_2')->nullable();
            $table->string('up_by_chor_cl_2', 50)->nullable();
            $table->date('date_cl_chor_2')->nullable();

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
        Schema::dropIfExists('6_cl_project');
    }
};
