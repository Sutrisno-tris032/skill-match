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
        Schema::create('candidates', function (Blueprint $table) {
            $table->uuid('candidate_uid')->primary();
            $table->integer('user_id');

            $table->string('candidate_name');
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('religion')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('address')->nullable();


            $table->text('portfolio_url')->nullable(); // path ke file resume
            $table->text('resume_url')->nullable(); // path ke file resume
            $table->text('bio')->nullable();
            $table->boolean('available')->default(true);

            $table->auditColumns(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
