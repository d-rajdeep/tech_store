<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image', 'price', 'sku', 'category_id'
    ];

    // Relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
