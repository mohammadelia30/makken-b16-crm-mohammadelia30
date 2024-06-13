<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Factor extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'total_price',
        'total_products',
        'warranty_id'
    ];
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    public function users():HasOneThrough
    {
        return $this->hasOneThrough(User::class,Order::class);
    }
}
