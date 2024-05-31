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
        Schema::create('operation_volunteers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operation');
            $table->unsignedBigInteger('volunteer');
            $table->json('detail')->nullable()->default(null);
            $table->timestamps();
            
            $table->foreign('operation')->references('id')->on('operations')->onDelete('cascade');
            $table->foreign('volunteer')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_volunteers');
    }
};
