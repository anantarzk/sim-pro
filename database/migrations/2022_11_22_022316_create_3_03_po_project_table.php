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
        Schema::create('3_03_po_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_po_03_3')
                ->unique()
                ->nullable();

            $table
                ->string('status_po_03', 50)
                ->default('-')
                ->nullable();
            $table->date('status_po_03_date')->nullable();
            $table
                ->string('approval_by', 50)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();

            // file yang akan disimpan
            $table->string('po_parts_1', 120)->nullable();
            $table->string('up_by_parts_po_1', 20)->nullable();
            $table->unsignedBigInteger('mny_parts_po_1')->nullable();
            $table->date('date_po_parts_1')->nullable();

            $table->string('po_parts_2', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_2')->nullable();
            $table->string('up_by_parts_po_2', 20)->nullable();
            $table->date('date_po_parts_2')->nullable();

            $table->string('po_parts_3', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_3')->nullable();
            $table->string('up_by_parts_po_3', 20)->nullable();
            $table->date('date_po_parts_3')->nullable();

            $table->string('po_parts_4', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_4')->nullable();
            $table->string('up_by_parts_po_4', 20)->nullable();
            $table->date('date_po_parts_4')->nullable();

            $table->string('po_parts_5', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_5')->nullable();
            $table->string('up_by_parts_po_5', 20)->nullable();
            $table->date('date_po_parts_5')->nullable();

            $table->string('po_parts_6', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_6')->nullable();
            $table->string('up_by_parts_po_6', 20)->nullable();
            $table->date('date_po_parts_6')->nullable();

            $table->string('po_parts_7', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_7')->nullable();
            $table->string('up_by_parts_po_7', 20)->nullable();
            $table->date('date_po_parts_7')->nullable();

            $table->string('po_parts_8', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_8')->nullable();
            $table->string('up_by_parts_po_8', 20)->nullable();
            $table->date('date_po_parts_8')->nullable();

            $table->string('po_parts_9', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_9')->nullable();
            $table->string('up_by_parts_po_9', 20)->nullable();
            $table->date('date_po_parts_9')->nullable();

            $table->string('po_parts_10', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_10')->nullable();
            $table->string('up_by_parts_po_10', 20)->nullable();
            $table->date('date_po_parts_10')->nullable();

            $table->string('po_parts_11', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_11')->nullable();
            $table->string('up_by_parts_po_11', 20)->nullable();
            $table->date('date_po_parts_11')->nullable();

            $table->string('po_parts_12', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_12')->nullable();
            $table->string('up_by_parts_po_12', 20)->nullable();
            $table->date('date_po_parts_12')->nullable();

            $table->string('po_parts_13', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_13')->nullable();
            $table->string('up_by_parts_po_13', 20)->nullable();
            $table->date('date_po_parts_13')->nullable();

            $table->string('po_parts_14', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_14')->nullable();
            $table->string('up_by_parts_po_14', 20)->nullable();
            $table->date('date_po_parts_14')->nullable();

            $table->string('po_parts_15', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_15')->nullable();
            $table->string('up_by_parts_po_15', 20)->nullable();
            $table->date('date_po_parts_15')->nullable();

            $table->string('po_parts_16', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_16')->nullable();
            $table->string('up_by_parts_po_16', 20)->nullable();
            $table->date('date_po_parts_16')->nullable();

            $table->string('po_parts_17', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_17')->nullable();
            $table->string('up_by_parts_po_17', 20)->nullable();
            $table->date('date_po_parts_17')->nullable();

            $table->string('po_parts_18', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_18')->nullable();
            $table->string('up_by_parts_po_18', 20)->nullable();
            $table->date('date_po_parts_18')->nullable();

            $table->string('po_parts_19', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_19')->nullable();
            $table->string('up_by_parts_po_19', 20)->nullable();
            $table->date('date_po_parts_19')->nullable();

            $table->string('po_parts_20', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_20')->nullable();
            $table->string('up_by_parts_po_20', 20)->nullable();
            $table->date('date_po_parts_20')->nullable();

            $table->string('po_parts_21', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_21')->nullable();
            $table->string('up_by_parts_po_21', 20)->nullable();
            $table->date('date_po_parts_21')->nullable();

            $table->string('po_parts_22', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_22')->nullable();
            $table->string('up_by_parts_po_22', 20)->nullable();
            $table->date('date_po_parts_22')->nullable();

            $table->string('po_parts_23', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_23')->nullable();
            $table->string('up_by_parts_po_23', 20)->nullable();
            $table->date('date_po_parts_23')->nullable();

            $table->string('po_parts_24', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_24')->nullable();
            $table->string('up_by_parts_po_24', 20)->nullable();
            $table->date('date_po_parts_24')->nullable();

            $table->string('po_parts_25', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_25')->nullable();
            $table->string('up_by_parts_po_25', 20)->nullable();
            $table->date('date_po_parts_25')->nullable();

            $table->string('po_parts_26', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_26')->nullable();
            $table->string('up_by_parts_po_26', 20)->nullable();
            $table->date('date_po_parts_26')->nullable();

            $table->string('po_parts_27', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_27')->nullable();
            $table->string('up_by_parts_po_27', 20)->nullable();
            $table->date('date_po_parts_27')->nullable();

            $table->string('po_parts_28', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_28')->nullable();
            $table->string('up_by_parts_po_28', 20)->nullable();
            $table->date('date_po_parts_28')->nullable();

            $table->string('po_parts_29', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_29')->nullable();
            $table->string('up_by_parts_po_29', 20)->nullable();
            $table->date('date_po_parts_29')->nullable();

            $table->string('po_parts_30', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_30')->nullable();
            $table->string('up_by_parts_po_30', 20)->nullable();
            $table->date('date_po_parts_30')->nullable();

            $table->string('po_parts_31', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_31')->nullable();
            $table->string('up_by_parts_po_31', 20)->nullable();
            $table->date('date_po_parts_31')->nullable();

            $table->string('po_parts_32', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_32')->nullable();
            $table->string('up_by_parts_po_32', 20)->nullable();
            $table->date('date_po_parts_32')->nullable();

            $table->string('po_parts_33', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_33')->nullable();
            $table->string('up_by_parts_po_33', 20)->nullable();
            $table->date('date_po_parts_33')->nullable();

            $table->string('po_parts_34', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_34')->nullable();
            $table->string('up_by_parts_po_34', 20)->nullable();
            $table->date('date_po_parts_34')->nullable();

            $table->string('po_parts_35', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_35')->nullable();
            $table->string('up_by_parts_po_35', 20)->nullable();
            $table->date('date_po_parts_35')->nullable();

            $table->string('po_parts_36', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_36')->nullable();
            $table->string('up_by_parts_po_36', 20)->nullable();
            $table->date('date_po_parts_36')->nullable();

            $table->string('po_parts_37', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_37')->nullable();
            $table->string('up_by_parts_po_37', 20)->nullable();
            $table->date('date_po_parts_37')->nullable();

            $table->string('po_parts_38', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_38')->nullable();
            $table->string('up_by_parts_po_38', 20)->nullable();
            $table->date('date_po_parts_38')->nullable();

            $table->string('po_parts_39', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_39')->nullable();
            $table->string('up_by_parts_po_39', 20)->nullable();
            $table->date('date_po_parts_39')->nullable();

            $table->string('po_parts_40', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_40')->nullable();
            $table->string('up_by_parts_po_40', 20)->nullable();
            $table->date('date_po_parts_40')->nullable();

            $table->string('po_parts_41', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_41')->nullable();
            $table->string('up_by_parts_po_41', 20)->nullable();
            $table->date('date_po_parts_41')->nullable();

            $table->string('po_parts_42', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_42')->nullable();
            $table->string('up_by_parts_po_42', 20)->nullable();
            $table->date('date_po_parts_42')->nullable();

            $table->string('po_parts_43', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_43')->nullable();
            $table->string('up_by_parts_po_43', 20)->nullable();
            $table->date('date_po_parts_43')->nullable();

            $table->string('po_parts_44', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_44')->nullable();
            $table->string('up_by_parts_po_44', 20)->nullable();
            $table->date('date_po_parts_44')->nullable();

            $table->string('po_parts_45', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_45')->nullable();
            $table->string('up_by_parts_po_45', 20)->nullable();
            $table->date('date_po_parts_45')->nullable();

            $table->string('po_parts_46', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_46')->nullable();
            $table->string('up_by_parts_po_46', 20)->nullable();
            $table->date('date_po_parts_46')->nullable();

            $table->string('po_parts_47', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_47')->nullable();
            $table->string('up_by_parts_po_47', 20)->nullable();
            $table->date('date_po_parts_47')->nullable();

            $table->string('po_parts_48', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_48')->nullable();
            $table->string('up_by_parts_po_48', 20)->nullable();
            $table->date('date_po_parts_48')->nullable();

            $table->string('po_parts_49', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_49')->nullable();
            $table->string('up_by_parts_po_49', 20)->nullable();
            $table->date('date_po_parts_49')->nullable();

            $table->string('po_parts_50', 120)->nullable();
            $table->unsignedBigInteger('mny_parts_po_50')->nullable();
            $table->string('up_by_parts_po_50', 20)->nullable();
            $table->date('date_po_parts_50')->nullable();

            $table->string('po_jasa_1', 120)->nullable();
            $table->string('up_by_jasa_po_1', 20)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_1')->nullable();
            $table->date('date_po_jasa_1')->nullable();

            $table->string('po_jasa_2', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_2')->nullable();
            $table->string('up_by_jasa_po_2', 20)->nullable();
            $table->date('date_po_jasa_2')->nullable();

            $table->string('po_jasa_3', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_3')->nullable();
            $table->string('up_by_jasa_po_3', 20)->nullable();
            $table->date('date_po_jasa_3')->nullable();

            $table->string('po_jasa_4', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_4')->nullable();
            $table->string('up_by_jasa_po_4', 20)->nullable();
            $table->date('date_po_jasa_4')->nullable();

            $table->string('po_jasa_5', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_5')->nullable();
            $table->string('up_by_jasa_po_5', 20)->nullable();
            $table->date('date_po_jasa_5')->nullable();

            $table->string('po_jasa_6', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_6')->nullable();
            $table->string('up_by_jasa_po_6', 20)->nullable();
            $table->date('date_po_jasa_6')->nullable();

            $table->string('po_jasa_7', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_7')->nullable();
            $table->string('up_by_jasa_po_7', 20)->nullable();
            $table->date('date_po_jasa_7')->nullable();

            $table->string('po_jasa_8', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_8')->nullable();
            $table->string('up_by_jasa_po_8', 20)->nullable();
            $table->date('date_po_jasa_8')->nullable();

            $table->string('po_jasa_9', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_9')->nullable();
            $table->string('up_by_jasa_po_9', 20)->nullable();
            $table->date('date_po_jasa_9')->nullable();

            $table->string('po_jasa_10', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_10')->nullable();
            $table->string('up_by_jasa_po_10', 20)->nullable();
            $table->date('date_po_jasa_10')->nullable();

            $table->string('po_jasa_11', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_11')->nullable();
            $table->string('up_by_jasa_po_11', 20)->nullable();
            $table->date('date_po_jasa_11')->nullable();

            $table->string('po_jasa_12', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_12')->nullable();
            $table->string('up_by_jasa_po_12', 20)->nullable();
            $table->date('date_po_jasa_12')->nullable();

            $table->string('po_jasa_13', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_13')->nullable();
            $table->string('up_by_jasa_po_13', 20)->nullable();
            $table->date('date_po_jasa_13')->nullable();

            $table->string('po_jasa_14', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_14')->nullable();
            $table->string('up_by_jasa_po_14', 20)->nullable();
            $table->date('date_po_jasa_14')->nullable();

            $table->string('po_jasa_15', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_15')->nullable();
            $table->string('up_by_jasa_po_15', 20)->nullable();
            $table->date('date_po_jasa_15')->nullable();

            $table->string('po_jasa_16', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_16')->nullable();
            $table->string('up_by_jasa_po_16', 20)->nullable();
            $table->date('date_po_jasa_16')->nullable();

            $table->string('po_jasa_17', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_17')->nullable();
            $table->string('up_by_jasa_po_17', 20)->nullable();
            $table->date('date_po_jasa_17')->nullable();

            $table->string('po_jasa_18', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_18')->nullable();
            $table->string('up_by_jasa_po_18', 20)->nullable();
            $table->date('date_po_jasa_18')->nullable();

            $table->string('po_jasa_19', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_19')->nullable();
            $table->string('up_by_jasa_po_19', 20)->nullable();
            $table->date('date_po_jasa_19')->nullable();

            $table->string('po_jasa_20', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_20')->nullable();
            $table->string('up_by_jasa_po_20', 20)->nullable();
            $table->date('date_po_jasa_20')->nullable();

            $table->string('po_jasa_21', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_21')->nullable();
            $table->string('up_by_jasa_po_21', 20)->nullable();
            $table->date('date_po_jasa_21')->nullable();

            $table->string('po_jasa_22', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_22')->nullable();
            $table->string('up_by_jasa_po_22', 20)->nullable();
            $table->date('date_po_jasa_22')->nullable();

            $table->string('po_jasa_23', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_23')->nullable();
            $table->string('up_by_jasa_po_23', 20)->nullable();
            $table->date('date_po_jasa_23')->nullable();

            $table->string('po_jasa_24', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_24')->nullable();
            $table->string('up_by_jasa_po_24', 20)->nullable();
            $table->date('date_po_jasa_24')->nullable();

            $table->string('po_jasa_25', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_25')->nullable();
            $table->string('up_by_jasa_po_25', 20)->nullable();
            $table->date('date_po_jasa_25')->nullable();

            $table->string('po_jasa_26', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_26')->nullable();
            $table->string('up_by_jasa_po_26', 20)->nullable();
            $table->date('date_po_jasa_26')->nullable();

            $table->string('po_jasa_27', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_27')->nullable();
            $table->string('up_by_jasa_po_27', 20)->nullable();
            $table->date('date_po_jasa_27')->nullable();

            $table->string('po_jasa_28', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_28')->nullable();
            $table->string('up_by_jasa_po_28', 20)->nullable();
            $table->date('date_po_jasa_28')->nullable();

            $table->string('po_jasa_29', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_29')->nullable();
            $table->string('up_by_jasa_po_29', 20)->nullable();
            $table->date('date_po_jasa_29')->nullable();

            $table->string('po_jasa_30', 120)->nullable();
            $table->unsignedBigInteger('mny_jasa_po_30')->nullable();
            $table->string('up_by_jasa_po_30', 20)->nullable();
            $table->date('date_po_jasa_30')->nullable();

            $table->string('po_mnftr_1', 120)->nullable();
            $table->string('up_by_mnftr_po_1', 20)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_1')->nullable();
            $table->date('date_po_mnftr_1')->nullable();

            $table->string('po_mnftr_2', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_2')->nullable();
            $table->string('up_by_mnftr_po_2', 20)->nullable();
            $table->date('date_po_mnftr_2')->nullable();

            $table->string('po_mnftr_3', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_3')->nullable();
            $table->string('up_by_mnftr_po_3', 20)->nullable();
            $table->date('date_po_mnftr_3')->nullable();

            $table->string('po_mnftr_4', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_4')->nullable();
            $table->string('up_by_mnftr_po_4', 20)->nullable();
            $table->date('date_po_mnftr_4')->nullable();

            $table->string('po_mnftr_5', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_5')->nullable();
            $table->string('up_by_mnftr_po_5', 20)->nullable();
            $table->date('date_po_mnftr_5')->nullable();

            $table->string('po_mnftr_6', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_6')->nullable();
            $table->string('up_by_mnftr_po_6', 20)->nullable();
            $table->date('date_po_mnftr_6')->nullable();

            $table->string('po_mnftr_7', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_7')->nullable();
            $table->string('up_by_mnftr_po_7', 20)->nullable();
            $table->date('date_po_mnftr_7')->nullable();

            $table->string('po_mnftr_8', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_8')->nullable();
            $table->string('up_by_mnftr_po_8', 20)->nullable();
            $table->date('date_po_mnftr_8')->nullable();

            $table->string('po_mnftr_9', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_9')->nullable();
            $table->string('up_by_mnftr_po_9', 20)->nullable();
            $table->date('date_po_mnftr_9')->nullable();

            $table->string('po_mnftr_10', 120)->nullable();
            $table->unsignedBigInteger('mny_mnftr_po_10')->nullable();
            $table->string('up_by_mnftr_po_10', 20)->nullable();
            $table->date('date_po_mnftr_10')->nullable();

            // Impor

            $table->string('po_capo_1', 120)->nullable();
            $table->string('up_by_capo_po_1', 20)->nullable();
            $table->unsignedBigInteger('mny_capo_po_1')->nullable();
            $table->date('date_po_capo_1')->nullable();

            $table->string('po_capo_2', 120)->nullable();
            $table->unsignedBigInteger('mny_capo_po_2')->nullable();
            $table->string('up_by_capo_po_2', 20)->nullable();
            $table->date('date_po_capo_2')->nullable();

            $table->string('po_capo_3', 120)->nullable();
            $table->unsignedBigInteger('mny_capo_po_3')->nullable();
            $table->string('up_by_capo_po_3', 20)->nullable();
            $table->date('date_po_capo_3')->nullable();

            $table->string('po_capo_4', 120)->nullable();
            $table->unsignedBigInteger('mny_capo_po_4')->nullable();
            $table->string('up_by_capo_po_4', 20)->nullable();
            $table->date('date_po_capo_4')->nullable();

            $table->string('po_capo_5', 120)->nullable();
            $table->unsignedBigInteger('mny_capo_po_5')->nullable();
            $table->string('up_by_capo_po_5', 20)->nullable();
            $table->date('date_po_capo_5')->nullable();

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
        Schema::dropIfExists('3_03_po_project');
    }
};
