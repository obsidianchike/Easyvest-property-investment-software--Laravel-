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
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('investment_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 12, 2);
            
            // 1. Add the down_payment column here
            $table->decimal('down_payment', 12, 2)->default(0.00); 
            
            $table->date('next_time')->nullable();
            $table->date('paid_time')->nullable();
            $table->decimal('late_fee', 12, 2)->default(0.00);
            
            // 2. Added 'processing' to the enum array so your query works
            $table->enum('status', ['paid', 'due', 'failed', 'processing'])->default('due'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installments');
    }
};