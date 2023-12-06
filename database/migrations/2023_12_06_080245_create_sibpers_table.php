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
        Schema::create('sibpers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sib_id')->nullable();
            $table->string('peralatan1')->nullable();
            $table->string('peralatan2')->nullable();
            $table->string('peralatan3')->nullable();
            $table->string('peralatan4')->nullable();
            $table->string('peralatan5')->nullable();
            $table->string('peralatan6')->nullable();
            $table->string('peralatan7')->nullable();
            $table->string('peralatan8')->nullable();
            $table->string('peralatan9')->nullable();
            $table->string('peralatan10')->nullable();
            $table->decimal('jumlah1', 30, 2)->nullable();
            $table->decimal('jumlah2', 30, 2)->nullable();
            $table->decimal('jumlah3', 30, 2)->nullable();
            $table->decimal('jumlah4', 20, 2)->nullable();
            $table->decimal('jumlah5', 30, 2)->nullable();
            $table->decimal('jumlah6', 30, 2)->nullable();
            $table->decimal('jumlah7', 30, 2)->nullable();
            $table->decimal('jumlah8', 30, 2)->nullable();
            $table->decimal('jumlah9', 30, 2)->nullable();
            $table->decimal('jumlah10', 30, 2)->nullable();
            $table->string('material1')->nullable();
            $table->string('material2')->nullable();
            $table->string('material3')->nullable();
            $table->string('material4')->nullable();
            $table->string('material5')->nullable();
            $table->string('material6')->nullable();
            $table->string('material7')->nullable();
            $table->string('material8')->nullable();
            $table->string('material9')->nullable();
            $table->string('material10')->nullable();
            $table->decimal('jumlaha1', 30, 2)->nullable();
            $table->decimal('jumlaha2', 30, 2)->nullable();
            $table->decimal('jumlaha3', 30, 2)->nullable();
            $table->decimal('jumlaha4', 30, 2)->nullable();
            $table->decimal('jumlaha5', 30, 2)->nullable();
            $table->decimal('jumlaha6', 30, 2)->nullable();
            $table->decimal('jumlaha7', 30, 2)->nullable();
            $table->decimal('jumlaha8', 30, 2)->nullable();
            $table->decimal('jumlaha9', 30, 2)->nullable();
            $table->decimal('jumlaha10', 30, 2)->nullable();
            $table->text('keterangan1')->nullable();
            $table->text('keterangan2')->nullable();
            $table->text('keterangan3')->nullable();
            $table->text('keterangan4')->nullable();
            $table->text('keterangan5')->nullable();
            $table->text('keterangan6')->nullable();
            $table->text('keterangan7')->nullable();
            $table->text('keterangan8')->nullable();
            $table->text('keterangan9')->nullable();
            $table->text('keterangan10')->nullable();
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
        Schema::dropIfExists('sibpers');
    }
};
