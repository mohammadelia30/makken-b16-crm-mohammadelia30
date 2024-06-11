<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Order extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'sender_name',
        'receiver',
        'code',
        'date',
        'time',
        'user_id',
        'comment'
    ];
    public function factor():HasOne
    {
        return $this->hasOne(Factor::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    public function isPrice():Attribute
    {
        return new Attribute(
        get: fn() => $this->products->sum('price')
        );
    }
    protected $appends = ['is_price'];
}
