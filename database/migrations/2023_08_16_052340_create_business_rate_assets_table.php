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
        Schema::create('business_rate_assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_rate_id');
            $table->string("name");
            $table->string("image");
            $table->timestamps();

            $table->foreign('business_rate_id')->references('id')->on('business_rates')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_rate_assets');
    }
};
