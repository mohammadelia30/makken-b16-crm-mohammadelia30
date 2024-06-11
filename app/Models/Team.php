<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'activity',
        'leader',
        'member'
    ];
    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function tasks():MorphToMany
    {
        return $this->morphedByMany(Task::class,'taskables');
    }
    public function labales():MorphToMany
    {
        return $this->morphedByMany(Label::class,'lablables');
    }
}
