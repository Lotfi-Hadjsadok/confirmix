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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->integer('quantity');
            $table->string('shipping_method');
            $table->integer('shipping_price');
            $table->integer('total');
            $table->string('currency');
            $table->string('status');
            $table->foreignId('client_id');
            $table->foreignId('employee_id');
            $table->foreignId('employer_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
