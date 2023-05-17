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
        Schema::table('mahasiswa_matakuliah', function (Blueprint $table){
            // $table->dropColumn('mahasiswa_id'); //menghapus kolom mahasiswa_id
            // $table->dropColumn('matakuliah_id'); //menghapus kolom matakuliah_id
            // $table->unsignedBigInteger('mahasiswa_id')->nullable(); 
            // $table->unsignedBigInteger('matakuliah_id')->nullable(); 
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas'); //menambahkan foreign key di kolom mahasiswa_id
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah'); //menambahkan foreign key di kolom matakuliah_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_matakuliah', function (Blueprint $table){
            // $table->unsignedBigInteger('mahasiswa_id')->nullable(); 
            // $table->unsignedBigInteger('matakuliah_id')->nullable(); 
        });
    }
};