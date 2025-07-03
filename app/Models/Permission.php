<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $table = 'permissions';
    protected $primaryKey = 'permission_id';
    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(RolePermission::class, 'permission_id', 'permission_id');
    }
}
