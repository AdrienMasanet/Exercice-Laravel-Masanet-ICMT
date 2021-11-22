<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Computer;
use App\Models\Repairer;
use App\Models\User;
use App\Models\Breakdown;
use App\Models\RepairType;

class Repair extends Model
{
    use HasFactory;

    protected $fillable = [
        'computer_id',
        'client_id',
        'repairer_id',
        'diagnostic',
    ];

    public function computer()
    {
        return $this->hasOne(Computer::class);
    }

    public function repairer()
    {
        return $this->hasOne(Repairer::class);
    }

    public function client()
    {
        return $this->hasOne(User::class);
    }

    public function breakdowns()
    {
        return $this->belongsToMany(Breakdown::class, 'repairs_breakdowns');
    }

    public function repairsTypes()
    {
        return $this->belongsToMany(RepairType::class, 'repairs_repair_types');
    }
}
