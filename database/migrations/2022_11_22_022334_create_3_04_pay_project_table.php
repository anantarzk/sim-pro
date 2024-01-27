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
        Schema::create('3_04_pay_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_pay_04_3')
                ->unique()
                ->nullable();

            $table
                ->string('status_pay_04', 40)
                ->default('-')
                ->nullable();
            $table->date('status_pay_04_date')->nullable();
            $table
                ->string('approval_by', 40)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();

            // file yang akan disimpan
            $table->string('pay_parts_1', 120)->nullable();
            $table->string('up_by_parts_pay_1', 20)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_1')->nullable();
            $table->date('date_pay_parts_1')->nullable();

            $table->string('pay_parts_2', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_2')->nullable();
            $table->string('up_by_parts_pay_2', 20)->nullable();
            $table->date('date_pay_parts_2')->nullable();

            $table->string('pay_parts_3', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_3')->nullable();
            $table->string('up_by_parts_pay_3', 20)->nullable();
            $table->date('date_pay_parts_3')->nullable();

            $table->string('pay_parts_4', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_4')->nullable();
            $table->string('up_by_parts_pay_4', 20)->nullable();
            $table->date('date_pay_parts_4')->nullable();

            $table->string('pay_parts_5', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_5')->nullable();
            $table->string('up_by_parts_pay_5', 20)->nullable();
            $table->date('date_pay_parts_5')->nullable();

            $table->string('pay_parts_6', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_6')->nullable();
            $table->string('up_by_parts_pay_6', 20)->nullable();
            $table->date('date_pay_parts_6')->nullable();

            $table->string('pay_parts_7', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_7')->nullable();
            $table->string('up_by_parts_pay_7', 20)->nullable();
            $table->date('date_pay_parts_7')->nullable();

            $table->string('pay_parts_8', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_8')->nullable();
            $table->string('up_by_parts_pay_8', 20)->nullable();
            $table->date('date_pay_parts_8')->nullable();

            $table->string('pay_parts_9', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_9')->nullable();
            $table->string('up_by_parts_pay_9', 20)->nullable();
            $table->date('date_pay_parts_9')->nullable();

            $table->string('pay_parts_10', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_10')->nullable();
            $table->string('up_by_parts_pay_10', 20)->nullable();
            $table->date('date_pay_parts_10')->nullable();

            $table->string('pay_parts_11', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_11')->nullable();
            $table->string('up_by_parts_pay_11', 20)->nullable();
            $table->date('date_pay_parts_11')->nullable();

            $table->string('pay_parts_12', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_12')->nullable();
            $table->string('up_by_parts_pay_12', 20)->nullable();
            $table->date('date_pay_parts_12')->nullable();

            $table->string('pay_parts_13', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_13')->nullable();
            $table->string('up_by_parts_pay_13', 20)->nullable();
            $table->date('date_pay_parts_13')->nullable();

            $table->string('pay_parts_14', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_14')->nullable();
            $table->string('up_by_parts_pay_14', 20)->nullable();
            $table->date('date_pay_parts_14')->nullable();

            $table->string('pay_parts_15', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_15')->nullable();
            $table->string('up_by_parts_pay_15', 20)->nullable();
            $table->date('date_pay_parts_15')->nullable();

            $table->string('pay_parts_16', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_16')->nullable();
            $table->string('up_by_parts_pay_16', 20)->nullable();
            $table->date('date_pay_parts_16')->nullable();

            $table->string('pay_parts_17', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_17')->nullable();
            $table->string('up_by_parts_pay_17', 20)->nullable();
            $table->date('date_pay_parts_17')->nullable();

            $table->string('pay_parts_18', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_18')->nullable();
            $table->string('up_by_parts_pay_18', 20)->nullable();
            $table->date('date_pay_parts_18')->nullable();

            $table->string('pay_parts_19', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_19')->nullable();
            $table->string('up_by_parts_pay_19', 20)->nullable();
            $table->date('date_pay_parts_19')->nullable();

            $table->string('pay_parts_20', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_20')->nullable();
            $table->string('up_by_parts_pay_20', 20)->nullable();
            $table->date('date_pay_parts_20')->nullable();

            $table->string('pay_parts_21', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_21')->nullable();
            $table->string('up_by_parts_pay_21', 20)->nullable();
            $table->date('date_pay_parts_21')->nullable();

            $table->string('pay_parts_22', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_22')->nullable();
            $table->string('up_by_parts_pay_22', 20)->nullable();
            $table->date('date_pay_parts_22')->nullable();

            $table->string('pay_parts_23', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_23')->nullable();
            $table->string('up_by_parts_pay_23', 20)->nullable();
            $table->date('date_pay_parts_23')->nullable();

            $table->string('pay_parts_24', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_24')->nullable();
            $table->string('up_by_parts_pay_24', 20)->nullable();
            $table->date('date_pay_parts_24')->nullable();

            $table->string('pay_parts_25', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_25')->nullable();
            $table->string('up_by_parts_pay_25', 20)->nullable();
            $table->date('date_pay_parts_25')->nullable();

            $table->string('pay_parts_26', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_26')->nullable();
            $table->string('up_by_parts_pay_26', 20)->nullable();
            $table->date('date_pay_parts_26')->nullable();

            $table->string('pay_parts_27', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_27')->nullable();
            $table->string('up_by_parts_pay_27', 20)->nullable();
            $table->date('date_pay_parts_27')->nullable();

            $table->string('pay_parts_28', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_28')->nullable();
            $table->string('up_by_parts_pay_28', 20)->nullable();
            $table->date('date_pay_parts_28')->nullable();

            $table->string('pay_parts_29', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_29')->nullable();
            $table->string('up_by_parts_pay_29', 20)->nullable();
            $table->date('date_pay_parts_29')->nullable();

            $table->string('pay_parts_30', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_30')->nullable();
            $table->string('up_by_parts_pay_30', 20)->nullable();
            $table->date('date_pay_parts_30')->nullable();

            $table->string('pay_parts_31', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_31')->nullable();
            $table->string('up_by_parts_pay_31', 20)->nullable();
            $table->date('date_pay_parts_31')->nullable();

            $table->string('pay_parts_32', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_32')->nullable();
            $table->string('up_by_parts_pay_32', 20)->nullable();
            $table->date('date_pay_parts_32')->nullable();

            $table->string('pay_parts_33', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_33')->nullable();
            $table->string('up_by_parts_pay_33', 20)->nullable();
            $table->date('date_pay_parts_33')->nullable();

            $table->string('pay_parts_34', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_34')->nullable();
            $table->string('up_by_parts_pay_34', 20)->nullable();
            $table->date('date_pay_parts_34')->nullable();

            $table->string('pay_parts_35', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_35')->nullable();
            $table->string('up_by_parts_pay_35', 20)->nullable();
            $table->date('date_pay_parts_35')->nullable();

            $table->string('pay_parts_36', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_36')->nullable();
            $table->string('up_by_parts_pay_36', 20)->nullable();
            $table->date('date_pay_parts_36')->nullable();

            $table->string('pay_parts_37', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_37')->nullable();
            $table->string('up_by_parts_pay_37', 20)->nullable();
            $table->date('date_pay_parts_37')->nullable();

            $table->string('pay_parts_38', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_38')->nullable();
            $table->string('up_by_parts_pay_38', 20)->nullable();
            $table->date('date_pay_parts_38')->nullable();

            $table->string('pay_parts_39', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_39')->nullable();
            $table->string('up_by_parts_pay_39', 20)->nullable();
            $table->date('date_pay_parts_39')->nullable();

            $table->string('pay_parts_40', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_40')->nullable();
            $table->string('up_by_parts_pay_40', 20)->nullable();
            $table->date('date_pay_parts_40')->nullable();

            $table->string('pay_parts_41', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_41')->nullable();
            $table->string('up_by_parts_pay_41', 20)->nullable();
            $table->date('date_pay_parts_41')->nullable();

            $table->string('pay_parts_42', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_42')->nullable();
            $table->string('up_by_parts_pay_42', 20)->nullable();
            $table->date('date_pay_parts_42')->nullable();

            $table->string('pay_parts_43', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_43')->nullable();
            $table->string('up_by_parts_pay_43', 20)->nullable();
            $table->date('date_pay_parts_43')->nullable();

            $table->string('pay_parts_44', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_44')->nullable();
            $table->string('up_by_parts_pay_44', 20)->nullable();
            $table->date('date_pay_parts_44')->nullable();

            $table->string('pay_parts_45', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_pay_45')->nullable();
            $table->string('up_by_parts_pay_45', 20)->nullable();
            $table->date('date_pay_parts_45')->nullable();

            $table->string('pay_jasa_1', 120)->nullable();
            $table->string('up_by_jasa_pay_1', 20)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_1')->nullable();
            $table->date('date_pay_jasa_1')->nullable();

            $table->string('pay_jasa_2', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_2')->nullable();
            $table->string('up_by_jasa_pay_2', 20)->nullable();
            $table->date('date_pay_jasa_2')->nullable();

            $table->string('pay_jasa_3', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_3')->nullable();
            $table->string('up_by_jasa_pay_3', 20)->nullable();
            $table->date('date_pay_jasa_3')->nullable();

            $table->string('pay_jasa_4', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_4')->nullable();
            $table->string('up_by_jasa_pay_4', 20)->nullable();
            $table->date('date_pay_jasa_4')->nullable();

            $table->string('pay_jasa_5', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_5')->nullable();
            $table->string('up_by_jasa_pay_5', 20)->nullable();
            $table->date('date_pay_jasa_5')->nullable();

            $table->string('pay_jasa_6', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_6')->nullable();
            $table->string('up_by_jasa_pay_6', 20)->nullable();
            $table->date('date_pay_jasa_6')->nullable();

            $table->string('pay_jasa_7', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_7')->nullable();
            $table->string('up_by_jasa_pay_7', 20)->nullable();
            $table->date('date_pay_jasa_7')->nullable();

            $table->string('pay_jasa_8', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_8')->nullable();
            $table->string('up_by_jasa_pay_8', 20)->nullable();
            $table->date('date_pay_jasa_8')->nullable();

            $table->string('pay_jasa_9', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_9')->nullable();
            $table->string('up_by_jasa_pay_9', 20)->nullable();
            $table->date('date_pay_jasa_9')->nullable();

            $table->string('pay_jasa_10', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_10')->nullable();
            $table->string('up_by_jasa_pay_10', 20)->nullable();
            $table->date('date_pay_jasa_10')->nullable();

            $table->string('pay_jasa_11', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_11')->nullable();
            $table->string('up_by_jasa_pay_11', 20)->nullable();
            $table->date('date_pay_jasa_11')->nullable();

            $table->string('pay_jasa_12', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_12')->nullable();
            $table->string('up_by_jasa_pay_12', 20)->nullable();
            $table->date('date_pay_jasa_12')->nullable();

            $table->string('pay_jasa_13', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_13')->nullable();
            $table->string('up_by_jasa_pay_13', 20)->nullable();
            $table->date('date_pay_jasa_13')->nullable();

            $table->string('pay_jasa_14', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_14')->nullable();
            $table->string('up_by_jasa_pay_14', 20)->nullable();
            $table->date('date_pay_jasa_14')->nullable();

            $table->string('pay_jasa_15', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_15')->nullable();
            $table->string('up_by_jasa_pay_15', 20)->nullable();
            $table->date('date_pay_jasa_15')->nullable();

            $table->string('pay_jasa_16', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_16')->nullable();
            $table->string('up_by_jasa_pay_16', 20)->nullable();
            $table->date('date_pay_jasa_16')->nullable();

            $table->string('pay_jasa_17', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_17')->nullable();
            $table->string('up_by_jasa_pay_17', 20)->nullable();
            $table->date('date_pay_jasa_17')->nullable();

            $table->string('pay_jasa_18', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_18')->nullable();
            $table->string('up_by_jasa_pay_18', 20)->nullable();
            $table->date('date_pay_jasa_18')->nullable();

            $table->string('pay_jasa_19', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_19')->nullable();
            $table->string('up_by_jasa_pay_19', 20)->nullable();
            $table->date('date_pay_jasa_19')->nullable();

            $table->string('pay_jasa_20', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_20')->nullable();
            $table->string('up_by_jasa_pay_20', 20)->nullable();
            $table->date('date_pay_jasa_20')->nullable();

            $table->string('pay_jasa_21', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_21')->nullable();
            $table->string('up_by_jasa_pay_21', 20)->nullable();
            $table->date('date_pay_jasa_21')->nullable();

            $table->string('pay_jasa_22', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_22')->nullable();
            $table->string('up_by_jasa_pay_22', 20)->nullable();
            $table->date('date_pay_jasa_22')->nullable();

            $table->string('pay_jasa_23', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_23')->nullable();
            $table->string('up_by_jasa_pay_23', 20)->nullable();
            $table->date('date_pay_jasa_23')->nullable();

            $table->string('pay_jasa_24', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_24')->nullable();
            $table->string('up_by_jasa_pay_24', 20)->nullable();
            $table->date('date_pay_jasa_24')->nullable();

            $table->string('pay_jasa_25', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_25')->nullable();
            $table->string('up_by_jasa_pay_25', 20)->nullable();
            $table->date('date_pay_jasa_25')->nullable();

            $table->string('pay_jasa_26', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_26')->nullable();
            $table->string('up_by_jasa_pay_26', 20)->nullable();
            $table->date('date_pay_jasa_26')->nullable();

            $table->string('pay_jasa_27', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_27')->nullable();
            $table->string('up_by_jasa_pay_27', 20)->nullable();
            $table->date('date_pay_jasa_27')->nullable();

            $table->string('pay_jasa_28', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_28')->nullable();
            $table->string('up_by_jasa_pay_28', 20)->nullable();
            $table->date('date_pay_jasa_28')->nullable();

            $table->string('pay_jasa_29', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_29')->nullable();
            $table->string('up_by_jasa_pay_29', 20)->nullable();
            $table->date('date_pay_jasa_29')->nullable();

            $table->string('pay_jasa_30', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_pay_30')->nullable();
            $table->string('up_by_jasa_pay_30', 20)->nullable();
            $table->date('date_pay_jasa_30')->nullable();

            $table->string('pay_mnftr_1', 120)->nullable();
            $table->string('up_by_mnftr_pay_1', 20)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_1')->nullable();
            $table->date('date_pay_mnftr_1')->nullable();

            $table->string('pay_mnftr_2', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_2')->nullable();
            $table->string('up_by_mnftr_pay_2', 20)->nullable();
            $table->date('date_pay_mnftr_2')->nullable();

            $table->string('pay_mnftr_3', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_3')->nullable();
            $table->string('up_by_mnftr_pay_3', 20)->nullable();
            $table->date('date_pay_mnftr_3')->nullable();

            $table->string('pay_mnftr_4', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_4')->nullable();
            $table->string('up_by_mnftr_pay_4', 20)->nullable();
            $table->date('date_pay_mnftr_4')->nullable();

            $table->string('pay_mnftr_5', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_5')->nullable();
            $table->string('up_by_mnftr_pay_5', 20)->nullable();
            $table->date('date_pay_mnftr_5')->nullable();

            $table->string('pay_mnftr_6', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_6')->nullable();
            $table->string('up_by_mnftr_pay_6', 20)->nullable();
            $table->date('date_pay_mnftr_6')->nullable();

            $table->string('pay_mnftr_7', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_7')->nullable();
            $table->string('up_by_mnftr_pay_7', 20)->nullable();
            $table->date('date_pay_mnftr_7')->nullable();

            $table->string('pay_mnftr_8', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_8')->nullable();
            $table->string('up_by_mnftr_pay_8', 20)->nullable();
            $table->date('date_pay_mnftr_8')->nullable();

            $table->string('pay_mnftr_9', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_9')->nullable();
            $table->string('up_by_mnftr_pay_9', 20)->nullable();
            $table->date('date_pay_mnftr_9')->nullable();

            $table->string('pay_mnftr_10', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_pay_10')->nullable();
            $table->string('up_by_mnftr_pay_10', 20)->nullable();
            $table->date('date_pay_mnftr_10')->nullable();

            // Impor
            $table->string('pay_da_1', 120)->nullable();
            $table->string('up_by_da_pay_1', 20)->nullable();
            $table->unsignedBigInteger('mny_da_pay_1')->nullable();
            $table->date('date_pay_da_1')->nullable();

            $table->string('pay_da_2', 120)->nullable();
            $table->unsignedBigInteger('mny_da_pay_2')->nullable();
            $table->string('up_by_da_pay_2', 20)->nullable();
            $table->date('date_pay_da_2')->nullable();

            $table->string('pay_da_3', 120)->nullable();
            $table->unsignedBigInteger('mny_da_pay_3')->nullable();
            $table->string('up_by_da_pay_3', 20)->nullable();
            $table->date('date_pay_da_3')->nullable();

            $table->string('pay_da_4', 120)->nullable();
            $table->unsignedBigInteger('mny_da_pay_4')->nullable();
            $table->string('up_by_da_pay_4', 20)->nullable();
            $table->date('date_pay_da_4')->nullable();

            $table->string('pay_da_5', 120)->nullable();
            $table->unsignedBigInteger('mny_da_pay_5')->nullable();
            $table->string('up_by_da_pay_5', 20)->nullable();
            $table->date('date_pay_da_5')->nullable();

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
        Schema::dropIfExists('3_04_pay_project');
    }
};
