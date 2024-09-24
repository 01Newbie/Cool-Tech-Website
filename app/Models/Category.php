<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Mass assignable attributes
    protected $fillable = [
        'name', 
        'slug', 
    ];

    /**
     * Define the relationship with Articles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        // Defines a one-to-many relationship with the Article model
        return $this->hasMany(Article::class);
    }
}
