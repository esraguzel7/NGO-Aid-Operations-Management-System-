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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('manager')->nullable();
            $table->unsignedBigInteger('region')->nullable();
            $table->string('operation_type');
            $table->unsignedBigInteger('warehouse')->nullable();
            $table->text('message_for_volunteers')->nullable();
            $table->text('message_for_indigents')->nullable();
            $table->text('description')->nullable();
            $table->json('stock_used')->nullable();
            $table->json('incoming_stock')->nullable();
            $table->float('balance_used')->default(0.0);
            $table->timestamp('planned_date')->useCurrent();
            $table->integer('planned_start_hour')->default(0);
            $table->integer('planned_end_hour')->default(23);
            $table->boolean('is_complated')->default(false);

            $table->timestamps();
           
            $table->foreign('manager')->references('id')->on('users')->onDelete('set null');
            $table->foreign('region')->references('id')->on('regions')->onDelete('set null');
            $table->foreign('warehouse')->references('id')->on('warehouses')->onDelete('set null');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
