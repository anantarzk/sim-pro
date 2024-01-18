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
        Schema::create('3_02_pa_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_pa_02_3')
                ->unique()
                ->nullable();

            $table
                ->string('status_pa_02', 50)
                ->default('-')
                ->nullable();
            $table->date('status_pa_02_date')->nullable();
            $table
                ->string('approval_by', 50)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();

            // file yang akan disimpan
            $table->string('pa_parts_1', 120)->nullable();
            $table->string('up_by_parts_pa_1', 20)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_1')->nullable();
            $table->date('date_pa_parts_1')->nullable();

            $table->string('pa_parts_2', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_2')->nullable();
            $table->string('up_by_parts_pa_2', 20)->nullable();
            $table->date('date_pa_parts_2')->nullable();

            $table->string('pa_parts_3', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_3')->nullable();
            $table->string('up_by_parts_pa_3', 20)->nullable();
            $table->date('date_pa_parts_3')->nullable();

            $table->string('pa_parts_4', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_4')->nullable();
            $table->string('up_by_parts_pa_4', 20)->nullable();
            $table->date('date_pa_parts_4')->nullable();

            $table->string('pa_parts_5', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_5')->nullable();
            $table->string('up_by_parts_pa_5', 20)->nullable();
            $table->date('date_pa_parts_5')->nullable();

            $table->string('pa_parts_6', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_6')->nullable();
            $table->string('up_by_parts_pa_6', 20)->nullable();
            $table->date('date_pa_parts_6')->nullable();

            $table->string('pa_parts_7', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_7')->nullable();
            $table->string('up_by_parts_pa_7', 20)->nullable();
            $table->date('date_pa_parts_7')->nullable();

            $table->string('pa_parts_8', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_8')->nullable();
            $table->string('up_by_parts_pa_8', 20)->nullable();
            $table->date('date_pa_parts_8')->nullable();

            $table->string('pa_parts_9', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_9')->nullable();
            $table->string('up_by_parts_pa_9', 20)->nullable();
            $table->date('date_pa_parts_9')->nullable();

            $table->string('pa_parts_10', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_10')->nullable();
            $table->string('up_by_parts_pa_10', 20)->nullable();
            $table->date('date_pa_parts_10')->nullable();

            $table->string('pa_parts_11', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_11')->nullable();
            $table->string('up_by_parts_pa_11', 20)->nullable();
            $table->date('date_pa_parts_11')->nullable();

            $table->string('pa_parts_12', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_12')->nullable();
            $table->string('up_by_parts_pa_12', 20)->nullable();
            $table->date('date_pa_parts_12')->nullable();

            $table->string('pa_parts_13', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_13')->nullable();
            $table->string('up_by_parts_pa_13', 20)->nullable();
            $table->date('date_pa_parts_13')->nullable();

            $table->string('pa_parts_14', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_14')->nullable();
            $table->string('up_by_parts_pa_14', 20)->nullable();
            $table->date('date_pa_parts_14')->nullable();

            $table->string('pa_parts_15', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_15')->nullable();
            $table->string('up_by_parts_pa_15', 20)->nullable();
            $table->date('date_pa_parts_15')->nullable();

            $table->string('pa_parts_16', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_16')->nullable();
            $table->string('up_by_parts_pa_16', 20)->nullable();
            $table->date('date_pa_parts_16')->nullable();

            $table->string('pa_parts_17', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_17')->nullable();
            $table->string('up_by_parts_pa_17', 20)->nullable();
            $table->date('date_pa_parts_17')->nullable();

            $table->string('pa_parts_18', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_18')->nullable();
            $table->string('up_by_parts_pa_18', 20)->nullable();
            $table->date('date_pa_parts_18')->nullable();

            $table->string('pa_parts_19', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_19')->nullable();
            $table->string('up_by_parts_pa_19', 20)->nullable();
            $table->date('date_pa_parts_19')->nullable();

            $table->string('pa_parts_20', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_20')->nullable();
            $table->string('up_by_parts_pa_20', 20)->nullable();
            $table->date('date_pa_parts_20')->nullable();

            $table->string('pa_parts_21', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_21')->nullable();
            $table->string('up_by_parts_pa_21', 20)->nullable();
            $table->date('date_pa_parts_21')->nullable();

            $table->string('pa_parts_22', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_22')->nullable();
            $table->string('up_by_parts_pa_22', 20)->nullable();
            $table->date('date_pa_parts_22')->nullable();

            $table->string('pa_parts_23', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_23')->nullable();
            $table->string('up_by_parts_pa_23', 20)->nullable();
            $table->date('date_pa_parts_23')->nullable();

            $table->string('pa_parts_24', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_24')->nullable();
            $table->string('up_by_parts_pa_24', 20)->nullable();
            $table->date('date_pa_parts_24')->nullable();

            $table->string('pa_parts_25', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_25')->nullable();
            $table->string('up_by_parts_pa_25', 20)->nullable();
            $table->date('date_pa_parts_25')->nullable();

            $table->string('pa_parts_26', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_26')->nullable();
            $table->string('up_by_parts_pa_26', 20)->nullable();
            $table->date('date_pa_parts_26')->nullable();

            $table->string('pa_parts_27', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_27')->nullable();
            $table->string('up_by_parts_pa_27', 20)->nullable();
            $table->date('date_pa_parts_27')->nullable();

            $table->string('pa_parts_28', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_28')->nullable();
            $table->string('up_by_parts_pa_28', 20)->nullable();
            $table->date('date_pa_parts_28')->nullable();

            $table->string('pa_parts_29', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_29')->nullable();
            $table->string('up_by_parts_pa_29', 20)->nullable();
            $table->date('date_pa_parts_29')->nullable();

            $table->string('pa_parts_30', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_30')->nullable();
            $table->string('up_by_parts_pa_30', 20)->nullable();
            $table->date('date_pa_parts_30')->nullable();

            $table->string('pa_parts_31', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_31')->nullable();
            $table->string('up_by_parts_pa_31', 20)->nullable();
            $table->date('date_pa_parts_31')->nullable();

            $table->string('pa_parts_32', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_32')->nullable();
            $table->string('up_by_parts_pa_32', 20)->nullable();
            $table->date('date_pa_parts_32')->nullable();

            $table->string('pa_parts_33', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_33')->nullable();
            $table->string('up_by_parts_pa_33', 20)->nullable();
            $table->date('date_pa_parts_33')->nullable();

            $table->string('pa_parts_34', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_34')->nullable();
            $table->string('up_by_parts_pa_34', 20)->nullable();
            $table->date('date_pa_parts_34')->nullable();

            $table->string('pa_parts_35', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_35')->nullable();
            $table->string('up_by_parts_pa_35', 20)->nullable();
            $table->date('date_pa_parts_35')->nullable();

            $table->string('pa_parts_36', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_36')->nullable();
            $table->string('up_by_parts_pa_36', 20)->nullable();
            $table->date('date_pa_parts_36')->nullable();

            $table->string('pa_parts_37', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_37')->nullable();
            $table->string('up_by_parts_pa_37', 20)->nullable();
            $table->date('date_pa_parts_37')->nullable();

            $table->string('pa_parts_38', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_38')->nullable();
            $table->string('up_by_parts_pa_38', 20)->nullable();
            $table->date('date_pa_parts_38')->nullable();

            $table->string('pa_parts_39', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_39')->nullable();
            $table->string('up_by_parts_pa_39', 20)->nullable();
            $table->date('date_pa_parts_39')->nullable();

            $table->string('pa_parts_40', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_40')->nullable();
            $table->string('up_by_parts_pa_40', 20)->nullable();
            $table->date('date_pa_parts_40')->nullable();

            $table->string('pa_parts_41', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_41')->nullable();
            $table->string('up_by_parts_pa_41', 20)->nullable();
            $table->date('date_pa_parts_41')->nullable();

            $table->string('pa_parts_42', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_42')->nullable();
            $table->string('up_by_parts_pa_42', 20)->nullable();
            $table->date('date_pa_parts_42')->nullable();

            $table->string('pa_parts_43', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_43')->nullable();
            $table->string('up_by_parts_pa_43', 20)->nullable();
            $table->date('date_pa_parts_43')->nullable();

            $table->string('pa_parts_44', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_44')->nullable();
            $table->string('up_by_parts_pa_44', 20)->nullable();
            $table->date('date_pa_parts_44')->nullable();

            $table->string('pa_parts_45', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pa_45')->nullable();
            $table->string('up_by_parts_pa_45', 20)->nullable();
            $table->date('date_pa_parts_45')->nullable();

            $table->string('pa_jasa_1', 120)->nullable();
            $table->string('up_by_jasa_pa_1', 20)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_1')->nullable();
            $table->date('date_pa_jasa_1')->nullable();

            $table->string('pa_jasa_2', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_2')->nullable();
            $table->string('up_by_jasa_pa_2', 20)->nullable();
            $table->date('date_pa_jasa_2')->nullable();

            $table->string('pa_jasa_3', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_3')->nullable();
            $table->string('up_by_jasa_pa_3', 20)->nullable();
            $table->date('date_pa_jasa_3')->nullable();

            $table->string('pa_jasa_4', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_4')->nullable();
            $table->string('up_by_jasa_pa_4', 20)->nullable();
            $table->date('date_pa_jasa_4')->nullable();

            $table->string('pa_jasa_5', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_5')->nullable();
            $table->string('up_by_jasa_pa_5', 20)->nullable();
            $table->date('date_pa_jasa_5')->nullable();

            $table->string('pa_jasa_6', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_6')->nullable();
            $table->string('up_by_jasa_pa_6', 20)->nullable();
            $table->date('date_pa_jasa_6')->nullable();

            $table->string('pa_jasa_7', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_7')->nullable();
            $table->string('up_by_jasa_pa_7', 20)->nullable();
            $table->date('date_pa_jasa_7')->nullable();

            $table->string('pa_jasa_8', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_8')->nullable();
            $table->string('up_by_jasa_pa_8', 20)->nullable();
            $table->date('date_pa_jasa_8')->nullable();

            $table->string('pa_jasa_9', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_9')->nullable();
            $table->string('up_by_jasa_pa_9', 20)->nullable();
            $table->date('date_pa_jasa_9')->nullable();

            $table->string('pa_jasa_10', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_10')->nullable();
            $table->string('up_by_jasa_pa_10', 20)->nullable();
            $table->date('date_pa_jasa_10')->nullable();

            $table->string('pa_jasa_11', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_11')->nullable();
            $table->string('up_by_jasa_pa_11', 20)->nullable();
            $table->date('date_pa_jasa_11')->nullable();

            $table->string('pa_jasa_12', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_12')->nullable();
            $table->string('up_by_jasa_pa_12', 20)->nullable();
            $table->date('date_pa_jasa_12')->nullable();

            $table->string('pa_jasa_13', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_13')->nullable();
            $table->string('up_by_jasa_pa_13', 20)->nullable();
            $table->date('date_pa_jasa_13')->nullable();

            $table->string('pa_jasa_14', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_14')->nullable();
            $table->string('up_by_jasa_pa_14', 20)->nullable();
            $table->date('date_pa_jasa_14')->nullable();

            $table->string('pa_jasa_15', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_15')->nullable();
            $table->string('up_by_jasa_pa_15', 20)->nullable();
            $table->date('date_pa_jasa_15')->nullable();

            $table->string('pa_jasa_16', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_16')->nullable();
            $table->string('up_by_jasa_pa_16', 20)->nullable();
            $table->date('date_pa_jasa_16')->nullable();

            $table->string('pa_jasa_17', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_17')->nullable();
            $table->string('up_by_jasa_pa_17', 20)->nullable();
            $table->date('date_pa_jasa_17')->nullable();

            $table->string('pa_jasa_18', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_18')->nullable();
            $table->string('up_by_jasa_pa_18', 20)->nullable();
            $table->date('date_pa_jasa_18')->nullable();

            $table->string('pa_jasa_19', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_19')->nullable();
            $table->string('up_by_jasa_pa_19', 20)->nullable();
            $table->date('date_pa_jasa_19')->nullable();

            $table->string('pa_jasa_20', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_20')->nullable();
            $table->string('up_by_jasa_pa_20', 20)->nullable();
            $table->date('date_pa_jasa_20')->nullable();

            $table->string('pa_jasa_21', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_21')->nullable();
            $table->string('up_by_jasa_pa_21', 20)->nullable();
            $table->date('date_pa_jasa_21')->nullable();

            $table->string('pa_jasa_22', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_22')->nullable();
            $table->string('up_by_jasa_pa_22', 20)->nullable();
            $table->date('date_pa_jasa_22')->nullable();

            $table->string('pa_jasa_23', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_23')->nullable();
            $table->string('up_by_jasa_pa_23', 20)->nullable();
            $table->date('date_pa_jasa_23')->nullable();

            $table->string('pa_jasa_24', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_24')->nullable();
            $table->string('up_by_jasa_pa_24', 20)->nullable();
            $table->date('date_pa_jasa_24')->nullable();

            $table->string('pa_jasa_25', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_25')->nullable();
            $table->string('up_by_jasa_pa_25', 20)->nullable();
            $table->date('date_pa_jasa_25')->nullable();

            $table->string('pa_jasa_26', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_26')->nullable();
            $table->string('up_by_jasa_pa_26', 20)->nullable();
            $table->date('date_pa_jasa_26')->nullable();

            $table->string('pa_jasa_27', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_27')->nullable();
            $table->string('up_by_jasa_pa_27', 20)->nullable();
            $table->date('date_pa_jasa_27')->nullable();

            $table->string('pa_jasa_28', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_28')->nullable();
            $table->string('up_by_jasa_pa_28', 20)->nullable();
            $table->date('date_pa_jasa_28')->nullable();

            $table->string('pa_jasa_29', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_29')->nullable();
            $table->string('up_by_jasa_pa_29', 20)->nullable();
            $table->date('date_pa_jasa_29')->nullable();

            $table->string('pa_jasa_30', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pa_30')->nullable();
            $table->string('up_by_jasa_pa_30', 20)->nullable();
            $table->date('date_pa_jasa_30')->nullable();

            $table->string('pa_mnftr_1', 120)->nullable();
            $table->string('up_by_mnftr_pa_1', 20)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_1')->nullable();
            $table->date('date_pa_mnftr_1')->nullable();

            $table->string('pa_mnftr_2', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_2')->nullable();
            $table->string('up_by_mnftr_pa_2', 20)->nullable();
            $table->date('date_pa_mnftr_2')->nullable();

            $table->string('pa_mnftr_3', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_3')->nullable();
            $table->string('up_by_mnftr_pa_3', 20)->nullable();
            $table->date('date_pa_mnftr_3')->nullable();

            $table->string('pa_mnftr_4', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_4')->nullable();
            $table->string('up_by_mnftr_pa_4', 20)->nullable();
            $table->date('date_pa_mnftr_4')->nullable();

            $table->string('pa_mnftr_5', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_5')->nullable();
            $table->string('up_by_mnftr_pa_5', 20)->nullable();
            $table->date('date_pa_mnftr_5')->nullable();

            $table->string('pa_mnftr_6', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_6')->nullable();
            $table->string('up_by_mnftr_pa_6', 20)->nullable();
            $table->date('date_pa_mnftr_6')->nullable();

            $table->string('pa_mnftr_7', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_7')->nullable();
            $table->string('up_by_mnftr_pa_7', 20)->nullable();
            $table->date('date_pa_mnftr_7')->nullable();

            $table->string('pa_mnftr_8', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_8')->nullable();
            $table->string('up_by_mnftr_pa_8', 20)->nullable();
            $table->date('date_pa_mnftr_8')->nullable();

            $table->string('pa_mnftr_9', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_9')->nullable();
            $table->string('up_by_mnftr_pa_9', 20)->nullable();
            $table->date('date_pa_mnftr_9')->nullable();

            $table->string('pa_mnftr_10', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pa_10')->nullable();
            $table->string('up_by_mnftr_pa_10', 20)->nullable();
            $table->date('date_pa_mnftr_10')->nullable();

            // Impor
            $table->string('pa_epq_1', 120)->nullable();
            $table->string('up_by_epq_pa_1', 20)->nullable();
            $table->unsignedBigInteger('mny_epq_pa_1')->nullable();
            $table->date('date_pa_epq_1')->nullable();

            $table->string('pa_epq_2', 120)->nullable();
            $table->unsignedBigInteger('mny_epq_pa_2')->nullable();
            $table->string('up_by_epq_pa_2', 20)->nullable();
            $table->date('date_pa_epq_2')->nullable();

            $table->string('pa_epq_3', 120)->nullable();
            $table->unsignedBigInteger('mny_epq_pa_3')->nullable();
            $table->string('up_by_epq_pa_3', 20)->nullable();
            $table->date('date_pa_epq_3')->nullable();

            $table->string('pa_epq_4', 120)->nullable();
            $table->unsignedBigInteger('mny_epq_pa_4')->nullable();
            $table->string('up_by_epq_pa_4', 20)->nullable();
            $table->date('date_pa_epq_4')->nullable();

            $table->string('pa_epq_5', 120)->nullable();
            $table->unsignedBigInteger('mny_epq_pa_5')->nullable();
            $table->string('up_by_epq_pa_5', 20)->nullable();
            $table->date('date_pa_epq_5')->nullable();

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
        Schema::dropIfExists('3_02_pa_project');
    }
};
