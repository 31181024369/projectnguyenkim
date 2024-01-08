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
        Schema::create('product_category', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('cat_code',150)->default('');
            $table->integer('parentid')->length(11)->default('0');
            $table->string('picture',150)->default('');
            $table->tinyInteger('display')->length(4)->default('1');
            $table->string('cat_name',250);
          
            $table->longText('description')->nullable();
            $table->string('friendly_url',250);
            $table->string('metakey',250)->nullable()->default('NULL');
            $table->text('metadesc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_category');
    }
};
