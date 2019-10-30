<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    protected $table  = 'comments';
    protected $fillable = ['content', 'user_id', 'post_id'];
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
