<?php

namespace App\Models\Partial;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'products';
    protected $fillable = [
        'product_name', 'category_id', 'product_status'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class)->select('id', 'category_name');
    }
}
