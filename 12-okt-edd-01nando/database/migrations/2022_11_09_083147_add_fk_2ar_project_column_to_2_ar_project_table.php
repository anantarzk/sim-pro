<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('2_ar_project', function (Blueprint $table) {
            //
            $table
                ->foreign('id_ar_2')
                ->references('id')
                ->on('project')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('2_ar_project', function (Blueprint $table) {
            //

            $table->dropForeign(['id_ar_2']);
            $table->dropColumn('id_ar_2');
        });
    }
};
