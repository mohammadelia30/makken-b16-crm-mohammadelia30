<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Label extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'labelables');
    }
    public function teams(): MorphToMany
    {
        return $this->morphedByMany(Team::class, 'labelables');
    }
    public function products(): MorphToMany
    {
        return $this->morphedByMany(Product::class, 'labelables');
    }
}
