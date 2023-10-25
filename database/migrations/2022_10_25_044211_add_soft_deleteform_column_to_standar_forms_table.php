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
        Schema::table('standar_forms', function (Blueprint $table) {
            //buat kalom deleted at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('standar_forms', function (Blueprint $table) {
            //hapus kolom deleted at
            $table->dropSoftDeletes();
        });
    }
};
