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
        Schema::create('adminlogs', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->unsignedInteger('admin_id')->length(11);
            $table->foreign('admin_id')
            ->references('id')
            ->on('admin')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('time')->length(11)->default('0');
            $table->string('action', 50)->nullable()->default('NULL');
            $table->string('cattegory', 250)->nullable()->default('NULL');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminlogs');
    }
};
