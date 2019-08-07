<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandarKompetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar_kompetensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sk_kode');
            $table->unsignedBigInteger('kompetensi_keahlian_id');
            $table->foreign('kompetensi_keahlian_id')->references('id')->on('kompetensi_keahlians')->onDelete('CASCADE');
            $table->string('sk_nama');
            $table->string('sk_kelas');
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
        Schema::dropIfExists('standar_kompetensis');
    }
}
