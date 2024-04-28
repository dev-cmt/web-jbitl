<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'code',
        'title',
        'description',
        'file_path',
        'ingredient',
        'product_category_id',
        'status',
        'user_id',
        'index',
    ];
}
