<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'description',
        'icon',
        'status',
        'user_id',
        'index',
    ];

    // Automatically generate code before saving
    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $lastCategory = self::orderBy('id', 'desc')->first();
            $lastCode = ($lastCategory) ? $lastCategory->code : 0;
            $category->code = $lastCode + 1000;
        });
    }
}
