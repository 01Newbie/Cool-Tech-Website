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
        // Create the 'cache' table to store cached items
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary(); // Unique key for the cache item, serving as the primary key
            $table->mediumText('value'); // The cached value, allowing for medium-sized content
            $table->integer('expiration'); // Expiration time for the cache item (in seconds)
        });

        // Create the 'cache_locks' table to manage locks on cache keys
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary(); // Unique key for the lock, serving as the primary key
            $table->string('owner'); // Owner of the lock (could be an identifier for the locking process)
            $table->integer('expiration'); // Expiration time for the lock (in seconds)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'cache' table if it exists
        Schema::dropIfExists('cache');
        // Drop the 'cache_locks' table if it exists
        Schema::dropIfExists('cache_locks');
    }
};