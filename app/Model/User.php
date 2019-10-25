<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    public function isSuperAdmin()
    {
        /**
         * Here goes your logic to determine which users are "super_admin"
         *
         * For example, in case you have a'is_super_admin' boolean column
         * in your database, you could do:
         */

        return $this->role()->where('name', 'admin')->exists();
    }

        protected $dates = ['deleted_at'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
