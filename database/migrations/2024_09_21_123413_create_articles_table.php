<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Create the 'articles' table
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); 
            $table->string('title'); 
            $table->string('slug')->unique(); 
            $table->text('content'); 
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); 
            $table->timestamps(); 
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        // Drop the 'articles' table if it exists
        Schema::dropIfExists('articles');
    }
};
