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
        // Create the 'users' table
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // User's name
            $table->string('email')->unique(); // Unique email address for each user
            $table->timestamp('email_verified_at')->nullable(); // Timestamp for email verification
            $table->string('password'); // User's password (hashed)
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created at and updated at timestamps
        });

        // Create the 'password_reset_tokens' table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Primary key as email
            $table->string('token'); // Token for password reset
            $table->timestamp('created_at')->nullable(); // Timestamp for when the token was created
        });

        // Create the 'sessions' table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Primary key for the session ID
            $table->foreignId('user_id')->nullable()->index(); // Foreign key referencing the user (nullable)
            $table->string('ip_address', 45)->nullable(); // User's IP address (nullable)
            $table->text('user_agent')->nullable(); // User agent string for the session (nullable)
            $table->longText('payload'); // Payload containing session data
            $table->integer('last_activity')->index(); // Timestamp of the last activity
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'users' table if it exists
        Schema::dropIfExists('users');
        // Drop the 'password_reset_tokens' table if it exists
        Schema::dropIfExists('password_reset_tokens');
        // Drop the 'sessions' table if it exists
        Schema::dropIfExists('sessions');
    }
};