<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Mass assignable attributes
    protected $fillable = [
        'name', 
        'slug', 
    ];

    /**
     * Get the articles associated with the tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        // Defines a many-to-many relationship with the Article model
        return $this->belongsToMany(Article::class);
    }
}
