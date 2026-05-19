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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            
            // College information
            $table->string('name')->unique();
            $table->string('code')->unique()->index();
            $table->string('city');
            $table->string('state');
            
            // Logo storage path
            $table->string('logo')->nullable();
            
            // Status: active/inactive for soft management
            $table->enum('status', ['active', 'inactive'])->default('active')->index();
            
            // Timestamps
            $table->timestamps();
            
            // Indexes for better query performance
            $table->index(['city', 'state']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
