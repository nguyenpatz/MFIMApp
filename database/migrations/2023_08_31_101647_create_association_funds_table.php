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
        Schema::create('association_funds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('annual_fund', 10, 2);
            $table->decimal('total_fund', 10, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('association_funds');
    }
};
