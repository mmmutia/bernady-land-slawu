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
        Schema::create('pembayaran_inhouse', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->date('tgl_pembayaran_inhouse');
            $table->string('bukti_pembayaran_inhouse');
            $table->string('status_inhouse');
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
        Schema::dropIfExists('pembayaran_inhouse');
    }
};
