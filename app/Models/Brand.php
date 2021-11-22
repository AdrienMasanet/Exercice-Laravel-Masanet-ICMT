<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Component;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function user()
    {
        return $this->hasMany(Component::class);
    }
}
