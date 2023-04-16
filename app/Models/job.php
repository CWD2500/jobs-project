<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class job extends Model
{
    use HasFactory  , SoftDeletes ;

    protected $fillable = [
        'title',
        // 'image',
        'tag',
        'countJob',
        'slug',
    ];


    
    public function listJob()
    {
        return $this->hasMany(ListJob::class, 'job_id' );
    }
}
