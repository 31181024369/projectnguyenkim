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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->unsignedInteger('cat_id')->length(10);
            $table->foreign('cat_id')
            ->references('id')
            ->on('product_category')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('cat_list',250)->default('0');
            $table->string('code_product',150)->default('0');
            $table->string('code_stock',150);

            $table->unsignedInteger('brand_id')->length(10);
            $table->foreign('brand_id')
            ->references('brand_id')
            ->on('product_brand')
            ->onUpdate('cascade')
            ->onDelete('cascade');
           
            $table->string('picture',250)->nullable()->default('NULL');
            $table->double('price')->default('0');
            $table->double('price_old')->default('0');
           
            $table->integer('status')->length(11)->nullable();
         

            $table->string('title',250);
            $table->longText('description')->nullable();
            $table->tinyInteger('stock')->length(4)->default('1');
            $table->tinyInteger('display')->length(4)->default('1');
            $table->text('short')->nullable();
         
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
        Schema::dropIfExists('product');
    }
};
