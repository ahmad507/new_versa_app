<?php

namespace App\Models\Partial;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = 'categories';
    protected $fillable = [
        'category_name', 'category_status'
    ];
    public function product()
    {
        return $this->hasMany(Product::class)->select('product_name', 'category_id',);
    }
}
