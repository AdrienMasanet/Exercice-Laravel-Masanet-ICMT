<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Component;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'name',
        'stock_type',
        'comment',
        'is_available',
        'image'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function components()
    {
        return $this->belongsToMany(Component::class, 'computers_components');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
        $this->attributes['slug'] = Str::slug($value);
    }
}
