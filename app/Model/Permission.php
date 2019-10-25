<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['name', 'display_name'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
