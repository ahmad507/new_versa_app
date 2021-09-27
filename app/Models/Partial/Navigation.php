<?php

namespace App\Models\Partial;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;
    public $table = 'navigation';
    protected $fillable =
    ['nav_name', 'nav_url', 'nav_path', 'nav_description'];
}
