<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    protected $table = 'candidates';
    protected $primaryKey = 'candidate_uid';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'user_uid');
    }

    public function skill() {
        return $this->hasMany(CandidateSkill::class, 'candidate_uid', 'candidate_uid');
    }

    public function jobWorkflow(){
        return $this->hasMany(JobApplyWorkflow::class, 'candidate_uid', 'candidate_uid');
    }

    protected function getPortofolioURL() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? url('/storage/candidate_portfolio/'. $value) : null,
        );
    }

    protected function getResumeURL() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? url('/storage/candidate_resume/'. $value) : null,
        );
    }
}
