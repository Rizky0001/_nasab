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
        Schema::create('people', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->foreignUuid('nama_ayah');
            $table->foreignUuid('nama_ibu');
            $table->integer('tahun_wafat');
            $table->integer('tahun_lahir');
            $table->date('tanggal_wafat');
            $table->date('tanggal_lahir');
            $table->string('nama');
            $table->string('password');
            $table->string('kontak');
            $table->string('gambar');
            $table->string('foto_profil');
            $table->string('pekerjaan');
            $table->boolean('jenis_kelamin');
            $table->text('alamat');
            $table->text('deskripsi');
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
        Schema::dropIfExists('people');
    }
};
