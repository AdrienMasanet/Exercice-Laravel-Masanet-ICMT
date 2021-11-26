<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Lend extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'computer_id',
        'begin_at',
        'ending_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFormattedIsReturned()
    {
        if ($this->is_returned) {
            return ('Oui');
        } else {
            return ('Non');
        }
    }

    public function getFormattedUserId()
    {
        return ('<a>' . $this->user_id . '</a>');
    }
}
