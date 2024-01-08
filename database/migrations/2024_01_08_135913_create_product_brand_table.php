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
        Schema::create('product_brand', function (Blueprint $table) {
            $table->increments('brand_id')->lenght(11);
            $table->string('cat_list',150)->nullable()->default('NULL');
            $table->string('picture',150)->nullable()->default('NULL');
            $table->tinyInteger('display')->lenght(4)->default('1');
            $table->string('title',250);
            $table->text('description')->nullable();
            $table->string('friendly_url',250);
         
            $table->string('metakey',250)->nullable()->default('NULL');
            $table->string('metadesc',250)->nullable()->default('NULL');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_brand');
    }
};
