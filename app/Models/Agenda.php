<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'start_date', 'user_id', 'end_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
