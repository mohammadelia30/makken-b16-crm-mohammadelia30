<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Warranty extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'length',
        'started_at',
        'ended_at',
        'product_id'
    ];
    public function factor(): BelongsTo
    {
        return $this->belongsTo(Warranty::class);
    }
    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
