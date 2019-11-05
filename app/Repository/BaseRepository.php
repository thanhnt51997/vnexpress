<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
class BaseRepository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritdoc
     */
    public function findById(int $id, $relationship = null)
    {
        $query = $this->model->whereNull('deleted_at');
        if (!is_null($relationship)){
            $query = $query->with($relationship);
        }
        return $query->where('id', $id)->first();
    }

    public function getModelAll()
    {
        return $this->model->all();
    }

    public function getInfoByField($fields)
    {
        $query = $this->model->whereNull('deleted_at');
        foreach ($fields as $field_key => $field_value) {
            $query->where($field_key, $field_value);
        }
        return $query->first();
    }

}
