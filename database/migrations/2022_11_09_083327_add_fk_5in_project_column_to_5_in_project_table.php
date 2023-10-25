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
        Schema::table('5_in_project', function (Blueprint $table) {
            //
            $table
                ->foreign('id_in_5')
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
        Schema::table('5_in_project', function (Blueprint $table) {
            //

            $table->dropForeign(['id_in_5']);
            $table->dropColumn('id_in_5');
        });
    }
};
