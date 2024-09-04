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
        Schema::create('detail__transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('transaksi_id');
            $table->string('kode_menu');
            $table->integer('qty');
            $table->timestamps();
        });

        Schema::table('detail__transaksis', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('transaksis')->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksis');
    }
};
