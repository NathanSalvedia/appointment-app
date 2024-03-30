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
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->string('request_form');
            $table->string('first_name');
            $table->string('middl_ename');
            $table->string('last_name');
            $table->integer('phone_number');
            $table->string('typesof_requirements');
            $table->string('files');
            $table->string('pupose');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
