<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'user_id'
    ];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function message():HasOne
    {
        return $this->hasOne(Message::class);
    }
}
