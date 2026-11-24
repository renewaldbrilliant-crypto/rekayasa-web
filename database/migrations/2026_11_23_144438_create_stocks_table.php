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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['masuk', 'keluar']);
            $table->integer('quantity');
            $table->timestamps();
            $table->unsignedBigInteger('id_products');

            // membuat relasi ke table product
            $table->foreign('id_products')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
