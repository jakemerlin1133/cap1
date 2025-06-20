<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
      use HasFactory;
      protected $table = 'products';
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
