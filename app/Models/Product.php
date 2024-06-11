<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;



class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'name',
        'price',
        'color',
        'status',
        'number',
        'comment',
    ];
    protected $hidden = [
        'number'
    ];
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
    public function warranty(): BelongsToMany
    {
        return $this->belongsToMany(Warranty::class);
    }
    public function labales():MorphToMany
    {
        return $this->morphToMany(Label::class,'lablables');
    }
}
