<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("nim");
            $table->string("kelas");
            $table->string("nohp");
            $table->enum("jenis_kelamin" , ["Laki - laki" , "Perempuan"]);
            $table->string("j_hadir");
            $table->string("j_ijin");
            $table->string("j_sakit");
            $table->string("j_absen");
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
        Schema::dropIfExists('mahasiswas');
    }
}
