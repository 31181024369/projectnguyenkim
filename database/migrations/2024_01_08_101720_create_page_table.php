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
        Schema::create('page', function (Blueprint $table) {
            $table->bigIncrements('id')->length(32);
           
            $table->string('title',150)->default('');
            $table->text('description');
            $table->string('friendly_url',250);
            $table->string('metakey',250);
            $table->text('metadesc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page');
    }
};
