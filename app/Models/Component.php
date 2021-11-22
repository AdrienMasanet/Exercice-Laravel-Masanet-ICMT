<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Computer;

class Component extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'brand_id',
        'name',
        'serial_number',
        'comment'
    ];

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function computers()
    {
        return $this->belongsToMany(Computer::class, 'computers_components');
    }
}
