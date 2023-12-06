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
        Schema::create('sibs', function (Blueprint $table) {
            $table->id();
            $table->string('ruangterbatas', 30)->nullable();
            $table->string('kerjalistrik', 30)->nullable();
            $table->string('ketinggian', 30)->nullable();
            $table->string('perpipaan', 30)->nullable();
            $table->string('kerjapanas', 30)->nullable();
            $table->string('pekerjaan', 30)->nullable();
            $table->string('lokasi', 30)->nullable();
            $table->string('area', 30)->nullable();
            $table->string('plant', 30)->nullable();
            $table->string('namapemohon', 30)->nullable();
            $table->string('perusahaanpemohon', 30)->nullable();
            $table->string('pengawas', 30)->nullable();
            $table->string('teknisi', 30)->nullable();
            $table->string('helper', 30)->nullable();
            $table->string('welder', 30)->nullable();
            $table->char('mat1', 1)->nullable();
            $table->char('mat2', 1)->nullable();
            $table->char('mat3', 1)->nullable();
            $table->char('mat4', 1)->nullable();
            $table->char('apd1', 1)->nullable();
            $table->char('apd2', 1)->nullable();
            $table->char('apd3', 1)->nullable();
            $table->char('apd4', 1)->nullable();
            $table->char('apd5', 1)->nullable();
            $table->char('apd6', 1)->nullable();
            $table->char('apd7', 1)->nullable();
            $table->char('apd8', 1)->nullable();
            $table->char('apd9', 1)->nullable();
            $table->char('check1', 1)->nullable();
            $table->char('check2', 1)->nullable();
            $table->char('check3', 1)->nullable();
            $table->char('check4', 1)->nullable();
            $table->string('komit_nama', 30)->nullable();
            $table->date('komit_tgl')->nullable();
            $table->text('henti_alasan')->nullable();
            $table->date('henti_tgl')->nullable();
            $table->string('penerima_nama', 30)->nullable();
            $table->date('penerima_tgl')->nullable();
            $table->string('pemberi_nama', 30)->nullable();
            $table->date('pemberi_tgl')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->text('alasan_dihentikan')->nullable();
            $table->date('tgl_dihentikan')->nullable();
            $table->text('penerima_komitmen')->nullable();
            $table->date('tgl_komitmen')->nullable();
            $table->text('penerima_st')->nullable();
            $table->date('tgl_penerima_st')->nullable();
            $table->text('pemberi_st')->nullable();
            $table->date('tgl_pemberi_st')->nullable();
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
        Schema::dropIfExists('sibs');
    }
};
