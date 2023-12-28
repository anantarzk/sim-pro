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
        Schema::create('5_in_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_in_5')
                ->unique()
                ->nullable();

            $table
                ->string('status_in', 100)
                ->default('-')
                ->nullable();
            $table->date('status_in_date')->nullable();
            $table
                ->string('approval_by', 50)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();
            // file yang akan disimpan
            $table->string('in_ipo_1')->nullable();
            $table->string('up_by_ipo_in_1', 50)->nullable();
            $table->date('date_in_ipo_1')->nullable();

            $table->string('in_ipo_2')->nullable();
            $table->string('up_by_ipo_in_2', 50)->nullable();
            $table->date('date_in_ipo_2')->nullable();

            $table->string('in_ipo_3')->nullable();
            $table->string('up_by_ipo_in_3', 50)->nullable();
            $table->date('date_in_ipo_3')->nullable();

            $table->string('in_ecr_1')->nullable();
            $table->string('up_by_ecr_in_1', 50)->nullable();
            $table->date('date_in_ecr_1')->nullable();

            $table->string('in_ecr_2')->nullable();
            $table->string('up_by_ecr_in_2', 50)->nullable();
            $table->date('date_in_ecr_2')->nullable();

            $table->string('in_ecr_3')->nullable();
            $table->string('up_by_ecr_in_3', 50)->nullable();
            $table->date('date_in_ecr_3')->nullable();

            $table->string('in_ecr_4')->nullable();
            $table->string('up_by_ecr_in_4', 50)->nullable();
            $table->date('date_in_ecr_4')->nullable();

            $table->string('in_sc_1')->nullable();
            $table->string('up_by_sc_in_1', 50)->nullable();
            $table->date('date_in_sc_1')->nullable();

            $table->string('in_sc_2')->nullable();
            $table->string('up_by_sc_in_2', 50)->nullable();
            $table->date('date_in_sc_2')->nullable();

            $table->string('in_sccs_1')->nullable();
            $table->string('up_by_sccs_in_1', 50)->nullable();
            $table->date('date_in_sccs_1')->nullable();

            $table->string('in_sccs_2')->nullable();
            $table->string('up_by_sccs_in_2', 50)->nullable();
            $table->date('date_in_sccs_2')->nullable();

            $table->string('in_sccs_3')->nullable();
            $table->string('up_by_sccs_in_3', 50)->nullable();
            $table->date('date_in_sccs_3')->nullable();

            $table->string('in_ir_1')->nullable();
            $table->string('up_by_ir_in_1', 50)->nullable();
            $table->date('date_in_ir_1')->nullable();

            $table->string('in_ir_2')->nullable();
            $table->string('up_by_ir_in_2', 50)->nullable();
            $table->date('date_in_ir_2')->nullable();

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
        Schema::dropIfExists('5_in_project');
    }
};
