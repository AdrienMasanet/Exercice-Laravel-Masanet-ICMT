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
}
