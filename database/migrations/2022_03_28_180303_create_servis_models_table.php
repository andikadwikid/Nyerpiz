<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('nomor_antri');
            $table->string('nama_barang');
            $table->string('merk_barang');
            $table->text('alamat');
            $table->string('no_telp', 15);
            $table->boolean('layanan');
            $table->text('keluhan');
            $table->string('image');
            $table->string('status')->default('pending');
            $table->boolean('notif')->default(false);
            $table->dateTime('tanggal_servis');
            $table->dateTime('tindakan_servis')->nullable();
            $table->dateTime('selesai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servis_models');
    }
}
