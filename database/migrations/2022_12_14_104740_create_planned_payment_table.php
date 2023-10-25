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
        Schema::create('planned_payment', function (Blueprint $table) {
            $table->id();
            $table
                ->string('marking', 15)
                ->default('Planned-1')
                ->nullable();
            $table->integer('year')->nullable();
            $table->unsignedBigInteger('planned_1')->nullable();
            $table->date('date_planned_1')->nullable();
            $table->unsignedBigInteger('planned_2')->nullable();
            $table->date('date_planned_2')->nullable();
            $table->unsignedBigInteger('planned_3')->nullable();
            $table->date('date_planned_3')->nullable();
            $table->unsignedBigInteger('planned_4')->nullable();
            $table->date('date_planned_4')->nullable();
            $table->unsignedBigInteger('planned_5')->nullable();
            $table->date('date_planned_5')->nullable();
            $table->unsignedBigInteger('planned_6')->nullable();
            $table->date('date_planned_6')->nullable();
            $table->unsignedBigInteger('planned_7')->nullable();
            $table->date('date_planned_7')->nullable();
            $table->unsignedBigInteger('planned_8')->nullable();
            $table->date('date_planned_8')->nullable();
            $table->unsignedBigInteger('planned_9')->nullable();
            $table->date('date_planned_9')->nullable();
            $table->unsignedBigInteger('planned_10')->nullable();
            $table->date('date_planned_10')->nullable();
            $table->unsignedBigInteger('planned_11')->nullable();
            $table->date('date_planned_11')->nullable();
            $table->unsignedBigInteger('planned_12')->nullable();
            $table->date('date_planned_12')->nullable();

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
        Schema::dropIfExists('planned_payment');
    }
};
