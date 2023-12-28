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
        Schema::table('3_02_pa_project', function (Blueprint $table) {
            //
            $table
                ->foreign('id_pa_02_3')
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
        Schema::table('3_02_pa_project', function (Blueprint $table) {
            //
            $table->dropForeign(['id_pa_02_3']);
            $table->dropColumn('id_pa_02_3');
        });
    }
};
