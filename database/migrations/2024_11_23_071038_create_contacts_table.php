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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 100); // Changed 'Full Name' -> 'full_name'
            $table->string('phone_number', 100); // Changed 'Phone Number' -> 'phone_number'
            $table->string('address', 100); // Kept 'address'
            $table->string('email', 100); // Kept 'email'
            $table->string('subject', 100); // Kept 'subject'
            $table->text('message'); // Changed 'Message' to lowercase and removed length (text doesn't need length)
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
