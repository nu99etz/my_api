<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master.ms_pegawai', function (Blueprint $table) {
            $table->id();
            $table->char('pegawai_nip',15)->nullable();
            $table->string('pegawai_nama')->nullable();
            $table->integer('pegawai_gaji')->nullable();
            $table->integer('pegawai_umur')->nullable();
            $table->string('pegawai_profile')->nullable();
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
        Schema::dropIfExists('master.ms_pegawai');
    }
}
