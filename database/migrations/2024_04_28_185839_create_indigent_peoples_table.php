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
        Schema::create('indigent_peoples', function (Blueprint $table) {
            $table->id();

            $table->string('family_name');
            $table->string('name');
            $table->string('surname');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->float('monthly_income');
            $table->integer('number_of_people');
            $table->integer('number_of_children');
            $table->json('childrens_educational_status');
            $table->json('employment_status');
            $table->float('monthly_expense');
            $table->text('address');
            $table->unsignedBigInteger('region');

            $table->timestamps();

            $table->foreign('region')->references('id')->on('regions')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indigent_peoples');
    }
};
