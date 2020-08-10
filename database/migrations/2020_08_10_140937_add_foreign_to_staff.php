<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('karyawan_id');
            $table->foreign('karyawan_id')->references('id')->on('karyawan');

            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('manager');

            $table->unsignedBigInteger('proyek_id');
            $table->foreign('proyek_id')->references('id')->on('proyek');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            //
        });
    }
}
