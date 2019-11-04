<?php

namespace App\Repository\User;

use App\Model\User;
use App\Repository\RepositoryInterface;
use Throwable;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function getListData($status = null, $paginate = false);
//    public function getDataValidate($name = null, $id = null);
}
