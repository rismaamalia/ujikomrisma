<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('guru_kode');
            $table->unsignedBigInteger('kompetensi_keahlian_id');
            $table->foreign('kompetensi_keahlian_id')->references('id')->on('kompetensi_keahlians')->onDelete('CASCADE');
            $table->string('guru_nip');
            $table->string('guru_nama');
            $table->string('guru_alamat');
            $table->integer('guru_tlpn');
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
        Schema::dropIfExists('gurus');
    }
}
