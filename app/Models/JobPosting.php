<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class JobPosting extends Model
{

    //
    protected $table = 'job_postings';
    protected $primaryKey = 'job_uid';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    // Local scopes
    // #[Scope]
    // protected function ofCompany(Builder $query, string $companyUid)
    // {
    //     return $query->where('company_uid', $companyUid);
    // }

    #[Scope]
    protected function ofStatus(Builder $query, int $status): void
    {
        $query->where('status_id', $status);
    }

    public function company () {
        return $this->belongsTo(Company::class, 'company_uid', 'company_uid');
    }

    public function skill() {
        return $this->hasMany(JobSkill::class, 'job_uid', 'job_uid');
    }

    public function jobApply() {
        return $this->hasMany(JobApply::class, 'job_uid', 'job_uid');
    }

    public function jobWorkflow() {
        return $this->hasMany(JobApplyWorkflow::class, 'job_uid', 'job_uid');
    }

    public function status(){
        return $this->belongsTo(LookupStatus::class, 'status_id', 'id');
    }
}
