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
        Schema::table('6_cl_project', function (Blueprint $table) {
            //
            $table
                ->foreign('id_cl_6')
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
        Schema::table('6_cl_project', function (Blueprint $table) {
            //

            $table->dropForeign(['id_cl_6']);
            $table->dropColumn('id_cl_6');
        });
    }
};
