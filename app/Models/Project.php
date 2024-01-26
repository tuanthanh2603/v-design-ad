<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'slug',
        'description',
        'image',
        'address',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}