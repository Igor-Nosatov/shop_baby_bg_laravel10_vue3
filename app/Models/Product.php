<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price',
    ];
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    public function discounts(): BelongsToMany
    {
        return $this->belongsToMany(Discount::class);
    }

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(material::class);
    }

    public function serias(): BelongsToMany
    {
        return $this->belongsToMany(Seria::class);
    }

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class);
    }

    public function ages(): BelongsToMany
    {
        return $this->belongsToMany(Age::class);
    }

    public function availabilities(): BelongsToMany
    {
        return $this->belongsToMany(Availability::class);
    }

    public function reviews():HasMany
    {
        return $this->hasMany(Review::class);
    }
}
