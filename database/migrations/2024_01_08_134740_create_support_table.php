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
        Schema::create('support', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('title',150);
            $table->unsignedInteger('supporGroup_id')->length(11);
            $table->foreign('supporGroup_id')
            ->references('id')
            ->on('support_group')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('email',150);
            $table->string('phone',150)->nullable()->default('0');
            $table->string('name',150);
            $table->string('type',50)->nullable()->default('chat');
            $table->tinyInteger('display')->length(4)->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support');
    }
};
