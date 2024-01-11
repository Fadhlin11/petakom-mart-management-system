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
        Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->string('payment_person_name');
                $table->string('payment_date');
                $table->string('payment_product_name');
                $table->integer('payment_quantity_before');
                $table->integer('payment_quantity_after');
                $table->decimal('payment_item_price');
                $table->decimal('payment_total_sale');
                $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
