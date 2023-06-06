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
        Schema::table('pembayaran_dp', function (Blueprint $table) {
            $table->foreignID('id_pemesanan_rumah')->references('id_pemesanan_rumah')->on('pemesanan_rumah')->after("id_pembayaran_dp")->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembayaran_dp', function (Blueprint $table) {
            $table->dropForeign(['id_pemesanan_rumah']);
            $table->dropColumn('id_pemesanan_rumah');
        });
    }
};