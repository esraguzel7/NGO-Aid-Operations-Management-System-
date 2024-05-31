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
        Schema::create('operation_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operation');
            $table->unsignedBigInteger('request');
            $table->timestamps();
            
            $table->foreign('operation')->references('id')->on('operations')->onDelete('cascade');
            $table->foreign('request')->references('id')->on('request_for_helps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_requests');
    }
};
