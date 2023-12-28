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
            // Menambah column ke table users
            $table->unsignedBigInteger('role_id')->after('email');
            $table
                ->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('restrict');
            $table
                ->string('nik')
                ->unique()
                ->after('name');
            $table->string('jabatan', 30)->after('nik');
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

            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
            $table->dropColumn('jabatan');
            $table->dropColumn('nik');
        });
    }
};
