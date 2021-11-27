<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->increments('id_surat');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_jenis_surat')->unsigned();
            $table->foreign('id_jenis_surat')->references('id_jenis_surat')->on('jenis_surats')->onUpdate('cascade')->onDelete('cascade');
            $table->string('prihal');
            $table->string('nomor_surat');
            $table->date('tgl_pelaksanaan');
            $table->string('nama_mitra');
            $table->string('lokasi');
            $table->longText('isi_surat')->nullable();
            $table->longText('penutup_surat')->nullable();
            $table->date('tgl_kirim')->nullable();
            $table->date('tgl_terima');
            $table->enum('tipe', ['masuk','keluar']);
            $table->integer('status_surat');
            $table->string('pesan_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
