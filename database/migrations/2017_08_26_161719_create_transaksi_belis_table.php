<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiBelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_belis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_transaksi');
            $table->integer('user_id')->unsigned();
            $table->integer('suplier_id')->unsigned();
            $table->datetime('tanggal_trans_beli');
            $table->integer('total');
            $table->integer('status');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('suplier_id')->references('id')->on('supliers')->onDelete('cascade');
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
        Schema::dropIfExists('transaksi_belis');
    }
}
