<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/14/2019
 * Time: 10:20 AM
 */

namespace App\Repository\Category;


use App\Model\Category;
use App\Repository\BaseRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function getListData($status = null, $with = false, $limit = null, $paginate = false, $orderBy = false)
    {
        $query = Category::whereNull('deleted_at');

        if (!is_null($status)) {
            $query = $query->where('status', $status);
        }
        if (($with)) {
            $query = $query->with(['posts', 'latestPost', 'latest_posts'])->whereHas('latestPost');
        }
        if (!is_null($limit)) {
            $query = $query->limit($limit);
        }
        if (($orderBy)) {
            $query = $query->orderBy('created_at', 'desc');
        } else {
            $query = $query->orderBy('created_at', 'asc');
        }
        if (($paginate)) {
            $query = $query->paginate(config('app.paginate'));
        } else {
            $query = $query->get();
        }
        return $query;
    }

    public function getMenuCategory($to)
    {
        $query = Category::whereNull('deleted_at');
        if ($to < 8){
            $query->where('id', '<', $to);
        }else{
            $query->where('id', '>=', $to);
        }
        return $query->get();
    }

    public function getDataValidate($name = null, $slug = null, $id = null)
    {
        $query = Category::whereNull('deleted_at');
        if (!is_null($name)) {
            $query = $query->where('name', $name);
        }
        if (!is_null($slug)) {
            $query = $query->where('slug', $slug);
        }
        if (!is_null($id)) {
            $query = $query->where('id', '<>', $id);
        }
        $query = $query->first();
        return $query;
    }
}
