<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Repair;

class RepairType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function repairs()
    {
        return $this->belongsToMany(Repair::class, 'repairs_repair_types');
    }
}
