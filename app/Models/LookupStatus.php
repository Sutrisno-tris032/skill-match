<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookupStatus extends Model
{
    //

    protected $table = 'lookup_statuses';
    protected $guarded = [];

    public function jobPostings()
    {
        return $this->hasMany(JobPosting::class, 'id', 'status_id');
    }
}
