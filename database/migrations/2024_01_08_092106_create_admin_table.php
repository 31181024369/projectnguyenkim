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
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('email', 100);
            $table->string('display_name', 250);
            $table->string('avatar', 250)->nullable()->default('NULL');
            $table->integer('phone')->length(11)->nullable()->default('0');
            $table->integer('status')->length(11)->default('0');
            $table->integer('parentAdmin')->length(11)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
