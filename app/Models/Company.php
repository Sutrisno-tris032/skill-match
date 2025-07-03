<?php

namespace App\Models;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'companies';
    protected $primaryKey = 'company_uid';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    public function jobPostings() {
        return $this->hasMany(JobPosting::class, 'company_uid', 'company_uid');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_uid', 'user_uid');
    }
}
