<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table  = 'categories';
    protected $fillable = ['name', 'status', 'slug'];

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }

    public function latest_posts()
    {
        return $this->hasMany(Post::class)->latest()->limit(3);
    }

}
