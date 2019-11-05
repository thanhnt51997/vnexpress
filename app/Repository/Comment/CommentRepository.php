<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/14/2019
 * Time: 10:20 AM
 */

namespace App\Repository\Comment;


use App\Model\Comment;
use App\Repository\BaseRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Model;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Comment $model)
    {
        parent::__construct($model);
    }

    public function getListData($with = false, $post_id = null, $paginate = false)
    {
        $query = Comment::whereNull('deleted_at');

        if (($with)) {
            $query = $query->with(['user', 'post']);
        }
        if (!is_null($post_id)) {
            $query = $query->where('post_id', $post_id);
        }
        if (($paginate)) {
            $query = $query->paginate(config('app.paginate'));
        } else {
            $query = $query->orderBy('created_at', 'desc')->get();
        }
        return $query;
    }

}
