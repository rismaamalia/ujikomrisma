<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKompetensiKeahliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi_keahlians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kompetensi_kode');
            $table->unsignedBigInteger('bidang_studi_id');
            $table->foreign('bidang_studi_id')->references('id')->on('bidang_studis')->onDelete('CASCADE');
            $table->string('kompetensi_nama');
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
        Schema::dropIfExists('kompetensi_keahlians');
    }
}
