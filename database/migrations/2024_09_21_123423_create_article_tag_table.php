<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// This migration creates the 'article_tag' pivot table
return new class extends Migration
{
    public function up()
    {
        // Create the 'article_tag' table
        Schema::create('article_tag', function (Blueprint $table) {
            // Foreign key for the articles table, with cascading delete
            $table->foreignId('article_id')->constrained()->onDelete('cascade');
            // Foreign key for the tags table, with cascading delete
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            // Composite primary key using both foreign keys
            $table->primary(['article_id', 'tag_id']);
        });
    }
    
    public function down(): void
    {
        // Drop the 'article_tag' table if it exists
        Schema::dropIfExists('article_tag');
    }
};
