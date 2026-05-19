<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration: Create colleges table
 * 
 * Purpose: Establish foundation for college management system
 * - Stores college information for student associations
 * - Enables campus-specific resource organization
 * - Supports reporting by institution
 * 
 * Indexes:
 * - Unique index on 'code' for fast lookups and uniqueness
 * - Index on 'name' for search optimization
 * - Index on 'status' for filtering active colleges
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            
            // College name - indexed for search performance
            $table->string('name')->index();
            
            // Unique college code - indexed for fast lookups
            $table->string('code')->unique()->index();
            
            // Location information
            $table->string('city');
            $table->string('state');
            
            // College logo path (nullable)
            $table->string('logo')->nullable();
            
            // Status with default value - indexed for filtering
            $table->enum('status', ['active', 'inactive'])->default('active')->index();
            
            $table->timestamps();
            
            // Composite index for common queries (name + status)
            $table->index(['name', 'status']);
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
