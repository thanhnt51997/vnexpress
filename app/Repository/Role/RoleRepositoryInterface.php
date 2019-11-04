<?php

namespace App\Repository\Role;

use App\Model\Role;
use App\Repository\RepositoryInterface;
use Throwable;

interface RoleRepositoryInterface extends RepositoryInterface
{
    public function getListData($status = null, $paginate = false);
    public function getDataValidate($name = null, $id = null);
}
