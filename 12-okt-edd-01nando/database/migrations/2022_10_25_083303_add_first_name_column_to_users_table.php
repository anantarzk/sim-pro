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
        Schema::table('users', function (Blueprint $table) {
            //memasukkan kolom nama depan
            $table->string('first_name')->after('name');
            $table->string('created_by')->after('jabatan');
            $table
                ->string('section')
                ->nullable()
                ->after('nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //hapus table
            $table->dropColumn('first_name');
            $table->dropColumn('created_by');
            $table->dropColumn('section');
        });
    }
};
