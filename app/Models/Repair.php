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

    public function getFormattedIsRepaired()
    {
        if ($this->is_repaired) {
            return ('Oui');
        } else {
            return ('Non');
        }
    }

    public function getFormattedIsBroken()
    {
        if ($this->is_broken) {
            return ('Oui');
        } else {
            return ('Non');
        }
    }

    public function getFormattedClientId()
    {
        if ($this->client_id) {
            return ('<a>' . $this->client_id . '</a>');
        }
    }

    public function getFormattedReturnedAt()
    {
        if ($this->returned_at) {
            return ($this->returned_at);
        } else {
            return ('Pas encore renvoyé');
        }
    }
}
