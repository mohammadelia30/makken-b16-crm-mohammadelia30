<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Message extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'description',
        'ticket_id'
    ];
    public function ticket():BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
    public function product():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
