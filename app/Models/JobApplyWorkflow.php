<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplyWorkflow extends Model
{
    //
    protected $table = 'job_apply_workflows';
    protected $guarded = [];

    public function jobPostings() {
        return $this->belongsTo(JobPosting::class, 'job_uid', 'job_uid');
    }

    public function jobApply() {
        return $this->belongsTo(JobApply::class, 'job_apply_uid', 'job_apply_uid');
    }

    public function candidate(){
        return $this->belongsTo(Candidate::class, 'candidate_uid', 'candidate_uid');
    } 
}
