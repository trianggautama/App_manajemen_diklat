<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_pesertas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('objek_penilaian_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pelatihan_id');
            $table->string('nilai');
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
        Schema::dropIfExists('penilaian_pesertas');
    }
}
