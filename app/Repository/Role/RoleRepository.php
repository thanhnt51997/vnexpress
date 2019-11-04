<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/14/2019
 * Time: 10:20 AM
 */

namespace App\Repository\Role;


use App\Model\Role;
use App\Repository\BaseRepository;
use App\Repository\RepositoryInterface;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Model;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param Role $model
     */
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }

    public function getListData($status = null, $paginate = false)
    {
        $query = Role::whereNull('deleted_at');

        if (!is_null($status)) {
            $query = $query->where('status', $status);
        }
        $query = $query->latest('created_at');
        if (($paginate)) {
            $query = $query->paginate(config('app.paginate'));
        } else {
            $query = $query->get();
        }
        return $query;
    }

    public function getDataValidate($name = null, $id = null)
    {
        $query = Role::whereNull('deleted_at');
        if (!is_null($name)) {
            $query = $query->where('name', $name);
        }
        if (!is_null($id)) {
            $query = $query->where('id','<>', $id);
        }
        $query = $query->first();
        return $query;
    }
}
