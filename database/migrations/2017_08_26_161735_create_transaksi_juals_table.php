<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_juals', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('tanggal_trans_jual');
            $table->integer('user_id')->unsigned();
            $table->datetime('tanggal_trans_beli');
            $table->integer('total');
            $table->integer('diskon');
            $table->integer('status');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('transaksi_juals');
    }
}
