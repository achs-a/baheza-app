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
        Schema::create('historical_records', function (Blueprint $table){
        $table->id();
        $table->unsignedBigInteger('client_id');
        $table->unsignedBigInteger('payment_id');
        $table->string('status'); // 'paid' or 'unpaid'
        $table->date('recorded_at');
        $table->text('notes')->nullable(); // Optional field for additional info
        $table->timestamps();

        // Foreign key constraints
        $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
