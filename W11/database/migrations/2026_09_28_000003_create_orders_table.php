<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->restrictOnDelete();
            $table->integer('quantity')->default(1);
            $table->decimal('total_price', 10, 2);
            $table->dateTime('order_date');
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])
                ->default('pending');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
