<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderList extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'product_id',
      'colvo',
    ];

    public function products (): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
