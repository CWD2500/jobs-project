<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'apply_id',
        'email',
        'web_site',
        'image',
        'description',
        'slug'
    ];



    public function jobList()
    {
        return $this->belongsTo(ListJob::class , 'apply_id');
    }

    

}
