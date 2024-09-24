<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration // Define the migration class
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the 'jobs' table to store job details for the queue system
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); // Primary key for the job
            $table->string('queue')->index(); // Name of the queue (indexed for faster lookups)
            $table->longText('payload'); // Serialized data of the job
            $table->unsignedTinyInteger('attempts'); // Number of attempts made to process the job
            $table->unsignedInteger('reserved_at')->nullable(); // Timestamp when the job was reserved
            $table->unsignedInteger('available_at'); // Timestamp when the job becomes available for processing
            $table->unsignedInteger('created_at'); // Timestamp when the job was created
        });

        // Create the 'job_batches' table to store batches of jobs
        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary(); // Unique identifier for the batch (primary key)
            $table->string('name'); // Name of the batch
            $table->integer('total_jobs'); // Total number of jobs in the batch
            $table->integer('pending_jobs'); // Number of jobs still pending in the batch
            $table->integer('failed_jobs'); // Number of jobs that have failed in the batch
            $table->longText('failed_job_ids'); // List of IDs for failed jobs
            $table->mediumText('options')->nullable(); // Additional options for the batch (optional)
            $table->integer('cancelled_at')->nullable(); // Timestamp when the batch was cancelled (if applicable)
            $table->integer('created_at'); // Timestamp when the batch was created
            $table->integer('finished_at')->nullable(); // Timestamp when the batch finished processing (if applicable)
        });

        // Create the 'failed_jobs' table to store details of failed jobs
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id(); // Primary key for the failed job entry
            $table->string('uuid')->unique(); // Unique identifier for the failed job
            $table->text('connection'); // Connection information for the job
            $table->text('queue'); // Queue name where the job was placed
            $table->longText('payload'); // Serialized data of the job that failed
            $table->longText('exception'); // Exception message or details when the job failed
            $table->timestamp('failed_at')->useCurrent(); // Timestamp when the job failed, defaults to current time
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'jobs' table if it exists
        Schema::dropIfExists('jobs');
        // Drop the 'job_batches' table if it exists
        Schema::dropIfExists('job_batches');
        // Drop the 'failed_jobs' table if it exists
        Schema::dropIfExists('failed_jobs');
    }
};