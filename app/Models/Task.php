<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'team_id'
    ];
    public function users():MorphToMany
    {
        return $this->morphedByMany(User::class,'taskables');
    }
    public function teams():MorphToMany
    {
        return $this->morphedByMany(Team::class,'taskables');
    }
}
