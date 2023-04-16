<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProFile extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'full_name',
        'email',
        'phone',
        'country',
        'address',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
