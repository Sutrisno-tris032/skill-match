<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    //
    protected $table = 'job_applies';
    protected $primaryKey = 'job_apply_uid';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    public function jobPostings() {
        return $this->hasMany(JobPosting::class, 'job_uid', 'job_uid');
    }

    public function candidate(){
        return $this->belongsTo(Candidate::class, 'candidate_uid', 'candidate_uid');
    }

    public function jobWorkflow() {
        return $this->hasMany(JobApplyWorkflow::class, 'job_apply_uid', 'job_apply_uid');
    }
}
