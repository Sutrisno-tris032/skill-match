<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    //
    protected $table = 'job_skills';
    protected $guarded = [];

    public function job()  {
        return $this->belongsTo(JobPosting::class, 'job_uid', 'job_uid');
    }

    
}
