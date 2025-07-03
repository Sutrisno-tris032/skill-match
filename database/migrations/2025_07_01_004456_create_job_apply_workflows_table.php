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
        Schema::create('job_apply_workflows', function (Blueprint $table) {
            $table->id();
            $table->uuid('job_apply_uid');
            $table->uuid('candidate_uid');
            $table->uuid('job_uid');
            $table->string('workflow_status')->default('pending'); // e.g., pending, in_review, accepted, rejected
            $table->string('step');
            $table->string('step_name');
            $table->auditColumns(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_apply_workflows');
    }
};
