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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->uuid('job_uid')->primary();
            $table->uuid('company_uid');
            $table->string('job_name');
            $table->text('description')->nullable();
            $table->text('job_requerement')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_remote')->default(false);
            $table->string('job_type')->default('full_time'); // full_time, part_time, contract, internship
            $table->string('salary')->nullable(); // e.g., "50000-70000" or "negotiable"
            $table->string('job_start_date')->nullable();
            $table->string('job_end_date')->nullable();
            $table->integer('status_id'); // draft, published, archived
            $table->auditColumns(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
