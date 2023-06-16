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
        Schema::create('ruang_admins', function (Blueprint $table) {
            $table->id();
            $table->string('pemasukan');
            $table->string('pengeluaran');
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diubah')->nullable();
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
        Schema::dropIfExists('ruang_admins');
    }
};