<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('service');
            $table->text('message')->nullable();
            //quoted price
            $table->decimal('quoted_price', 10, 2)->nullable();
            //outcome status options of 'pending', 'quote sent', 'approved', 'rejected'
            $table->enum('status', ['pending', 'quote sent', 'approved', 'rejected'])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
