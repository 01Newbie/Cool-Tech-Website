<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 

class Article extends Model 
{
    use HasFactory; 

    // Mass assignable attributes
    protected $fillable = [
        'category_id', // Foreign key for the category
        'title',       // Title of the article
        'slug',        // URL-friendly slug for the article
        'content',     // Main content of the article
    ];

    /**
     * Define the relationship with Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        // Defines a many-to-one relationship with the Category model
        return $this->belongsTo(Category::class);
    }

    /**
     * Define the relationship with Tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        // Defines a many-to-many relationship with the Tag model
        return $this->belongsToMany(Tag::class);
    }
}
