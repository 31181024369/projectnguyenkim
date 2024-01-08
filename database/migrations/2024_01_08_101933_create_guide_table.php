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
        Schema::create('guide', function (Blueprint $table) {
            $table->bigIncrements('id')->length(20);
            $table->string('picture',250)->nullable()->default('NULL');
            $table->integer('views')->length(11)->nullable()->default('0');
            $table->tinyInteger('display')->length(4)->default('1');
            $table->string('title',250);
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('guide');
    }
};
