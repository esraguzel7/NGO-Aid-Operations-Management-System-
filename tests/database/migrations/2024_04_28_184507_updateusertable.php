<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->string('phone')->unique();
            $table->string('gender');
            $table->float('annual_income');
            $table->unsignedBigInteger('region_tb_support')->nullable();
            $table->boolean('transportation')->default(false);
            $table->json('available_times')->nullable();
            $table->boolean('account_status')->default(false);
            $table->timestamp('register_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('user_class')->default('user');

            $table->foreign('region_tb_support')->references('id')->on('regions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['region_tb_support']);
            
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('annual_income');
            $table->dropColumn('region_tb_support');
            $table->dropColumn('transportation');
            $table->dropColumn('available_times');
            $table->dropColumn('account_status');
            $table->dropColumn('register_date');
            $table->dropColumn('user_class');
        });
    }
};
