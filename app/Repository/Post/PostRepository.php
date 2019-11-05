<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/14/2019
 * Time: 10:20 AM
 */

namespace App\Repository\Post;


use App\Model\Post;
use App\Repository\BaseRepository;
use Illuminate\Database\DatabaseManager;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    /**
     * @param Post $model
     * @return BaseRepository[]|\Illuminate\Database\Eloquent\Collection|void
     */

    public function getListData($user_id = null, $category_id = null, $status = null, $mostView = false, $limit = null, $paginate = false, $ignored_id = null)
    {
        $query = Post::whereNull('deleted_at')->with('category', 'user');
        if (!is_null($user_id)) {
            $query = $query->where('user_id', $user_id);
            dd($query);
        }
        if (!is_null($category_id)) {
            $query = $query->where('category_id', $category_id);
        }
        if (!is_null($status)) {
            $query = $query->where('status', $status);
        }
        if (!is_null($ignored_id)) {
            $query = $query->where('id', '<>', $ignored_id);
        }
        if (($mostView)) {
            $query = $query->latest('view');
        } else {
            $query = $query->latest('created_at');
        }
        if (!is_null($limit)) {
            $query = $query->limit($limit);
        }
        if (($paginate)) {
            $query = $query->paginate(config('app.paginate'));
        } else {
            $query = $query->get();
        }
        return $query;
    }

}
