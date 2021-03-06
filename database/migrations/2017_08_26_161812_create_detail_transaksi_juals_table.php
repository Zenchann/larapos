<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksiJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi_juals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaksijual_id')->unsigned();
            $table->integer('barang_id')->unsigned();
            $table->integer('harga_beli');
            $table->integer('jumlah');
            $table->float('subtotal');
            $table->foreign('transaksijual_id')->references('id')->on('transaksi_juals')->ondelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barangs')->ondelete('cascade');
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
        Schema::dropIfExists('detail_transaksi_juals');
    }
}
