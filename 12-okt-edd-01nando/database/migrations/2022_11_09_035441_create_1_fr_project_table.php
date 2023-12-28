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
        Schema::create('1_fr_project', function (Blueprint $table) {
            $table->id();

            $table
                ->unsignedBigInteger('id_fr_1')
                ->unique()
                ->nullable();
            $table
                ->string('status_fr', 100)
                ->default('-')
                ->nullable();
            $table->date('status_fr_date')->nullable();
            $table
                ->string('approval_by', 50)
                ->default('Not Checked')
                ->nullable();
            $table->date('approval_date')->nullable();
            // file yang akan disimpan
            $table->string('atribut_1')->nullable();
            $table->string('up_by_1', 50)->nullable();
            $table->date('date_atribut_1')->nullable();
            $table->string('atribut_2')->nullable();
            $table->string('up_by_2', 50)->nullable();
            $table->date('date_atribut_2')->nullable();
            $table->string('atribut_3')->nullable();
            $table->string('up_by_3', 50)->nullable();
            $table->date('date_atribut_3')->nullable();
            $table->string('atribut_4')->nullable();
            $table->string('up_by_4', 50)->nullable();
            $table->date('date_atribut_4')->nullable();
            $table->string('atribut_5')->nullable();
            $table->string('up_by_5', 50)->nullable();
            $table->date('date_atribut_5')->nullable();

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
        Schema::dropIfExists('1_fr_project');
    }
};
