<?php

namespace App\Repository\Category;

use App\Model\Category;
use App\Repository\RepositoryInterface;
use Throwable;

interface CategoryRepositoryInterface extends RepositoryInterface
{
    public function getListData($status = null, $with = false, $limit = null, $paginate = false, $orderBy = false);
    public function getDataValidate($name = null, $slug = null, $id = null);
    public function getMenuCategory($to);
}
