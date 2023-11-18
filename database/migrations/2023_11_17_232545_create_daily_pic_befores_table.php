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
        Schema::create('daily_pic_befores', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_photo')->references('id')->on('daily_activities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_photo');
            $table->string('photo');
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
        Schema::dropIfExists('daily_pic_befores');
    }
};
