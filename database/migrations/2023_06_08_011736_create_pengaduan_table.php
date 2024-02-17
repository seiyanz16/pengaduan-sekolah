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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iduser');
            $table->string('judul');
            $table->string('isi');
            $table->date('tgl_pengaduan');
            $table->enum('status', ['proses', 'selesai', 'batal']);
            $table->enum('kategori', ['keamanan', 'ekonomi', 'rasis', 'kesehatan', 'kesejahteraan','ketentraman','bencana','pembelajaran', 'bullying', 'sosial']);
            $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
