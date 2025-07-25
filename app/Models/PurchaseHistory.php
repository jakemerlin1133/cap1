<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;
    protected $table = 'purchase_history';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
