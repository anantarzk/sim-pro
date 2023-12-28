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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table
                ->string('check', 15)
                ->default('nocheck')
                ->nullable();
            $table->string('project_name');
            $table->string('io_number', 40);
            $table->unsignedBigInteger('budget_amount')->nullable();
            $table->string('status_project', 50);
            $table->string('section', 15);
            $table->string('cost_dept', 10);
            $table->string('remarks', 50)->nullable();
            $table->integer('ob_year');

            $table
                ->string('progress', 70)
                ->default('Not Started')
                ->nullable();
            $table
                ->string('last_update_name', 50)
                ->default('Not Updated')
                ->nullable();
            $table
                ->string('last_update_date', 20)
                ->default('-')
                ->nullable();

            $table->string('pic_1_me', 50)->nullable();
            $table->string('pic_2_el', 50)->nullable();
            $table->string('pic_3_mit', 50)->nullable();

            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
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
        Schema::dropIfExists('project');
    }
};
