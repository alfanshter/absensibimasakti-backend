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
        Schema::create('sibkes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sib_id')->nullable();
            $table->integer('no1')->nullable();
            $table->integer('no2')->nullable();
            $table->integer('no3')->nullable();
            $table->integer('no4')->nullable();
            $table->integer('no5')->nullable();
            $table->string('aktivitas1')->nullable();
            $table->string('aktivitas2')->nullable();
            $table->string('aktivitas3')->nullable();
            $table->string('aktivitas4')->nullable();
            $table->string('aktivitas5')->nullable();
            $table->string('potensi1')->nullable();
            $table->string('potensi2')->nullable();
            $table->string('potensi3')->nullable();
            $table->string('potensi4')->nullable();
            $table->string('potensi5')->nullable();
            $table->string('langkah1')->nullable();
            $table->string('langkah2')->nullable();
            $table->string('langkah3')->nullable();
            $table->string('langkah4')->nullable();
            $table->string('langkah5')->nullable();
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
        Schema::dropIfExists('sibkes');
    }
};
