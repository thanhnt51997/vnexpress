<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/14/2019
 * Time: 10:20 AM
 */

namespace App\Repository\Frontend;


use App\Model\Post;
use App\Repository\BaseRepository;
use Illuminate\Database\DatabaseManager;

class FrontendRepository extends BaseRepository implements FrontendRepositoryInterface
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

    public function getListData($user_id = null, $category_id = null, $with = false, $status = null, $limit = false, $paginate = false)
    {
        $query = Post::whereNull('deleted_at');
        if (!is_null($user_id)) {
            $query = $query->where('user_id', $user_id);
        }
        if (!is_null($category_id)) {
            $query = $query->where('category_id', $category_id);
        }
        if ($with) {
            $query = $query->with('category', 'user');
        }
        if (!is_null($status)) {
            $query = $query->where('status', $status);
        }
        $query = $query->latest('created_at');
        if ($limit) {
            $query = $query->limit(4);
        }
        if ($paginate) {
            $query = $query->paginate(config('app.paginate'));
        }else {
            $query = $query->get();
        }
        return $query;
    }

}
