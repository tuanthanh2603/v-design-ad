<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'slug',
        'description',
        'image',
        'weight', // trọng lượng
        'materials', // chất liệu
        'size', // kích thước
        'shipping', // vận chuyển
        'setup', // lắp đặt
        'waranty', // bảo hành
        'brand', // thương hiệu
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}