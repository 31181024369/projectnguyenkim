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
        Schema::create('product_picture', function (Blueprint $table) {
          
            $table->increments('id')->length(11);
            $table->unsignedInteger('productId')->length(20);
            $table->foreign('productId')
            ->references('id')
            ->on('product')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('pic_name',150)->nullable()->default('NULL');
            $table->string('picture',150);
            $table->tinyInteger('display')->length(4)->default('1');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_picture');
    }
};
