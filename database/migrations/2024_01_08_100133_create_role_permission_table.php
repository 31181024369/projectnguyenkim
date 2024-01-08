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
        Schema::create('role_permission', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->unsignedInteger('permission_id')->length(11);
            $table->foreign('permission_id')
            ->references('id')
            ->on('permissions')
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
        Schema::dropIfExists('role_permission');
    }
};
