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
        Schema::create('3_01_pr_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_pr_01_3')
                ->unique()
                ->nullable();

            $table
                ->string('status_purchasing', 50)
                ->default('-')
                ->nullable();
            $table->date('status_purchasing_date')->nullable();
            $table
                ->string('status_pr_01', 50)
                ->default('-')
                ->nullable();
            $table->date('status_pr_01_date')->nullable();
            $table
                ->string('approval_by', 30)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();
            // file yang akan disimpan
            $table->string('pr_parts_1', 120)->nullable();
            $table->string('up_by_parts_pr_1', 20)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_1')->nullable();
            $table->date('date_pr_parts_1')->nullable();

            $table->string('pr_parts_2', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_2')->nullable();
            $table->string('up_by_parts_pr_2', 20)->nullable();
            $table->date('date_pr_parts_2')->nullable();

            $table->string('pr_parts_3', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_3')->nullable();
            $table->string('up_by_parts_pr_3', 20)->nullable();
            $table->date('date_pr_parts_3')->nullable();

            $table->string('pr_parts_4', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_4')->nullable();
            $table->string('up_by_parts_pr_4', 20)->nullable();
            $table->date('date_pr_parts_4')->nullable();

            $table->string('pr_parts_5', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_5')->nullable();
            $table->string('up_by_parts_pr_5', 20)->nullable();
            $table->date('date_pr_parts_5')->nullable();

            $table->string('pr_parts_6', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_6')->nullable();
            $table->string('up_by_parts_pr_6', 20)->nullable();
            $table->date('date_pr_parts_6')->nullable();

            $table->string('pr_parts_7', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_7')->nullable();
            $table->string('up_by_parts_pr_7', 20)->nullable();
            $table->date('date_pr_parts_7')->nullable();

            $table->string('pr_parts_8', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_8')->nullable();
            $table->string('up_by_parts_pr_8', 20)->nullable();
            $table->date('date_pr_parts_8')->nullable();

            $table->string('pr_parts_9', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_9')->nullable();
            $table->string('up_by_parts_pr_9', 20)->nullable();
            $table->date('date_pr_parts_9')->nullable();

            $table->string('pr_parts_10', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_10')->nullable();
            $table->string('up_by_parts_pr_10', 20)->nullable();
            $table->date('date_pr_parts_10')->nullable();

            $table->string('pr_parts_11', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_11')->nullable();
            $table->string('up_by_parts_pr_11', 20)->nullable();
            $table->date('date_pr_parts_11')->nullable();

            $table->string('pr_parts_12', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_12')->nullable();
            $table->string('up_by_parts_pr_12', 20)->nullable();
            $table->date('date_pr_parts_12')->nullable();

            $table->string('pr_parts_13', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_13')->nullable();
            $table->string('up_by_parts_pr_13', 20)->nullable();
            $table->date('date_pr_parts_13')->nullable();

            $table->string('pr_parts_14', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_14')->nullable();
            $table->string('up_by_parts_pr_14', 20)->nullable();
            $table->date('date_pr_parts_14')->nullable();

            $table->string('pr_parts_15', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_15')->nullable();
            $table->string('up_by_parts_pr_15', 20)->nullable();
            $table->date('date_pr_parts_15')->nullable();

            $table->string('pr_parts_16', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_16')->nullable();
            $table->string('up_by_parts_pr_16', 20)->nullable();
            $table->date('date_pr_parts_16')->nullable();

            $table->string('pr_parts_17', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_17')->nullable();
            $table->string('up_by_parts_pr_17', 20)->nullable();
            $table->date('date_pr_parts_17')->nullable();

            $table->string('pr_parts_18', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_18')->nullable();
            $table->string('up_by_parts_pr_18', 20)->nullable();
            $table->date('date_pr_parts_18')->nullable();

            $table->string('pr_parts_19', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_19')->nullable();
            $table->string('up_by_parts_pr_19', 20)->nullable();
            $table->date('date_pr_parts_19')->nullable();

            $table->string('pr_parts_20', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_20')->nullable();
            $table->string('up_by_parts_pr_20', 20)->nullable();
            $table->date('date_pr_parts_20')->nullable();

            $table->string('pr_parts_21', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_21')->nullable();
            $table->string('up_by_parts_pr_21', 20)->nullable();
            $table->date('date_pr_parts_21')->nullable();

            $table->string('pr_parts_22', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_22')->nullable();
            $table->string('up_by_parts_pr_22', 20)->nullable();
            $table->date('date_pr_parts_22')->nullable();

            $table->string('pr_parts_23', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_23')->nullable();
            $table->string('up_by_parts_pr_23', 20)->nullable();
            $table->date('date_pr_parts_23')->nullable();

            $table->string('pr_parts_24', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_24')->nullable();
            $table->string('up_by_parts_pr_24', 20)->nullable();
            $table->date('date_pr_parts_24')->nullable();

            $table->string('pr_parts_25', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_25')->nullable();
            $table->string('up_by_parts_pr_25', 20)->nullable();
            $table->date('date_pr_parts_25')->nullable();

            $table->string('pr_parts_26', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_26')->nullable();
            $table->string('up_by_parts_pr_26', 20)->nullable();
            $table->date('date_pr_parts_26')->nullable();

            $table->string('pr_parts_27', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_27')->nullable();
            $table->string('up_by_parts_pr_27', 20)->nullable();
            $table->date('date_pr_parts_27')->nullable();

            $table->string('pr_parts_28', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_28')->nullable();
            $table->string('up_by_parts_pr_28', 20)->nullable();
            $table->date('date_pr_parts_28')->nullable();

            $table->string('pr_parts_29', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_29')->nullable();
            $table->string('up_by_parts_pr_29', 20)->nullable();
            $table->date('date_pr_parts_29')->nullable();

            $table->string('pr_parts_30', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_30')->nullable();
            $table->string('up_by_parts_pr_30', 20)->nullable();
            $table->date('date_pr_parts_30')->nullable();

            $table->string('pr_parts_31', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_31')->nullable();
            $table->string('up_by_parts_pr_31', 20)->nullable();
            $table->date('date_pr_parts_31')->nullable();

            $table->string('pr_parts_32', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_32')->nullable();
            $table->string('up_by_parts_pr_32', 20)->nullable();
            $table->date('date_pr_parts_32')->nullable();

            $table->string('pr_parts_33', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_33')->nullable();
            $table->string('up_by_parts_pr_33', 20)->nullable();
            $table->date('date_pr_parts_33')->nullable();

            $table->string('pr_parts_34', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_34')->nullable();
            $table->string('up_by_parts_pr_34', 20)->nullable();
            $table->date('date_pr_parts_34')->nullable();

            $table->string('pr_parts_35', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_35')->nullable();
            $table->string('up_by_parts_pr_35', 20)->nullable();
            $table->date('date_pr_parts_35')->nullable();

            $table->string('pr_parts_36', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_36')->nullable();
            $table->string('up_by_parts_pr_36', 20)->nullable();
            $table->date('date_pr_parts_36')->nullable();

            $table->string('pr_parts_37', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_37')->nullable();
            $table->string('up_by_parts_pr_37', 20)->nullable();
            $table->date('date_pr_parts_37')->nullable();

            $table->string('pr_parts_38', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_38')->nullable();
            $table->string('up_by_parts_pr_38', 20)->nullable();
            $table->date('date_pr_parts_38')->nullable();

            $table->string('pr_parts_39', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_39')->nullable();
            $table->string('up_by_parts_pr_39', 20)->nullable();
            $table->date('date_pr_parts_39')->nullable();

            $table->string('pr_parts_40', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_40')->nullable();
            $table->string('up_by_parts_pr_40', 20)->nullable();
            $table->date('date_pr_parts_40')->nullable();

            $table->string('pr_parts_41', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_41')->nullable();
            $table->string('up_by_parts_pr_41', 20)->nullable();
            $table->date('date_pr_parts_41')->nullable();

            $table->string('pr_parts_42', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_42')->nullable();
            $table->string('up_by_parts_pr_42', 20)->nullable();
            $table->date('date_pr_parts_42')->nullable();

            $table->string('pr_parts_43', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_43')->nullable();
            $table->string('up_by_parts_pr_43', 20)->nullable();
            $table->date('date_pr_parts_43')->nullable();

            $table->string('pr_parts_44', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_44')->nullable();
            $table->string('up_by_parts_pr_44', 20)->nullable();
            $table->date('date_pr_parts_44')->nullable();

            $table->string('pr_parts_45', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pr_45')->nullable();
            $table->string('up_by_parts_pr_45', 20)->nullable();
            $table->date('date_pr_parts_45')->nullable();

            $table->string('pr_jasa_1', 120)->nullable();
            $table->string('up_by_jasa_pr_1', 20)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_1')->nullable();
            $table->date('date_pr_jasa_1')->nullable();

            $table->string('pr_jasa_2', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_2')->nullable();
            $table->string('up_by_jasa_pr_2', 20)->nullable();
            $table->date('date_pr_jasa_2')->nullable();

            $table->string('pr_jasa_3', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_3')->nullable();
            $table->string('up_by_jasa_pr_3', 20)->nullable();
            $table->date('date_pr_jasa_3')->nullable();

            $table->string('pr_jasa_4', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_4')->nullable();
            $table->string('up_by_jasa_pr_4', 20)->nullable();
            $table->date('date_pr_jasa_4')->nullable();

            $table->string('pr_jasa_5', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_5')->nullable();
            $table->string('up_by_jasa_pr_5', 20)->nullable();
            $table->date('date_pr_jasa_5')->nullable();

            $table->string('pr_jasa_6', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_6')->nullable();
            $table->string('up_by_jasa_pr_6', 20)->nullable();
            $table->date('date_pr_jasa_6')->nullable();

            $table->string('pr_jasa_7', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_7')->nullable();
            $table->string('up_by_jasa_pr_7', 20)->nullable();
            $table->date('date_pr_jasa_7')->nullable();

            $table->string('pr_jasa_8', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_8')->nullable();
            $table->string('up_by_jasa_pr_8', 20)->nullable();
            $table->date('date_pr_jasa_8')->nullable();

            $table->string('pr_jasa_9', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_9')->nullable();
            $table->string('up_by_jasa_pr_9', 20)->nullable();
            $table->date('date_pr_jasa_9')->nullable();

            $table->string('pr_jasa_10', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_10')->nullable();
            $table->string('up_by_jasa_pr_10', 20)->nullable();
            $table->date('date_pr_jasa_10')->nullable();

            $table->string('pr_jasa_11', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_11')->nullable();
            $table->string('up_by_jasa_pr_11', 20)->nullable();
            $table->date('date_pr_jasa_11')->nullable();

            $table->string('pr_jasa_12', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_12')->nullable();
            $table->string('up_by_jasa_pr_12', 20)->nullable();
            $table->date('date_pr_jasa_12')->nullable();

            $table->string('pr_jasa_13', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_13')->nullable();
            $table->string('up_by_jasa_pr_13', 20)->nullable();
            $table->date('date_pr_jasa_13')->nullable();

            $table->string('pr_jasa_14', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_14')->nullable();
            $table->string('up_by_jasa_pr_14', 20)->nullable();
            $table->date('date_pr_jasa_14')->nullable();

            $table->string('pr_jasa_15', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_15')->nullable();
            $table->string('up_by_jasa_pr_15', 20)->nullable();
            $table->date('date_pr_jasa_15')->nullable();

            $table->string('pr_jasa_16', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_16')->nullable();
            $table->string('up_by_jasa_pr_16', 20)->nullable();
            $table->date('date_pr_jasa_16')->nullable();

            $table->string('pr_jasa_17', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_17')->nullable();
            $table->string('up_by_jasa_pr_17', 20)->nullable();
            $table->date('date_pr_jasa_17')->nullable();

            $table->string('pr_jasa_18', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_18')->nullable();
            $table->string('up_by_jasa_pr_18', 20)->nullable();
            $table->date('date_pr_jasa_18')->nullable();

            $table->string('pr_jasa_19', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_19')->nullable();
            $table->string('up_by_jasa_pr_19', 20)->nullable();
            $table->date('date_pr_jasa_19')->nullable();

            $table->string('pr_jasa_20', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_20')->nullable();
            $table->string('up_by_jasa_pr_20', 20)->nullable();
            $table->date('date_pr_jasa_20')->nullable();

            $table->string('pr_jasa_21', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_21')->nullable();
            $table->string('up_by_jasa_pr_21', 20)->nullable();
            $table->date('date_pr_jasa_21')->nullable();

            $table->string('pr_jasa_22', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_22')->nullable();
            $table->string('up_by_jasa_pr_22', 20)->nullable();
            $table->date('date_pr_jasa_22')->nullable();

            $table->string('pr_jasa_23', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_23')->nullable();
            $table->string('up_by_jasa_pr_23', 20)->nullable();
            $table->date('date_pr_jasa_23')->nullable();

            $table->string('pr_jasa_24', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_24')->nullable();
            $table->string('up_by_jasa_pr_24', 20)->nullable();
            $table->date('date_pr_jasa_24')->nullable();

            $table->string('pr_jasa_25', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_25')->nullable();
            $table->string('up_by_jasa_pr_25', 20)->nullable();
            $table->date('date_pr_jasa_25')->nullable();

            $table->string('pr_jasa_26', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_26')->nullable();
            $table->string('up_by_jasa_pr_26', 20)->nullable();
            $table->date('date_pr_jasa_26')->nullable();

            $table->string('pr_jasa_27', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_27')->nullable();
            $table->string('up_by_jasa_pr_27', 20)->nullable();
            $table->date('date_pr_jasa_27')->nullable();

            $table->string('pr_jasa_28', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_28')->nullable();
            $table->string('up_by_jasa_pr_28', 20)->nullable();
            $table->date('date_pr_jasa_28')->nullable();

            $table->string('pr_jasa_29', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_29')->nullable();
            $table->string('up_by_jasa_pr_29', 20)->nullable();
            $table->date('date_pr_jasa_29')->nullable();

            $table->string('pr_jasa_30', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pr_30')->nullable();
            $table->string('up_by_jasa_pr_30', 20)->nullable();
            $table->date('date_pr_jasa_30')->nullable();

            $table->string('pr_mnftr_1', 120)->nullable();
            $table->string('up_by_mnftr_pr_1', 20)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_1')->nullable();
            $table->date('date_pr_mnftr_1')->nullable();

            $table->string('pr_mnftr_2', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_2')->nullable();
            $table->string('up_by_mnftr_pr_2', 20)->nullable();
            $table->date('date_pr_mnftr_2')->nullable();

            $table->string('pr_mnftr_3', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_3')->nullable();
            $table->string('up_by_mnftr_pr_3', 20)->nullable();
            $table->date('date_pr_mnftr_3')->nullable();

            $table->string('pr_mnftr_4', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_4')->nullable();
            $table->string('up_by_mnftr_pr_4', 20)->nullable();
            $table->date('date_pr_mnftr_4')->nullable();

            $table->string('pr_mnftr_5', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_5')->nullable();
            $table->string('up_by_mnftr_pr_5', 20)->nullable();
            $table->date('date_pr_mnftr_5')->nullable();

            $table->string('pr_mnftr_6', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_6')->nullable();
            $table->string('up_by_mnftr_pr_6', 20)->nullable();
            $table->date('date_pr_mnftr_6')->nullable();

            $table->string('pr_mnftr_7', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_7')->nullable();
            $table->string('up_by_mnftr_pr_7', 20)->nullable();
            $table->date('date_pr_mnftr_7')->nullable();

            $table->string('pr_mnftr_8', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_8')->nullable();
            $table->string('up_by_mnftr_pr_8', 20)->nullable();
            $table->date('date_pr_mnftr_8')->nullable();

            $table->string('pr_mnftr_9', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_9')->nullable();
            $table->string('up_by_mnftr_pr_9', 20)->nullable();
            $table->date('date_pr_mnftr_9')->nullable();

            $table->string('pr_mnftr_10', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pr_10')->nullable();
            $table->string('up_by_mnftr_pr_10', 20)->nullable();
            $table->date('date_pr_mnftr_10')->nullable();

            // Impor
            $table->string('pr_rfq_1', 120)->nullable();
            $table->string('up_by_rfq_pr_1', 20)->nullable();
            $table->unsignedBigInteger('mny_rfq_pr_1')->nullable();
            $table->date('date_pr_rfq_1')->nullable();

            $table->string('pr_rfq_2', 120)->nullable();
            $table->string('up_by_rfq_pr_2', 20)->nullable();
            $table->unsignedBigInteger('mny_rfq_pr_2')->nullable();
            $table->date('date_pr_rfq_2')->nullable();

            $table->string('pr_rfq_3', 120)->nullable();
            $table->string('up_by_rfq_pr_3', 20)->nullable();
            $table->unsignedBigInteger('mny_rfq_pr_3')->nullable();
            $table->date('date_pr_rfq_3')->nullable();

            $table->string('pr_rfq_4', 120)->nullable();
            $table->string('up_by_rfq_pr_4', 20)->nullable();
            $table->unsignedBigInteger('mny_rfq_pr_4')->nullable();
            $table->date('date_pr_rfq_4')->nullable();

            $table->string('pr_rfq_5', 120)->nullable();
            $table->string('up_by_rfq_pr_5', 20)->nullable();
            $table->unsignedBigInteger('mny_rfq_pr_5')->nullable();
            $table->date('date_pr_rfq_5')->nullable();

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
        Schema::dropIfExists('3_01_pr_project');
    }
};
