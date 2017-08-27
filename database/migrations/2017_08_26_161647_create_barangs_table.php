<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenisbarang_id')->unsigned();
            $table->integer('barangsatuan_id')->unsigned();
            $table->integer('kode_barang');
            $table->string('nama_barang');
            $table->integer('harga_jual');
            $table->integer('harga_beli');
            $table->integer('stok');
            $table->date('tanggal_kadaluwarsa');
            $table->foreign('jenisbarang_id')->references('id')->on('jenis_barangs')->ondelete('cascade');
            $table->foreign('barangsatuan_id')->references('id')->on('barang_satuans')->ondelete('cascade');
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
        Schema::dropIfExists('barangs');
    }
}
