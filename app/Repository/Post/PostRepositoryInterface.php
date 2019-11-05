<?php

namespace App\Repository\Post;

use App\Model\Post;
use App\Repository\RepositoryInterface;
use Throwable;

interface PostRepositoryInterface extends RepositoryInterface
{
    public function getListData($user_id = null, $category_id = null, $status = null, $mostView = false, $limit = null, $paginate = false, $ignored_id = null);
}
