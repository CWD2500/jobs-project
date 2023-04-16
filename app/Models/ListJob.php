<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ListJob extends Model
{
    use HasFactory  , SoftDeletes ;

    protected $fillable = [
        'job_id',
        'title',
        'image',
        'time_job',
        'published',
        'location',
        'vacancy',
        'salary',
        'slug',
    ];




 /**
     * Get the user that owns the ListJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job()
    {
        return $this->belongsTo(job::class, 'job_id');
    }


    public function applyJob()
    {
        return $this->hasOne(ApplyJob::class , 'apply_id');
    }

}
