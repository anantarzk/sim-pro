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
        Schema::create('4_mn_project', function (Blueprint $table) {
            $table->id();
            $table
                ->unsignedBigInteger('id_mn_4')
                ->unique()
                ->nullable();

            $table
                ->string('status_mn', 100)
                ->default('-')
                ->nullable();
            $table->date('status_mn_date')->nullable();
            $table
                ->string('approval_by', 50)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();
            // file yang akan disimpan
            $table->string('mn_atribut_1')->nullable();
            $table->string('up_by_atribut_mn_1', 50)->nullable();
            $table->date('date_mn_atribut_1')->nullable();

            $table->string('mn_atribut_2')->nullable();
            $table->string('up_by_atribut_mn_2', 50)->nullable();
            $table->date('date_mn_atribut_2')->nullable();

            $table->string('mn_atribut_3')->nullable();
            $table->string('up_by_atribut_mn_3', 50)->nullable();
            $table->date('date_mn_atribut_3')->nullable();

            $table->string('mn_atribut_4')->nullable();
            $table->string('up_by_atribut_mn_4', 50)->nullable();
            $table->date('date_mn_atribut_4')->nullable();

            $table->string('mn_atribut_5')->nullable();
            $table->string('up_by_atribut_mn_5', 50)->nullable();
            $table->date('date_mn_atribut_5')->nullable();

            $table->string('mn_atribut_6')->nullable();
            $table->string('up_by_atribut_mn_6', 50)->nullable();
            $table->date('date_mn_atribut_6')->nullable();

            $table->string('mn_atribut_7')->nullable();
            $table->string('up_by_atribut_mn_7', 50)->nullable();
            $table->date('date_mn_atribut_7')->nullable();

            $table->string('mn_atribut_8')->nullable();
            $table->string('up_by_atribut_mn_8', 50)->nullable();
            $table->date('date_mn_atribut_8')->nullable();

            $table->string('mn_atribut_9')->nullable();
            $table->string('up_by_atribut_mn_9', 50)->nullable();
            $table->date('date_mn_atribut_9')->nullable();

            $table->string('mn_atribut_10')->nullable();
            $table->string('up_by_atribut_mn_10', 50)->nullable();
            $table->date('date_mn_atribut_10')->nullable();

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
        Schema::dropIfExists('4_mn_project');
    }
};
