<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    protected $table = 'user_roles';
    protected $primaryKey = 'role_id';
    protected $guarded = [];

    public function user() {
        return $this->hasMany(User::class, 'role_id', 'role_id');
    }
}
