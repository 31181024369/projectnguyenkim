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
        Schema::create('admin_role', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->unsignedInteger('admin_id')->length(11);
            $table->foreign('admin_id')
            ->references('id')
            ->on('admin')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedInteger('role_id')->length(11);
            $table->foreign('role_id')
            ->references('id')
            ->on('role')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_role');
    }
};
