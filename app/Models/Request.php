<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Computer;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'computer_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function computer()
    {
        return $this->hasOne(Computer::class);
    }

    public function getFormattedIsAccepted()
    {
        if ($this->is_accepted) {
            return ('Oui');
        } else {
            return ('Non');
        }
    }

    public function getFormattedUserId()
    {
        return ('<a>' . $this->user_id . '</a>');
    }

    public function getFormattedComputerId()
    {
        return ('<a>' . $this->user_id . '</a>');
    }
}
