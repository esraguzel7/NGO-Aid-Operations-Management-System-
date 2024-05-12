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
        Schema::create('request_for_helps', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('family');
            $table->unsignedBigInteger('type_of_support')->nullable();
            $table->boolean('is_complated')->default(false);

            $table->timestamps();

            $table->foreign('family')->references('id')->on('indigent_peoples')->onDelete('cascade');        
            $table->foreign('type_of_support')->references('id')->on('support_types')->onDelete('set null');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_for_helps');
    }
};
