<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim', 9)->unique();
            $table->string('nama', 30);
            $table->string('angkatan', 2);
            $table->string('departemen',20);
            $table->string('buku_pinjam',100);
            $table->date('tanggal_pinjam');
            $table->string('status',50);
            $table->enum('jenis_kelamin', ['L','P']);
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
        Schema::dropIfExists('siswa');
    }
}
