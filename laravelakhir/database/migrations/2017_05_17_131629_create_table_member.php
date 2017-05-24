<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nama');
            $table->string('alamat');
            $table->integer('id_paket',false,true);
            $table->foreign('id_paket')->references('id')->on('paket')->onDelete('cascade');
            $table->integer('id_kelas',false,true);
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
            $table->integer('id_jadwal',false,true);
            $table->foreign('id_jadwal')->references('id')->on('jadwal')->onDelete('cascade');
            $table->integer('id_supir',false,true);
            $table->foreign('id_supir')->references('id')->on('supir')->onDelete('cascade');
            $table->integer('id_mobil',false,true);
            $table->foreign('id_mobil')->references('id')->on('mobil')->onDelete('cascade');
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
        Schema::drop('member');
    }
}
