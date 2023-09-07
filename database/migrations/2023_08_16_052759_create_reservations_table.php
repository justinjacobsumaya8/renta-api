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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("customer_id")->nullable();
            $table->unsignedBigInteger("customer_user_id")->nullable(); // will be used later
            $table->unsignedBigInteger("business_rate_id");
            $table->timestamp("start_date")->nullable();
            $table->timestamp("end_date")->nullable();
            $table->unsignedBigInteger("parent_id")->nullable(); // for extended time
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete("cascade");
            $table->foreign('customer_user_id')->references('id')->on('users')->onDelete("cascade");
            $table->foreign('business_rate_id')->references('id')->on('businesses')->onDelete("cascade");
            $table->foreign('parent_id')->references('id')->on('reservations')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
