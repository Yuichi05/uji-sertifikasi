<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->string('pelatihan');
            $table->bigInteger('no_telepon');
            $table->enum('gender', ['p', 'l']);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departemen');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
